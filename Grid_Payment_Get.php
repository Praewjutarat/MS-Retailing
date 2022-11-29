<?php
include('Config/Con.php');

$page  = isset($_POST['page'])  ? intval($_POST['page'])  : 1;
$rows  = isset($_POST['rows'])  ? intval($_POST['rows'])  : 10;
$sort  = isset($_POST['sort'])  ? strval($_POST['sort'])  : 'id';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';

$result = array();

//Total //แก้ตรงนี้ 
$sqlcount = mysqli_query($conn,"select count(*) from payment") or die ("Error Query [".$strSQL."]");
$row = mysqli_fetch_row($sqlcount);
$result["total"] = $row[0];
$total  = $row[0];
//////

//Array //แก้ตรงนี้ 
$sqlArray = mysqli_query($conn,"select * from payment order by id asc");
$dataArray = array();
while($resultArray = mysqli_fetch_array($sqlArray))
{
	$dataArray[] = $resultArray['id'];	
}
///////

//Page on datagrid
$countArray = count($dataArray);

//ASC
//$indexs = ($page-1) * $rows;
//DESC
$range  = ($page * $rows);
if($range > $countArray)
{
	$indexs = 0;
}else{
	$indexs = $countArray - $range;
}

$start  = $dataArray[$indexs];
//ASC
//$indexe = ($page * $rows)-1;
//if($indexe > $countArray)	
//{
//	$indexe = $countArray-1;
//}
//DESC
$indexe = ($countArray - 1)-(($page-1)*$rows);
$end    = $dataArray[$indexe];


/////////////////////////

@$Per_id 			= iconv('UTF-8','TIS-620',$_POST['id']);
@$Per_username 		= iconv('UTF-8','TIS-620',$_POST['username']);

//แก้ตรงนี้ 
$sqlstring 	= "select * from payment ";
// $sqlstring .= "where id like '%$Per_id%' ";
// $sqlstring .= "and username like '%$Per_username%' ";
// $sqlstring .= "and Per_Email like '%$Per_Email%' ";
// $sqlstring .= "and FMC_Permission.Per_Recid >= $start ";
// $sqlstring .= "and FMC_Permission.Per_Recid <= $end  ";
$sqlstring .= "Order by $sort $order ";
$sqlObject  = mysqli_query($conn,$sqlstring);

/*$row = mysqli_num_rows($sqlObject); 
$result["total"] = $row; */

$itemy =array(); 

while ($row = mysqli_fetch_array($sqlObject))
{ 
	foreach($row as $key=>$value)
	{ 
		//$row[$key]=iconv('TIS-620','UTF-8',$row[$key]); 

		@$row[$key]=iconv('UTF-8', 'ASCII//TRANSLIT', utf8_encode($row[$key]));
		//$row[$key];
	} 
	array_push($itemy, $row); 
} 

$result["rows"] =$itemy; 

echo json_encode($result); 

mysqli_free_result($sqlObject);
mysqli_close($conn)

 
?>

