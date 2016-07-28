<nav class="text-center">

<?php 
include('Config.php');
include('Helper.php');
if($total_records>0)
{
$page_no=DecodeTextForURL(get_query_var('pageno'));
if($page_no=='')
{
	$page_no=1;   
}

$limit=10; 
$total_pages = ceil($total_records / $limit);  
if($total_pages==0)
{
  	$total_pages=1;
}

$pagLink = "<ul class='pagination'>";  
if($page_no<=1)
{
	$pagLink.="<li class='disabled'><a href='javascript:void(0);'>Previous</a></li>";
}
else
{
	$pagLink.="<li ><a href='".$redirect_link.($page_no-1)."'>Previous</a></li>";
}
for ($i=1; $i<=$total_pages; $i++) {  
	if($i!=$page_no)
	{
    $pagLink .= "<li><a href='".$redirect_link.$i."'>".$i."</a></li>";  
    }
    else
    {
      $pagLink .= "<li class='active'><a href='".$redirect_link.$i."'>".$i."</a></li>";  	
    }
}  

if($page_no==$total_pages)
{
	$pagLink.="<li class='disabled'><a href='javascript:void(0);'>Next</a></li>";
}
else
{
	$pagLink.="<li ><a href='".$redirect_link.($page_no+1)."'>Next</a></li>";
}
echo $pagLink . "</ul>";  
}
?> 
</nav>