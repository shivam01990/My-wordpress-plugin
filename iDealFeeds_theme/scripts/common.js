$(document).ready(function () {
    var showChar = 150;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.moretext').each(function () {
        var content = $(this).html();
        content = content.replace(/<br>/g, "©");
        showChar = $(this).attr("textlenght");
        if (content.length > showChar) {
            var c = content.substr(0, showChar).replace(/©/g, "<br>");
            var h = content.substr(showChar, content.length - showChar).replace(/©/g, "<br>");
            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="more">' + moretext + '</a></span>';
            $(this).html(html);
        }
        $(this).show();
    });

    $(".more").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});


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
    StrValue=replaceAll(replaceAll(replaceAll(replaceAll(replaceAll( replaceAll(replaceAll(replaceAll(replaceAll(StrValue,"-", "~-")," ","-"),"/","♀"),"\"","~"),"'","`"),":","®"),"%","ᵅ"),"?","§"),"+","◦");
    return StrValue;
}

function DecodeTextForURL(StrValue) {
 StrValue=replaceAll(replaceAll(replaceAll(replaceAll(replaceAll( replaceAll(replaceAll(replaceAll(replaceAll(StrValue,"~-", "-"),"-"," "),"♀","/"),"~","\""),"`","'"),"®",":"),"ᵅ","%"),"§","?"),"◦","+");
  return StrValue;
}

var copyvchcodeeobj = null;

$(document).ready(function () {   
    if (copyvchcodeeobj == null) {
        if (document.getElementById("ACopyVoucherCode") != null) {
            copyvchcodeeobj = GetClipboardObj();
            copyvchcodeeobj.on("ready", function (readyEvent) {
                copyvchcodeeobj.on("aftercopy", function (event) {
                    document.getElementById("ACopyVoucherCode").innerHTML = "Copied";
                });
            });
        }
    }
});

function CloseModelPopUp() {
    $('#DivViewVoucherCode').modal('hide')
}

function GetClipboardObj() {
    var clipboardobj = new ZeroClipboard(document.getElementById("ACopyVoucherCode"), {
        moviePath: template_directory + "/scripts/ZeroClipboard.swf",  // URL to movie
        trustedOrigins: null, //null Page origins that the SWF should trust (single string or array of strings)
        hoverClass: "",   // The class used to hover over the object
        activeClass: "",  // The class used to set object active
        allowScriptAccess: "always", //sameDomain SWF outbound scripting policy
        useNoCache: true,   // Include a nocache query parameter on requests for the SWF
        forceHandCursor: true   //false Forcibly set the hand cursor ("pointer") for all glued elements
    });
    return clipboardobj;
}

