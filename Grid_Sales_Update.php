<?php
include('Config/Con.php');
//แก้ตรงนี้ 
echo iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$id					= iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$Picture 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Picture']);
$QRcode 			= iconv('UTF-8', 'TIS-620', $_REQUEST['QRcode']);
$ProductName 		= iconv('UTF-8', 'TIS-620', $_REQUEST['ProductName']);
$Discount 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Discount']);
$Promotion_id 		= iconv('UTF-8', 'TIS-620', $_REQUEST['Promotion_id']);
$Code 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Code']);
$ShelfCode 			= iconv('UTF-8', 'TIS-620', $_REQUEST['ShelfCode']);
$Purchaseunitprice 	= iconv('UTF-8', 'TIS-620', $_REQUEST['Purchaseunitprice']);
$SaleUnitprice 		= iconv('UTF-8', 'TIS-620', $_REQUEST['SaleUnitprice']);
$QTY 				= iconv('UTF-8', 'TIS-620', $_REQUEST['QTY']);
$Color 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Color']);
$Size 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Size']);
$Model 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Model']);
$Discount_amount    = iconv('UTF-8', 'TIS-620', $_REQUEST['Discount_amount']);
$Payment_type 	    = iconv('UTF-8', 'TIS-620', $_REQUEST['Payment_type']);
$Status 		    = iconv('UTF-8', 'TIS-620', $_REQUEST['Status']);
$Create 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
$Modify 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
$Create_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
$Modify_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);


$stringsql  = "Update sales set ";
$stringsql .= "Picture   	        = '$Picture', ";
$stringsql .= "QRcode 	            = '$QRcode', ";  
$stringsql .= "ProductName 	        = '$ProductName', ";
$stringsql .= "Discount             = '$Discount', ";
$stringsql .= "Promotion_id	        = '$Promotion_id', ";
$stringsql .= "Code		            = '$Code' ";
$stringsql .= "ShelfCode	        = '$ShelfCode' ";
$stringsql .= "Purchaseunitprice	= '$Purchaseunitprice' ";
$stringsql .= "SaleUnitprice		= '$SaleUnitprice' ";
$stringsql .= "QTY		            = '$QTY' ";
$stringsql .= "Color		        = '$Color' ";
$stringsql .= "Size		            = '$Size' ";
$stringsql .= "Model		        = '$Model' ";
$stringsql .= "Discount_amount		= '$Discount_amount' ";
$stringsql .= "Payment_type		    = '$Payment_type' ";
$stringsql .= "Status		        = '$Status' ";
$stringsql .= "Create		        = '$Create' ";
$stringsql .= "Modify		        = '$Modify' ";
$stringsql .= "Create_by		    = '$Create_by' ";
$stringsql .= "Modify_by		    = '$Modify_by' ";
$stringsql .= "where id 	        = '$id' "; 

$objectSQL = mysqli_query($conn,$stringsql);

if ($objectSQL)
{
	echo json_encode(array(
		'id' 			        => $id,
		'Picture' 				=> $Picture,
    	'QRcode' 				=> $QRcode,
    	'ProductName' 			=> $ProductName,
    	'Discount' 				=> $Discount,
		'Promotion_id' 			=> $Promotion_id,
		'Code' 			        => $Code,
        'ShelfCode' 			=> $ShelfCode,
        'Purchaseunitprice' 	=> $Purchaseunitprice,
        'SaleUnitprice' 		=> $SaleUnitprice,
        'QTY' 				    => $QTY,
        'Color' 				=> $Color,
        'Size' 				    => $Size,
        'Model' 				=> $Model,
        'Discount_amount' 		=> $Discount_amountvel,
        'Payment_type' 			=> $Payment_type,
        'Status' 				=> $Status,
        'Create' 				=> $Create,
        'Modify' 				=> $Modify,
        'Create_by' 		    => $Create_by,
        'Modify_by' 			=> $Modify_by
	));
	
}else {
	
	echo json_encode(array('errormyg'=>'Some errors occured.'));
	
}

/*mysql_free_result($objectSQL);
mysql_close($ConnUpdate);*/

?>