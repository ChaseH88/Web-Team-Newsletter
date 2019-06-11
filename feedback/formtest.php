<!DOCTYPE HTML>  
<html>
   <head>
				<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
   </head>
   <body>
				
				<?php require 'goldfinger.php';?>
				
      <form id="mainForm" method="post" action="feedback/mail.php">
							
							
							<div id="secure-form">
<section>
<div class="formLeft">
<div class="form-group"><label for="Name">Name</label><input id="Name" maxlength="75" name="Name" placeholder="" title="Please enter your full name" type="text" /></div>

<div class="form-group"><label for="Email">E-mail</label><input id="Email" name="Email" placeholder="" title="Please enter a valid email address" type="email" /></div>
	
	
	<input id="Email" name="edition" value="January 2019" placeholder="" type="hidden" />

<div class="form-group"><label>How would you rate this month&#39;s newsletter?<br />
(1 = Lame, 10 = Amazing)</label>

<div class="radio"><label for="1">1</label><input id="1" name="Rating" type="radio" value="1" /></div>
<div class="radio"><label for="2">2</label><input id="2" name="Rating" type="radio" value="2" /></div>
<div class="radio"><label for="3">3</label><input id="3" name="Rating" type="radio" value="3" /></div>
<div class="radio"><label for="4">4</label><input id="4" name="Rating" type="radio" value="4" /></div>
<div class="radio"><label for="5">5</label><input id="5" name="Rating" type="radio" value="5" /></div>
<div class="radio"><label for="6">6</label><input id="6" name="Rating" type="radio" value="6" /></div>
<div class="radio"><label for="7">7</label><input id="7" name="Rating" type="radio" value="7" /></div>
<div class="radio"><label for="8">8</label><input id="8" name="Rating" type="radio" value="8" /></div>
<div class="radio"><label for="9">9</label><input id="9" name="Rating" type="radio" value="9" /></div>
<div class="radio"><label for="10">10</label><input id="10" name="Rating" type="radio" value="10" /></div>
</div>
</div>

<div class="formRight">
<div class="form-group"><label for="Name"><span style="color:#FF0000;">* </span>Feedback or Suggestions?</label>

<div class="form-element"><textarea id="comments" name="comments" style="margin-top: 0px; margin-bottom: 0px; height: 130px;"></textarea></div>
</div>
</div>
</section>
</div>
							
         <div class="formButtons">
										<input type="submit" name="submit" value="Submit">  
										<input id="reset" name="reset" type="reset" />
         </div>
      </form>

   </body>
</html>
<!--secure-form-->