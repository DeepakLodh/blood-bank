<!DOCTYPE html>
<?php
session_start();
include("config.php");
?>
<html lang="en">

<?php
include"head.php" 
?>
<body>

<?php
	 include"top_nav.php";
?>
 <div class="admcnt">

        <!-- Page Heading/Breadcrumbs -->
        <div class="adm1">
                <h1 style="color: red"><i class='fa fa-user-md'></i><strong> Admin Login </strong>
                  
                </h1><hr>
				  
            </div>

            <?php
				if(isset($_POST["submit"]))
					{
						if($_POST["user"]=="admin"&&$_POST["pass"]=="admin")
						{
							 $_SESSION['usertype'] ='admin';
							 $_SESSION['username']='admin';
							
							header("location:admin_inbox.php");
						}
						else
						{
							echo "<div class='alert alert-danger'><b>Error</b> User Name and Password Incorrect.</div>";
						}
					}
				?>
			
				
				<form role="form" action="admin.php" method="post">
									
			    	  	
							 <label for="user_name" style="color: #dd200f">User Name</label>
			    		    <input class="form-control" name="user"  id="user" type="text" required>
			    		
			    		
							<label for="pass">Password</label>
			    			<input class="form-control" id="pass" name="pass" type="password" value="" required>
			    		
						
			    		<button  name="submit" type="submit"><i class="fa fa-sign-in"></i> Login Here</button>
			    
			      	</form>
				
			

	</div>
     <?php
     include"footer.php";
      ?>
      <script type="text/javascript">
$(document).ready(function(){
	$(".btn").on("click",function(){
		$('.menu').slideToggle(500);
	});
})
	
</script>

    </body>

    </html>