<?php 
function load_donor($sql,$con)
{
	echo '
				<table style="font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%; border: 1px solid #dddddd;">
				<tr>
				<th>S.No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Blood</th>
				<th>City</th>
				<th>State</th>
				<th>Contact-1</th>
				<th>Contact-2</th>
				<th>View</th>
				<th>Delete</th>
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['NAME']."</td>";
									echo "<td>".$row['GENDER']."</td>";
									echo "<td>".$row['BLOOD']."</td>";
									echo "<td>".$row['CITY']."</td>";
									echo "<td>".$row['STATE']."</td>";
									echo "<td>".$row['CONTACT_1']."</td>";
									echo "<td>".$row['CONTACT_2']."</td>";
										
									echo "<td><a href='admin_view_donor.php?id=".$row['DONOR_ID']."' ><i class='fa fa-edit'></i> View</a></td>";
									echo "<td><a href='admin_delete_donor.php?id=".$row['DONOR_ID']."'><i class='fa fa-trash'></i> Delete</a></td>";
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}

function load_patient($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>S.No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Blood</th>
				<th>Unit</th>
				<th>Hospital</th>
				<th>Reason</th>
				<th>R-Date</th>
				<th>Status</th>
				<th>Update</th>
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['NAME']."</td>";
									echo "<td>".$row['GENDER']."</td>";
									echo "<td>".$row['BLOOD']."</td>";
									echo "<td>".$row['BUNIT']."</td>";
									echo "<td>".$row['HOSP']."</td>";
									echo "<td>".$row['REASON']."</td>";
									echo "<td>".$row['RDATE']."</td>";
										
									if($row["STATUS"]==0)
									{
									
									echo "<td><a href='#' ><i class='fa fa-bed'></i> Pending</a></td>";
									
									}
									else if($row["STATUS"]==2)
									{
										
									echo "<td><a href='#' ><i class='fa fa-bed'></i> Completed</a></td>";
									
									}
									else if($row["STATUS"]==1)
									{
										
									echo "<td><a href='#' ><i class='fa fa-bed'></i> Not Completed</a></td>";
									
									}
									
									
									echo "<td><a href='admin_view_request.php?id={$row['ID']}' ><i class='fa fa-edit'></i> View</a></td>";
									
									
									echo "</tr>";
									
								}
							}
							else
							{
								echo "<div >No Blood Request Yet</div>";
							}
						
				
			echo'</table>';

}


?>
