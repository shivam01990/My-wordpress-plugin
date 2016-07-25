<?php 
    /*
    Plugin Name: iDealFeeds
    Plugin URI: http://www.idealfeeds.com
    Description: Setup iDealfeeds credencials
    Author: Shivam Srivastava
    Version: 1.0
    Author URI: http://www.idealfeeds.com
    */




    function iDealFeeds_actions() { 
        add_menu_page("iDealfeeds","iDealfeeds", 1, "iDealFeeds_admin", "iDealFeeds_admin");
        add_submenu_page("iDealFeeds_admin","","Settings",1, "iDealFeeds_admin", "iDealFeeds_admin");
        add_submenu_page("iDealFeeds_admin", "Shortcodes","Shortcodes", 1, "iDealFeeds_shortcodes_admin", "iDealFeeds_shortcodes_admin");
    }

    function iDealFeeds_admin(){
        include('Settings_Admin.php');
    }

    function iDealFeeds_shortcodes_admin() {
        include('Shortcodes_Admin.php');
    }

    add_action('admin_menu', 'iDealFeeds_actions');

    //**********Short Codes Definition***********//

    function iDealFeeds_merchant_logos_shortcode(){        
        $rType = requireToVar('Merchant_Logos.php');
        return $rType;
     }
     add_shortcode('merchant_logos', 'iDealFeeds_merchant_logos_shortcode');

     function iDealFeeds_merchant_all_shortcode(){        
        $rType = requireToVar('Merchant_All.php');
        return $rType;
     }
     add_shortcode('merchant_all', 'iDealFeeds_merchant_all_shortcode');

     function iDealFeeds_premium_merchant_shortcode(){        
         $rType = requireToVar('Premium_Merchants.php');
         return $rType;
     }
     add_shortcode('premium_merchant', 'iDealFeeds_premium_merchant_shortcode');

    function iDealFeeds_home_premium_merchant_shortcode(){        
         $rType = requireToVar('Home_Premium_Merchant.php');
         return $rType;
     }
     add_shortcode('home_premium_merchant', 'iDealFeeds_home_premium_merchant_shortcode');

     function iDealFeeds_homepage_shortcode(){
         $rType = requireToVar('HomePage.php');
         return $rType;
     }

     add_shortcode('homepage', 'iDealFeeds_homepage_shortcode');

     function iDealFeeds_top_exclusive_offers_shortcode(){
        $rType = requireToVar('TopExclusiveOffers.php');      
        return  $rType;
       
     }

     add_shortcode('top_exclusive_offers', 'iDealFeeds_top_exclusive_offers_shortcode');

    function iDealFeeds_top_expiring_offers_shortcode(){
        $rType = requireToVar('TopExpiringOffers.php');      
        return  $rType;
       
     }
     add_shortcode('top_expiring_offers', 'iDealFeeds_top_expiring_offers_shortcode');

     function iDealFeeds_merchant_shortcode(){
        $rType = requireToVar('Merchant.php');      
        return  $rType;
       
     }
     add_shortcode('merchant', 'iDealFeeds_merchant_shortcode');

    function iDealFeeds_category_shortcode(){
        $rType = requireToVar('Category.php');      
        return  $rType;
       
     }
     add_shortcode('category', 'iDealFeeds_category_shortcode');


    //**********End short Codes Definition***********//
      


    function requireToVar($file){
    ob_start();
    require($file);
    return ob_get_clean();
}
    ?>

    