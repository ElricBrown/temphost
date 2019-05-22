<!DOCTYPE html>

<?php
$title = "Genesis | Our Story";
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
  <div class="hero-image">
  <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <!-- <img src="img/genesis-01.png" alt="" srcset="" width="50%" height="50%"> -->
          <div>
          <h3 class="text-white">OUR STORY</h3>
          </div>
         
          
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
    <div class="container justify-content-center">
        <div class="container">
      <h2 class="text-center">About Us</h2>
      <hr class="divider my-4">
    </div>
    <div>
      <p>Passive fire protection pertains to the compartmentalization of an overall building through the use of Approved Fire Rated Materials acting together to compose a Fire Rated System. The overall building structure is then broken down into smaller fire compartments, consisting of one or more rooms and/or floors, known as fire zones. This compartmentalization prevents and/or slows the spread of fire from the area/compartment of fire origin to other areas within the fire zone, thus limiting damage and providing safe passage for the building occupants to evacuate the building.</p>
      <p>
      Our Company specializes in all types of Passive Fire Protection, utilizing the highest quality products recognised by the industry, and are certified by the relevant authorities, British Standards OR SABS.
      </p>
        <p>Genesis Fire Protection offers a variety of fire protection solutions which include:</p>
      <ul>
      <li>Intumescent Coating (Structural Steel and Timber)</li>
      <li>Heavy and light industrial coatings (Structural Steel and Timber)</li>
      <li>Anti-Corrosive coatings</li>
      <li>Fire Doors, Frames and Ironmongery</li>
      <li>Fire Signage</li>
      <li>Fire Extinguishers</li>
      <li>Passive Fire Stopping Systems </li>
      <li>Calcium Silicate Fire Rated Partitions</li>
      <li>Drywall Partitions and Ceilings</li>
      <li>Mechanical and Static Fire Curtain Applications</li>
      </ul>

      <p>We are a level 1 BBEEE contributor, who believes in ethical and excellent customer service, satisfaction and developing our staff and communities.</p>

      <div class="container">
      <h2 class="text-center">Our Mission</h2>
      <hr class="divider my-4">
    </div>
    <p class="">Genesis Fire Protection (Pty) Ltd is a company built on a solid foundation of friendship, professionalism, efficiency, ethics and accountability, and these attributes are what we offer all our clients. We believe that our client’s needs are our priority and as such, we strive to establish business relationships as partners. We strive to “go the extra mile” and believe that <strong>“YOU’RE ONLY AS GOOD AS THE LAST JOB YOU WALK OFF”.</strong></p>
    </div>
  </section>




  <!-- Footer -->
<?php include 'footer.php'; ?>
<script>
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 3000);
	
});
</script>
</body>

</html>
