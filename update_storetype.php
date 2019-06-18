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
							
							$sqlu=" select * from tb_storetype";
							$sqlu.=" where";
							$sqlu.=" storetype_id='$id'";
							$resultu=$cls_conn->select_base($sqlu);
							while($rowu=mysqli_fetch_array($resultu))
							{
								$storetype_id=$rowu['storetype_id'];
								$store_id=$rowu['store_id'];
								$typedetail_id=$rowu['typedetail_id'];
											
							}
						}
						?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <input type="hidden" name="storetype_id" value="<?=$storetype_id;?>" />   
						  
						 
						
						
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="store_id">ร้านช่าง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
								<select id="store_id" name="store_id" value="<?=$store_id;?>"required="required" class="form-control col-md-7 col-xs-12"> 
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typedetail_id">รายละเอียดการซ่อม<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
								<select id="typedetail_id" name="typedetail_id" value="<?=$typedetail_id;?>" required="required" class="form-control col-md-7 col-xs-12"> 
								<?php
									$sqld=" select * from tb_typedetail";
									$resultd=$cls_conn->select_base($sqld);
									while($rowd=mysqli_fetch_array($resultd))
									{
									?>
									<option value="<?=$rowd['typedetail_id'];?>"><?=$rowd['typedetail_name'];?></option>
									<?php
									}
								?>
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
                            $storetype_id=$_POST['storetype_id'];
							$store_id=$_POST['store_id'];
							$typedetail_id=$_POST['typedetail_id'];
                            
                            $sql=" update tb_storetype";
							$sql.=" set";
							$sql.=" storetype_id='$storetype_id'";
							$sql.=" ,store_id='$store_id'";
							$sql.=" ,typedetail_id='$typedetail_id'";
							$sql.=" where";
							$sql.=" storetype_id='$storetype_id'";
                           
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('แก้ไขข้อมูล "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(1,'show_storetype.php');
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