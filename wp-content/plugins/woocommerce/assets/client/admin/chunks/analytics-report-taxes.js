"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[9792],{56703:(e,t,r)=>{r.d(t,{O3:()=>d,be:()=>u,u8:()=>_});var o=r(65736),a=r(92694),s=r(75606),c=r(67221),n=r(9818),i=r(20513),l=r(86806);const{addCesSurveyForAnalytics:m}=(0,n.dispatch)(s.STORE_KEY),d=(0,a.applyFilters)("woocommerce_admin_taxes_report_charts",[{key:"total_tax",label:(0,o.__)("Total tax","woocommerce"),order:"desc",orderby:"total_tax",type:"currency"},{key:"order_tax",label:(0,o.__)("Order tax","woocommerce"),order:"desc",orderby:"order_tax",type:"currency"},{key:"shipping_tax",label:(0,o.__)("Shipping tax","woocommerce"),order:"desc",orderby:"shipping_tax",type:"currency"},{key:"orders_count",label:(0,o.__)("Orders","woocommerce"),order:"desc",orderby:"orders_count",type:"number"}]),u=(0,a.applyFilters)("woocommerce_admin_taxes_report_advanced_filters",{filters:{},title:(0,o._x)("Taxes match <select/> filters","A sentence describing filters for Taxes. See screen shot for context: https://cloudup.com/cSsUY9VeCVJ","woocommerce")}),p=[{label:(0,o.__)("All taxes","woocommerce"),value:"all"},{label:(0,o.__)("Comparison","woocommerce"),value:"compare-taxes",chartMode:"item-comparison",settings:{type:"taxes",param:"taxes",getLabels:(0,i.qc)(c.NAMESPACE+"/taxes",(e=>({id:e.id,key:e.id,label:(0,l.I)(e)}))),labels:{helpText:(0,o.__)("Check at least two tax codes below to compare","woocommerce"),placeholder:(0,o.__)("Search for tax codes to compare","woocommerce"),title:(0,o.__)("Compare Tax Codes","woocommerce"),update:(0,o.__)("Compare","woocommerce")},onClick:m}}];Object.keys(u.filters).length&&p.push({label:(0,o.__)("Advanced filters","woocommerce"),value:"advanced"});const _=(0,a.applyFilters)("woocommerce_admin_taxes_report_filters",[{label:(0,o.__)("Show","woocommerce"),staticParams:["chartType","paged","per_page"],param:"filter",showFilters:()=>!0,filters:p}])},82210:(e,t,r)=>{r.r(t),r.d(t,{default:()=>f});var o=r(69307),a=r(7862),s=r.n(a),c=r(65736),n=r(56703),i=r(83573),l=r(47478),m=r(80272),d=r(92819),u=r(86020),p=r(10431),_=r(81595),y=r(17844),x=r(86806),b=r(42968);class h extends o.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:(0,c.__)("Tax code","woocommerce"),key:"tax_code",required:!0,isLeftAligned:!0,isSortable:!0},{label:(0,c.__)("Rate","woocommerce"),key:"rate",isSortable:!0,isNumeric:!0},{label:(0,c.__)("Total tax","woocommerce"),key:"total_tax",isSortable:!0},{label:(0,c.__)("Order tax","woocommerce"),key:"order_tax",isSortable:!0},{label:(0,c.__)("Shipping tax","woocommerce"),key:"shipping_tax",isSortable:!0},{label:(0,c.__)("Orders","woocommerce"),key:"orders_count",required:!0,defaultSort:!0,isSortable:!0,isNumeric:!0}]}getRowsContent(e){const{render:t,formatDecimal:r,getCurrencyConfig:a}=this.context;return(0,d.map)(e,(e=>{const{query:s}=this.props,{order_tax:c,orders_count:n,tax_rate:i,tax_rate_id:l,total_tax:m,shipping_tax:d}=e,y=(0,x.I)(e),b=(0,p.getPersistedQuery)(s),h=(0,p.getNewPath)(b,"/analytics/orders",{filter:"advanced",tax_rate_includes:l});return[{display:(0,o.createElement)(u.Link,{href:h,type:"wc-admin"},y),value:y},{display:i.toFixed(2)+"%",value:i},{display:t(m),value:r(m)},{display:t(c),value:r(c)},{display:t(d),value:r(d)},{display:(0,_.formatValue)(a(),"number",n),value:n}]}))}getSummary(e){const{tax_codes:t=0,total_tax:r=0,order_tax:o=0,shipping_tax:a=0,orders_count:s=0}=e,{formatAmount:n,getCurrencyConfig:i}=this.context,l=i();return[{label:(0,c._n)("tax code","tax codes",t,"woocommerce"),value:(0,_.formatValue)(l,"number",t)},{label:(0,c.__)("total tax","woocommerce"),value:n(r)},{label:(0,c.__)("order tax","woocommerce"),value:n(o)},{label:(0,c.__)("shipping tax","woocommerce"),value:n(a)},{label:(0,c._n)("order","orders",s,"woocommerce"),value:(0,_.formatValue)(l,"number",s)}]}render(){const{advancedFilters:e,filters:t,isRequesting:r,query:a}=this.props;return(0,o.createElement)(b.Z,{compareBy:"taxes",endpoint:"taxes",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,getSummary:this.getSummary,summaryFields:["tax_codes","total_tax","order_tax","shipping_tax","orders_count"],isRequesting:r,itemIdField:"tax_rate_id",query:a,searchBy:"taxes",tableQuery:{orderby:a.orderby||"tax_rate_id"},title:(0,c.__)("Taxes","woocommerce"),columnPrefsKey:"taxes_report_columns",filters:t,advancedFilters:e})}}h.contextType=y.CurrencyContext;const g=h;var w=r(31511);class C extends o.Component{getChartMeta(){const{query:e}=this.props,t="compare-taxes"===e.filter?"item-comparison":"time-comparison";return{itemsLabel:(0,c.__)("%d taxes","woocommerce"),mode:t}}render(){const{isRequesting:e,query:t,path:r}=this.props,{mode:a,itemsLabel:s}=this.getChartMeta(),c={...t};return"item-comparison"===a&&(c.segmentby="tax_rate_id"),(0,o.createElement)(o.Fragment,null,(0,o.createElement)(w.Z,{query:t,path:r,filters:n.u8,advancedFilters:n.be,report:"taxes"}),(0,o.createElement)(m.Z,{charts:n.O3,endpoint:"taxes",isRequesting:e,query:c,selectedChart:(0,i.Z)(t.chart,n.O3),filters:n.u8,advancedFilters:n.be}),(0,o.createElement)(l.Z,{charts:n.O3,filters:n.u8,advancedFilters:n.be,mode:a,endpoint:"taxes",query:c,path:r,isRequesting:e,itemsLabel:s,selectedChart:(0,i.Z)(t.chart,n.O3)}),(0,o.createElement)(g,{isRequesting:e,query:t,filters:n.u8,advancedFilters:n.be}))}}C.propTypes={query:s().object.isRequired};const f=C},86806:(e,t,r)=>{r.d(t,{I:()=>a});var o=r(65736);function a(e){return[e.country,e.state,e.name||(0,o.__)("TAX","woocommerce"),e.priority].map((e=>e.toString().toUpperCase().trim())).filter(Boolean).join("-")}},20513:(e,t,r)=>{r.d(t,{FI:()=>b,V1:()=>h,YC:()=>p,hQ:()=>_,jk:()=>y,oC:()=>x,qc:()=>u,uC:()=>g});var o=r(65736),a=r(96483),s=r(86989),c=r.n(s),n=r(92819),i=r(10431),l=r(67221),m=r(86806),d=r(17062);function u(e,t=n.identity){return function(r="",o){const s="function"==typeof e?e(o):e,n=(0,i.getIdsFromQuery)(r);if(n.length<1)return Promise.resolve([]);const l={include:n.join(","),per_page:n.length};return c()({path:(0,a.addQueryArgs)(s,l)}).then((e=>e.map(t)))}}u(l.NAMESPACE+"/products/attributes",(e=>({key:e.id,label:e.name})));const p=u(l.NAMESPACE+"/products/categories",(e=>({key:e.id,label:e.name}))),_=u(l.NAMESPACE+"/coupons",(e=>({key:e.id,label:e.code}))),y=u(l.NAMESPACE+"/customers",(e=>({key:e.id,label:e.name}))),x=u(l.NAMESPACE+"/products",(e=>({key:e.id,label:e.name}))),b=u(l.NAMESPACE+"/taxes",(e=>({key:e.id,label:(0,m.I)(e)})));function h({attributes:e,name:t}){const r=(0,d.O3)("variationTitleAttributesSeparator"," - ");if(t&&t.indexOf(r)>-1)return t;const a=(e||[]).map((({name:e,option:t})=>(t||(e=e.charAt(0).toUpperCase()+e.slice(1),t=(0,o.sprintf)((0,o.__)("Any %s","woocommerce"),e)),t))).join(", ");return a?t+r+a:t}const g=u((({products:e})=>e?l.NAMESPACE+`/products/${e}/variations`:l.NAMESPACE+"/variations"),(e=>({key:e.id,label:h(e)})))}}]);