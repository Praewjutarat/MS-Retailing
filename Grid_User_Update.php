<?php
include('Config/Con.php');
//แก้ตรงนี้ 
echo iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$id					= iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$username 			= iconv('UTF-8', 'TIS-620', $_REQUEST['username']);
$password 			= iconv('UTF-8', 'TIS-620', $_REQUEST['password']);
$name 				= iconv('UTF-8', 'TIS-620', $_REQUEST['name']);
$email 				= iconv('UTF-8', 'TIS-620', $_REQUEST['email']);
$phone 				= iconv('UTF-8', 'TIS-620', $_REQUEST['phone']);
$level 				= iconv('UTF-8', 'TIS-620', $_REQUEST['level']);


$stringsql  = "Update user set ";
$stringsql .= "username   	= '$username', ";
$stringsql .= "password 	= '$password', ";  
$stringsql .= "name 		= '$name', ";
$stringsql .= "email		= '$email', ";
$stringsql .= "phone		= '$phone', ";
$stringsql .= "level		= '$level' ";
$stringsql .= "where id 	= '$id' "; 

$objectSQL = mysqli_query($conn,$stringsql);

if ($objectSQL)
{
	echo json_encode(array(
		'id' 					=> $id,
		'username' 				=> $username,
    	'password' 				=> $password,
    	'name' 					=> $name,
    	'email' 				=> $email,
		'phone' 				=> $phone,
		'level' 				=> $level
	));
	
}else {
	
	echo json_encode(array('errormyg'=>'Some errors occured.'));
	
}

/*mysql_free_result($objectSQL);
mysql_close($ConnUpdate);*/

?>