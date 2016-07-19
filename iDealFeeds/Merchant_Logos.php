<?php
 include('Config.php');

$apikey = get_option('idealfeeds_apikey', $apikey);

$ch = curl_init();
$timeout = 0; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetMerchants/xml");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$xml_raw  = curl_exec($ch);
$xml = simplexml_load_string($xml_raw);
curl_close($ch);


foreach ($xml->Merchants->Merchant as $item) {

	$MerchantLogoURL= $item->MerchantLogoURL;
	$MerchantName =$item->MerchantName;
    echo '<img src="'.$MerchantLogoURL.'" title="'.$MerchantName.'"/>';
}

?>

