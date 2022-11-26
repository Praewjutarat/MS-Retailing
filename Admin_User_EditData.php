<?php
include"Config/con.php"; 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.'
);
if(!empty($_REQUEST['username']) && !empty($_REQUEST['passward']) && !empty( $_REQUEST['name']) && !empty($_REQUEST['email']) && !empty($_REQUEST['phone'])){ 
    $username = $_REQUEST['username']; 
    $passward = $_REQUEST['passward']; 
    $name = $_REQUEST['name']; 
    $email = $_REQUEST['email']; 
    $phone = $_REQUEST['phone']
      
    if(!empty($_REQUEST['id'])){ 
        $id = intval($_REQUEST['id']); 
          
     
        $sql = "UPDATE user SET username='$username', passward='$passward', name='$name', email='$email', phone='$phone' WHERE id = $id"; 
        $update = $conn->query($sql); 
          
        if($update){ 
            $response['status'] = 1; 
            $response['msg'] = 'User data has been updated successfully!'; 
        } 
    } 
}else{ 
    $response['msg'] = 'Please fill all the mandatory fields.'; 
} 
echo json_encode($response); 
?>