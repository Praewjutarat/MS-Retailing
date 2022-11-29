<?php
include('Config/Con.php');
?>
 <meta charset="utf-8">
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>FELTECH INTRANET</title>
    <link rel="stylesheet" type="text/css" href="css1/easyui.css">
	<link rel="stylesheet" type="text/css" href="css1/icon.css">
	<link rel="stylesheet" type="text/css" href="css1/demo.css">
	<script type="text/javascript" src="Script/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="Script/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="Script/jquery.edatagrid.js"></script>
 
	<script type="text/javascript">
	
		$(function(){
		
			$("#dg").edatagrid({
				url: 'Grid_Payment_Get.php',
				saveUrl: 'Grid_Payment_Save.php',
				updateUrl: 'Grid_Payment_Update.php',
				destroyUrl: 'Grid_Payment_Delete.php'

			});
	

		});
		
			function doSearch(){
    		$('#dg').edatagrid('load',{
        		id: $('#id').val(),
				Picture: $('#Picture').val(),
                Sale_id: $('#Payment_type').val(),
                Payment_type: $('#Payment_type').val(),
                Price: $('#emaPriceil').val(),
                Date_Time: $('#Date_Time').val(),
                Create: $('#Create').val(),
                Modify: $('#Modify').val(),
                Create_by: $('#Create_by').val(),
                Modify_by: $('#Modify_by').val(),

    		});
		}
		
	</script>
</head>
<body>
<!--ช่องที่แสดงข้อมูล -->
<table id="dg" title="TEST" style="width:620px;height:250px" class="easyui-datagrid"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="id" width="20">id</th>
                
                <th field="Picture"  data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Picture',
                            textField:'Picture',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="50">รูปภาพ</th>

                <th field="Sale_id" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Sale_id',
                            textField:'Sale_id',
                            method:'get',
                            required:true								
                        }
                    }" 
                    width="20">รหัสสินค้า</th>

                <th field="Payment_type"data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Payment_type',
                            textField:'naPayment_typeme',
                            method:'get',
                            required:true								
                        }
                    }"  width="20">ช่องทางการชำระเงิน</th>

                <th field="Price" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Price',
                            textField:'Price',
                            method:'get',
                            required:true								
                        }
                    }" 
                     width="20">ราคา</th>

                <th field="Date_Time" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Date_Time',
                            textField:'Date_Time',
                            method:'get',
                            required:true								
                        }
                    }" 
                    width="20">เวลาที่รับชำระ</th>

                    <th field="Create" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Create',
                            textField:'Create',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">สร้าง</th>

                <th field="Modify" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Modify',
                            textField:'Modify',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">เเก้ไข</th>

                <th field="Create_by" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Create_by',
                            textField:'Create_by',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">สร้างโดย</th>

                <th field="Modify_by" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Modify_by',
                            textField:'Modify_by',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">เเก้ไขโดย</th>
			</tr>
		</thead>
	</table>
    

	<div id="toolbar" style="padding:3px">
        <table style="border:dotted thin #7FF8F2" border="1" width="100%" >
        <tr>
            <td align="left">
                <span>id :</span>
                <input id="id"  style="line-height:26px;width:50px;border:1px solid #ccc">
                <span>ชื่อผู้ใช้ :</span>
                <input id="Username" 	style="line-height:26px;border:1px solid #ccc">
                <!-- <span>Picture :</span>
                <input id="Picture" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Sale_id :</span>
                <input id="Sale_id" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Payment_type :</span>
                <input id="Payment_type" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Price :</span>
                <input id="Price" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Date_Time :</span>
                <input id="Date_Time" 	style="line-height:26px;border:1px solid #ccc"> 
                 <span>Create :</span>
                <input id="Create" 	style="line-height:26px;border:1px solid #ccc">
                <span>Modify :</span>
                <input id="Modify" 	style="line-height:26px;border:1px solid #ccc">  
                <span>Create_by :</span>
                <input id="Create_by" 	style="line-height:26px;border:1px solid #ccc">
                <span>Modify_by :</span>
                <input id="Modify_by" 	style="line-height:26px;border:1px solid #ccc">  -->

                <a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="doSearch()"
                style=" width:100px; height:50px;">ค้นหา</a>
            </td>
         </tr>
            <td align="center">
                <a href="#" class="easyui-linkbutton" iconCls="icon-add" 	onclick="javascript:$('#dg').edatagrid('addRow')"
                style=" width:100px; height:50px;">เพิ่ม</a>
                <a href="#" class="easyui-linkbutton" iconCls="icon-remove" onclick="javascript:$('#dg').edatagrid('destroyRow')"
                style=" width:100px; height:50px;">ลบ</a>
                <a href="#" class="easyui-linkbutton" iconCls="icon-save"  	onclick="javascript:$('#dg').edatagrid('saveRow'),
                																				$('#dg').edatagrid('reload')"
                                                                                                style=" width:100px; height:50px;">บันทึก</a>                                                                             
                <a href="#" class="easyui-linkbutton" iconCls="icon-undo"  	onclick="javascript:$('#dg').edatagrid('cancelRow')"
                style=" width:100px; height:50px;">ยกเลิก</a>
               
            </td>
        </tr>
        </table>
    </div>    
    	
</body> 
</html>