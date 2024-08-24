<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php
		$cursor_follow = get_field( 'cursor_follow', 'options' );
		$header_logo = get_field( 'header_logo', 'options' );
		$header_logo_type = get_field( 'header_logo_type', 'options' );
		$header_logo_text = get_field( 'header_logo_text', 'options' );
		$header_logo_btn = get_field( 'header_logo_btn', 'options' );
		$header_logo_btn_label = get_field( 'header_logo_btn_label', 'options' );
		$header_logo_btn_link = get_field( 'header_logo_btn_link', 'options' );
		$switcher_ui = get_field( 'switcher_ui', 'options' );
		$theme_ui = get_field( 'theme_ui', 'options' );
	?>

	<!-- Preloader -->
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Container -->
	<div class="container">

		<!-- Cursor -->
		<?php if ( $cursor_follow ) : ?>
		<div class="cursor-follower"><div class="cursor-follower-inner"></div></div>
		<?php endif; ?>

		<!-- Header -->
		<header class="header">
			<div class="head-top">

				<!-- menu button -->
				<a href="#" class="menu-btn"><span></span></a>

				<!-- logo -->
				<?php if ( $header_logo_type == 0  ) : ?>
				<div class="logo <?php if ( $header_logo_btn ) : ?>hover-masks-logo<?php endif; ?>">
					<a href="<?php if ( $header_logo_btn_link ) : ?><?php echo esc_url( $header_logo_btn_link['url'] ); ?><?php else : ?><?php echo esc_url( home_url() ); ?><?php endif; ?>">
						<?php if ( $header_logo_text ) : ?>
							<span class="mask-lnk"><?php echo wp_kses_post( $header_logo_text ); ?></span>
						<?php else : ?>
							<span class="mask-lnk">
								<strong><?php echo esc_html( bloginfo('name') ); ?></strong>
								<span class="mask-desc"><?php echo esc_html( bloginfo('description') ); ?></span>
							</span>
						<?php endif; ?>
						<?php if ( $header_logo_btn && $header_logo_btn_label ) : ?>
							<span class="mask-lnk mask-lnk-hover"><?php echo wp_kses_post( $header_logo_btn_label ); ?></span>
						<?php endif; ?>
					</a>
					<?php if ( $switcher_ui ) : ?>
					<!-- switch btn -->
					<div class="mode-switch-btn" data-ui="<?php echo esc_attr( $theme_ui ); ?>" data-ui-dir="<?php echo esc_attr( get_template_directory_uri() ); ?>">
						<input class="tgl" id="mode-switch-radio" type="checkbox"<?php if ( $theme_ui == 1 ) : ?> checked<?php endif; ?>>
						<label class="mode-swich-label" for="mode-switch-radio">
							<span class="sw-before">
								<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewbox="0 0 23 23">
									<path id="Dark_Theme" data-name="Dark Theme" fill="#fff" d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z" transform="translate(-1737 -98)"></path>
								</svg>
							</span>
							<span class="sw-after">
								<svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewbox="0 0 22.22 22.313">
									<path id="Light_Theme" data-name="Light Theme" fill="#fff" d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z" transform="translate(-1737.44 -98.313)"></path>
								</svg>
							</span>
						</label>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<?php if ( $header_logo_type == 1 ) : ?>
				<div class="logo">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<?php if ( $header_logo['url'] ) : ?>
							<img src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( bloginfo('name') ); ?>" />
						<?php else : ?>
							<span class="mask-lnk">
								<strong><?php echo esc_html( bloginfo('name') ); ?></strong>
								<span class="mask-desc"><?php echo esc_html( bloginfo('description') ); ?></span>
							</span>
						<?php endif; ?>
					</a>
					<?php if ( $switcher_ui ) : ?>
					<!-- switch btn -->
					<div class="mode-switch-btn" data-ui="<?php echo esc_attr( $theme_ui ); ?>" data-ui-dir="<?php echo esc_attr( get_template_directory_uri() ); ?>">
						<input class="tgl" id="mode-switch-radio" type="checkbox"<?php if ( $theme_ui == 1 ) : ?> checked<?php endif; ?>>
						<label class="mode-swich-label" for="mode-switch-radio">
							<span class="sw-before">
								<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewbox="0 0 23 23">
									<path id="Dark_Theme" data-name="Dark Theme" fill="#fff" d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z" transform="translate(-1737 -98)"></path>
								</svg>
							</span>
							<span class="sw-after">
								<svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewbox="0 0 22.22 22.313">
									<path id="Light_Theme" data-name="Light Theme" fill="#fff" d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z" transform="translate(-1737.44 -98.313)"></path>
								</svg>
							</span>
						</label>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<!-- top menu -->
				<div class="top-menu hover-masks">
					<div class="top-menu-nav">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary'
							) );
						?>
					</div>
				</div>

				<!-- Woocommerce cart -->
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
					<?php if ( true == get_theme_mod( 'cart_shop', true ) ) : ?>
						<div class="cart-btn">
							<div class="cart-icon">
								<span class="ion ion-android-cart"></span>
								<span class="cart-count"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'cvio' ), WC()->cart->get_cart_contents_count() ); ?></span>
							</div>
							<div class="cart-widget">
								<?php woocommerce_mini_cart(); ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>

			</div>
		</header>

		<!-- Wrapper -->
		<div class="wrapper">
