<?php error_reporting(0); ?>
<div class="home-merchant clearfix">
	<ul>
		<?php
		try
		{
			include('Config.php');

			$apikey = get_option('idealfeeds_apikey', $apikey);

			$ch = curl_init();
$timeout = 0; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetMerchants/xml?Premium=true&PageNo=1&PageSize=9");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$xml_raw  = curl_exec($ch);
$xml = simplexml_load_string($xml_raw);
curl_close($ch);


foreach ($xml->Merchants->Merchant as $item) {

	$MerchantLogoURL= $item->MerchantLogoURL;
	$MerchantName =$item->MerchantName;
	echo '<li class="hvr-float-shadow"><a href="javascript:void(0);"><img class="img-responsive" src="'.$MerchantLogoURL.'" alt="'.$MerchantName.'" title="'.$MerchantName.'"/></a></li>';
 }
}
catch(Exception $e)
{
	echo 'No data is available.';
}
?>
</ul>
</div>	



			
			
			 