//dbcon.php
<?php
$conn = new mysqli('localhost','root','','ma_retailing');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_error .') '. $conn->connect_error);
}
?>