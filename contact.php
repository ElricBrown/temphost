<!DOCTYPE html>

<?php
$title = "Genesis | Contact";
?> 
<html lang="en">

<head>
  <?php include 'head.php';?>
</head>

<body id="page-top">
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
  <!-- Navigation -->
  <?php include 'navbar.php';?>


  <!-- Masthead -->
  <div class="hero-image-cont">
  <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <!-- <img src="img/genesis-01.png" alt="" srcset="" width="50%" height="50%"> -->
          <!-- <div class="typewriter"> -->
            <h3 class="text-white">CONTACT US</h3>
          <!-- </div> -->
          
          
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5"></p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
</div> 


  <!-- About Section -->
  <section class="page-section" id="about">
  <div class="container">
  <h2 class="text-center mt-0">Please fill in our contact form</h2>
      <hr class="divider my-4">


<!-- Start Contact Form -->
<form id="contact-form" action="https://formspree.io/ryno.genesisbc@gmail.com" method="POST" />

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="_replyto" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Company *</label>
                    <input id="form_company" type="text" name="company" class="form-control" placeholder="Please enter your company name *" required="required" data-error="Valid company name is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <!-- <input type="submit" class="btn btn-primary btn-send" value="Send message"> -->
                <button type="submit" class="btn btn-primary btn-send btn-xl" value="Send message" name="Send">Send message</button>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted mt-3">
                    <strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

</form>
<!-- End Contact Form -->


  </section>
  <?php include 'footer.php'; ?>
<!-- </div> -->
<script>
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 3000);
	
});
</script>


<script src="form.js"></script>
  <!-- Footer -->

</body>

</html>
