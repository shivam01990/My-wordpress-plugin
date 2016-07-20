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
	
    <div class="home-content-container">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-12 col-md-8">
            <?php

            if (have_posts() and is_page) : while (have_posts()) : the_post();
            $post_id = $post->ID;
            $title=get_the_title( $post_id );
            $content=get_the_content( $post_id );
            //echo' <div id="offerarea">';
            echo'<p class="title">'.$title.'</p>';
            echo'<p class="content">'.apply_filters('the_content',$content).'</p>';
            //echo'</div>';
            endwhile;

            endif;

            ?>  
          </div>
          <div class="col-md-4  sidebar">
             <?php
             if(is_active_sidebar('sidebar-right-1')){
              dynamic_sidebar('sidebar-right-1');
             }
             ?>   
             <?php
             if(is_active_sidebar('sidebar-right-2')){
              dynamic_sidebar('sidebar-right-2');
             }
             ?>                
          </div>        
          </div>
        </div>
      </div>
    
    </div>
 <?php get_footer(); ?>