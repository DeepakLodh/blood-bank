<?php include("config.php");?>
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
					<i class='fa fa-heart'></i> Need Blood To Save Life
                </h3><hr>
                 <div class="serve">
                     <ol style="list-style: none;">
            
                        <li><a href="Donor_reg.php" style="text-decoration:none;"><i class='fa fa-users'></i> Donor Registration</a></li>&nbsp;/
                        <li><a href="request_blood.php" style="text-decoration:none;"><i class='fa fa-bed'></i> Need Blood </a></li>&nbsp;/
                        <li><a href="Search_Donor.php" style="text-decoration:none;"><i class='fa fa-search'></i> Search Blood</a></li>
                     </ol>
                 </div>
						
                    <div class="servicefrm">  
                
				   <h2><span class="fa fa-envelope "> </span>Need Blood To Save Lifes </h3>

                 
					
                 
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off" role="form" enctype="multipart/form-data">
						
							<label  for="NAME" >Patient Name</label>
							<input type="text" placeholder="Patient Name" id="NAME" name="NAME"  required id="Name" >
					

							<label for="GENDER">Gender</label>
								<select id="gen" name="GENDER" required >
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Thirunangai">Thirunangai</option>
									<option value="Thirunambi">Thirunambi</option>
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
							
								<label >Need Unit Of Blood</label>
                                <input type="text" required name="BUNIT" id="BUNIT" placeholder="Insert No Of Unit">
						
						
								<label>Hospital Name &amp; Address</label>
                                <textarea required name="HOSP" id="HOSP" rows="5"  placeholder="Hospital Full Address"></textarea>
                          
	
								<label>City</label>
                                <input type="text" required name="CITY" id="CITY"  placeholder="Insert City">

                                <label>Pincode</label>
                                <input type="text" required name="PIN" id="PIN"  placeholder="Insert Pincode">

                                <label>Doctor Name</label>
							<input type="text" placeholder="Doctor Name"  name="DOC" id="DOC">

                            <label>When Required</label>
							<input type="text" placeholder="MM/DD/YYYY" name="RDATE" id="RDATE">

                            <label>Contact Name</label>
							<input type="text" placeholder="Contact Name"  name="CNAME" id="CNAME">

                            <label>Address</label>
                                <textarea required name="CADDRESS" id="CADDRESS" rows="5"  placeholder="Full Address"></textarea>

                                <label>Email ID</label>
							<input type="text" placeholder="Contact Email" name="EMAIL" id="EMAIL">

                            <label>Contact No-1</label>
							<input type="text" placeholder="Contact Number" name="CON1" id="CON1">

                            <label>Contact No-2</label>
							<input type="text" placeholder="Contact Number" name="CON2" id="CON2">

                            <label>Reason For Blood</label>
                                <textarea required name="REASON" id="REASON" rows="5"  placeholder="Reason For Blood" name="REASON" id="REASON"></textarea>

                                	<label style="color:red">Upload Photo</label><br>
							<input type="file"  onChange="validate(this.value)" name="PIC" id="PIC">
								
                        <br>
							
								
							<button  type="submit" id="BTN" name="submit" style="background-color:red;padding:10px 20px;border:none;margin:10px;color:white;font-size:15px;cursor:pointer;border-radius:4px;" >
                            <i class="fa fa-paper-plane"></i>Registar Now</button>
						  </div>
						 </form>

						 				   <?php
						if(isset($_POST["submit"]))
						{
								$target_dir = "request_image/";
								$file_name=$_FILES["PIC"]["name"];
								if($file_name!="")
								{
									$target_file = $target_dir.rand(100,999). basename($_FILES["PIC"]["name"]);
									move_uploaded_file($_FILES["PIC"]["tmp_name"], $target_file);
									
								}
								else
								{
									$target_file ="request_image/no-image.jpg";	
								}
								
								 $sql="INSERT INTO request_blood(NAME,GENDER,BLOOD,BUNIT,HOSP,CITY,PIN,DOC,RDATE,CNAME,EMAIL,CON1,CON2,REASON,PIC,CADDRESS)
								 VALUES('{$_POST["NAME"]}','{$_POST["GENDER"]}','{$_POST["BLOOD"]}','{$_POST["BUNIT"]}','{$_POST["HOSP"]}','{$_POST["CITY"]}','{$_POST["PIN"]}','{$_POST["DOC"]}','{$_POST["RDATE"]}','{$_POST["CNAME"]}','{$_POST["EMAIL"]}','{$_POST["CON1"]}','{$_POST["CON2"]}','{$_POST["REASON"]}','{$target_file}','{$_POST["CADDRESS"]}')";
									if($con->query($sql))
									{
										echo '<h2 style="border:1px solid black;background-color:green;color:#fff;">
                                        Your Blood request is sent. Admin will contact you soon;
                                        </h2>';
                                        
									}
									else
									{
										echo '<h2 style="border:1px solid black;background-color:green;color:#fff;"><strong>Error : </strong>Server busy.Try again later.</h2>';
									}
						}
						
					?>
						</div>
						</div>
						<marquee style="background-color:red;padding:10px 0;margin-bottom:20px;color:white;" >
				Please fill the correct details and search your nearest donor.For more queries &nbsp; <a href="contact.php" style="font-size:20px;color:green;cursor:pointer;"> 
				CONTACT OUR ADMIN </a>.
			 </marquee>
                         <?php
     include"footer.php";
      ?>

    </body>

    </html>