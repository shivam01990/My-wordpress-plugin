  <div class="top10-coupon">   

  <?php
  try
  {
    include('Config.php');
    include('Helper.php');

    $apikey = get_option('idealfeeds_apikey', $apikey);

    $ch = curl_init();
    $timeout = 0; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetCategories/xml?PageNo=1&PageSize=20&Top=true");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $xml_raw  = curl_exec($ch);
    $xml = simplexml_load_string($xml_raw);
    curl_close($ch);
    //print_r($xml);

      echo "<ul class='tags'>";
      foreach ($xml->Categories->Category as $item) {
        $CategoryName= $item->CategoryName;
        $OfferCategoryID = $item->OfferCategoryID;  
        echo '<li><a href="'.esc_url(home_url( '/' )).'category/'.EncodeTextForURL(trim($CategoryName)).'">'.$CategoryName.'</a></li>';
      }
       echo "</ul>";
    }
    catch(Exception $e)
    {
      echo 'No data is available.';
    }
    ?>

</div>