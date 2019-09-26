<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!doctype html>
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
	<li><a href="admin_inbox.php"><i class="fa fa-envelope fa-lg"></i> Inbox<!-- <?php echo $mes;?>--></a></li>
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


<div class="sidenav2">
			<h3 style><i class="fa fa-envelope"></i> Inbox </h3><hr>    
			
<?php 
$sql="SELECT * FROM messages ORDER BY ID DESC";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<ul  style="border:1px solid black;padding:5px auto;">';
		while($row=$result->fetch_assoc())
		{
			if($row['STATUS']=='1')
			{
				echo '<li>
						<span>
							<b><i class="fa fa-envelope-square"> </i>      	'.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span>
							<i>'.$row['LOGS'].'</i> &nbsp;
							<a href="view_mess.php?id='.$row['ID'].'"  >View</a>
							<a href="admin_mess_del.php?id='.$row['ID'].'">Delete</a>
						</span>

					</li>';
			}
			else
			{
				echo '<li>
						<span>
							<b><i class="fa fa-envelope-square
"></i> '.$row["NAME"].'</b>: '.substr($row["MESSAGE"],0,50).'....
						</span>
						<span>
							<i>'.$row['LOGS'].'</i>&nbsp;
							<a href="view_mess.php?id='.$row['ID'].'" >View</a>
							<a href="admin_mess_del.php?id='.$row['ID'].'" >Delete</a>
						</span>
				</li>';
			}
			echo"<br>";
		}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Messages</div>";
}
		
		?>
</div>
</div>
		
	

<div class="footer">
<p>copyright@bloodbank.com 2019.All rights reserved</p>
</div>
<script>
    $(document).ready(function(){
	$(".t").on("click",function(){
		$('#add .sttngnav').slideToggle(500);
	});
	
});
</script>




</body>
</html>