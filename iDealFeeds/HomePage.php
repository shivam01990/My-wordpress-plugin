
<div class="row">

	<?php
	error_reporting(0);
	try
	{
		include('Config.php');
		include('Helper.php');

		$apikey = get_option('idealfeeds_apikey', $apikey);

		$ch = curl_init();
		$timeout = 0; // set to zero for no timeout
		curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetDeals/xml?PageNo=1&PageSize=21&SortBy=Start");
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
				<div class="col-sm-4">
					<?php if($DealType=="Coupon"){ ?>
					<div class="coupon">
						<div class="marchant-logo"> <img src="<?php echo $MerchantLogoURL ?>" alt="SmartBuyGlasses" class="img-responsive" /> </div>
						<p class="offer-title"><?php echo $DealTitle ?></p>
						<h5><?php echo GetDescription($DealDescription,60); ?> </h5>
						<a onclick="ShowCode(<?php echo $DealId;?>,'<?php echo $DeepLinkUrl;?>')" href="javascript:void(0);" class="btn show-coupon hvr-icon-wobble-horizontal">Show Coupon</a>
						<p><a href="<?php echo esc_url(home_url( '/' )).'stores/'.urlencode($MerchantName).'/' ?>" class="merchant-link">See all <?php echo $MerchantName ?> Coupons</a></p>
					</div>
					<?php }
					else{ ?>
					<div class="coupon activate-deal">
						<div class="marchant-logo"> <img src="<?php echo $MerchantLogoURL ?>" alt="SmartBuyGlasses" class="img-responsive" /> </div>
						<p class="offer-title"><?php echo $DealTitle ?></p>
						<h5><?php echo GetDescription($DealDescription,60); ?></h5>
						<a target="_blank" href="<?php echo $DeepLinkUrl;?>"  class="btn activate-deal hvr-icon-wobble-horizontal">Activate deal</a>
						<p><a href="<?php echo esc_url(home_url( '/' )).'stores/'.urlencode($MerchantName).'/' ?>" class="merchant-link">See all <?php echo $MerchantName ?> Coupons</a></p>
					</div>
					<?php } ?>
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



