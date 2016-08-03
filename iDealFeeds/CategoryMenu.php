<div class="container">
  <div class="cat-menu">
    <div id="Header1_DivCategories" class="clearfix">

     <?php 
     error_reporting(0);  
      include('Config.php');
      include('Helper.php');

      $apikey = get_option('idealfeeds_apikey', $apikey);

      $ch = curl_init();
      $timeout = 0; // set to zero for no timeout
      curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetHeaderCategories/xml");
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
      $xml_raw  = curl_exec($ch);
      $xml = simplexml_load_string($xml_raw);
      curl_close($ch);
      $i=0;
      $j=0;
      $flagChange=true;
     foreach ($xml->Categories->HeaderCategory as $item) {
         $CategoryName = $item->CategoryName;
         $SubCategories = $item->SubCategories;        
         
          if( ($flagChange==true) && ($i<5) )
          {
            echo '<div class="mnav-col">';
          }
          if($j<3)
          {
            $flagChange=false;
            echo "<ul>";
            echo '<li class="cat"><a href="'.esc_url(home_url( '/' )).'category/'.EncodeTextForURL(trim($CategoryName)).'">'.$CategoryName.'</a></li>';
            foreach (explode('|', $SubCategories) as $sub)
            {
             echo '<li><a href="'.esc_url(home_url( '/' )).'category/'.EncodeTextForURL(trim($CategoryName)).'/'.EncodeTextForURL(trim($sub)).'">'.$sub.'</a></li>';
            
            }
            echo "</ul>";
            $j=$j+1;
          }
          else
          {
            $i=$i+1;
            $flagChange=true;
            echo "</div>";
            $j=0;
          }

      }

      if($j>0)
      {
        echo "</div>";
      }
      
     ?> 

  
    </div>
  </div>
</div>