 	<?
include 'session.php';
include 'connect.php';
include 'Profile.php';
?>

<SCRIPT language="JavaScript">
function timerefresh(t)
{

if(t==0)
{
window.location.reload();
}	
else
{
t--;
}	
window.setTimeout("timerefresh('"+t+"')",1000) 
}

timerefresh(5);
</script><?
se($ConnSeq); 	
                  ?> 
  <style type="text/css">
  th {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
  }
  #mytd {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
	height:70px;
	width:auto
	
}

	</style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
       
    <form name="form1" method="post" action="Order_confrim_number" enctype="multipart/form-data" >
       <p>
         <input id="Seq_Code" name="Seq_Code" type="hidden" value="<? echo iconv('TIS-620','UTF-8', $Seq_Code ) ?>">
         <input id="Seq_Current" name="Seq_Current" type="hidden" value="<? echo iconv('TIS-620','UTF-8', $Seq_Running ) ?>">
       </p>
      <table width="932"  border="0" align="center" bordercolor="#FFFFFF" >
    <tr>
      <th width="39" align="center" valign="middle"bgcolor="#999999"><div align="center">
        <h4>ID</h4>
      </div></th>
      <th width="132" align="center" valign="middle" bgcolor="#999999"><div align="center">
        <h4>ชื่ออุปกรณ์</h4>
      </div></th>
      <th width="138" align="center" valign="middle" bgcolor="#999999"><div align="center">
        <h4>จำนวนเบิก</h4>
      </div></th>
      <th width="83" align="center" valign="middle" bgcolor="#999999"><div align="center">
        <h4>รูป</h4>
      </div></th>
      <th width="166" align="center" valign="middle" bgcolor="#999999"><div align="center">
        <h4>หมายเหตุ</h4>
      </div></th>
      <th width="104" align="center" valign="middle" bgcolor="#999999"><div align="center">
        <h4>Email</h4>
      </div></th>
      <th align="center" valign="middle" bgcolor="#999999"><div align="center">
      <h4>ลบ</h4></th>
      <th align="center" valign="middle" bgcolor="#999999"><div align="center">
      <h4>ยืนยัน</h4></th>
      <th align="center" valign="middle" bgcolor="#999999"><div align="center">
      <h4>แก้ไข</h4></th>
    </tr>
    <?

$strSQL = "SELECT * FROM FMC_Requesttrans WHERE Email = '".$_SESSION["login_user"]."' ";
$objQuery = mssql_query($strSQL)  or die(mssql_error());

	?>
    <? $strSQL2 = "SELECT * FROM FMC_Stock WHERE ST_id = '".$objResult["ST_id"]."' ";
$objQuery2 = mssql_query($strSQL2)  or die(mssql_error());
	?>
    
<? while($objResult = mssql_fetch_array($objQuery,$objQuery2))
		
{
?>

    <tr align="center">
    <td align="center">
    <div id="mytd">
    <input name="O_status" type="hidden" id="O_status" value="<? echo iconv ('TIS-620','UTF-8',$row[8]);?>">
    <? 
echo iconv ('TIS-620','UTF-8',$objResult["Req_id"]);?>
    <td align="center" bgcolor="#FFFFFC"><div id="mytd">&nbsp;
        <?
echo iconv ('TIS-620','UTF-8',$objResult["Req_Status"]);?>
      </div></td>
      <td align="center" bgcolor="#FFFFFC"><div id="mytd">&nbsp;
        <?
echo iconv ('TIS-620','UTF-8',$objResult["Req_Start"]);?>
      </div></td>
      <td align="center" bgcolor="#FFFFFC"><div id="mytd"><img src="img/Stock/<? 
echo iconv ('TIS-620','UTF-8',$objResult["O_img"]);?>" width="50" height="50">&nbsp;</div></td>
      <td align="center" bgcolor="#FFFFFC"><div id="mytd">&nbsp;
        <? 
echo iconv ('TIS-620','UTF-8',$objResult["Req_Description"]);?>
      </div></td>
      <td align="center" bgcolor="#FFFFFC"><div id="mytd">&nbsp;
        <? 
echo iconv ('TIS-620','UTF-8',$objResult["Req_Remark"]);?>
      </div></td>
      <td width="60" align="center" bgcolor="#FFFFFC"><div id="mytd"><a href="Order_del.php? id=<?php echo iconv ('TIS-620','UTF-8',$objResult["O_id"]);?>submit=DEL&id_delete=1" onclick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"><img src="img/ST_img/Minus_Circle_Green.png" width="30" height="30" alt=""/></a></div></td>
      <td width="62" align="center" bgcolor="#FFFFFC">        <? 
echo iconv ('TIS-620','UTF-8',$objResult["Req_Start_Description"]);?><div id="mytd">&nbsp;
      <td width="62" align="center" bgcolor="#FFFFFC">        <? 
echo iconv ('TIS-620','UTF-8',$objResult["Req_Wait_Description"]);?><div id="mytd">&nbsp;</tr>
    <tr align="center">
      <td height="20" bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
      <td bgcolor="#FFFFFC">&nbsp;</td>
         
    <td width="44"></tr>
  
    <?
	}
	?>
  </table>
  <p>**ทำหน้านี้ให้รีเฟต เพื่อจะได้อัปเดท Id อยู่เสมอ </p>
  <p>**กดยืนยันการเบิกแล้ว ID จะไม่อัปเดท ต้องกดเสร็จสิ้นก่อนถึงจะอัปเดท ID</p>
  <p>&nbsp;</p>
    </form>
</body>
</html>