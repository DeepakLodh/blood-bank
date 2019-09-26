<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">

<?php
include"head.php" 
?>
<body>

<?php
	 include"top_nav.php";
?>
           <div class="grid-container">
              
            
    

			    <div class="cntpg">
				      <h3 style="color: red;">Send us a Message</h3><hr>
                    <form method="post" action="contact.php" role="form" >
                         
                          <div class="txttb">
                              <label>Full Name:</label><br>
                              <input type="text"  name="name" required size="60">
                          </div>
                       
                        
                        <div class="txttb">
                            <label>Phone Number:</label><br>
                            <input type="tel"  name="phone" required size="60">
                        </div>
                        
                        
                        
                        <div class="txttb">
                            <label>Email Address:</label><br>
                            <input type="email"  name="email" required size="60">
                         </div>
                      
                         <div class="txttb"> 
                            <label>Message:</label><br>
                            <textarea rows="5" cols="60" class="form-control" name="message" required maxlength="999" size:"30"></textarea>
                         </div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn3" name="submit" style="cursor:pointer;"><i class='fa fa-send'></i> Send Message</button>
                </form>
                <?php
                    if(isset($_POST["submit"]))
                    {
                     $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
                        if($con->query($sql))
                {
                    echo '
                     <h2 style="border:1px solid black;background-color:lightgray;
                     ">
                       
                        Success! Your message has been send successfully.
                        </h2>
                    
                    
                    
                    ';
                }
                    }
                ?>


            </div>


            
				
              
			
			
            <div class="cntpge4">
                <h3 style="color: #070e0f;font-size:25px;">Contact Details</h3>
                <p style="font-family: verdana;font-size: 15px;">
                    Blood Bank &amp; <br>somaiya medical trust <br>
					34/44 ,Rajawadi road,<br>
					vidyavihar-400077.<br>
					Mumbai.
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>:8286378326 </p>
                <p><i class="fa fa-envelope"></i> 
                    <abbr title="Email">E-mail us</abbr>: <a href="#" >deepaklodh09@gmail.com</a>
                </p>
                <p><i class="fa fa-clock"></i> 
                    <abbr title="Hours">H</abbr>: 24*7</p>
				<p><i class="fa fa-globe"></i> 
                    <abbr title="Website">W</abbr>: <a href="index.php">/www.somaiyabloodtrust.org</a></p>
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </li>
                </ul>
                <a class="direction-link" target="_self" href="//maps.google.com/maps?f=d&amp;daddr=37.422230,-122.084058&amp;hl=en" style="color: red;"><i class="fas fa-location-arrow"></i> Get Directions</a>




                

            </div>
        
        

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