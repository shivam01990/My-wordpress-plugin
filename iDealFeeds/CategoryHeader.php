<?php
//error_reporting(0);
$category=trim(urldecode(get_query_var('category')));
$sub_category=trim(urldecode(get_query_var('sub_category')));
?> 

<div class="banner-categories">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/merchant-banner.jpg" class="img-responsive" alt="">
<div class="cs-banner-mask"></div>
	<h2><?php
	if($sub_category!="")
	{
	 echo $sub_category;
	}
	else
	{
	 echo $category;
	}
	?></h2>	
</div>
