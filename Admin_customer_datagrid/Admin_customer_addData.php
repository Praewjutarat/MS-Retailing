//addData.php
<?php
include"Admin_customer_dpcon.php"; 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.'
); 
if(!empty($_REQUEST['ชื่อผู้ใช้']) && !empty($_REQUEST['ชื่อ-สกุล']) !empty( $_REQUEST['อีเมลล์']) && !empty( $_REQUEST['โทรศัพท์']) && !empty($_REQUEST['วันที่สร้าง'])){ 
    $username = $_REQUEST['ชื่อผู้ใช้']; 
    $passward = $_REQUEST['ชื่อ-สกุล']; 
    $name = $_REQUEST['อีเมลล์']; 
    $email = $_REQUEST['โทรศัพท์']; 
    $phone = $_REQUEST['วันที่สร้าง'];
  
    $sql = "INSERT INTO user(username,name,email,phone,date) VALUES ('$username','$name','$email','$phone','$date')"; 
    $insert = $conn->query($sql); 
  
 if($insert){ 
        $response['status'] = 1; 
        $response['msg'] = 'User data has been added successfully!'; 
    } 
}else{ 
    $response['msg'] = 'Please fill all the mandatory fields.'; 
}
echo json_encode($response); 
?>