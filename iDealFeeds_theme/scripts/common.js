function ShowCode(OfferID,affiliateUrl,CurrentPageURL)
{	
	 window.open(CurrentPageURL + "?O=" + OfferID);
    if (OfferID > 0) {
        window.location.href = affiliateUrl;
    }    
}