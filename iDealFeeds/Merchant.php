<?php
error_reporting(0);
include('Config.php');
include('Helper.php');
$merchant=trim(DecodeTextForURL(get_query_var('merchant')));
$page_no=DecodeTextForURL(get_query_var('pageno'));
if($page_no=='')
{
	$page_no=1;   
}
$TotalRecords=0;
$OfferID=$_REQUEST['O'];
?> 




<div class="right-col marchant-offer">
<?php
	try
	{

		$apikey = get_option('idealfeeds_apikey', $apikey);

		$ch = curl_init();
		$timeout = 0; // set to zero for no timeout
		$tempserviceURL= $serviceUrl.$apikey.'/GetDeals/xml?MerchantName='.urlencode($merchant).'&PageNo='.$page_no.'&PageSize=10&SortBy=STARTDATE-DESC';
		curl_setopt ($ch, CURLOPT_URL, $tempserviceURL);
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
				$CouponCode = $item->CouponCode;
				$DeepLinkUrl =$item->DeepLinkUrl;
				$DealId =$item->DealId;
				$FeaturedDeal =$item->FeaturedDeal;
				$StartDate = $item->StartDate;
				$EndDate  = $item->EndDate;
                $TotalRecords = $item->TotalRecords;
				$starttime = strtotime($StartDate);
                $endtime = strtotime($EndDate);               
				?>
				
					<?php if($DealType=="Coupon"){ ?>
					 <div class="block clearfix">
			            <div class="logo-box">Coupon</div>
			            <div class="details">
			              <h3><a href="#"><?php echo $DealTitle;?></a></h3>
			              <p><?php echo GetDescription($DealDescription,180); ?></p>
			              <ul class="vc-butttons">
			                <li><a onclick="ShowCode(<?php echo $DealId;?>,'<?php echo $DeepLinkUrl;?>','<?php echo esc_url(home_url( '/' )).'stores/'.EncodeTextForURL($merchant).'/'.$page_no; ?>')" href="javascript:void(0);"  class="btn btn-vc">Get coupon &amp; visit site</a></li>
			                <li>
			                	<?php if($DealId!=$OfferID){
			                	?>
			                	<a onclick="ShowCode(<?php echo $DealId;?>,'<?php echo $DeepLinkUrl;?>','<?php echo esc_url(home_url( '/' )).'stores/'.EncodeTextForURL($merchant).'/'.$page_no; ?>')" href="javascript:void(0);" class="deal-button has-code" href="<?php echo $DeepLinkUrl;?>" rel="nofollow">
			                	<span class="code">
			                		<?php echo $CouponCode;?>
			                    </span>
			                    <span class="label">
			                       Show coupon code
			                    </span></a> 
			                    <?php 
			                    }
			                    else
			                    {
			                    ?>
			                    <a  href="javascript:void(0);" class="deal-button" href="<?php echo $DeepLinkUrl;?>" rel="nofollow">
			                	<span class="code">
			                		<?php echo $CouponCode;?>
			                    </span>
			                    </a> 
			                   <?php
			                    }
			                    ?>
			                </li>
			              </ul>			             
			              <p class="offer-added"><span>Added: <?php echo date('d/m/Y',$starttime); ?> </span><span>Expires: <?php echo date('d/m/Y',$endtime); ?></span></p>
			            </div>
			          </div>
					<?php }
					else{ ?>
					<div class="block clearfix">
			            <div class="logo-box">Deal</div>
			            <div class="details">
			              <h3><a href="#"><?php echo $DealTitle;?></a></h3>
			              <p><?php echo GetDescription($DealDescription,180); ?></p>
			              <ul class="vc-butttons">
			                <li><a href="<?php echo $DeepLinkUrl;?>" target="_blank" class="btn btn-vc">Get coupon &amp; visit site</a></li>
			               
			              </ul>
			              <p class="offer-added"><span>Added: <?php echo date('d/m/Y',$starttime); ?></span><span>Expires: <?php echo date('d/m/Y',$endtime); ?></span></p>
			            </div>
			        </div>
					<?php } ?>
				
				<?php
			}
		}
		catch(Exception $e)
		{
			//echo 'No data is available.';
		}
?>
</div>

<?php 
//Pagination Variables
$total_records=$TotalRecords;
$redirect_link=esc_url(home_url( '/' )).'stores/'.EncodeTextForURL($merchant).'/';
if($total_records==0)
{
	echo "<div class='text-center'><h2>No Offer found.</h2></div>";
}

include('Paging.php');
?>

