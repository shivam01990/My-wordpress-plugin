<?php 
error_reporting(0);
include('Config.php');
include('Helper.php');
$OfferID=$_REQUEST['O'];

if($OfferID!="")
{
    try
    {
        $apikey = get_option('idealfeeds_apikey', $apikey);
        $ch = curl_init();
        $timeout = 0; // set to zero for no timeout
        $tempserviceURL= $serviceUrl.$apikey.'/GetFeedDealDetail/xml?DealId='.urlencode($OfferID);
        curl_setopt ($ch, CURLOPT_URL, $tempserviceURL);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $xml_raw  = curl_exec($ch);
        $xml = simplexml_load_string($xml_raw);
        curl_close($ch);       
        
        $item = $xml->DealDetail->DealDetail;       
        $DealId= $item->DealId;
        $DealTitle = $item->DealTitle;        
        $DealType = $item->DealType;
        $CouponCode  = $item->CouponCode;      
        $DeepLinkUrl = $item->DeepLinkUrl;
        $MerchantID = $item->MerchantID;
        $MerchantName = $item->MerchantName;
        $MerchantLogoURL = $item->MerchantLogoURL;
        $StartDate = $item->StartDate;
        $EndDate = $item->EndDate;
        $DealDescription = $item->DealDescription;
        $starttime = strtotime($StartDate);
        $endtime = strtotime($EndDate);  
        
       if($DealType !="" )
       {
       ?>
        
        <div class="modal fade in" id="DivViewVoucherCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" onclick="CloseModelPopUp();" class="close modal-close" data-dismiss="modal" aria-label="Close"></button>
                        <div class="discount-modal">
                            <img src="<?php echo $MerchantLogoURL;?>" id="ctlImgMerchant" width="120" height="60" alt="">
                            <h2 class="model-offertitle" id="H4modelOfferTitle"><?php echo $DealTitle;?></h2>
                            <h4 id="H4Desciption"><?php echo $DealDescription; ?></h4>
                            <div class="copycode-block">
                               <?php if($CouponCode!="") {?>
                                <div class="copycode-aria">
                                    <div class="copycode" id="divPopUpVoucherCode" data-clipboard-text="<?php echo $CouponCode; ?>">
                                        <?php echo $CouponCode; ?>
                                    </div>
                                    <a href="javascript:void(0);" class="btn copycode-btn" data-clipboard-text="<?php echo $CouponCode; ?>" id="ACopyVoucherCode">Copy Code</a>
                                </div>
                                 <?php } ?>
                                <a href="<?php echo $DeepLinkUrl; ?>" target="_blank" id="AClickToVisit" class="btn btn-offer">
                                   <?php  if($DealType =="Coupon") { 
                                  echo  "Get coupon &amp; visit site";
                                     }
                                    else {
                                         echo "Click here &amp; get discount";
                                     } ?>
                                    <span class="btn-arrow"></span></a>
                                <p class="offer-validity">
                                    <span class="added-date" id="SpnStateDate">Added: <?php echo date('d/m/Y',$starttime); ?></span> | <span class="end-date" id="SpnExpireText">Expires: <?php echo date('d/m/Y',$endtime); ?></span>
                                </p>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
<?php    
      echo '<script type="text/javascript">$("#DivViewVoucherCode").modal("show");</script>'; 
      } 
    }
    catch(Exception $e)
    {
        //echo 'No data is available.';
    }
}     

?>


