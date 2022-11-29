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
				url: 'Grid_Promotion_Get.php',
				saveUrl: 'Grid_Promotion_Save.php',
				updateUrl: 'Grid_Promotion_Update.php',
				destroyUrl: 'Grid_Promotion_Delete.php'

			});
	

		});
		
			function doSearch(){
    		$('#dg').edatagrid('load',{
        		id: $('#id').val(),
				NamePromotion: $('#NamePromotion').val(),
                Unitprice: $('#Unitprice').val(),
                PerchaseUnitprice: $('#PerchaseUnitprice').val(),
                Status: $('#Status').val(),
                SaleUnitprice: $('#SaleUnitprice').val(),
                Discount: $('#Discount').val(),
                Discount_amount: $('#Discount_amount').val(),
                Create: $('#Create').val(),
                Modify: $('#Modify').val(),
                Create_by: $('#Create_by').val(),
                Modify_by: $('#Modify_by').val()

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
                
                <th field="NamePromotion"  data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'NamePromotion',
                            textField:'NamePromotion',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="50">ชื่อโปรโมชั่น</th>

                <th field="Unitprice" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Unitprice',
                            textField:'Unitprice',
                            method:'get',
                            required:true								
                        }
                    }" 
                    width="20">ราคาสินค้า</th>

                <th field="PerchaseUnitprice"data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'PerchaseUnitprice',
                            textField:'PerchaseUnitprice',
                            method:'get',
                            required:true								
                        }
                    }"  width="20">ราคาต้นทุน</th>

                <th field="Status" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Status',
                            textField:'Status',
                            method:'get',
                            required:true								
                        }
                    }" 
                     width="20">สถานะ</th>

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
                    width="20">ราคาสินค้าต่อชิ้น</th>

                <th field="Discount" data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'Discount',
                            textField:'Discount',
                            method:'get',
                            required:true								
                        }
                    }" 
                width="20">ส่วนลด</th>

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

           <!--     <th field="Create" data-options="
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
                width="20">เเก้ไขโดย</th> -->
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
                 <!-- <span>NamePromotion :</span>
                <input id="NamePromotion" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Unitprice :</span>
                <input id="Unitprice" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>PerchaseUnitprice :</span>
                <input id="PerchaseUnitprice" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Status :</span>
                <input id="Status" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>SaleUnitprice :</span>
                <input id="SaleUnitprice" 	style="line-height:26px;border:1px solid #ccc">
                span>Discount :</span>
                <input id="Discount" 	style="line-height:26px;border:1px solid #ccc"> 
                <span>Discount_amount :</span>
                <input id="CreDiscount_amountate" 	style="line-height:26px;border:1px solid #ccc">
                <span>Create :</span>
                <input id="Create" 	style="line-height:26px;border:1px solid #ccc">
                <span>Modify :</span>
                <input id="Modify" 	style="line-height:26px;border:1px solid #ccc">
                <span>Create_by :</span>
                <input id="Create_by" 	style="line-height:26px;border:1px solid #ccc">
                <span>Modify_by :</span>
                <input id="Modify_by" 	style="line-height:26px;border:1px solid #ccc">  -->

                <a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="doSearch()"
                style=" width:100px; height:50px;">Search</a>
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