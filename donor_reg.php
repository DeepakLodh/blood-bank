<?php 
include("config.php"); 
//include("functions.php"); 

error_reporting(0);?>
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
					<i class='fa fa-users'></i> New Donor Registration
                </h3><hr>
                 <div class="serve">
                     <ol style="list-style: none;">
            
                        <li><a href="Donar_reg.php" style="text-decoration:none;"><i class='fa fa-users'></i> Donor Registration</a></li>&nbsp;/
                        <li><a href="request_blood.php" style="text-decoration:none;"><i class='fa fa-bed'></i> Need Blood </a></li>&nbsp;/
                        <li><a href="Search_Donor.php" style="text-decoration:none;"><i class='fa fa-search'></i> Search Blood</a></li>
                     </ol>
                 </div>
				 
						
                    <div class="servicefrm">  
                
                   <h2><span class="fa fa-user "> </span> JOIN AS BLOOD DONOR</h3>
                 
					
                 
						<form method="post" action="Donor_reg.php"  name="formp" autocomplete="off" role="form" enctype="multipart/form-data">
						<ul class="errorMessages"></ul>
							<label  for="NAME" >Name</label>
							<input type="text" placeholder="Full Name" id="NAME" name="NAME"  required >
							<span id="errorname"></span>
					
							<label  for="FATHER_NAME">Father Name</label>
							<input type="text" placeholder="Father Name" id="FATHER_NAME" name="FATHER_NAME" required >
						
						
						
							<label  for="GENDER">Gender</label>
								<select id="gen" name="GENDER" required>
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Thirunangai">Thirunangai</option>
									<option value="Thirunambi">Thirunambi</option>
								</select>
						
						
						<br>
							<label  for="DOB">D.O.B</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="DOB" name="DOB"  >
						
						
						
						
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
							
							<label  for="BODY_WEIGHT" >Body Weight</label>
							<input type="text" required placeholder="Weight In Kgs"  name="BODY_WEIGHT" id="BODY_WEIGHT" >
						
						
								<label  for="EMAIL" >Email ID</label>
                                <input type="email"  required name="EMAIL" id="EMAIL"  placeholder="Email Address">
                          
	
								<label  name="COUNTRY" id="COUNTRY" required ></label>
								<option value="">Select Country</option>
								<select id="Country name="country">
									<option>select country</option>
									<?php
									$sql="SELECT COUNTRY_ID,COUNTRY_NAME FROM country ORDER BY COUNTRY_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo "<option value='{$row['COUNTRY_ID']}'>{$row['COUNTRY_NAME']}	</option>";
										}
									}
								?>
								</select>
								
                        
							
								<label  for="STATE">State</label>
                                <select name="STATE" id="STATE" required >
								<option value="">Select State</option>
								<?php
									$sql="SELECT STATE_ID,STATE_NAME FROM state ORDER BY STATE_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo "<option value='{$row['STATE_ID']}'>{$row['STATE_NAME']}	</option>";
										}
									}
									
								?>
								
								</select>
                         
								<label  for="CITY" >City</label>
                                <select name="CITY" id="CITY" required >
								<option value="">Select City</option>
								<?php
								
									$sql="SELECT CITY_NAME,CITY_ID FROM city ORDER BY CITY_NAME";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
										echo "<option value='{$row['CITY_ID']}'>{$row['CITY_NAME']}	</option>";
										}
									}
									
								?>
								
								</select>

                         
							<label for="AREA" >Area</label>
                                <input type="text" required name="AREA" id="AREA"  placeholder="Insert Area">
                         
								<label  for="ADDRESS">Address</label>
                                <textarea required name="ADDRESS" id="ADDRESS" rows="5" placeholder="Full Address"></textarea>
                         
								<label  for="PINCODE">Pincode</label>
                                <input type="text" required name="PINCODE" id="PINCODE"  placeholder="Insert Pincode">

								<label  for="CONTACT_1" >Contact-1</label>
                                <input type="input" required name="CONTACT_1" id="CONTACT_1"  placeholder="Contact No-1" maxlength="10" >
                          
								<label  for="CONTACT_2" >Contact-2</label>
                                <input type="input" required name="CONTACT_2" id="CONTACT_2"  placeholder="Contact No-2"  maxlength="10">			
					      
						        <label   for="NEW_DONOR">New Donor</label>
								<select name="NEW_DONOR"  id="NEW_DONOR" >
									<option value="">Select</option>
									<option value="Yes" >Yes</option>
									<option value="No" selected>No</option>
									
								</select>
						
						<div class="tc">
							
							<label  for="fileToUpload" style="color: red">Upload Photo</label>
							<input type="file"  name="fileToUpload" required class="tc1">
							<br>
						  
								<label><input type="checkbox" checked id="c2">&nbsp; I have read the eligibility criteria and confirm that i am eligible to donate blood.</label><br> 
								<label><input type="checkbox" checked id="c3" >&nbsp; I agree to the Term and Conditions and consent to have my contact and donor information published to the potential blood recipients.</label><br>				 
							<button  type="submit" name="submit" >Registar Now</button>
						  </div>
						 </form>


						 <?php
					if(isset($_POST["submit"]))
					{
						
										
$target_dir = "donor_image/";
$img="donor_image/noimage.jpg";
$target_file = $target_dir.rand(100,999). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
      //  echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
   // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $img=$target_file;
    } else {
     //   echo "Sorry, there was an error uploading your file.";
    }
}
$country="";
$state="";

