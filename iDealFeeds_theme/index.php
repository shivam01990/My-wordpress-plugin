 <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
include_once('functions.php');
get_header(); ?>
<div id="devoicetype"></div>

<?php 
if(is_page('home'))
 { ?>
      <div class="home-search">
        <div class="container">
         <h2>Find Exclusive Voucher Codes and Coupons</h2>
         <p class="hidden-xs">Get the latest Voucher Codes, Discounts and Coupons</p>
         <div class="home-search-form clearfix">
          <div role="form" class="form-inline">
            <div class="form-group">              
              <input  id='txtiDealFeedsSearch' placeholder="Type in a Store e.g. foodpanda, Expedia" id="txtSearchBox" class="form-control">
            </div>
            <button class="btn" id="btnSearch" onclick="return SearchText();" type="button">Search</button>
          </div>
        </div>
        <?php echo do_shortcode('[home_premium_merchant]');     ?>
        </div>
      </div>
<?php          
}
?>	
<div class="container">
<?php if ( is_active_sidebar( 'header-sec' ) ) : ?>      
         <?php dynamic_sidebar('header-sec'); ?>      
<?php endif; ?>  
</div>

<div class="home-content-container">
  <div class="container clearfix">
      <?php echo do_shortcode('[common_header]');?>  
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <?php

        if (have_posts() and is_page) : while (have_posts()) : the_post();
        $post_id = $post->ID;
        $title=get_the_title( $post_id );
        $content=get_the_content( $post_id );
            //echo' <div id="offerarea">';
            //echo'<p class="title">'.$title.'</p>';
        echo apply_filters('the_content',$content);
            //echo'</div>';
        endwhile;

        endif;

        ?>  
      </div>
      <div class="col-md-4  sidebar">
        <div class="">
          <?php get_sidebar(); ?>              
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