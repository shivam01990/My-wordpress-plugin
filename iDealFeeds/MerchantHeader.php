<?php
//error_reporting(0);
$merchant=trim(urldecode(get_query_var('merchant')));
?> 


<div class="banner-categories common" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/merchant-banner.jpg)">
	<div class="cs-banner-mask">
		<div class="marchant-title-block clearfix">

			<div class="marchant-logo"><img src="MerchantLogos/MerchantLogo_7126 (1).gif" width="120" height="60" alt=""></div>

			<div class="details">
				<h2><?php echo $merchant; ?></h2>
				
				<ul>
					<li><a href="#" class="btn btn-vc">Visit Website</a></li>
				</ul>
			</div>
		</div>
	</div>    
</div>