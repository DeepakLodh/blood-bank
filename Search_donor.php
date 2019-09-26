<!DOCTYPE html>
<html lang="en">

<?php
include"head.php" 
?>
<body>

<?php
	 include"top_nav.php";
?>
<div class="service" style='margin-top:70px;'>
        
  
                <h3  style="color: red">
					<i class='fa fa-search'></i>  Search Donor Avalibility
                </h3><hr>
                 <div class="serve">
                     <ol style="list-style: none;">
            
                        <li><a href="Donor_reg.php" style="text-decoration:none;"><i class='fa fa-users'></i> Donor Registration</a></li>&nbsp;/
                        <li><a href="request_blood.php" style="text-decoration:none;"><i class='fa fa-bed'></i> Need Blood </a></li>&nbsp;/
                        <li><a href="Search_Donor.php" style="text-decoration:none;"><i class='fa fa-search'></i> Search Blood</a></li>
                     </ol>
                 </div>
						
                    <div class="servicefrm"> 
                   

                
                   <h2><span class="fa fa-search "> </span> Search Donor Avalibility </h3>
                 
					
                 
						<form method="post" action="frm" id="frm">
						
						<label>Search Type</label>
								<select name="STYPE"  id="STYPE" required class="form-control input-sm">
									<option value="PINCODE">Pincode</option>
									<option value="AREA">Area</option>
									<option value="CITY">City</option>
									<option value="STATE">State</option>
								</select>
						
							
			
						
					<label  for="BLOOD" >Blood Group</label>
					    <select id="blood" name="BLOOD" required >	
							<option value="">Select Blood</option>
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="O+">O+</option>
							<option value="AB+">AB+</option>
							<option value="A1+">A1+</option>
							<option value="A2+">A2+</option>
							<option value="A1B+">A1B+</option>
							<option value="A2B+">A2B+</option>
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="O-">O-</option>
							<option value="AB-">AB-</option>
							<option value="A1-">A1-</option>
							<option value="A2-">A2-</option>
							<option value="A1B">A1B-</option>
							<option value="A2B">A2B-</option>
							<option value="A2B">Bombay o+</option>
							<option value="A2B">Bombay o-</option>
						</select>
							
								<label>Search Text</label>
							<input type="text" name="str" id="str" required placeholder="Type Here" >
	
							
								
							<button  name="submit" type="button" id="submit" style="background-color:red;padding:10px 20px;border:none;margin:10px;color:white;font-size:15px;cursor:pointer;border-radius:4px;margin-left:220px;">
														<i class='fa fa-search'></i> Search Donor</button>
														
														
														<div id="feedback">
			 <p>
				Please fill the correct details and search your nearest donor.For more queries contact our admin.
			 </p>
			  </div>
                           
						  </div>
						 </form>
						 <marquee style="background-color:red;padding:10px 0;margin-bottom:20px;color:white;" >
				Please fill the correct details and search your nearest donor.For more queries &nbsp; <a href="contact.php" style="font-size:20px;color:green;cursor:pointer;"> 
				CONTACT OUR ADMIN </a>.
			 </marquee>
						</div>
						</div>
                         <?php
     include"footer.php";
			?>
			

			<script>
	$(document).on('click','#submit',function(){
		
		$.ajax({
					url:"search_don.php",
					method:"POST",
					data:$("#frm").serialize(),
					success:function(data)
					{
						$("#feedback").html(data);
						
					}
				});
		
	});
 </script>

    </body>

    </html>