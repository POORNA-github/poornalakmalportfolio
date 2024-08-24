<?php

/* Theme Info Class */
if ( ! function_exists( 'cvio_theme_info' ) ) {
  function cvio_theme_info() {
    $data = array();

    $theme = wp_get_theme();
    $theme_parent = $theme->parent();
    if ( !empty( $theme_parent ) ) {
      $theme = $theme_parent;
    }
    $data['slug'] = $theme->get_stylesheet();
    $data['name'] = $theme[ 'Name' ];
    $data['version'] = $theme[ 'Version' ];
    $data['author'] = $theme[ 'Author' ];
    $data['is_child'] = ! empty( $theme_parent );

    return $data;
  }
}
if ( ! class_exists( 'CvioThemeInfo' ) ) {
  class CvioThemeInfo {

    private static $_instance = null;

    public $slug;

    public $name;

    public $version;

    public $author;

    public $is_child;

    public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
				self::$_instance->init();
			}
			return self::$_instance;
		}

    public function __construct() {

		}

    public function init() {
      $theme = wp_get_theme();
      $theme_parent = $theme->parent();
      if ( !empty( $theme_parent ) ) {
        $theme = $theme_parent;
      }

      $this->slug = $theme->get_stylesheet();
      $this->name = $theme[ 'Name' ];
      $this->version = $theme[ 'Version' ];
      $this->author = $theme[ 'Author' ];
      $this->is_child = ! empty( $theme_parent );
    }
  }
}

function cvio_theme_info() {
  return CvioThemeInfo::instance();
}
add_action( 'plugins_loaded', 'cvio_theme_info' );

/* Plugin Info Class */
if ( ! class_exists( 'CvioPluginInfo' ) ) {
  class CvioPluginInfo {

    private static $_instance = null;

    public $name;

    public $version;

    public $author;

    public $slug;

    public $capability;

    public $dashboard_uri;

    public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
				self::$_instance->init();
			}
			return self::$_instance;
		}

    public function __construct() {

		}

    public function init() {
      $plugin = CvioPlugin::get_plugin_info();
      $status = get_option( 'Cvio_lic_Status' );

      $this->name = $plugin['Name'];
      $this->version = $plugin['Version'];
      $this->author = $plugin[ 'Author' ];
      $this->slug = 'cvio-plugin';
      $this->capability = ( $status == 'active' ) ? 'extended' : 'normal';
      $this->dashboard_uri = plugin_dir_url( __FILE__ );
    }
  }
}

function cvio_plugin_info() {
  return CvioPluginInfo::instance();
}
add_action( 'plugins_loaded', 'cvio_plugin_info' );

/* Activation Notice */
if ( ! function_exists( 'cvio_theme_activation_notice' ) ) {
	function cvio_theme_activation_notice() {
    // Return early if the nag message has been dismissed or user < author.
    if ( get_user_meta( get_current_user_id(), 'cvio_dismissed_notice', true ) || ! current_user_can( apply_filters( 'cvio_show_admin_notice_capability', 'publish_posts' ) ) ) {
      return;
    }
	?>
		<div class="notice notice-warning is-dismissible">
			<p><?php echo wp_kses_post( 'Please activate Cvio theme to unlock all features: premium support and receive all future theme updates automatically!', 'cvio-plugin' ); ?></p>
			<p>
        <a href="<?php echo admin_url( 'admin.php?page=cvio-theme-activation' ); ?>" class="button button-primary"><?php echo esc_html__( 'Activate Now', 'cvio-plugin' ); ?></a>
        <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'cvio-dismiss', 'dismiss_admin_notices' ), 'cvio-dismiss-' . get_current_user_id() ) ); ?>" class="dismiss-notice" target="_parent"><?php echo esc_html__( 'Dismiss this notice', 'cvio-plugin' ); ?></a>
      </p>
		</div>
	<?php
	}
}

/* Activation Filter */
if ( ! function_exists( 'cvio_is_theme_activated' ) ) {
	function cvio_is_theme_activated() {
		return apply_filters( 'cvio/is_theme_activated', false );
	}
}
