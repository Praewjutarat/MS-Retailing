<?php
include('Config/Con.php');
$id = intval($_REQUEST['id']); 

//แก้ตรงนี้ 
$sql = "delete from user where id = $id";
$objQuery = mysqli_query($conn,$sql);
echo json_encode(array('success'=>true));


mysql_close($conn,$ConnDelete);

?>