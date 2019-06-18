<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลผู้ดูแลระบบ</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
						<?php
						if(isset($_GET['id']))
						{
							$id=$_GET['id'];
							
							$sqlu=" select * from tb_admin";
							$sqlu.=" where";
							$sqlu.=" admin_id='$id'";
							$resultu=$cls_conn->select_base($sqlu);
							while($rowu=mysqli_fetch_array($resultu))
							{
								$admin_id=$rowu['admin_id'];
								$admin_fullname=$rowu['admin_fullname'];
								$admin_email=$rowu['admin_email'];
								$admin_tel=$rowu['admin_tel'];
								$admin_username=$rowu['admin_username'];
								$admin_password=$rowu['admin_password'];
							
							}
						}
						
						?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <input type="hidden" name="admin_id" value="<?=$admin_id;?>" />
						
						
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_fullname">ชื่อผู้ดูแลระบบ <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="admin_fullname" name="admin_fullname"  value="<?=$admin_fullname;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                             
                            
                           

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_email">อีเมล์ดูแลระบบ <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="admin_email" name="admin_email"  value="<?=$admin_email;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_tel">เบอร์โทรศัพท์ผู้ดูแลระบบ <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="tel" id="admin_tel" name="admin_tel"  value="<?=$admin_tel;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_username">ชื่อผู้ใช้งาน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="admin_username" name="admin_username" value="<?=$admin_username;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_password">รหัสผ่าน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="admin_password" name="admin_password" value="<?=$admin_password;?>"required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>    

                            
                            
                           
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
                                    <button type="reset" name="reset" class="btn btn-danger">ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['submit']))
                        {
							$admin_id=$_POST['admin_id'];
                            $admin_fullname=$_POST['admin_fullname'];
                            $admin_email=$_POST['admin_email'];
                            $admin_tel=$_POST['admin_tel'];
                            $admin_username=$_POST['admin_username'];
                            $admin_password=$_POST['admin_password'];
                          
                            $sql=" update tb_admin";
							$sql.=" set";
							$sql.=" admin_fullname='$admin_fullname'";
							$sql.=" ,admin_email='$admin_email'";
							$sql.=" ,admin_tel='$admin_tel'";
							$sql.=" ,admin_username='$admin_username'";
							$sql.=" ,admin_password='$admin_password'";
							$sql.=" where";
							$sql.=" admin_id='$admin_id'";
                           
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('แก้ไขข้อมูล "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(1,'show_admin.php');
                            }
                            else
                            {
                                 echo $cls_conn->show_message('แก้ไขข้อมูล "ไม่สำเร็จ" ค่ะ');
                                 echo $sql;
                            }
                        }
                        
                        ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>