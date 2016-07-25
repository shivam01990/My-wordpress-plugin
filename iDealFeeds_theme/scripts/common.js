function ShowCode(OfferID,affiliateUrl)
{
	var CurrentPageURL= window.location.href;
	 window.open(CurrentPageURL + "?O=" + OfferID);
    if (OfferID > 0) {
        window.location.href = affiliateUrl;
    }    
}