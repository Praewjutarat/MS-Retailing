<?php

//----------------------------------------
//รับค่าจากหน้า Form
$p_username = $_POST['username'];
$p_password = $_POST['password'];
$p_name = $_POST['name'];
$p_email = $_POST['email'];
$p_phone = $_POST['phone'];
$p_level = $_POST['level'];


echo $p_username;

//------------------------------------------


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ma_retailing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user(username, password, name, email, phone, level )
VALUES ('$p_username','$p_password','$p_name','$p_email','$p_phone','$p_level')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: user_frm_signup.html");
} else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>