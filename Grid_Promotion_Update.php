<?php
include('Config/Con.php');
//แก้ตรงนี้ 
echo iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$id						= iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$NamePromotion	 		= iconv('UTF-8', 'TIS-620', $_REQUEST['NamePromotion	']);
$Unitprice 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Unitprice']);
$PerchaseUnitprice 		= iconv('UTF-8', 'TIS-620', $_REQUEST['PerchaseUnitprice']);
$Status 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Status']);
$SaleUnitprice 			= iconv('UTF-8', 'TIS-620', $_REQUEST['SaleUnitprice']);
$Discount 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Discount']);
$Discount_amount 		= iconv('UTF-8', 'TIS-620', $_REQUEST['Discount_amount']);
$Create 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
$Modify 			 	= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
$Create_by 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
$Modify_by 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);



$stringsql  = "Update user set ";
$stringsql .= "NamePromotion	   		= '$NamePromotion	', ";
$stringsql .= "Unitprice 				= '$Unitprice', ";  
$stringsql .= "PerchaseUnitprice 		= '$PerchaseUnitprice', ";
$stringsql .= "Status					= '$Status', ";
$stringsql .= "SaleUnitprice			= '$SaleUnitprice', ";
$stringsql .= "Discount					= '$Discount' ";
$stringsql .= "Discount_amount			= '$Discount_amount' ";
$stringsql .= "Create		        	= '$Create' ";
$stringsql .= "Modify		        	= '$Modify' ";
$stringsql .= "Create_by		    	= '$Create_by' ";
$stringsql .= "Modify_by		    	= '$Modify_by' ";
$stringsql .= "where id 				= '$id' "; 

$objectSQL = mysqli_query($conn,$stringsql);

if ($objectSQL)
{
	echo json_encode(array(
		'id' 							=> $id,
		'NamePromotion	' 				=> $NamePromotion	,
    	'Unitprice' 					=> $Unitprice,
    	'PerchaseUnitprice' 			=> $PerchaseUnitprice,
    	'Status' 						=> $Status,
		'SaleUnitprice' 				=> $SaleUnitprice,
		'Discount' 						=> $Discount,
		'Discount_amount' 				=> $Discount_amount,
		'Create' 						=> $Create,
        'Modify' 						=> $Modify,
        'Create_by' 		    		=> $Create_by,
        'Modify_by' 					=> $Modify_by,

	));
	
}else {
	
	echo json_encode(array('errormyg'=>'Some errors occured.'));
	
}

/*mysql_free_result($objectSQL);
mysql_close($ConnUpdate);*/

?>