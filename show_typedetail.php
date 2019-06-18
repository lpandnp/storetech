<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ประเภทย่อย </h2>
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
									<th>รหัสประเภทย่อย</th>
									<th>ประเภทช่าง</th>
                                    <th>ชื่อประเภทย่อย</th>
                                    <th>รูปประเภทย่อย</th>                                 
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql="SELECT
tb_typedetail.typedetail_id,
tb_type.type_name,
tb_typedetail.typedetail_name,
tb_typedetail.typedetail_picture
FROM
tb_typedetail
INNER JOIN tb_type ON tb_typedetail.type_id = tb_type.type_id";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['typedetail_id'];?>
                                        </td>
										 <td>
                                            <?=$row['type_name'];?>
                                        </td>
										 <td>
                                            <?=$row['typedetail_name'];?>
                                        </td>
                                        <td>
                                            
											 <img src="../../upload/<?=$row['typedetail_picture'];?>"  width="150px" height="150px" />
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
