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

   var searchUrl = root+'/search/'+EncodeTextForURL(SearchText)+'/';
   window.location=searchUrl;
   return false;
}



function StopEventOthers(pE) {
    if (pE.cancelBubble != null)
        pE.cancelBubble = true;

    if (pE.stopPropagation)

        pE.stopPropagation();

    if (pE.preventDefault)

        pE.preventDefault();

    if (pE.returnValue != null)

        pE.returnValue = false;

    if (pE.cancel != null)

        pE.cancel = true;

    try {
        pE.returnValue = false;
    }
    catch (e) {
    }

}

function replaceAll(oldStr, findStr, repStr) {
    var srchNdx = 0;
    var newStr = "";
    while (oldStr.indexOf(findStr, srchNdx) != -1) {
        newStr += oldStr.substring(srchNdx, oldStr.indexOf(findStr, srchNdx));
        newStr += repStr;
        srchNdx = (oldStr.indexOf(findStr, srchNdx) + findStr.length);
    }
    newStr += oldStr.substring(srchNdx, oldStr.length);
    return newStr;
}

function EncodeTextForURL(StrValue) {
    StrValue=  replaceAll(StrValue,"&", "§");
    return encodeURI(StrValue);
}

function DecodeTextForURL(StrValue) {
  StrValue= replaceAll(StrValue, "§", "&");
  return decodeURI(StrValue);
}
