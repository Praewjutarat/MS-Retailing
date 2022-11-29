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
				url: 'Grid_Product_Get.php',
				saveUrl: 'Grid_Product_Save.php',
				updateUrl: 'Grid_Product_Update.php',
				destroyUrl: 'Grid_Product_Delete.php'

			});
	

		});
		
			function doSearch(){
    		$('#dg').edatagrid('load',{
        		id: $('#id').val(),
				Picture: $('#Picture').val(),
                QRcode: $('#QRcode').val(),
                ProductName: $('#ProductName').val(),
                Code: $('#Code').val(),
                ShelfCode: $('#ShelfCode').val(),
                Purchaseunitprice: $('#Purchaseunitprice').val(),
                SaleUnitprice: $('#SaleUnitprice').val(),
                Saleprice: $('#SaleUnitprice').val(), 
                QTY: $('#QTY').val(),
                Color: $('#Color').val(),
                Size: $('#Size').val(),
                Model: $('#Model').val(),
                Onhand: $('#Onhand').val(),
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

                <th field="QRcode" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'QRcode',
                            textField:'QRcode',
                            method:'get',
                            required:true								
                        }
                    }" 
                    width="20">คิวอาร์โค๊ด</th>

                <th field="ProductName"data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'ProductName',
                            textField:'ProductName',
                            method:'get',
                            required:true								
                        }
                    }"  width="20">ชื่อสินค้า</th>

                <th field="Code" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Code',
                            textField:'Code',
                            method:'get',
                            required:true								
                        }
                    }" 
                     width="20">รหัสสินค้า</th>

                <th field="ShelfCode" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'ShelfCode',
                            textField:'ShelfCode',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ตำเเหน่งที่ตั้งสินค้า</th>

                <th field="Purchaseunitprice" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Purchaseunitprice',
                            textField:'Purchaseunitprice',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ราคาต้นทุน</th>

                <th field="SaleUnitprice" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'SaleUnitprice',
                            textField:'SaleUnitprice',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ราคาขายต่อชิ้น</th>

                <th field="Saleprice" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Saleprice',
                            textField:'Saleprice',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ราคาขายรวม</th>

                <th field="QTY" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'QTY',
                            textField:'QTY',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">จำนวน</th>

                <th field="Color" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Color',
                            textField:'Color',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">สี</th>

                <th field="Size" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Size',
                            textField:'Size',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ขนาด</th>

                <th field="Model" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Model',
                            textField:'Model',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">รุ่น</th>

                <th field="Onhand" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Onhand',
                            textField:'Onhand',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">คงเหลือ</th>


                <th field="Discount_amount" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Discount_amount',
                            textField:'Discount_amount',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ส่วนลดรวม</th>

                <th field="Payment_type" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Onhand',
                            textField:'PaymenOnhandt_type',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ช่องทางการชำระเงิน</th>

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
                width="20">เเก้่ไข</th>

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
                <input id="Pictute" style="line-height:26px;border:1px solid #ccc"> 
                <span>QRcode :</span>
                <input id="QRcode" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>ProductName :</span>
                <input id="ProductName" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Code :</span>
                <input id="Code" 	style="line-height:26px;border:1px solid #ccc">
                <span>ShelfCode :</span>
                <input id="ShelfCode" 	style="line-height:26px;border:1px solid #ccc">
                <span>Purchaseunitprice :</span>
                <input id="Purchaseunitprice" 	style="line-height:26px;border:1px solid #ccc">
                <span>SaleUnitprice :</span>
                <input id="SaleUnitprice" 	style="line-height:26px;border:1px solid #ccc">
                <span>Saleprice :</span>
                <input id="Saleprice" 	style="line-height:26px;border:1px solid #ccc">
                <span>QTY :</span>
                <input id="QTY" 	style="line-height:26px;border:1px solid #ccc">
                <span>Color :</span>
                <input id="Color" 	style="line-height:26px;border:1px solid #ccc">
                <span>Size :</span>
                <input id="Size" 	style="line-height:26px;border:1px solid #ccc">
                <span>Model :</span>
                <input id="Model" 	style="line-height:26px;border:1px solid #ccc">
                <span>Onhand :</span>
                <input id="Onhand" 	style="line-height:26px;border:1px solid #ccc">
                <span>Create :</span>
                <input id="Create" 	style="line-height:26px;border:1px solid #ccc">
                <span>Modify :</span>
                <input id="Modify" 	style="line-height:26px;border:1px solid #ccc">  
                <span>Create_by :</span>
                <input id="Create_by" 	style="line-height:26px;border:1px solid #ccc">
                <span>Modify_by :</span>
                <input id="Modify_by" 	style="line-height:26px;border:1px solid #ccc">-->
                

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