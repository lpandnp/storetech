<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>ประเภทช่าง</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
                     
					<div class="row">


					<?php
					$sql=" select * from tb_typedetail";
					if(isset($_GET['type_id']))
					{
						$type_id=$_GET['type_id'];
						$sql.=" where";
						$sql.=" type_id='$type_id'";
					}
					$result=$cls_conn->select_base($sql);
					while($row=mysqli_fetch_array($result))
					{
						?>
					


					<div class="col-xs-6">
						<div class="box">


							<!-- Media Overlay no Background !-->

							<div class="nd2-card">


								<div class="card-media">
									<a href="store_type.php?typedetail_id=<?=$row['typedetail_id'];?>&typedetail_name=<?=$row['typedetail_name'];?>"><img src="../upload/<?=$row['typedetail_picture'];?>" width="50%" height="200"></a>

									<div class='card-media-overlay'>

										<div class="card-title has-supporting-text">
											<h3 class="card-primary-title"><?=$row['typedetail_name'];?></h3>
										</div>

									</div>

								</div>


								<div class="card-action">
									<div class="row between-xs">
										<div class="col-xs-12 align-right">
											<div class="box">
												 
												<a href="store_type.php?typedetail_id=<?=$row['typedetail_id'];?>&typedetail_name=<?=$row['typedetail_name'];?>" class="ui-btn ui-btn-inline ui-btn-fab"><i class='zmdi zmdi-mail-reply zmd-flip-horizontal'></i></a>
											</div>
										</div>
									</div>
								</div>

							</div>


						</div>
					</div>
				<?php
					}
					
					?>
					 

				</div>
                    
 
    			</div>
</div>
<?php include('footer.php');?>