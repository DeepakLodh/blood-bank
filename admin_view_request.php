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
		
		<div>
			<h3 ><i class="fa fa-bed"></i> Patient Details </h3><hr>    
		<div class="row">
		<?php 
		
			if(isset($_POST["submit"]))
			{
				$id=$_GET['id'];
				$cdate=$_POST["CDATE"];
				$status=$_POST["STATUS"];
				if($cdate=="")
				{
					$cdate="0000-00-00";
					$status=1;
				}
			$sql="UPDATE request_blood SET CDATE='{$cdate}',STATUS='{$status}' WHERE ID='{$id}'";
				if($con->query($sql))
				{
					
					$s= "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success : </strong> Status Updated Success.</div>";
				}
			
			}
			
		
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM request_blood WHERE ID=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>
		<div style="display: flex;">
				<div>
					
					<img src="<?php echo $row["PIC"];?>" class="image-rounded" height="300px" width="300px">
			</div>
			
			
		
	
		<table style="border: 1px solid white;padding: 10px;">
			<tr>
				<th>Name</th>
				<td><?php echo $row["NAME"];?></td>
			</tr>
			<tr>
				<th>Blood</th>
				<td><?php echo $row["BLOOD"];?></td>
			</tr>
			<tr>
				<th>UNIT</th>
				<td><?php echo $row["BUNIT"];?></td>
			</tr>
			<tr>
				<th>Hospital</th>
				<td><?php echo $row["HOSP"];?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $row["CITY"];?></td>
			</tr>
			<tr>
				<th>Pincode</th>
				<td><?php echo $row["PIN"];?></td>
			</tr>
			<tr>
				<th>Doctor Name</th>
				<td><?php echo $row["DOC"];?></td>
			</tr>
			<tr>
				<th>Request Date</th>
				<td><?php echo $row["RDATE"];?></td>
			</tr>
			<tr>
				<th>Contact Person</th>
				<td><?php echo $row["CNAME"];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $row["CADDRESS"];?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $row["EMAIL"];?></td>
			</tr>
			<tr>
				<th>Contact-1</th>
				<td><?php echo $row["CON1"];?></td>
			</tr>
			<tr>
				<th>Contact-2</th>
				<td><?php echo $row["CON2"];?></td>
			</tr>
			<tr>
				<th>Status</th>
				<td><?php 
				if($row["STATUS"]==0)
				{
					echo "<b>Pending</b>";
				}
				else if($row["STATUS"]==1)
				{
					echo "<b>Not Completed</b>";
				}	
				else if($row["STATUS"]==2)
				{
					echo "<b>Completed</b>";
				}
					
					
					?></td>
			</tr>
			<tr>
				<th>Completed Date</th>
				<td><?php echo $row["CDATE"];?></td>
			</tr>
		</table>
		</div>
		
		<h3 >Any Updation</h3>
		<hr>
		<?php if(isset($s)){echo $s;}?>
		<form method='post' action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET["id"];?>">
			
				<label for="CDATE">Completed Date</label>
				<input type="text" name="CDATE"  id="CDATE" class="form-control DATES">
			
			
			
				<label for="STATUS">Status</label>
				<select name="STATUS" required  id="STATUS" >
					<option value="">Select Status</option>
					<option value="0">Pending</option>
					<option value="1">Not Completed</option>
					<option value="2">Completed</option>
				</select>
			
			<button type='submit'  name='submit'><i class='fa fa-edit'></i> Update Now</button>
			<a href='admin_need_blood.php'>Back Page</a>
		</form>
	
		<?php
			}
		}	
		else
		{
		echo "<script>window.open('admin_donor.php','_self');</script>";
		}

		?>	
					
	
</div>
			
		

  
  <div class="footer">
<p>copyright@bloodbank.com 2019.All rights reserved</p>
</div>
  <script>
  </script>

	</body>
</html>