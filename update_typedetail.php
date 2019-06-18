<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลประเภทย่อย</h2>
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
							
							$sqlu=" select * from tb_typedetail";
							$sqlu.=" where";
							$sqlu.=" typedetail_id='$id'";
							$resultu=$cls_conn->select_base($sqlu);
							while($rowu=mysqli_fetch_array($resultu))
							{
								$typedetail_id=$rowu['typedetail_id'];
								$type_id=$rowu['type_id'];
								$typedetail_name=$rowu['typedetail_name'];
								$typedetail_picture=$rowu['typedetail_picture'];			
							}
						}
						?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="typedetail_id" value="<?=$typedetail_id;?>" />  
						  
						  
						
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type_id">ประเภท<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               
								<select id="type_id" name="type_id"value="<?=$type_id;?>" required="required" class="form-control col-md-7 col-xs-12"> 
								<?php
									$sqld=" select * from tb_type";
									$resultd=$cls_conn->select_base($sqld);
									while($rowd=mysqli_fetch_array($resultd))
									{
									?>
									<option value="<?=$rowd['type_id'];?>"><?=$rowd['type_name'];?></option>
									<?php
									}
								?>
								</select>
								
								</div>
                        </div>
						
						
						
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typedetail_name">ชื่อประเภทย่อย <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="typedetail_name" name="typedetail_name" value="<?=$typedetail_name;?>"required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
						
						  
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typedetail_picture">รูปประเภทย่อย <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="typedetail_picture" name="typedetail_picture" value="<?=$typedetail_picture;?>required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                            $typedetail_id=$_POST['typedetail_id'];
							$type_id=$_POST['type_id'];
							$typedetail_name=$_POST['typedetail_name'];
							//$typedetail_picture=$_POST['typedetail_picture'];
                           
                           $typedetail_picture="";
                                   if($_FILES["typedetail_picture"]["name"] != ""){
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['typedetail_picture']['name'],-4);
                                        $typedetail_picture=$datetime.'_p1'.$file_name;
                                        move_uploaded_file($_FILES["typedetail_picture"]["tmp_name"],"../../upload/".$typedetail_picture); 
                                  }
                            
							$sql=" update tb_typedetail";
							$sql.=" set";
						 
							$sql.=" type_id='$type_id'";
							$sql.=" ,typedetail_name='$typedetail_name'";
							$sql.=" ,typedetail_picture='$typedetail_picture'";
							$sql.=" where";
							$sql.=" typedetail_id='$typedetail_id'";
							
							
                            $typedetail_picture="";
                                   if($_FILES["typedetail_picture"]["name"] != ""){
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['typedetail_picture']['name'],-4);
                                        $typedetail_picture=$datetime.'_p1'.$file_name;
                                        move_uploaded_file($_FILES["typedetail_picture"]["tmp_name"],"../../upload/".$typedetail_picture); 
                                  }
                            
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('แก้ไขข้อมูล "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(1,'show_typedetail.php');
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