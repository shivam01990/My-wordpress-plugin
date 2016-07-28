<?php
if (!function_exists('GetDescription')) {
	function GetDescription($DealDescription, $max_length) {
	    if (strlen($DealDescription) > $max_length)
					{
					    $offset = ($max_length - 3) - strlen($DealDescription);
					    $DealDescription = substr($DealDescription, 0, strrpos($DealDescription, ' ', $offset)) . '...';
					    
					}
	 return $DealDescription;
	}
}


if (!function_exists('EncodeTextForURL')) {
	function EncodeTextForURL($StrValue) {
		$StrValue=str_replace("&", "§" ,$StrValue);
		//$StrValue=str_replace("&", "-",$StrValue);
        //$StrValue =str_replace("-", "~-",$StrValue);
		//$StrValue=str_replace(" ", "+",$StrValue);		
		//$StrValue=str_replace("\"", "~",$StrValue);
		//$StrValue=str_replace("'", "†",$StrValue);
		//$StrValue=str_replace("/", "^",$StrValue);
		//$StrValue=str_replace(":", "®",$StrValue);
		//$StrValue=str_replace("%", "‰",$StrValue);
		//$StrValue=str_replace("?", "§",$StrValue);
		$StrValue =urlencode($StrValue);
	 return $StrValue;
	}
}


if (!function_exists('DecodeTextForURL')) {
	function DecodeTextForURL($StrValue) {
		$StrValue =urldecode($StrValue);
        $StrValue=str_replace("§", "&",$StrValue);
        //$StrValue=str_replace("~-", "^",$StrValue);
        //$StrValue=str_replace("+", " ",$StrValue);
        //$StrValue=str_replace("-", "&",$StrValue);
        //$StrValue=str_replace("^", "-",$StrValue);
        //$StrValue=str_replace("~", "\"",$StrValue);
        //$StrValue=str_replace("`", "'",$StrValue);
        //$StrValue=str_replace("®", ":",$StrValue);
        //$StrValue=str_replace("†", "'",$StrValue);
        //$StrValue=str_replace("^", "/",$StrValue);
        //$StrValue=str_replace("‰", "%",$StrValue);
        //$StrValue=str_replace("§", "?",$StrValue);
        return $StrValue;
    }
	 return $StrValue;
	}



?> 