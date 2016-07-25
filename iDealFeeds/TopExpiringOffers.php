  
  <?php
  try
  {
    include('Config.php');
    include('Helper.php');

    $apikey = get_option('idealfeeds_apikey', $apikey);

    $ch = curl_init();
    $timeout = 0; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetDeals/xml?PageNo=1&PageSize=5&SortBy=EndDate&Exclusive=true");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $xml_raw  = curl_exec($ch);
    $xml = simplexml_load_string($xml_raw);
    curl_close($ch);
    //print_r($xml);

      foreach ($xml->Deals->Deal as $item) {

        $DealType= $item->DealType;
        $MerchantID = $item->MerchantID;
        $MerchantName =$item->MerchantName;
        $MerchantLogoURL = $item->MerchantLogoURL;
        $CategoryName = $item->CategoryName;
        $DealTitle = $item->DealTitle;
        $DealDescription = $item->DealDescription;
        $DeepLinkUrl =$item->DeepLinkUrl;
        $DealId =$item->DealId;
        $FeaturedDeal =$item->FeaturedDeal;
        $StartDate = $item->StartDate;
        $EndDate  = $item->EndDate;

        ?>
        <div class="ending-soon  clearfix">
         <a href='<?php echo esc_url(home_url( '/' )).'stores/'.urlencode($MerchantName).'/' ?>' class="hvr-reveal"> 
         <img src="<?php echo $MerchantLogoURL ?>"  class="logo-ending-offers img-responsive" alt=""> 
         <span class="info"><span class="off-per"><?php echo $DealTitle ?></span> <span class="coupon-num"><?php echo GetDescription($DealDescription,60); ?></span> </span>
         </a>
        </div>
                
        <?php
      }
    }
    catch(Exception $e)
    {
      echo 'No data available.';
    }
    ?>

