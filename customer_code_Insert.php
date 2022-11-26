<?php

//----------------------------------------
//รับค่าจากหน้า Form
$p_username = $_POST['username'];
$p_password = $_POST['name'];
$p_name = $_POST['email'];
$p_email = $_POST['tel'];
$p_phone = $_POST['date'];



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

$sql = "INSERT INTO ลูกค้า(username,name, email, phone, date )
VALUES ('$p_username','$p_name','$p_email','$p_phone','$p_date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: customer_frm.html");
} else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>