<?php
include('Config/Con.php');

$Maxsql  	= "SELECT * FROM product Order by id Desc";
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
@$Code 				    = iconv('UTF-8', 'TIS-620', $_REQUEST['Code']);
@$ShelfCode 			= iconv('UTF-8', 'TIS-620', $_REQUEST['ShelfCode']);
@$Purchaseunitprice 	= iconv('UTF-8', 'TIS-620', $_REQUEST['Purchaseunitprice']);
@$SaleUnitprice 		= iconv('UTF-8', 'TIS-620', $_REQUEST['SaleUnitprice']);
@$Saleprice 		    = iconv('UTF-8', 'TIS-620', $_REQUEST['Saleprice']);
@$QTY 				    = iconv('UTF-8', 'TIS-620', $_REQUEST['QTY']);
@$Color 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Color']);
@$Size 				    = iconv('UTF-8', 'TIS-620', $_REQUEST['Size']);
@$Model 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Model']);
@$Onhand 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Onhand']);
@$Create 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
@$Modify 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
@$Create_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
@$Modify_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);



$stringsql  = "insert into sales(Picture, QRcode, ProductName, Code, ShelfCode, Purchaseunitprice, SaleUnitprice, Saleprice, QTY, Color, Size, Model, Onhand, Create, Modify, Create_by, Modify_by)";
$stringsql  = "values('$Picture', '$QRcode', '$ProductName', '$Code', '$ShelfCode', '$Purchaseunitprice', '$SaleUnitprice', '$Saleprice', '$QTY', '$Color', '$Size', '$Model', '$Onhand', '$Create', '$Modify', '$Create_by', '$Modify_by')";

$ObjectSave = mysqli_query($conn,$stringsql);

echo json_encode(array(
	
    'Picture' 				=> $Picture,
    'QRcode' 				=> $QRcode,
    'ProductName' 			=> $ProductName,
    'Code' 			        => $Code,
    'ShelfCode' 			=> $ShelfCode,
    'Purchaseunitprice' 	=> $Purchaseunitprice,
    'SaleUnitprice' 		=> $SaleUnitprice,
    'Saleprice' 		    => $Saleprice,
    'QTY' 				    => $QTY,
    'Color' 				=> $Color,
    'Size' 				    => $Size,
    'Model' 				=> $Model,
    'Onhand' 		        => $Onhand,
    'Create' 				=> $Create,
    'Modify' 				=> $Modify,
    'Create_by' 		    => $Create_by,
    'Modify_by' 			=> $Modify_by,

));


mysqli_free_result($ObjectSave);
mysqli_close($conn);
?>