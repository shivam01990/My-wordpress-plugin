 <?php
get_header(); ?>
<div id="devoicetype"></div>  
<div class="container">
<?php if ( is_active_sidebar( 'header-sec' ) ) : ?>      
         <?php dynamic_sidebar('header-sec'); ?>      
<?php endif; ?>  
</div>
<div class="home-content-container">
  <div class="container clearfix">
     <div class="banner-categories">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/merchant-banner.jpg" class="img-responsive" alt="">
      <div class="cs-banner-mask"></div>
      
      <h2>404 Oops! Looks like you have landed on the wrong page</h2> 
     </div>
    <div class="row">
      <div class="col-sm-12 col-md-8">
         
      </div>
      <div class="col-md-4  sidebar">
        <div class="">
                
        </div>       
      </div> 
         
    </div>
  </div>
</div>
 <div class="container">
      <?php if ( is_active_sidebar( 'footer-sec' ) ) : ?>      
         <?php dynamic_sidebar('footer-sec'); ?>      
      <?php endif; ?>   
  </div> 
</div>
<?php get_footer(); ?>