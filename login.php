<?php session_start();?>
<?php include('class_conn.php');?>
<?php $cls_conn=new class_conn;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>STORETECH LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="template_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="template_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="template_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	  <div class="container-login100">
	     
			
			
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(template_login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						STORETECH
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						
					</div>

					<div class="wrap-input100" >
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						
					</div>
					
					<br/>
					
	        <div class="container-login100-form-btn">
              <button class="login100-form-btn" name="submit"> Login </button>
	          <button class="login200-form-btn" name="register"> Store </button>
            </div>
          </form>
	      <?php
				if(isset($_POST['submit']))
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					
					$sql_admin=" select * from tb_admin";
					$sql_admin.=" where";
					$sql_admin.=" admin_username='$username'";
					$sql_admin.=" and";
					$sql_admin.=" admin_password='$password'";
					 
					$num_check=$cls_conn->select_numrows($sql_admin);
					if($num_check>=1)
					{
						echo $cls_conn->show_message('ยินดีต้อนรับผู้ดูแลระบบค่ะ');
						echo $cls_conn->goto_page(0,'backend/admin/index.php');
					}
					else
					{
					 
					
							$sql_store=" select * from tb_store";
							$sql_store.=" where";
							$sql_store.=" store_username='$username'";
							$sql_store.=" and";
							$sql_store.=" store_password='$password'";
							$sql_store.=" and";
							$sql_store.=" store_status='ใช้งาน'"; 
							 
							$num_store=$cls_conn->select_numrows($sql_store);
							if($num_store>=1)
							{
								$rs_store=$cls_conn->select_base($sql_store);
								while($row_store=mysqli_fetch_array($rs_store))
								{
									$store_id=$row_store['store_id'];
									
								}
								$_SESSION['store_id']=$store_id;
								echo $cls_conn->show_message('ยินดีต้อนรับร้านช่างค่ะ');
								echo $cls_conn->goto_page(0,'backend/store/profile.php');
							}
							else
							{
								echo $cls_conn->show_message('ไม่สามารถเข้าสู่ระบบได้ค่ะ');
							
							}
					
					}
				}
				if(isset($_POST['register']))
				{
					echo $cls_conn->goto_page(1,'register.php');
				}
				
				?>
        </div>
	  </div>
	</div>
	
<!--===============================================================================================-->
	<script src="template_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/bootstrap/js/popper.js"></script>
	<script src="template_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="template_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="template_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="template_login/js/main.js"></script>

</body>
</html>