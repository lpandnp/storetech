<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>ค้นหา</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
                     
                   <form method="post"  data-ajax="false" action="search2.php">

                    <div class="box">



                        <label for="search"><b>ชื่อร้าน : </b></label>

                      	<select id="store_id" name="store_id" required="required" class="form-control col-md-7 col-xs-12"> 
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

                        <button class="ui-btn ui-btn-raised" name="submit" type="submit">ค้นหา</button>

                        <br/>

 

                    </div>

                </form>
    </div>
</div>
<?php include('footer.php');?>