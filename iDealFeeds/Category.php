<?php
error_reporting(0);
$category=trim(urldecode(get_query_var('category')));
$sub_category=trim(urldecode(get_query_var('sub_category')));

$category_param=$category;
if($sub_category!="")
{
	$category_param=$category.'|'.$sub_category;
}

$page_no=urldecode(get_query_var('pageno'));

if($page_no=='')
{
	$page_no=1;   
}
$TotalRecords=0;
?> 

<div class="banner-categories common" style="background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/merchant-banner.jpg)">
	<div class="cs-banner-mask">
		<div class="marchant-title-block clearfix">
			<div class="marchant-logo"><img src="MerchantLogos/MerchantLogo_7126 (1).gif" width="120" height="60" alt=""></div>

			<div class="details">
				<h2><?php
				if($sub_category!="")
                {
				 echo $sub_category;
				}
				else
				{
				 echo $category;
				}
				?></h2>
				<div class="user-ratings">
					<ul  class="rating fivestar"><li class="one"><a href="javascript:void(0);" onclick="RaterClick('104532', '1', '1', 'VCContentPlaceHolder_ctlStarRating1_URating', 'VCContentPlaceHolder_ctlStarRating1_PRatingText');" title="1 Star">1</a></li><li class="two"><a href="javascript:void(0);" onclick="RaterClick('104532', '1', '2', 'VCContentPlaceHolder_ctlStarRating1_URating', 'VCContentPlaceHolder_ctlStarRating1_PRatingText');" title="2 Stars">2</a></li><li class="three"><a href="javascript:void(0);" onclick="RaterClick('104532', '1', '3', 'VCContentPlaceHolder_ctlStarRating1_URating', 'VCContentPlaceHolder_ctlStarRating1_PRatingText');" title="3 Stars">3</a></li><li class="four"><a href="javascript:void(0);" onclick="RaterClick('104532', '1', '4', 'VCContentPlaceHolder_ctlStarRating1_URating', 'VCContentPlaceHolder_ctlStarRating1_PRatingText');" title="4 Stars">4</a></li><li class="five"><a href="javascript:void(0);" onclick="RaterClick('104532', '1', '5', 'VCContentPlaceHolder_ctlStarRating1_URating', 'VCContentPlaceHolder_ctlStarRating1_PRatingText');" title="5 Stars">5</a></li></ul><p id="VCContentPlaceHolder_ctlStarRating1_PRatingText">Rated <span>5</span>/5 from <span>3</span> Review</p>
				</div>
				<ul>
					<li><a href="#" class="btn btn-vc">Visit Website</a></li>
				</ul>
			</div>
		</div>
	</div>    
</div>


<div class="right-col marchant-offer">

<?php
	try
	{
		include('Config.php');
		include('Helper.php');

		$apikey = get_option('idealfeeds_apikey', $apikey);

		$ch = curl_init();
		$timeout = 0; // set to zero for no timeout
		curl_setopt ($ch, CURLOPT_URL, "$serviceUrl$apikey/GetDeals/xml?Category=$category_param&PageNo=$page_no&PageSize=10&SortBy=Start");
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
			            <div class="logo-box">
			            	<img alt="" src="<?php echo $MerchantLogoURL; ?>" title="<?php echo $MerchantName; ?>">
			            </div>
			            <div class="details">
			              <h3><a href="#"><?php echo $DealTitle;?></a></h3>
			              <p><?php echo GetDescription($DealDescription,180); ?></p>
			              <ul class="vc-butttons">
			                <li><a onclick="ShowCode(<?php echo $DealId;?>,'<?php echo $DeepLinkUrl;?>')" href="javascript:void(0);"  class="btn btn-vc">Get coupon &amp; visit site</a></li>
			                <li> <a onclick="ShowCode(<?php echo $DealId;?>,'<?php echo $DeepLinkUrl;?>')" href="javascript:void(0);" rel="nofollow"><span class="code"><?php echo $CouponCode?></span><span class="label">Show coupon code</span></a> </li>
			              </ul>			             
			              <p class="offer-added"><span>
			              	<a href="<?php echo esc_url(home_url( '/' )).'stores/'.urlencode($MerchantName).'/' ?>">View all <?php echo $MerchantName ?> Voucher Codes</a>
			              	Added: <?php echo date('d/m/Y',$starttime); ?> </span><span>Expires: <?php echo date('d/m/Y',$endtime); ?></span></p>
			            </div>
			          </div>
					<?php }
					else{ ?>
					<div class="block clearfix">
			            <div class="logo-box">
			            	<img alt="" src="<?php echo $MerchantLogoURL; ?>" title="<?php echo $MerchantName; ?>">
			            </div>
			            <div class="details">
			              <h3><a href="#"><?php echo $DealTitle;?></a></h3>
			              <p><?php echo GetDescription($DealDescription,180); ?></p>
			              <ul class="vc-butttons">
			                <li><a href="<?php echo $DeepLinkUrl;?>" target="_blank" class="btn btn-vc">Get coupon &amp; visit site</a></li>
			               
			              </ul>
			              <p class="offer-added"><span>
			              	<a href="<?php echo esc_url(home_url( '/' )).'stores/'.urlencode($MerchantName).'/' ?>">View all <?php echo $MerchantName ?> Voucher Codes</a>
			              	Added: <?php echo date('d/m/Y',$starttime); ?></span><span>Expires: <?php echo date('d/m/Y',$endtime); ?></span></p>
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
$redirect_link='';
if($sub_category=='')
{
  $redirect_link=esc_url(home_url( '/' )).'category/'.urlencode($category).'/';
}
else
{
  $redirect_link=esc_url(home_url( '/' )).'category/'.urlencode($category).'/'.urlencode($sub_category).'/';
}
if($total_records==0)
{
	echo "<p class='text-center'><h2>No Offer found.</h2><p>";
}

include('Paging.php');
?>

