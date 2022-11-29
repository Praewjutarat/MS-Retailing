<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <title>MA Retailing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

<body>
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="Profile.php" class="navbar-brand mx-4 mb-3">
               <center><img class="rounded-circle" src="img/logo.jpg" style="width: 80px; height: 80;"></center><br>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    <h3 class="text-primary">MA RETAILING</h3> 
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> <?php echo $_SESSION['name']?></h6>
                        <center><span>ผู้ดูแลระบบ</span></center>
                       
                        <span></span>
                    </div>
                </div>
              
                <div class="navbar-nav w-100">
                    <a href="PF_Admin.php" class="nav-link dropdown-toggle"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                    </div>
                        <a href="PF.php" class="nav-link dropdown-toggle"><i class="fas fa-user-circle"></i>โปรไฟล์</a>
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-shopping-cart me-2"></i>รายละเอียดสินค้า</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        </div>
					<div class="">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-th-large me-2"></i>ข้อมูลคลังสินค้า</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                        </div>
                       
					<div class="">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>ข้อมูลการขาย</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                       
                        </div>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-clipboard me-2"></i>ข้อมูลพนักงาน</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="user_frm_signup.html" class="dropdown-item">เพิ่มพนักงาน</a>
                        </div> 
                          
                        </div>
                        </div>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-address-book me-2"></i>ข้อมูลลูกค้า</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="customer_frm.html" class="dropdown-item">เพิ่มลูกค้า</a>
                          
                        </div>
				
					</div>
					<div class="">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-credit-card me-2"></i>รายละเอียดชำระเงิน</a>
                        <div class="dropdown-menu bg-transparent border-0">
                          
                        </div>
					</div>
					<div class="">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-bullhorn me-2"></i>โปรโมชั่น</a>
                        <div class="dropdown-menu bg-transparent border-0">
                           
                        </div>
                        <div class="">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-chart-line me-2"></i>รายงาน</a>
                        <div class="dropdown-menu bg-transparent border-0">
                          
                        </div>
					</div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
                      <!-- Navbar Start -->
                      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                   
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div>
                       
                            <span class="d-none d-lg-inline-flex"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="Logout.php">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['myusername']?></h6> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="Logout.php" class="dropdown-item">ออกจากระบบ</a>

                        </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

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
                width="50">username</th>

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
                    width="20">password</th>
                <th field="name"data-options="
                    editor:{
                        type:'combobox',
                        options:{
                            valueField:'name',
                            textField:'name',
                            method:'get',
                            required:true								
                        }
                    }"  width="20">name</th>
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
                     width="20">email</th>

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
                    width="20">phone</th>

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
                width="20">level</th>
			</tr>
		</thead>
	</table>
    

	<div id="toolbar" style="padding:3px">
        <table style="border:dotted thin #7FF8F2" border="1" width="100%" >
        <tr>
            <td align="left">
                <span>id :</span>
                <input id="id"  style="line-height:26px;width:50px;border:1px solid #ccc">
                <span>username :</span>
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
                style=" width:100px; height:50px;">Search</a>
            </td>
         </tr>
            <td align="center">
                <a href="#" class="easyui-linkbutton" iconCls="icon-add" 	onclick="javascript:$('#dg').edatagrid('addRow')"
                style=" width:100px; height:50px;">New</a>
                <a href="#" class="easyui-linkbutton" iconCls="icon-remove" onclick="javascript:$('#dg').edatagrid('destroyRow')"
                style=" width:100px; height:50px;">Delete</a>
                <a href="#" class="easyui-linkbutton" iconCls="icon-save"  	onclick="javascript:$('#dg').edatagrid('saveRow'),
                																				$('#dg').edatagrid('reload')"
                                                                                                style=" width:100px; height:50px;">Save</a>                                                                             
                <a href="#" class="easyui-linkbutton" iconCls="icon-undo"  	onclick="javascript:$('#dg').edatagrid('cancelRow')"
                style=" width:100px; height:50px;">Cancel</a>
               
            </td>
        </tr>
        </table>
    </div>    
    	
</body> 
</html>
           
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

       
    