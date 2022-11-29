<?php
include('Config/Con.php');

$Maxsql  	= "SELECT * FROM user Order by id Desc";
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
@$name      			= iconv('UTF-8', 'TIS-620', $_REQUEST['name']);
@$email      			= iconv('UTF-8', 'TIS-620', $_REQUEST['email']);
@$username      		= iconv('UTF-8', 'TIS-620', $_REQUEST['username']);
@$phone      			= iconv('UTF-8', 'TIS-620', $_REQUEST['phone']);
@$password      		= iconv('UTF-8', 'TIS-620', $_REQUEST['password']);
@$level      			= iconv('UTF-8', 'TIS-620', $_REQUEST['level']);


$stringsql  = "insert into user(name, email, username, phone, password, level)";
$stringsql .= "values('$name', '$email', '$username', '$phone', '$password', '$level')";

$ObjectSave = mysqli_query($conn,$stringsql);

echo json_encode(array(
	'name' 					=> $name,
	'username' 				=> $username,
    'email' 				=> $email,
    'phone' 				=> $phone,
    'password' 				=> $password,
    'level' 				=> $level,
));

mysqli_free_result($ObjectSave);
mysqli_close($conn);
?>