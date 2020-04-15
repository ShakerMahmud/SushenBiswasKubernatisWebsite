<?php 

/* Auto-Ads Filter for Head */
add_action( 'wp_head', 'adsense_widget_auto_ads_filter' );
function adsense_widget_auto_ads_filter(){
  if ( 'on' === get_adsense_widget_option( 'auto_ads_enabled', 'off' ) ) {
    $publisher_id = get_adsense_widget_option( 'adsense_id', '' );
    if ( '' !== $publisher_id ) {

?><!-- Adsense Widget Auto Ads Code -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><script>(adsbygoogle = window.adsbygoogle || []).push({google_ad_client: "ca-<?php echo $publisher_id; ?>",enable_page_level_ads:true});</script>
<!-- / Adsense Widget Auto Ads Code --><?php 

    } else {
      echo "<!-- Adsense Widget: Publisher id error -->";
    }
  }
}
