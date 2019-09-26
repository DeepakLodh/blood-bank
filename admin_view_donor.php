<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-sccale=1,userscalable=no">
	<title>blood bank management</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="css/jquery.js" type="text/javascript"></script>
	</head>
	<body>

<div class="navbar">
		
		<div class="logo">
			
	
       <a class="btn">
       	<span></span>
       	<span></span>
       	<span></span>
       </a>
       </div>

	
		<div class="menu" >
			<ul>
            <li><a href="admin_inbox.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                     <li><a href="admin_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
               
				
              
					
			</ul>
        </div>
		
	</div>

    <div class="rowin">
	<div class="sidenav">
	<h3><i class="fas fa-tachometer-alt"></i> Dashboard</h3>
<hr>

<ul class= sttng>
	<li><a href="admin_inbox.php"><i class="fa fa-envelope fa-lg"></i> Inbox <!--<?php echo $mes;?>-->></a></li>
	<li><a href="admin_donor.php"><i class="fa fa-search fa-lg"></i>Search Donors</a></li>
	<li><a href="admin_adonor.php"><i class="fa fa-users fa-lg text-success"></i> Active Donors</a></li>
	<li><a href="admin_ndonor.php"><i class="fa fa-users fa-lg text-danger"></i> Not Active Donors</a></li>
	<li><a href="admin_need_blood.php"><i class="fa fa-bed fa-lg"></i> Need Blood</a></li>
	<hr>
	<li><a href="#add" data-toggle="collapse" class="t" ><i class="fa fa-cogs fa-lg"></i> Settings</a></li>
	<ul  id="add">
		<li class="sttngnav"><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Add Country</a>
		<li class="sttngnav"><a href="admin_state.php"><i class="fa fa-plus fa-lg"></i> Add State</a></li>
		<li class="sttngnav"><a href="admin_city.php"><i class="fa fa-plus fa-lg"></i> Add City</a></li>
		<li class="sttngnav"><a href="admin_area.php"><i class="fa fa-plus fa-lg"></i> Add Area</a></li>
		</li>
	</ul>
</ul>

<hr>
</div>
		<div  >
			<h3 style="color: red;"><i class="fa fa-users"></i> Donor Details </h3><hr>    
		<div class="row">
		<?php 
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM blood_donor WHERE DONOR_ID=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
		<div style="display: flex;">
		        <div >
					
					
			       <img src="<?php echo $row["DONOR_PIC"];?>" class="image-rounded" height="300px" width="300px">
			
		        </div>
	
		<table  style=" border-bottom: 1px solid #ddd;">
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Name</th>
				<td><?php echo $row["NAME"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Father Name</th>
				<td><?php echo $row["FATHER_NAME"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Gender</th>
				<td><?php echo $row["GENDER"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>D.O.B</th>
				<td><?php echo $row["DOB"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Blood Group</th>
				<td><?php echo $row["BLOOD"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Body Weight</th>
				<td><?php echo $row["BODY_WEIGHT"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Email</th>
				<td><?php echo $row["EMAIL"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Address</th>
				<td><?php echo $row["ADDRESS"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Area</th>
				<td><?php echo $row["AREA"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>City</th>
				<td><?php echo $row["CITY"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Pincode</th>
				<td><?php echo $row["PINCODE"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>State</th>
				<td><?php echo $row["STATE"];?></td>
			</tr>
	
			<tr style=" border-bottom: 1px solid #ddd;">
				<th>Contact-1</th>
				<td><?php echo $row["CONTACT_1"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Contact-2</th>
				<td><?php echo $row["CONTACT_2"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Voluntary</th>
				<td><?php echo $row["VOLUNTARY"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Group</th>
				<td><?php echo $row["VOLUNTARY_GROUP"];?></td>
			</tr>
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Is New Donor</th>
				<td><?php echo $row["NEW_DONOR"];?></td>
			</tr>
			
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Last Donoted Date</th>
				<td><?php echo $row["LAST_D_DATE"];?></td>
			</tr>
			
			<tr  style=" border-bottom: 1px solid #ddd;">
				<th>Status</th>
				<td><?php 
				
					$status=$row["STATUS"];
					if($status==0)
					{
						echo'<a href="admin_activate.php?id='.$row["DONOR_ID"].'" class="btn btn-sm btn-danger">Activate Now</a>';
					}
					else
					{
							echo'<a href="admin_deactivate.php?id='.$row["DONOR_ID"].'" class="btn btn-sm btn-success">Deactivate Now</a>';
					}
				
				?></td>
			</tr>
			
		</table>
	</div>
	
	
		
		<?php
			}
		}	
		else
		{
		echo "<script>window.open('admin_donor.php','_self');</script>";
		}

		?>	
			
		<form  method="post" action="update_last.php">
			
				<label  for="ldata">Last Donate Date</label>
				<input type="text"  placeholder="YYYY/MM/DD" required id="ldata" name="ldata"  >
			
			<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
			<button style="padding: 10px 5px;background-color: red;margin: 5px;"><i class="fa fa-save"></i> Save Changes</button>
						
		</form>
			
		

  
  <div class="footer">
<p>copyright@bloodbank.com 2019.All rights reserved</p>
</div>
  <script>
  </script>

	</body>
</html>