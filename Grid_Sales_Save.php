<?php
include('Config/Con.php');

$Maxsql  	= "SELECT * FROM sales Order by id Desc";
$objectMax 	= mysqli_query($conn ,$Maxsql);

$Rows = mysqli_fetch_row($objectMax);

if($Rows[8] == Null)
{
	$id = 1;
}else{
	$id = $Rows[8]+1;
}

mysqli_free_result($objectMax);

@$Picture 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Picture']);
@$QRcode 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['QRcode']);
@$ProductName 		    = iconv('UTF-8', 'TIS-620', $_REQUEST['ProductName']);
@$Discount 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Discount']);
@$Promotion_id 		    = iconv('UTF-8', 'TIS-620', $_REQUEST['Promotion_id']);
@$Code 				    = iconv('UTF-8', 'TIS-620', $_REQUEST['Code']);
@$ShelfCode 			= iconv('UTF-8', 'TIS-620', $_REQUEST['ShelfCode']);
@$Purchaseunitprice 	= iconv('UTF-8', 'TIS-620', $_REQUEST['Purchaseunitprice']);
@$SaleUnitprice 		= iconv('UTF-8', 'TIS-620', $_REQUEST['SaleUnitprice']);
@$QTY 				    = iconv('UTF-8', 'TIS-620', $_REQUEST['QTY']);
@$Color 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Color']);
@$Size 				    = iconv('UTF-8', 'TIS-620', $_REQUEST['Size']);
@$Model 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Model']);
@$Discount_amount       = iconv('UTF-8', 'TIS-620', $_REQUEST['Discount_amount']);
@$Payment_type 	        = iconv('UTF-8', 'TIS-620', $_REQUEST['Payment_type']);
@$Status 		        = iconv('UTF-8', 'TIS-620', $_REQUEST['Status']);
@$Create 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
@$Modify 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
@$Create_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
@$Modify_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);



$stringsql  = "insert into sales(Picture, QRcode, ProductName, Discount, Promotion_id, Code, ShelfCode, Purchaseunitprice, SaleUnitprice, QTY, Color, Size, Model, Discount_amount, Payment_type, Status, )";
$stringsql .= "values($Picture, $QRcode, $ProductName, $Discount, $Promotion_id, $Code, $ShelfCode, $Purchaseunitprice, $SaleUnitprice, $QTY, $Color, $Size, $Model, $Discount_amount, $Payment_type, $Status, $Create, $Modify, $Create_by, $Modify_by)";

$ObjectSave = mysqli_query($conn,$stringsql);

echo json_encode(array(
	
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
    'Modify_by' 			=> $Modify_by,

));


mysqli_free_result($ObjectSave);
mysqli_close($conn);
?>