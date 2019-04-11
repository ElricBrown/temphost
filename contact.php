<!DOCTYPE html>

<?php
$title = "Genesis | Contact";
?> 
<html lang="en">

<head>
  <?php include 'head.php';?>
</head>

<body id="page-top">

  <!-- Navigation -->
  <?php include 'navbar.php';?>

  <!-- Masthead -->
  <header class="masthead">

  </header>

  <!-- About Section -->
  <section class="page-section" id="about">
  <div class="container">
  <h2 class="text-center mt-0">Please fill in our contact form</h2>
      <hr class="divider my-4">
  <form id="contact-form" method="post" action="contact.php" role="form">

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
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Company *</label>
                    <input id="form_company" type="text" name="email" class="form-control" placeholder="Please enter your company name *" required="required" data-error="Valid company name is required.">
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
                <button type="submit" class="btn btn-primary btn-send btn-xl" value="Send message">Send message</button>  
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

<hr class="divider my-4 mt-4">
<h2 class="text-center mt-0">Or Contact one of our Representitives</h2>
      <hr class="divider my-4">

<div class="row">
        <div class="col-lg-8">
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at tempor. Nullam non nisi est sit amet facilisis magna. In fermentum et sollicitudin ac orci phasellus.
            </br> </br> 
            <!-- <a class="btn btn-light btn-xl" href="our-story.php">Read More</a> -->
        </p>
      </div>
      <div class="col-lg-4 ">
      <i class="fas fa-8x fa-laptop-code text-primary mb-4"></i>
      </div>

      <div class="row mt-3">
      <div class="col-lg-4 ">
      <i class="fas fa-8x fa-laptop-code text-primary mb-4"></i>
         </div>
        <div class="col-lg-8">
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at tempor. Nullam non nisi est sit amet facilisis magna. In fermentum et sollicitudin ac orci phasellus.
            </br> </br> 
            <!-- <a class="btn btn-light btn-xl" href="our-story.php">Read More</a> -->
        </p>
      </div>
</div>
  </section>


  <!-- Footer -->
<?php include 'footer.php'; ?>
<?php include 'form.php';?>
</body>

</html>
