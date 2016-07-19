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
        include ('Merchant_Logos.php');
     }
     add_shortcode('merchant_logos', 'iDealFeeds_merchant_logos_shortcode');

     function iDealFeeds_merchant_all_shortcode(){        
        include ('Merchant_All.php');
     }
     add_shortcode('merchant_all', 'iDealFeeds_merchant_all_shortcode');

      function iDealFeeds_premium_merchant_shortcode(){        
        include ('Premium_Merchants.php');
     }
     add_shortcode('premium_merchant', 'iDealFeeds_premium_merchant_shortcode');

    //**********End short Codes Definition***********//

    ?>

    