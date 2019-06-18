<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ประเภทช่าง </h2>
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
									<th>รหัสประเภท</th>
                                    <th>ชื่อประเภท</th>
                                    <th>รูปประเภท</th>                                 
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_type";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['type_id'];?>
                                        </td>
										 <td>
                                            <?=$row['type_name'];?>
                                        </td>
                                        <td>
                                        
											
											 <img src="../../upload/<?=$row['type_picture'];?>"  width="150px" height="150px" />
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
