    
<h2>All Stores</h2>
<ul class="stotes-az clearfix">
	<li><a href="#09">0-9</a></li>
	<li><a href="#a">A</a></li>
	<li><a href="#b">B</a></li>
	<li><a href="#c">C</a></li>
	<li><a href="#d">D</a></li>
	<li><a href="#e">E</a></li>
	<li><a href="#f">F</a></li>
	<li><a href="#g">G</a></li>
	<li><a href="#h">H</a></li>
	<li><a href="#i">I</a></li>
	<li><a href="#j">J</a></li>
	<li><a href="#k">K</a></li>
	<li><a href="#l">L</a></li>
	<li><a href="#m">M</a></li>
	<li><a href="#n">N</a></li>
	<li><a href="#o">O</a></li>
	<li><a href="#p">P</a></li>
	<li><a href="#q">Q</a></li>
	<li><a href="#r">R</a></li>
	<li><a href="#s">S</a></li>
	<li><a href="#t">T</a></li>
	<li><a href="#u">U</a></li>
	<li><a href="#v">V</a></li>
	<li><a href="#w">W</a></li>
	<li><a href="#x">X</a></li>
	<li><a href="#y">Y</a></li>
	<li><a href="#z">Z</a></li>
</ul>

<div class="block">
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

$digitMerchants='';
$aMerchants ='';
$bMerchants ='';
$cMerchants ='';
$dMerchants ='';
$eMerchants ='';
$fMerchants ='';
$gMerchants ='';
$hMerchants ='';
$iMerchants ='';
$jMerchants ='';
$kMerchants ='';
$lMerchants ='';
$mMerchants ='';
$nMerchants ='';
$oMerchants ='';
$pMerchants ='';
$qMerchants ='';
$rMerchants ='';
$sMerchants ='';
$tMerchants ='';
$uMerchants ='';
$vMerchants ='';
$wMerchants ='';
$xMerchants ='';
$yMerchants ='';
$zMerchants ='';


