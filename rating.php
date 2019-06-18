<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>รายละเอียดร้าน</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
				<?php 
				if(isset($_POST['submit_rating']))
				{
				 $store_id=$_POST['store_id'];
				 $score_rating=$_POST['score_rating']; 
				 $score_detail=$_POST['score_detail']; 
				 $score_by=$_POST['score_by']; 
				 $score_status='ใช้งาน';
				 $score_date=date('Y-m-d H:i:s');
				 
				  $sql=" insert into tb_score(store_id,score_rating,score_detail,score_by,score_status,score_date)";
                  $sql.=" values ('$store_id','$score_rating','$score_detail','$score_by','$score_status','$score_date')";
                   if($cls_conn->write_base($sql)==true)
                            {
							?>
								<center><h2>ประเมินสำเร็จ</h2></center>
							    <button class="ui-btn ui-btn-raised" name="submit_rating" type="button"><a href="menu.php">กลับ</a></button>
                                
                            <?php
							}
                    else
                            {
                                ?>
								<center><h2>ประเมินไม่สำเร็จ</h2></center>
							    <button class="ui-btn ui-btn-raised" name="submit_rating" type="button"><a href="menu.php">กลับ</a></button>
                                
                            <?php
                            }
				 
				 
				}
				?>
				
		</div>		
</div>
<?php include('footer.php');?>