$qry="SELECT COUNTRY_NAME FROM country WHERE COUNTRY_ID={$_POST["COUNTRY"]}";
$res=$con->query($qry);
if($res->num_rows>0)
{
	if($row=$res->fetch_assoc())
	{
		$country=$row["COUNTRY_NAME"];
	}
}

$qry="SELECT STATE_NAME FROM state WHERE STATE_ID={$_POST["STATE"]}";
$res=$con->query($qry);
if($res->num_rows>0)
{
	if($row=$res->fetch_assoc())
	{
		$state=$row["STATE_NAME"];
	}
}



$cityname=$_POST["CITY"];

$sql="
INSERT INTO blood_donor 
(NAME, FATHER_NAME, GENDER, DOB, BLOOD, BODY_WEIGHT, EMAIL, ADDRESS, AREA, CITY, PINCODE, STATE, CONTACT_1, CONTACT_2, VOLUNTARY, VOLUNTARY_GROUP,NEW_DONOR, LAST_D_DATE, DONOR_PIC,COUNTRY)
 VALUES 
 ('{$_POST["NAME"]}', '{$_POST["FATHER_NAME"]}', '{$_POST["GENDER"]}', '{$_POST["DOB"]}', '{$_POST["BLOOD"]}', '{$_POST["BODY_WEIGHT"]}', '{$_POST["EMAIL"]}', '{$_POST["ADDRESS"]}', '{$_POST["AREA"]}', '$cityname', '{$_POST["PINCODE"]}', '{$state}', '{$_POST["CONTACT_1"]}', '{$_POST["CONTACT_2"]}', '{$_POST["VOLUNTARY"]}', '{$_POST["VOLUNTARY_GROUP"]}', '{$_POST["NEW_DONOR"]}','{$_POST["LAST_D_DATE"]}', '{$img}','{$country}');";
						if($con->query($sql))
							{
								echo '
								
									<h2 style="border:1px solid black;background-color:green; ">
									<strong>Success!</strong> Thank you for adding you as donor.
								</h2>
								';
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
	  <script>
	$(document).ready(
				function(){					

		               	$("#COUNTRY").change(function(){
							var countr=$("#COUNTRY").val();
							//alert(city);
							$.post('get_state.php',{G_STATE_ID:countr},function(data){
							//	alert(data);
								$("#STATE").html(data);
							});
							
						});
						
							$("#STATE").change(function(){
							var stid=$("#STATE").val();
							//alert(city);
							$.post('get_city.php',{G_STATE_ID:stid},function(data){
							//	alert(data);
								$("#CITY").html(data);
							});
							
						});
					
						
							
				});
	
	
  $(function() {
    var availableTags = [
      <?php 
	  $sql="SELECT AREA_NAME FROM area";
							$result=$con->query($sql);
							
							if($result->num_rows>0)
							{
								$i=0;
								$n=$result->num_rows;
								while($row=$result->fetch_assoc())
								{   
									$i++;
									if($n!=$i)
									{
										echo '"'.$row['AREA_NAME'].'",';
									}
									else
									{
										echo '"'.$row['AREA_NAME'].'"';
									}
								}
								
							}
	  
	  
	  ?>
    ];
    $( "#AREA" ).autocomplete({
      source: availableTags
    });
  });
  
 </script>
 <script type="text/javascript">
$(document).ready(function(){
	$(".btn").on("click",function(){
		$('.menu').slideToggle(500);
	});
})
	
</script>
<script>$(document).ready(function(){
    $('[id^=CONTACT_1]').keypress(validateNumber);
});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
    	return true;
    }
};
    
	</script>
	<script>$(document).ready(function(){
    $('[id^=CONTACT_2]').keypress(validateNumber);
});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
    	return true;
    }
};




$(function() {
	


  $('#NAME').keydown(function (e) {

  
    if (e.shiftKey || e.ctrlKey || e.altKey) {

    
      e.preventDefault();
     
      
    } else {
    
      var key = e.keyCode;
      
      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
      
        e.preventDefault();
        
      }
    var e = document.getElementById("#NAME").innerHTML=error;


    }
    
  });
  
});

$(function() {

  $('#FATHER_NAME').keydown(function (e) {
  
    if (e.shiftKey || e.ctrlKey || e.altKey) {
    
      e.preventDefault();
     alert("error");

      
    } else {
    
      var key = e.keyCode;
      
      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
      
        e.preventDefault();

        
      }

    }

    
  });
  
});
    
	</script>
	<script type="text/javascript">function check()
         {
              if(document.getElementById('NAME').value==NULL || form.firstname.value.length==0)
              {
                  document.getElementById('errorname').value="this is an invalid name";
              }
         }</script>
	 
      </script>
      <script type="text/javascript">$(function() {
    var createAllErrors = function() {
        var form = $(this);
        var errorList = $('ul.errorMessages', form);
        
        var showAllErrorMessages = function() {
            errorList.empty();
            
            //Find all invalid fields within the form.
            form.find(':invalid').each(function(index, node) {

                //Find the field's corresponding label
                var label = $('label[for=' + node.id + ']');

                //Opera incorrectly does not fill the validationMessage property.
                var message = node.validationMessage || 'Invalid value.';
                errorList
                    .show()
                    .append('<li><span>' + label.html() + '</span> ' + message + '</li>');
            });
        };
        
        $('input[type=submit], button', form).on('click', showAllErrorMessages);
        $('input[type=text]', form).on('keypress', function(event) {
            //keyCode 13 is Enter
            if (event.keyCode == 13) {
                showAllErrorMessages();
            }
        });
    };
    
    $('form').each(createAllErrors);
});</script>

    </body>

    </html>
             