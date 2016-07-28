<?php 
add_filter('widget_text', 'do_shortcode');

if (isset($_GET['activated']) && is_admin()){

        $new_page_title = 'Category';
        $new_page_content = '[category]';
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


        
        $new_page_title = 'Stores';
        $new_page_content = '[merchant_all]';
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

        $new_page_title = 'Merchant';
        $new_page_content = '[merchant]';
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
 'name' => 'Sidebar Right',
 'id' => 'sidebar-right-1',
 'description' => 'Appears in right side bar', 
 'before_widget' => '<div class="block">',
 'after_widget'  => '</div>',
 'before_title'  => '<h4 >',
 'after_title'   => '</h4>' ,
 ) );

register_sidebar( array(
 'name' => 'Footer Menu 1',
 'id' => 'footer-menu-1',
 'description' => 'Add custom menu widgets footer menu',
 'before_widget' => '<div class="footer-block">',
 'after_widget'  => '</div>',
 'before_title'  => '<h5>',
 'after_title'   => '</h5>' ,
 ) );

register_sidebar( array(
 'name' => 'Footer Menu 2',
 'id' => 'footer-menu-2',
 'description' => 'Add custom menu widgets footer menu',
 'before_widget' => '<div class="footer-block">',
 'after_widget'  => '</div>',
 'before_title'  => '<h5>',
 'after_title'   => '</h5>' ,
 ) );

register_sidebar( array(
 'name' => 'Footer Menu 3',
 'id' => 'footer-menu-3',
 'description' => 'Add custom menu widgets footer menu',
 'before_widget' => '<div class="footer-block">',
 'after_widget'  => '</div>',
 'before_title'  => '<h5>',
 'after_title'   => '</h5>' ,
 ) );

register_sidebar( array(
 'name' => 'Footer Menu 4',
 'id' => 'footer-menu-4',
 'description' => 'Add custom menu widgets footer menu',
 'before_widget' => '<div class="footer-block">',
 'after_widget'  => '</div>',
 'before_title'  => '<h5>',
 'after_title'   => '</h5>' ,
 ) );

register_sidebar( array(
 'name' => 'Footer Menu 5',
 'id' => 'footer-menu-5',
 'description' => 'Add custom menu widgets footer menu',
 'before_widget' => '<div class="footer-block">',
 'after_widget'  => '</div>',
 'before_title'  => '<h5>',
 'after_title'   => '</h5>' ,
 ) );


function custom_rewrite_rule() {
    add_rewrite_rule('^stores/([^/]*)/([0-9]+)/?','index.php?pagename=merchant&merchant=$matches[1]&pageno=$matches[2]','top'); 
    add_rewrite_rule('^stores/([^/]*)/?','index.php?pagename=merchant&merchant=$matches[1]','top'); 

    add_rewrite_rule('^category/([^/]*)/([^/]*)/([0-9]+)/?','index.php?pagename=category&category=$matches[1]&sub_category=$matches[2]&pageno=$matches[3]','top');
    add_rewrite_rule('^category/([^/]*)/([0-9]+)/?','index.php?pagename=category&category=$matches[1]&pageno=$matches[2]','top');  
    add_rewrite_rule('^category/([^/]*)/([^/]*)/?','index.php?pagename=category&category=$matches[1]&sub_category=$matches[2]','top');     
    add_rewrite_rule('^category/([^/]*)/?','index.php?pagename=category&category=$matches[1]','top'); 

    add_rewrite_rule('^search/([^/]*)/([0-9]+)/?','index.php?pagename=offers&search=$matches[1]&pageno=$matches[2]','top'); 
    add_rewrite_rule('^search/([^/]*)/?','index.php?pagename=offers&search=$matches[1]','top'); 
    
  }
  add_action('init', 'custom_rewrite_rule', 10, 0);


add_filter( 'query_vars', 'custom_query_vars' );
function custom_query_vars( $query_vars ){
    $query_vars[] = 'merchant';   
    $query_vars[] = 'pageno';
    $query_vars[] = 'category';
    $query_vars[] = 'sub_category'; 
    $query_vars[] = 'search'; 
    return $query_vars;
}

add_action( 'init', function() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );
});




function fn_DecodeTextForURL( $StrValue) {
        $StrValue =urldecode($StrValue);
        $StrValue=str_replace("§", "&",$StrValue);
        //$StrValue=str_replace("~-", "^",$StrValue);
        //$StrValue=str_replace("+", " ",$StrValue);
        //$StrValue=str_replace("-", "&",$StrValue);
        //$StrValue=str_replace("^", "-",$StrValue);
        //$StrValue=str_replace("~", "\"",$StrValue);
        //$StrValue=str_replace("`", "'",$StrValue);
        //$StrValue=str_replace("®", ":",$StrValue);
        //$StrValue=str_replace("†", "'",$StrValue);
        //$StrValue=str_replace("^", "/",$StrValue);
        //$StrValue=str_replace("‰", "%",$StrValue);
        //$StrValue=str_replace("§", "?",$StrValue);
        return $StrValue;
}

add_filter( 'DecodeTextForURL', 'fn_DecodeTextForURL', 10, 1 ); // Where $priority is 10, $accepted_args is 2.


function fn_EncodeTextForURL( $StrValue) {
       $StrValue=str_replace("&", "§",$StrValue);
        //$StrValue=str_replace("&", "-",$StrValue);
        //$StrValue =str_replace("-", "~-",$StrValue);
        //$StrValue=str_replace(" ", "+",$StrValue);        
        //$StrValue=str_replace("\"", "~",$StrValue);
        //$StrValue=str_replace("'", "†",$StrValue);
        //$StrValue=str_replace("/", "^",$StrValue);
        //$StrValue=str_replace(":", "®",$StrValue);
        //$StrValue=str_replace("%", "‰",$StrValue);
        //$StrValue=str_replace("?", "§",$StrValue);
        $StrValue =urlencode($StrValue);
        return $StrValue;
}

add_filter( 'EncodeTextForURL', 'fn_EncodeTextForURL', 10, 1 ); // Where $priority is 10, $accepted_args is 2.



function GetiDealFeedsIcon()
{
    $result_Icon='';
     try
     {
       if(function_exists('has_site_icon'))
       {
        if(has_site_icon())
        {
         $result_Icon=  get_site_icon_url() ;
        }
        else{
         $result_Icon= esc_url( get_template_directory_uri() ).'/images/logo.png';
        }
      }
      else
      {
        $result_Icon= esc_url( get_template_directory_uri() ).'/images/logo.png'; 
      }
     }
     catch(Exception $e)
     {
       $result_Icon= esc_url( get_template_directory_uri() ).'/images/logo.png';
     } 
      return $result_Icon;    
}

add_filter( 'iDealfeedsIcon', 'GetiDealFeedsIcon');

?>