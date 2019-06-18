<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลคะแนน</h2>
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
							
							$sqlu=" select * from tb_score";
							$sqlu.=" where";
							$sqlu.=" score_id='$id'";
							$resultu=$cls_conn->select_base($sqlu);
							while($rowu=mysqli_fetch_array($resultu))
							{
								$score_id=$rowu['score_id'];
								$store_id=$rowu['store_id'];
								$score_rating=$rowu['score_rating'];
								$score_detail=$rowu['score_detail'];
								$score_by=$rowu['score_by'];
								$store_status=$rowu['store_status'];
								
							}
						}
						
						?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                         <input type="hidden" name="score_id" value="<?=$score_id;?>" /> 
						  
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_id">ร้านช่าง <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
								<select id="store_id" name="store_id" value="<?=$store_id;?>" required="required" class="form-control col-md-7 col-xs-12"> 
								<?php
									$sqld=" select * from tb_store";
									$resultd=$cls_conn->select_base($sqld);
									while($rowd=mysqli_fetch_array($resultd))
									{
									?>
									<option value="<?=$rowd['store_id'];?>"><?=$rowd['store_name'];?></option>
									<?php
									}
								?>
								</select>
								
								</div>
                        </div>
						
						  
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="score_rating">จำนวนคะแนน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                
							<select  id="score_rating" name="score_rating" value="<?=$score_rating;?>" required="required" class="form-control col-md-7 col-xs-12">
							<option value="5">5 (มากที่สุด)</option>
                            <option value="4">4 (มาก)</option>
                            <option value="3">3 (ปานกลาง)</option>
                            <option value="2">2 (น้อย)</option>
                            <option value="1">1 (น้อยที่สุด)</option>
							</select>
								
								
								 </div>
                        </div> 
                            
                           
						   

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="score_detail">ความคิดเห็น <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="score_detail" name="score_detail" value="<?=$score_detail;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_tel">ชื่อผู้ให้คะแนน <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="score_by" name="score_by" value="<?=$score_by;?>"required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="score_status">สถานะ <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                
									<select  id="score_status" name="score_status" value="<?=$score_status;?>" required="required" class="form-control col-md-7 col-xs-12">
								<option value="ใช้งาน">ใช้งาน</option>
								<option value="ไม่ใช้งาน">ไม่ใช้งาน</option>
							</select>
								
								
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
							$score_id=$_POST['score_id'];
                            $store_id=$_POST['store_id'];
							$score_rating=$_POST['score_rating'];
                            $score_detail=$_POST['score_detail'];
                            $score_by=$_POST['score_by'];
                            $score_status=$_POST['score_status'];
                            $score_date=date('Y-m-d H:i:s');
                          
						  	$sql=" update tb_score";
							$sql.=" set";
							$sql.=" score_id='$score_id'";
							$sql.=" ,store_id='$store_id'";
							$sql.=" ,score_rating='$score_rating'";
							$sql.=" ,score_detail='$score_detail'";
							$sql.=" ,score_by='$score_by'";
							$sql.=" ,score_status='$score_status'";
							$sql.=" ,score_date='$score_date'";
							$sql.=" where";
							$sql.=" score_id='$score_id'";
                            
                           
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('แก้ไขข้อมูล "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(1,'show_score.php');
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