<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>คะแนนสูงสุด 10 อันดับ</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
			 
				<table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">

                <thead>

                    <tr>

                        <th data-priority="1">ลำดับ</th>

                        <th data-priority="1">คะแนนเฉลี่ย</th>
						
						<th data-priority="1">จำนวนผู้ประเมิน</th>
						
                        <th data-priority="1">ชื่อร้าน</th>

                        <th data-priority="2">รูปร้าน</th>

                        <th></th>

                    </tr>

                </thead>

                <tbody>

                    <?php

                    $sql=" 
						SELECT
vw1_rating.rating,
vw1_rating.store_name,
vw1_countscore.count_score,
vw1_rating.store_picture,
vw1_rating.store_gps,
vw1_rating.score_by
FROM
vw1_countscore
INNER JOIN vw1_rating ON vw1_rating.store_id = vw1_countscore.store_id
";

                  

                    $result=$cls_conn->select_base($sql);

                    $i=0;

                    while($row=mysqli_fetch_array($result))

                    {

                        $i=$i+1;

                        ?>

                   

                    <tr>

                        <td><?=$i;?></td>
	         			<td><?=$row['rating'];?></td>
						<td><?=$row['count_score'];?></td>
						<td><?=$row['store_name'];?></td>
                        <td><img src="../upload/<?=$row['store_picture'];?>" width="150px"/></td>

                     

                    </tr>

                     <?php

                    }

                    ?>

                </tbody>

            </table>
				
				</div>
				</div>
<?php include('footer.php');?>