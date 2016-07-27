function ShowCode(OfferID,affiliateUrl,CurrentPageURL)
{	
	window.open(CurrentPageURL + "?O=" + OfferID);
    if (OfferID > 0) {
        window.location.href = affiliateUrl;
    }    
}

$(function () {
    $('#txtiDealFeedsSearch').bind('keydown', function (e) {
        //on keydown for all textboxes
        if (e.keyCode == 13) { //if this is enter key
            StopEventOthers(e);
            SearchText();
            return false;
        }

    });
});

function SearchText()
{
   var SearchText=$('#txtiDealFeedsSearch').val();

   if(SearchText.trim()=='')
   {
      return false;   	
   }

   var searchUrl = root+'/search/'+encodeURI(SearchText)+'/';
   window.location=searchUrl;
   return false;
}


