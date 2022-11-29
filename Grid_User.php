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
				url: 'Grid_User_Get.php',
				saveUrl: 'Grid_User_Save.php',
				updateUrl: 'Grid_User_Update.php',
				destroyUrl: 'Grid_User_Delete.php'

			});
	

		});
		
			function doSearch(){
    		$('#dg').edatagrid('load',{
        		id: $('#id').val(),
				username: $('#username').val(),
                password: $('#password').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                level: $('#level').val()

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
                
                <th field="username"  data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'username',
                            textField:'username',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="50">ชื่อผู้ใช้</th>

                <th field="password" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'password',
                            textField:'password',
                            method:'get',
                            required:true								
                        }
                    }" 
                    width="20">รหัสผ่าน</th>
                <th field="name"data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'name',
                            textField:'name',
                            method:'get',
                            required:true								
                        }
                    }"  width="20">ชื่อ-นามสกุล</th>
                <th field="email" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'email',
                            textField:'email',
                            method:'get',
                            required:true								
                        }
                    }" 
                     width="20">อีเมลล์</th>

                <th field="phone" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'phone',
                            textField:'phone',
                            method:'get',
                            required:true								
                        }
                    }" 
                    width="20">โทรศัพท์</th>

                <th field="level" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'level',
                            textField:'level',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">แผนก</th>
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
                <input id="username" 	style="line-height:26px;border:1px solid #ccc">
                <!-- <span>password :</span>
                <input id="password" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>name :</span>
                <input id="name" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>email :</span>
                <input id="email" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>phone :</span>
                <input id="phone" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>level :</span>
                <input id="level" 	style="line-height:26px;border:1px solid #ccc">  -->

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