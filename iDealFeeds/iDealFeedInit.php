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
    }
   
    function iDealFeeds_admin(){
        include('Settings.php');
    }
   
    add_action('admin_menu', 'iDealFeeds_actions');
   
    ?>

    