foreach ($xml->Merchants->Merchant as $item) {

	$MerchantLogoURL= $item->MerchantLogoURL;
	$MerchantName =$item->MerchantName;   

    if(ctype_digit(strtolower(substr($MerchantName, 0, 1 ))))
    {
      $digitMerchants =$aMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

    if(strtolower(substr($MerchantName, 0, 1 )) === "a")
    {
      $aMerchants =$aMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "b")
    {

      $bMerchants =$bMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "c")
    {
      $cMerchants =$cMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "d")
    {
  
     $dMerchants =$dMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "e")
    {
     
      $eMerchants =$eMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "f")
    {
      $fMerchants =$fMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "g")
    {
   $gMerchants =$gMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "h")
    {
   $hMerchants =$hMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "i")
    {
   $iMerchants =$iMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "j")
    {
   $jMerchants =$jMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

     if(strtolower(substr($MerchantName, 0, 1 )) === "k")
    {
   $kMerchants =$kMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "l")
    {
   $lMerchants =$lMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "m")
    {
   $mMerchants =$mMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "n")
    {
   $nMerchants =$nMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "o")
    {
   $oMerchants =$oaMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "p")
    {
   $pMerchants =$pMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "q")
    {
   $qMerchants =$qMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "r")
    {
   $rMerchants =$rMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "s")
    {
   $sMerchants =$sMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "t")
    {
   $tMerchants =$tMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "u")
    {
   $uMerchants =$uMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "v")
    {
   $vMerchants =$vMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "w")
    {
   $wMerchants =$wMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "x")
    {
   $xMerchants =$xMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "y")
    {
   $yMerchants =$yMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }

      if(strtolower(substr($MerchantName, 0, 1 )) === "z")
    {
   $zMerchants =$zMerchants.'<div class="col-sm-3"> <a href="'.esc_url(home_url( "/" )).'stores/'.urlencode($MerchantName).'" class="store-az"> <span class="marchant"><img src="'.$MerchantLogoURL.'" width="130" height="86" alt=""> </span> <span class="mt-name">'.$MerchantName.'</span> </a> </div>';	

    }
}

?>	


    <div class="letter-title" id="09"><span>0-9</span></div>
	<div class="row row-all-stores">
		<?php echo $digitMerchants; ?>
	</div>
	<div class="letter-title" id="a"><span>A</span></div>
	<div class="row row-all-stores">
		<?php echo $aMerchants; ?>
	</div>
	<div class="letter-title" id="b"><span>B</span></div>
	<div class="row row-all-stores">
		<?php echo $bMerchants; ?>
	</div>

	<div class="letter-title" id="c"><span>C</span></div>
	<div class="row row-all-stores">
		<?php echo $cMerchants; ?>
	</div>


	<div class="letter-title" id="d"><span>D</span></div>
	<div class="row row-all-stores">
		<?php echo $dMerchants; ?>
	</div>


	<div class="letter-title" id="e"><span>E</span></div>
	<div class="row row-all-stores">
		<?php echo $eMerchants; ?>
	</div>


	<div class="letter-title" id="f"><span>F</span></div>
	<div class="row row-all-stores">
		<?php echo $fMerchants; ?>
	</div>


	<div class="letter-title" id="g"><span>G</span></div>
	<div class="row row-all-stores">
	<?php echo $gMerchants; ?>
	</div>


	<div class="letter-title" id="h"><span>H</span></div>
	<div class="row row-all-stores">
	<?php echo $hMerchants; ?>
	</div>

	<div class="letter-title" id="i"><span>I</span></div>
	<div class="row row-all-stores">
       <?php echo $iMerchants; ?>
	</div>

	<div class="letter-title" id="j"><span>J</span></div>
	<div class="row row-all-stores">
       <?php echo $jMerchants; ?>
	</div>

	<div class="letter-title" id="k"><span>K</span></div>
	<div class="row row-all-stores">
       <?php echo $kMerchants; ?>
	</div>

	<div class="letter-title" id="l"><span>L</span></div>
	<div class="row row-all-stores">
      <?php echo $lMerchants; ?>
	</div>

	<div class="letter-title" id="m"><span>M</span></div>
	<div class="row row-all-stores">
		<?php echo $mMerchants; ?>

	</div>

	<div class="letter-title" id="n"><span>N</span></div>
	<div class="row row-all-stores">
		<?php echo $nMerchants; ?>
	</div>

	<div class="letter-title" id="o"><span>O</span></div>
	<div class="row row-all-stores">
		<?php echo $oMerchants; ?>
	</div>

	<div class="letter-title" id="p"><span>P</span></div>
	<div class="row row-all-stores">
		<?php echo $pMerchants; ?>

	</div>

	<div class="letter-title" id="q"><span>Q</span></div>
	<div class="row row-all-stores">
		<?php echo $qMerchants; ?>
	</div>

	<div class="letter-title" id="r"><span>R</span></div>
	<div class="row row-all-stores">
		<?php echo $rMerchants; ?>
	</div>

	<div class="letter-title" id="s"><span>S</span></div>
	<div class="row row-all-stores">
	    <?php echo $sMerchants; ?>
	</div>

	<div class="letter-title" id="t"><span>T</span></div>
	<div class="row row-all-stores">
	    <?php echo $tMerchants; ?>
	</div>

    <div class="letter-title" id="u"><span>U</span></div>
	<div class="row row-all-stores">
	    <?php echo $uMerchants; ?>
	</div>

	 <div class="letter-title" id="v"><span>V</span></div>
	<div class="row row-all-stores">
	    <?php echo $vMerchants; ?>
	</div>

	<div class="letter-title" id="w"><span>W</span></div>
	<div class="row row-all-stores">
	    <?php echo $wMerchants; ?>
	</div>

	<div class="letter-title" id="w"><span>X</span></div>
	<div class="row row-all-stores">
	    <?php echo $xMerchants; ?>
	</div>

	<div class="letter-title" id="y"><span>Y</span></div>
	<div class="row row-all-stores">
		<?php echo $yMerchants; ?>
	</div>

	<div class="letter-title" id="z"><span>Z</span></div>
	<div class="row row-all-stores">
	<?php echo $zMerchants; ?>
	</div>





</div>
