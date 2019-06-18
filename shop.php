<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>รายละเอียดร้าน</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
				<?php 
				if(isset($_GET['store_id']))
				{
					$store_id=$_GET['store_id'];
					$sql=" select * from tb_store";
					$sql.=" where";
					$sql.=" store_id = '$store_id'";
					
					$result=$cls_conn->select_base($sql);
					while($rowu=mysqli_fetch_array($result))
					{
								$store_id=$rowu['store_id'];
								$store_name=$rowu['store_name'];
								$store_address=$rowu['store_address'];
								$store_tel=$rowu['store_tel'];
								$store_picture=$rowu['store_picture'];
								$store_gps=$rowu['store_gps'];
								$store_map=$rowu['store_map'];
								$store_username=$rowu['store_username'];
								$store_password=$rowu['store_password'];
								$store_status=$rowu['store_status'];
								
				}
				}
				?>
				
                     		<center>
							<img src="../upload/<?=$store_picture;?>" width="55%" />
							</center>
					 		<b>ชื่อร้าน : </b><?=$store_name;?> <br/> 
					  		<b>ที่อยู่ร้าน : </b><?=$store_address;?><br/>
					  		<b>เบอร์โทรศัพท์ : </b><?=$store_tel;?><br/>
                         	<b>แผนที่ร้าน : </b><br/><?=$store_map;?>
							
				 
					<br/><br/>
					<a href="https://www.google.com/maps/dir//<?=$store_gps;?>/"><button class="ui-btn-primary"><i class="zmdi zmdi-pin ui-pull-left"></i> นำทาง</button></a>
    			</div>
				<br/>
				
				    <form method="post"  data-ajax="false" action="rating.php" >
					<input type="hidden" name="store_id" value="<?=$store_id;?>" />
                    <div class="box">

<table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">

                <thead>

                    <tr>
						<th data-priority="1">ลำดับ</th> 
						<th data-priority="1">คะแนนเฉลี่ย</th>
						<th data-priority="1">รายละเอียด</th>
						<th data-priority="1">วันที่</th>
                    </tr>
				</thead>
					<tbody>
					<?php
					 $sql2=" select * from tb_score";
					 $sql2.=" where";
					 $sql2.=" store_id = '$store_id'";
					 $result2=$cls_conn->select_base($sql2);
					   $i=1;
					while($row2=mysqli_fetch_array($result2))
					{
					?>
					<tr>
					    <td><?=$i++;?></td>
	         			<td><?=$row2['score_rating'];?></td>
						<td><?=$row2['score_detail'];?></td>
						<td><?=$row2['score_date'];?></td>
					<tr/>
					<?php } ?>
					</tbody>

            </table>

<hr/>
                         
						 <label for="score_rating" class="select"><b>คะแนน</b></label>
                        <select name="score_rating" id="score_rating" data-native-menu="false">
                            <option value="5">5 (มากที่สุด)</option>
                            <option value="4">4 (มาก)</option>
                            <option value="3">3 (ปานกลาง)</option>
                            <option value="2">2 (น้อย)</option>
                            <option value="1">1 (น้อยที่สุด)</option>
                        </select>
						
						
						
						<label for="search"><b>ความคิดเห็น : </b></label>      
						<input type="text" name="score_detail" id="search" value="" data-clear-btn="true" placeholder="">
						
						<label for="search"><b>ชื่อผู้ประเมิน : </b></label>      
						<input type="text" name="score_by" id="search" value="" data-clear-btn="true" placeholder="">
						
						
 
                        <button class="ui-btn ui-btn-raised" name="submit_rating" type="submit">ประเมิน</button>

                        <br/>

 

                    </div>

                </form>
				
				<hr/>
				
				
             
				
				
</div>
<?php include('footer.php');?>