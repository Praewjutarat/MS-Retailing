<?php
include('Config/Con.php');

$Maxsql  	= "SELECT * FROM promotion Order by id Desc";
$objectMax 	= mysqli_query($conn ,$Maxsql);

$Rows = mysqli_fetch_row($objectMax);

if($Rows[8] == Null)
{
	$id = 1;
}else{
	$id = $Rows[8]+1;
}

mysqli_free_result($objectMax);

$currentDate = new date();
$currentDate->format('dd/mm/yyy H:i:s');



mysqli_free_result($objectMax);



// @$id					= "";
// @$NamePromotion	 		= "TEST";
// @$Unitprice 			= "sdsd";
// @$PerchaseUnitprice 	= 332;
// @$Status 				= "sds";
// @$SaleUnitprice 		= 555;
// @$Discount 				= 555;
// @$Discount_amount 		= 666;


@$id					= iconv('UTF-8', 'TIS-620', $_REQUEST['id']);
@$NamePromotion	 		= iconv('UTF-8', 'TIS-620', $_REQUEST['NamePromotion']);
@$Unitprice 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Unitprice']);
@$PerchaseUnitprice 	= iconv('UTF-8', 'TIS-620', $_REQUEST['PerchaseUnitprice']);
@$Status 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Status']);
@$SaleUnitprice 		= iconv('UTF-8', 'TIS-620', $_REQUEST['SaleUnitprice']);
@$Discount 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Discount']);
@$Discount_amount 		= iconv('UTF-8', 'TIS-620', $_REQUEST['Discount_amount']);
//@$Create 			    = $currentDate
//@$Modify 			 	= $currentDate
@$Create_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
@$Modify_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);

//@$Create 			    = $currentDate
//@$Modify 			 	= $currentDate




$stringsql  = "insert into promotion (NamePromotion, Unitprice, PerchaseUnitprice, Status, SaleUnitprice, Discount, Discount_amount, Create, Modify, Create_by, Modify_by)";
$stringsql .= "values('$NamePromotion', '$Unitprice', '$PerchaseUnitprice', '$Status', '$SaleUnitprice', '$Discount', '$Discount_amount', '$Create', '$Modify', '$Create_by', '$Modify_by')";

$ObjectSave = mysqli_query($conn,$stringsql);

echo json_encode(array(
		'NamePromotion' 				=> $NamePromotion,
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

mysqli_free_result($ObjectSave);
mysqli_close($conn);
?>