<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงรายละเอียดร้านช่าง </h2>
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
									<th>ลำดับ</th>
                                    <th>ปรเะเภทการซ่อม</th>
                                    <th>หลายเอียดที่ซ่อม</th>
                                    
                                   
                                    <th>ลบ</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql="SELECT
tb_storetype.storetype_id,
tb_storetype.store_id,
tb_type.type_name,
tb_typedetail.typedetail_name
FROM
tb_storetype
INNER JOIN tb_typedetail ON tb_storetype.typedetail_id = tb_typedetail.typedetail_id
INNER JOIN tb_type ON tb_typedetail.type_id = tb_type.type_id
";
$sql.=" where";
									$sql.=" store_id='".$_SESSION['store_id']."'";
                             $result=$cls_conn->select_base($sql);
							 $i=1;
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
									 <td>
                                            <?=$i++;?>
                                        </td>
                                        <td>
                                            <?=$row['type_name'];?>
                                        </td>
										 
                                        <td>
                                            <?=$row['typedetail_name'];?>
                                        </td>
                                         <td>
                                            <a href="delete_storetype.php?id=<?=$row['storetype_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
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
