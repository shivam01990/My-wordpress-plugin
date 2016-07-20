<?php 
add_filter('widget_text', 'do_shortcode');


if (isset($_GET['activated']) && is_admin()){

        $new_page_title = 'Codes';
        $new_page_content = '[codes]';
        $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.

        //don't change the code bellow, unless you know what you're doing

        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content,
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
                if(!empty($new_page_template)){
                        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                }
        }


        $new_page_title = 'Offers';
        $new_page_content = '[offers]';
        $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.

        //don't change the code bellow, unless you know what you're doing

        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content,
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
                if(!empty($new_page_template)){
                        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                }
       }


        $new_page_title = 'Home';
        $new_page_content = '[homepage]';
        $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.

        //don't change the code bellow, unless you know what you're doing

        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content,
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
                if(!empty($new_page_template)){
                        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                }

         // Set "static page" as the option
          update_option( 'show_on_front', 'page' ); 
         // Set the front page ID      
          update_option('page_on_front', $new_page_id);  
        } 



}



register_sidebar( array(
 'name' => 'Sidebar Right 1',
 'id' => 'sidebar-right-1',
 'description' => 'Appears in right side bar'
 ) );

register_sidebar( array(
 'name' => 'Sidebar Right 2',
 'id' => 'sidebar-right-2',
 'description' => 'Appears in right side bar'
 ) );

/* 
function prefix_custom_site_icon_size( $sizes ) {
   $sizes[] = 64;
 
   return $sizes;
}
add_filter( 'site_icon_image_sizes', 'prefix_custom_site_icon_size' );
 
function prefix_custom_site_icon_tag( $meta_tags ) {
   $meta_tags[] = sprintf( '<link rel="icon" href="%s" sizes="64x64" />', esc_url( get_site_icon_url( null, 64 ) ) );
 
   return $meta_tags;
}
add_filter( 'site_icon_meta_tags', 'prefix_custom_site_icon_tag' );
*/
?>