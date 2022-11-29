<?php
include('Config/Con.php');
//แก้ตรงนี้ 
echo iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$id					= iconv('UTF-8', 'TIS-620', intval($_REQUEST['id']));
$Name 			    = iconv('UTF-8', 'TIS-620', $_REQUEST['Name']);
$Phone	 		    = iconv('UTF-8', 'TIS-620', $_REQUEST['Phone']);
$Address 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Address']);
//$Create 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Create']);
//$Modify	 			= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify']);
//$Create_by	 		= iconv('UTF-8', 'TIS-620', $_REQUEST['Create_by']);
//$Modify_by	 		= iconv('UTF-8', 'TIS-620', $_REQUEST['Modify_by']);



$stringsql  = "Update customer set ";
$stringsql .= "Name   	    = '$Name', ";
$stringsql .= "Phone     	= '$Phone', ";  
$stringsql .= "Address 		= '$Address', ";
//$stringsql .= "Create		= '$Create', ";
//$stringsql .= "Modify		= '$Modify', ";
//$stringsql .= "Create_by	= '$Create_by' ";
//$stringsql .= "Modify_by	= '$Modify_by' ";
$stringsql .= "where id 	= '$id' "; 

$objectSQL = mysqli_query($conn,$stringsql);

if ($objectSQL)
{
	echo json_encode(array(
		'id' 				    => $id,
		'Name' 				    => $Name,
    	'Phone' 				=> $Phone,
    	'Address' 				=> $Address,
    	//'Create' 				=> $Create,
		//'Modify' 				=> $Modify,
		//'Create_by' 			=> $Create_by
        //'Modify_by' 			=> $Modify_by,	   
	));
	
}else {
	
	echo json_encode(array('errormyg'=>'Some errors occured.'));
	
}

/*mysql_free_result($objectSQL);
mysql_close($ConnUpdate);*/

?>