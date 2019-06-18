<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลประเภทช่าง</h2>
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
							
							$sqlu=" select * from tb_type";
							$sqlu.=" where";
							$sqlu.=" type_id='$id'";
							$resultu=$cls_conn->select_base($sqlu);
							while($rowu=mysqli_fetch_array($resultu))
							{
								$type_id=$rowu['type_id'];
								$type_name=$rowu['type_name'];
								$type_picture=$rowu['type_picture'];			
							}
						}
						?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="type_id" value="<?=$type_id;?>" />  
						  
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type_name">ชื่อประเภท <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="type_name" name="type_name" value="<?=$type_name;?>" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
						
						  
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type_picture">รูปประเภท <span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="type_picture" name="type_picture" value="<?=$type_picture;?> required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                           	$type_id=$_POST['type_id'];
						    $type_name=$_POST['type_name'];
							//$type_picture=$_POST['type_picture'];
							 $type_picture="";
                                   if($_FILES["type_picture"]["name"] != ""){
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['type_picture']['name'],-4);
                                        $type_picture=$datetime.'_p1'.$file_name;
                                        move_uploaded_file($_FILES["type_picture"]["tmp_name"],"../../upload/".$type_picture); 
                                  }
							
							$sql=" update tb_type";
							$sql.=" set";
							$sql.=" type_id='$type_id'";
							$sql.=" ,type_name='$type_name'";
							$sql.=" ,type_picture='$type_picture'";
							$sql.=" where";
							$sql.=" type_id='$type_id'";
                           
                           $type_picture="";
                                   if($_FILES["type_picture"]["name"] != ""){
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['type_picture']['name'],-4);
                                        $type_picture=$datetime.'_p1'.$file_name;
                                        move_uploaded_file($_FILES["type_picture"]["tmp_name"],"../../upload/".$type_picture); 
                                  }
                            
                            
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('แก้ไขข้อมูล "สำเร็จ" แล้วค่ะ');
                                echo $cls_conn->goto_page(1,'show_type.php');
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