<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลร้านช่าง </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        

                            <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
								 
                                    <th>ชื่อร้านช่าง</th>
									<th>โทรศัพท์บ้าน</th>
									<th>โทรศัพท์มือถือ</th>
                                    <th>รูป</th>
                                    <th>ชื่อผู้ใช้งาน</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_store order by store_name asc";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                         
										 <td>
                                            <?=$row['store_name'];?>
                                        </td>
                                       
									    <td>
                                            <?=$row['store_phone'];?>
                                        </td>
										
                                        <td>
                                            <?=$row['store_tel'];?>
                                        </td>
                                        <td>
                                           <img src="../../upload/<?=$row['store_picture'];?>"  width="150px" height="150px" />
                                        </td>
                                    
										<td>
                                            <?=$row['store_username'];?>
                                        </td>
										
                                        <td>
                                            <a href="update_store.php?id=<?=$row['store_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../image/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_store.php?id=<?=$row['store_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
                                        </td>
                                    </tr>
                                    <?php
                             }
                          ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>


    <?php include('footer.php');?>
