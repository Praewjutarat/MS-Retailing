<?php
include('Config/Con.php');
//แก้ตรงนี้ 
echo iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$id					= iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$Picture 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Picture']);
$Sale_id 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Sale_id']);
$Payment_type 		= iconv('UTF-8', 'TIS-620', $_REQUEST['Payment_type']);
$Price 				= iconv('UTF-8', 'TIS-620', $_REQUEST['Price']);
$Date_Time 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Date_Time']);
$Create 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
$Modify 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
$Create_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
$Modify_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);



$stringsql  = "Update user set ";
$stringsql .= "Picture   	    = '$Picture', ";
$stringsql .= "Sale_id 	        = '$Sale_id', ";  
$stringsql .= "Payment_type     = '$Payment_type', ";
$stringsql .= "Price		    = '$Price', ";
$stringsql .= "Date_Time	    = '$Date_Time', ";
$stringsql .= "Create	        = '$Create' ";
$stringsql .= "Modify		    = '$Modify' ";
$stringsql .= "Create_by        = '$Create_by' ";
$stringsql .= "Modify_by		= '$Modify_by' ";
$stringsql .= "where id 	    = '$id' "; 

$objectSQL = mysqli_query($conn,$stringsql);

if ($objectSQL)
{
	echo json_encode(array(
		'id' 					=> $id,
		'Picture' 				=> $Picture,
    	'Sale_id' 				=> $Sale_id,
    	'Payment_type' 			=> $Payment_type,
    	'Price' 		        => $Price,
        'Date_Time' 		    => $Date_Time,
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