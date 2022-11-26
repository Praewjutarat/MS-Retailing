<?php
// include 'http://www.maretailing.lnw.mn/Config/Con.php';
$servername = "edu3.pathosting.com";
// $username = "maretailin_mdbd";
// $password = "6N1pXjvbRYg";
$port ='2222';
$username = "maretailin";
$password = "VTvSJ-s_9W";
$dbname = "maretailin_mdbd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// //    define('DB_SERVER', 'localhost:8090');
// //    define('DB_USERNAME', 'root');
// //    define('DB_PASSWORD', '');
// //    define('DB_DATABASE', 'ma_retailing');
// //    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// // if ($$db ->connect_error) {
// //  die("Connection failed: " .$db ->connect_error);
// // }
// //echo "TESTConnect";
?>