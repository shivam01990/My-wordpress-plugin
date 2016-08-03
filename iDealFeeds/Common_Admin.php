 <?php
  wp_enqueue_script( 'iDealFeed-jquery', plugins_url( '/js/jquery-2.0.0.min.js', __FILE__ ));
  wp_register_style('iDealFeed-bootstrap-css', plugins_url('/css/bootstrap.min.css',__FILE__ ));
  wp_enqueue_style('iDealFeed-bootstrap-css');
  wp_enqueue_script( 'iDealFeed-bootstrap-js', plugins_url( '/js/bootstrap.min.js', __FILE__ ));
 ?>