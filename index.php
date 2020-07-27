<?php
require __DIR__ . '/vendor/autoload.php';

if(isset($_GET['email']) && $_GET['email'] == 'success') {
    $message = 'Your Mail was Sent. Thank you.';
} else {
    $message = false;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!---Google Fonts--->
      <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto&display=swap" rel="stylesheet">
    <!---Personal Stylesheet--->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Jacob W Armstrong | Atlanta, GA</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
      <div class="container-md">
        <span class="navbar-brand mb-0 h1">jacobwarmstrong</span>
      </div>
      
    </nav>

    <div class="container-md">
            <?php if ($message) : ?>
              <div class="alert alert-success" role="alert"><?php echo $message; ?>
              </div>
            <?php endif; ?>
        <div class="block">
            <div class="block-highlighter"></div>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3">Jacob W Armstrong from Atlanta, Georgia</h1>
                    <p>Welcome to my website! You could consider me a jack of all trades, and a master of none. Although, I prefer to think of myself more of a renaissance man.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-circle mb-4" src="assets/jake_2020_tighter_crop_800x800.jpg" alt="Jacob W Armstrong | Frontend Developer, CNC Programmer, Graphic Designer">
                </div>
            </div>



        </div>
        <div class="block">
            <h3 class="mb-3">A Wide Array Of Interests</h3>
            <p>Does curiousity kill the cat? Sometimes I wonder if all my various endeavors lead to a lot of unfinished business. But then again, variety is the spice of life, isn't it?</p>
            <h6>Things That Get Me Up In The Mornings</h6>
            <ul class="">
                <li>Frontend Development</li>
                <li>CNC &amp; Digital Manufacturing</li>
                <li>Digital Marketing &amp; SEO</li>
                <li>Graphic Design &amp; Illustration</li>
                <li>Motorsports</li>
                <li>Running &amp; Physical Fitness</li>
            </ul>
        </div>
        <div class="block">
            <h3 class="mb-3">What Do I Bring To The Table?</h3>
            <p>If you are looking for a unique hire that can wear many different hats, I think I am definitely a candidate.</p>
            <h6>Skills</h6>
            <ul>
                <li>HTML/CSS</li>
                <li>PHP (OOP)</li>
                <li>SQL Databases</li>
                <li>Bootstrap</li>
                <li>Javascript</li>
                <li>JQuery</li>
                <li>WordPress</li>
                <li>WooCommerce</li>
                <li>Photoshop</li>
                <li>Illustrator</li>
                <li>Premier</li>
                <li>Rhino</li>
                <li>Sketchup</li>
                <li>V-Carve/Aspire</li>
                <li>FANUC Controllers</li>
                <li>G-code</li>
                <li>Google Analytics</li>
                <li>Moz Pro</li>
            </ul>
        </div>
        <div class="block">
            <h3>A Brief Summary Of My Professional Career</h3>
            <p>I'm ready to continue writing new chapters to my story. Will you help me?</p>
            <ul>
                <li>Graduated from The University Of Georgia with a AB Studio Art Degree</li>
                <li>Started as a Graphic Designer at a local sign shop. Learned CNC and how to design and build things from start to finish</li>
                <li>Became AKO Signs web designer and manager during this time</li>
                <li>Moved to Atlanta and transistioned into the film industry. Became CNC Foreman in 2 years and lead construction builds on HBO's Watchmen and Netflix's Thunder Force</li>
            </ul>
        </div>
        <div class="block">
            <h3>Interested In Hearing More?</h3>
            <p>You can reach me at the form below, or you can hit me up on twitter!</p>
        <form method="post" action="submit-form.php">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div> 

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/animate.js"></script>
  </body>
</html>