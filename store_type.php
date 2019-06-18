<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>ชื่อร้านตามประเภท<?=$_GET['typedetail_name'];?></h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
                     
					<div class="row">


					<?php
					$sql="SELECT
tb_store.store_id,
tb_storetype.typedetail_id,
tb_store.store_name,
tb_store.store_picture
FROM
tb_storetype
INNER JOIN tb_store ON tb_storetype.store_id = tb_store.store_id
";
					if(isset($_GET['typedetail_id']))
					{
						$typedetail_id=$_GET['typedetail_id'];
						$sql.=" where";
						$sql.=" typedetail_id='$typedetail_id'";
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
									<a href="shop.php?store_id=<?=$row['store_id'];?>"><img src="../upload/<?=$row['store_picture'];?>" width="50%" height="200"></a>

									<div class='card-media-overlay'>

										<div class="card-title has-supporting-text">
											<h3 class="card-primary-title"><?=$row['store_name'];?></h3>
										</div>

									</div>

								</div>


								<div class="card-action">
									<div class="row between-xs">
										<div class="col-xs-12 align-right">
											<div class="box">
												 
												<a href="shop.php?store_id=<?=$row['store_id'];?>" class="ui-btn ui-btn-inline ui-btn-fab"><i class='zmdi zmdi-mail-reply zmd-flip-horizontal'></i></a>
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