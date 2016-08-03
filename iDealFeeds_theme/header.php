<?php
error_reporting(0);
$title=trim(apply_filters('DecodeTextForURL', get_query_var('search')));
if($title=="")
{
  $title=trim(apply_filters('DecodeTextForURL', get_query_var('merchant')));
}

if($title=="")
{
  $title=trim(apply_filters('DecodeTextForURL', get_query_var('category')));
  if(trim(apply_filters('DecodeTextForURL', get_query_var('sub_category')))!="")
  {
     $title=trim(apply_filters('DecodeTextForURL', get_query_var('sub_category')));
  } 
}

if($title=="")
{
  $title=wp_title('',FALSE);
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $title; ?><?php if( $title!="") { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="cleartype" content="on" />
  <?php echo apply_filters('iDealfeedsFaviconIcon',''); ?> 
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="Voucher codes, vouchers, coupon codes, coupons, discount codes, discounts, deals, sale, offers, savings, cash back, retail, fashion, travel, Singapore" />
  <meta name="Culture" content="en-in" />
  <!-- Bootstrap core CSS -->
  
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/hover.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet" type="text/css" />
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/owl.carousel.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
  <form method="post" action="" id="form1">
    <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTEzOTcyNDEwN2RkgNumFbz0IyLyGuwkd7pzrkTfaFxu0ASXcj5SxftZXpQ=" />
    </div>
    <div class="aspNetHidden">
      <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
    </div>
    <div class="page">
      <header>
        <div class="navbar navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <h1 class="logo" style="background: url(<?php echo apply_filters('iDealfeedsIcon',null); ?>) no-repeat left;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?>
               <small>
                <?php
               $description = get_bloginfo( 'description', 'display' );
               if ( $description || is_customize_preview() ) : 
                echo $description; 
              endif;
               ?>
              </small></a></h1>       
            </div>
          </div>
          <div class="collapse navbar-collapse">
            <div class="row">              
              <div class="header">
                <div class="container">
                    <?php 
                      if(!is_page('home'))
                       { ?>
                  <div class="search-block-header">
                  
                    <div class="form-inline ">                      
                      <div class="form-group">                      
                      <input type="text" id='txtiDealFeedsSearch' class="form-control" value="<?php echo trim(apply_filters('DecodeTextForURL', get_query_var('search'))); ?>"  placeholder="Type in a Store e.g. foodpanda, Expedia">
                      </div>
                      <button id="btnSearch" type="submit" class="btn btn-search" onclick="return SearchText();">SEARCH</button>                     
                    </div> 
                     
                  </div>
                  <?php               
                      } ?>
                  <ul class="nav mega navbar-nav  float-right">                    
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores">All Stores</a></li>
                    <li class="dropdown yamm-fw"><a href="#" class="all-category-link" data-toggle="dropdown">All Categories <span class="caret"></span></a><!--Category-->
                      <div class="mega-content">
                        <?php echo do_shortcode('[category_menu]');     ?>
                      </div>
                      <!--End Category--></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.nav-collapse --></div>
          </header>


     
