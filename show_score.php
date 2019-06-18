<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงคะแนน </h2>
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
									<th>รหัสคะแนน</th>
                                    
                                    <th>จำนวนคะแนน</th>
                                    <th>ความคิดเห็น</th>
                                    <th>ชื่อผู้ให้คะแนน</th>
                                  
                                    <th>วันที่ให้คะแนน</th>
                                    
                                    
                                   
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_score ";
							 $sql.=" where";
							 $sql.=" store_id='".$_SESSION['store_id']."'";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['score_id'];?>
                                        </td>
										 
                                        <td>
                                            <?=$row['score_rating'];?>
                                        </td>
                                        <td>
                                            <?=$row['score_detail'];?>
                                        </td>
                                        <td>
                                            <?=$row['score_by'];?>
                                        </td>
                                       
                                        <td>
                                            <?=$row['score_date'];?>
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
