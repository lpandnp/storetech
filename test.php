<?php include('header.php');?>
 
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>รายละเอียดร้าน</h1>
                </div>
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