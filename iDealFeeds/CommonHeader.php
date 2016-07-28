<?php 
include('Config.php');
include('Helper.php');

  if(is_page('merchant'))
  {  
   echo do_shortcode('[merchant_header]');  
  }
  else if(is_page('category'))
  {     
    echo do_shortcode('[category_header]');       
  }
  else if(is_page('offers'))
  {     
    //do nothing its search page
  }
  else
  {

?> 
<div class="banner-categories">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/merchant-banner.jpg" class="img-responsive" alt="">
<div class="cs-banner-mask"></div>
  <h2><?php echo get_the_title(); ?></h2> 
</div>
<?php
  }
?> 