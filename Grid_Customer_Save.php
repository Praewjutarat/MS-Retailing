<?php
include('Config/Con.php');

$Maxsql  	= "SELECT * FROM customer Order by id Desc";
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
@$Name	      			= iconv('UTF-8', 'TIS-620', $_REQUEST['Name']);
@$Phone      			= iconv('UTF-8', 'TIS-620', $_REQUEST['Phone']);
//@$Address      		    = iconv('UTF-8', 'TIS-620', $_REQUEST['Address']);

$stringsql  = "insert into customer(Name, Phone, ";
$stringsql  = "values('$Name', '$Phone', )";

$ObjectSave = mysqli_query($conn,$stringsql);

echo json_encode(array(
	'Name' 					=> $Name,
	'Phone' 				=> $Phone,
    
    
));

mysqli_free_result($ObjectSave);
mysqli_close($conn);
?>