  <div class="top10-coupon">   

  <?php
  try
  {
    include('Config.php');
    include('Helper.php');

    $apikey = get_option('idealfeeds_apikey', $apikey);

    $ch = curl_init();
    $timeout = 0; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetDeals/xml?PageNo=1&PageSize=10&SortBy=STARTDATE-DESC&Exclusive=true");
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
        <div class="top-offer-block hvr-reveal">
           <h5><a href='<?php echo esc_url(home_url( '/' )).'stores/'.EncodeTextForURL($MerchantName).'/' ?>'><?php echo $MerchantName ?></a> <span class="exclusive-tag">Exclusive</span></h5>
           <p class="off moretext" textlenght="200"><?php echo GetDescription($DealDescription,250); ?></p>
         </div>
        <?php
      }
    }
    catch(Exception $e)
    {
      echo 'No data is available.';
    }
    ?>

</div>