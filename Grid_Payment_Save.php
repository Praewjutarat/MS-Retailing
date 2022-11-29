<?php
include('Config/Con.php');

$Maxsql  	= "SELECT * FROM payment Order by id Desc";
$objectMax 	= mysqli_query($conn ,$Maxsql);

$Rows = mysqli_fetch_row($objectMax);

if($Rows[8] == Null)
{
	$id = 1;
}else{
	$id = $Rows[8]+1;
}

mysqli_free_result($objectMax);



@$id					= iconv('UTF-8', 'TIS-620', $_REQUEST['id']);
@$Picture      			= iconv('UTF-8', 'TIS-620', $_REQUEST['Pictureame']);
@$Sale_id      			= iconv('UTF-8', 'TIS-620', $_REQUEST['Sale_id']);
@$Payment_type      	= iconv('UTF-8', 'TIS-620', $_REQUEST['Payment_type']);
@$Price      			= iconv('UTF-8', 'TIS-620', $_REQUEST['Price']);
@$Date_Time      		= iconv('UTF-8', 'TIS-620', $_REQUEST['Date_Time']);
@$Create 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
@$Modify 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
@$Create_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
@$Modify_by 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);

$stringsql  = "insert into user(Picture, Sale_id, Payment_type, Price, Date_Time, Create, Modify, Create_by, Modify_by)";
$stringsql .= "values('$Picture', '$Sale_id', '$Payment_type', '$Price', '$Date_Time', '$Create', '$Modify', '$Create_by', '$Modify_by')";

$ObjectSave = mysqli_query($conn,$stringsql);

echo json_encode(array(
	'Picture' 			    => $Picture,
	'Sale_id' 				=> $Sale_id,
    'Sale_id' 				=> $email,
    'Price' 				=> $Price,
    'Date_Time' 			=> $Date_Time,
    'password' 				=> $password,
    'Create' 				=> $Create,
    'Modify' 				=> $Modify,
    'Create_by' 		    => $Create_by,
    'Modify_by' 			=> $Modify_by
));

mysqli_free_result($ObjectSave);
mysqli_close($conn);
?>