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
?> 