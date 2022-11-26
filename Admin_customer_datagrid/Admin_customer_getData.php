//getData.php
<?php
include"Admin_customer_dpcon.php"; 
$page = isset($_POST['page']) ? intval($_POST['page']) : 1; 
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10; 
  
$searchTerm = isset($_POST['term']) ? $conn->real_escape_string($_POST['term']) : ''; 
  
$offset = ($page-1)*$rows; 
  
$result = array(); 
 
$whereSQL = "username LIKE '$searchTerm%' OR name LIKE '$searchTerm%' OR email LIKE '$searchTerm%' OR phone LIKE '$searchTerm%' '$searchTerm%' OR date LIKE"; 
$result = $conn->query("SELECT COUNT(*) FROM user WHERE $whereSQL"); 
$row = $result->fetch_row(); 
$response["total"] = $row[0]; 
 
$result = $conn->query( "SELECT * FROM ลูกค้า WHERE $whereSQL ORDER BY id DESC LIMIT $offset,$rows"); 
  
$users = array(); 
while($row = $result->fetch_assoc()){ 
    array_push($users, $row); 
} 
$response["rows"] = $users; 
 
echo json_encode($response);
?>