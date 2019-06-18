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
						Register STORETECH
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="store_name" placeholder="Enter store name">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="store_address" placeholder="Enter store address">
						<span class="focus-input100"></span>
					</div>
					
					
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Tel</span>
						<input class="input100" type="tel" pattern="[0-9]{10}" name="store_tel" placeholder="Enter store tel">
						<span class="focus-input100"></span>
					</div>
					
					
				 
					
					
				 
					
					
				 

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="store_username" placeholder="Enter store username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="store_password" placeholder="store password">
						<span class="focus-input100"></span>
					</div>
					
					
				 
					
					
					
					
					
	        <div class="container-login100-form-btn">
              <button class="login100-form-btn" name="submit"> Register </button>
	    
            </div>
          </form>
	     <?php
                        if(isset($_POST['submit']))
                        {
                            $store_name=$_POST['store_name'];
                            $store_address=$_POST['store_address'];
                            $store_tel=$_POST['store_tel']; 
                            $store_username=$_POST['store_username'];
                            $store_password=$_POST['store_password'];
                            $store_date=date('Y-m-d H:i:s');
                            
                            
							
						 
							
							
                            $sql=" insert into tb_store(store_name,store_address,store_tel,store_username,store_password,store_date,store_status)";
                            $sql.=" values ('$store_name','$store_address','$store_tel','$store_username','$store_password','$store_date','ใช้งาน')";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('สมัครสมาชิก "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(0,'login.php');
                            }
                            else
                            {
                                 echo $cls_conn->show_message('สมัครสมาชิก "ไม่สำเร็จ" ค่ะ');
                                 echo $sql;
                            }
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