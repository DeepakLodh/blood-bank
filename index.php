<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>
<?php include"top_nav.php";?>
<div class="header">
    <img src="images/pic1.jpg" alt="blooad bank poster" width="100%" height="400px">
</div>
<div class="clm1">
	<h2>Welcome to blood bank management system</h2><hr>
	</div>
	<div class="contain">
 <div class="tbl1">
		<h4><i class="fa fa-fw fa-user"></i>Donar Registration</h4>
		<div class="cnt1"><p>Have you at anytime witnessed a relative of yours or a close friend searching frantically 
		for a blood donor,when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?
	     This thought laid our foundation.</p></div>
		<div class="btn1"><a href="donor_reg.php" target="_self">view more</a></div>
	</div>
	<div class="tbl2">
		<h4><i class="fa fa-fw fa-medkit"></i>Need Help</h4>
		<div class="cnt2"><p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims,
		 premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.
		</p></div>
		<div class="btn2"><a href="request_blood.php" target="_self">view more</a></div>
	</div>
	<div class="tbl3">
		<h4><i class="fa fa-fw fa-search"></i>search Donar</h4>
		<div class="cnt3"><p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.
		Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed..</p></div>
		<div class="btn3"><a href="Search_donor.php" target="_self">view more</a></div>
	</div>
</div>
<div>
<div class="camp">
	<h2>Blood Donar Camp</h2><hr>
</div>
<div class="camp2">
	<div class="gallery">
  <a target="_self" href="images/p1.jpg">
    <img src="images/p1.jpg" alt="man" width="300" height="200">
  </a>
    </div>

<div class="gallery">
  <a target="_self" href="images/p2.jpg">
    <img src="images/p2.jpg" alt="something" width="300" height="200">
  </a>
</div>
  
<div class="gallery">
  <a target="_self" href="images/p3.jpg">
    <img src="images/p3.jpg" alt="wait" width="300" height="200">
  </a>
</div>
  
<div class="gallery">
  <a target="_self" href="images/p5.jpg">
    <img src="images/p5.jpg" alt="smile" width="300" height="200">
  </a>
</div>
<div class="gallery">
  <a target="_self" href="images/p6.jpg">
    <img src="images/p6.jpg" alt="be strong" width="300" height="200">
  </a>
</div>
<div class="gallery">
  <a target="_self" href="images/p4.jpg">
    <img src="images/p4.jpg" alt="stronger" width="300" height="200">
  </a>
</div>
</div>
</div>
<div class="cnt">
	<h2>Why we need you to give blood ?</h2><hr>

	<div class="cnt1">
		<ul>
			<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>
			<li>Many people would not be alive today if donors had not generously given their blood.</li>
			<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for
			 people to give blood.</li>
			<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for
			 people to give blood.</li>
			<li>Most people between the ages of 17-65 are able to give blood.</li>
			<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood,
			 so we can make sure we have enough blood in the future.</li>
		</ul>
	</div>
	<div class="imgcnt"><img src="images/post2.jpg"></div>
	<div class="imgcnt1"><img src="images/post.jpg" width="300"></div>
</div>
<div class="call">
	<div class="call2">
		<p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
	</div>
	<div class="cllbtn">
	<a href="contact.php"><i class="fa fa-phone"></i>Call to Action</a>
</div>
</div><br>
<?php include"footer.php";?>
<script type="text/javascript">
$(document).ready(function(){
	$(".btn").on("click",function(){
		$('.menu').slideToggle(500);
	});
})
	
</script>

</body>
</html>