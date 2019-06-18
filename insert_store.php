<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>เพิ่มข้อมูลร้านช่าง</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_name">ชื่อร้านช่าง <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="store_name" name="store_name" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                             

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_address">ที่อยู่ <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="store_address" name="store_address" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>

 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_phone">โทรศัพท์บ้าน <span class="required">:</span> </label> (เช่น xxxxxxxxx)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="tel" pattern="[0-9]{9}" id="store_phone" name="store_phone" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_tel">โทรศัพท์มือถือ <span class="required">:</span> </label> (เช่น xxxxxxxxxx)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="tel" pattern="[0-9]{10}" id="store_tel" name="store_tel" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                           
						    
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_picture">รูป <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="store_picture" name="store_picture" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                           
						    
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_gps">ตำแหน่งร้าน <span class="required">:</span> </label> <a href="../../gps.pdf"><i class="fal fa-download"></i>วิธีการนำตำแหน่งพิกัดของร้านกรอกเข้าระบบ</a>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="store_gps" name="store_gps" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div> 
						
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="score_date">แผนที่ร้าน <span class="required">:</span> </label> <a href="../../map.pdf"><i class="fal fa-download"></i>วิธีการนำแผนที่ของร้านกรอกเข้าระบบ</a>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="score_date" name="score_date" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>    
						
						
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_username">ชื่อผู้ใช้งาน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="store_username" name="store_username" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>   
						
						
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_password">รหัสผ่าน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="store_password" name="store_password" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>  
						
						
					 
						
						
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_password">ยืนยันรหัสผ่าน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="store_cfpass" name="store_cfpass" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>  
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
                            $store_name=$_POST['store_name'];
                            $store_address=$_POST['store_address'];
							 $store_phone=$_POST['store_phone'];
                            $store_tel=$_POST['store_tel'];
                            //$store_picture=$_POST['store_picture'];
                            $store_gps=$_POST['store_gps'];
                          	$store_map=$_POST['store_map'];
                            $store_username=$_POST['store_username'];
                            $store_password=$_POST['store_password'];
                            $store_date=date('Y-m-d H:i:s');
                            $store_cfpass=$_POST['store_cfpass'];
                            
							
							 $store_picture="";
                                   if($_FILES["store_picture"]["name"] != ""){
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['store_picture']['name'],-4);
                                        $store_picture=$datetime.'_p1'.$file_name;
                                        move_uploaded_file($_FILES["store_picture"]["tmp_name"],"../../upload/".$store_picture); 
                                  }
							
							
                            $sql=" insert into tb_store(store_name,store_address,store_phone,store_tel,store_picture,store_gps,store_map,store_username,store_password,store_date,store_status)";
                            $sql.=" values ('$store_name','$store_address','$store_tel', '$store_phone','$store_picture','$store_gps','$store_map','$store_username','$store_password','$store_date','$store_status')";
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูล "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(1,'show_store.php');
                            }
                            else
                            {
                                 echo $cls_conn->show_message('บันทึกข้อมูล "ไม่สำเร็จ" ค่ะ');
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