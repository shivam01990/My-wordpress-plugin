<?php
//error_reporting(0);
$merchant=trim(urldecode(get_query_var('merchant')));
?> 

<?php
 include('Config.php');

$apikey = get_option('idealfeeds_apikey', $apikey);

$ch = curl_init();
$timeout = 0; // set to zero for no timeout
$tempserviceURL= $serviceUrl.$apikey.'/GetMerchantDetails/xml?MerchantName='.urlencode($merchant);
curl_setopt ($ch, CURLOPT_URL, $tempserviceURL);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$xml_raw  = curl_exec($ch);
$xml = simplexml_load_string($xml_raw);
curl_close($ch);


$MerchantName = $xml->MerchantName;
$DeepLinkUrl = $xml->DeepLinkUrl;
$MerchantDescription = $xml->MerchantDescription;
$MerchantLogoURL = $xml->MerchantLogoURL;
$PublicWebsiteURL = $xml->PublicWebsiteURL;
//echo $DeepLinkUrl;
?>
<div class="banner-categories common" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/merchant-banner.jpg)">
	<div class="cs-banner-mask">
		<div class="marchant-title-block clearfix">
			<div class="marchant-logo"><img src="<?php echo $MerchantLogoURL; ?>" width="120" height="60" alt=""></div>

			<div class="details">
				<h2><?php echo $MerchantName; ?></h2>
				
				<ul>
					<li><a target="_blank" href="<?php echo $DeepLinkUrl;?>" class="btn btn-vc">Visit Website</a></li>

				</ul>
			</div>
		</div>
	</div>    
</div>
