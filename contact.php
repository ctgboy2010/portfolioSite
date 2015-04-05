<?php 
	include_once('includes/header.php');	
 ?>

<!-- ==============================================
	DRIBBLE 
=============================================== -->	
<section id="contact" class="dark-bg light-typo padding-top">
	<div id="dribbble" class="container">
	<h1 class="dribbble-button"><a href="#" target="_blank">My Dribbble Shots</a></h1>
	<div class="row">
		<div class="col-md-2 col-sm-4 col-xs-6">
			<a href="#" target="_blank"><img class="img-responsive" src="assets/dribbble_1.jpg" alt=""></a>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6">
			<a href="#" target="_blank"><img class="img-responsive" src="assets/dribbble_2.jpg" alt=""></a>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6">
			<a href="#" target="_blank"><img class="img-responsive" src="assets/dribbble_3.jpg" alt=""></a>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6">
			<a href="#" target="_blank"><img class="img-responsive" src="assets/dribbble_4.jpg" alt=""></a>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6">
			<a href="#" target="_blank"><img class="img-responsive" src="assets/dribbble_5.jpg" alt=""></a>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6">
			<a href="#" target="_blank"><img class="img-responsive" src="assets/dribbble_6.jpg" alt=""></a>
		</div>
	</div>
	</div>
</section>
	
<!-- ==============================================
	CONTACT
=============================================== -->	
<section id="contact" class="dark-bg light-typo padding-top">
	<div class="container">
		<header class="section-header text-center">
			<h1 class="scrollimation scale-in in">Drop Me a Line</h1>
			<p>I am available for freelance.<br>Can't wait for the next exciting project! Could be yours?</p>
		</header>
		
		<form id="contact-form" class="bl_form text-center" action="" method="post" novalidate="">
			<span class="field-wrap scrollimation fade-right in">
				<label class="control-label" for="contact-name">Name</label>
				<div class="lb_wrap" style="position:relative; display: inline;">
					<input id="contact-name" name="contactName" class="label_better requiredField" data-new-placeholder="Name" placeholder="Name" data-error-empty="*Enter your name" type="text">
				</div>
			</span>
			<span class="field-wrap scrollimation fade-in in">
				<label class="control-label" for="contact-mail">Email</label>
				<div class="lb_wrap" style="position:relative; display: inline;">
					<input id="contact-mail" name="email" class="label_better requiredField" data-new-placeholder="Email Address" placeholder="Email Address" data-error-empty="*Enter your email" data-error-invalid="x Invalid email address" type="email">
				</div>
			</span>
			<span class="field-wrap scrollimation fade-left in">
				<label class="control-label" for="contact-message">Message</label>
				<div class="lb_wrap" style="position:relative; display: inline;">
					<textarea id="contact-message" name="comments" rows="1" class="label_better requiredField" data-new-placeholder="Message" placeholder="Message" data-error-empty="*Enter your message"></textarea>
				</div>
			</span>
					
			<p class="text-center">
				<button name="submit" type="submit" class="btn btn-meflat icon-left" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button>
			</p>
			<input name="submitted" id="submitted" value="true" type="hidden">
		</form>
	</div>
</section>	

<?php include_once('includes/footer.php'); ?>