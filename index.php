<?php
//fire up our application
require('config/bootstrap.php');

$email = isset($_GET['email']) ? $_GET['email'] : null;
$message = check_if_mail_sent($email);

$skills = [];
$html = ['src' => 'assets/skills-logos/html-5.svg', 'alt' => 'HTML 5'];
$css = ['src' => 'assets/skills-logos/css3.svg', 'alt' => 'CSS 3'];
$js = ['src' => 'assets/skills-logos/javascript.svg', 'alt' => 'Javascript'];
$jQuery = ['src' => 'assets/skills-logos/jquery-1.svg', 'alt' => 'jQuery'];
$php = ['src' => 'assets/skills-logos/php-logo.svg', 'alt' => 'jQuery'];

$skills = [$html, $css, $js, $jQuery];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70872117-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-70872117-3');
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!---Google Fonts--->
      <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto&display=swap" rel="stylesheet">
    <!---Personal Stylesheet--->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Jacob W Armstrong | Atlanta, GA</title>
  </head>
  <body>

    <nav id="header" class="navbar navbar-light bg-light sticky-top">
      <div class="container-md">
        <span class="navbar-brand mb-0 h1">
            <img id="header-avatar" class="rounded-circle mr-2 disappear" src="/assets/jake_2020_tighter_crop_800x800.jpg" width="40" height="40" alt="Jacob W Armstrong | Frontend Developer, CNC Programmer, Graphic Designer">
            jacobwarmstrong</span>
        <ul class="list-inline my-3">
          <li class="list-inline-item"><a href="https://twitter.com/jacobwarmstrong" target="new"><?php echo file_get_contents('assets/iconmonstr-twitter-1.svg'); ?></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/jacob_w_armstrong/" target="new"><?php echo file_get_contents('assets/iconmonstr-instagram-11.svg'); ?></a></li>
        </ul>
      </div> 
    </nav>

    <div class="container-md">
            <?php if ($message) : ?>
              <div class="alert alert-success my-3" role="alert"><?php echo $message; ?>
              </div>
            <?php endif; ?>
        <div id="intro" class="block">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3">Jacob W Armstrong from Atlanta, Georgia</h1>
                    <p>Thank you for visiting my website! My name is Jacob W Armstrong from Atlanta, Georgia. You could consider me a jack of all trades, and a master of none. Although, I prefer to think of myself more of a renaissance man.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-circle mb-4" src="assets/jake_2020_tighter_crop_800x800.jpg" alt="Jacob W Armstrong | Frontend Developer, CNC Programmer, Graphic Designer">

                </div>
            </div>



        </div>
        <div class="block">
            <h3 class="mb-3">My Wide Array Of Interests</h3>
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
            <p>If you are looking for a unique hire that can wear many different hats, I believe I may be candidate.</p>
            <h6>Skills</h6>
            <div class=" d-flex flex-row align-content-stretch flex-wrap my-3">
            <?php
            $dir = 'assets/skills-logos/';
            $files = scandir($dir);
            foreach ($files as $file) :
                if(strpos($file, '.') !== 0) : ?>
                    <div class="col-6 col-md-3 py-3 my-md-0 align-self-center align-items-center d-flex justify-content-center skills-logo">
                        <img class="p-0" src="<?php echo $dir . $file; ?>">
                    </div>
                <?php endif;
            endforeach;
            ?>
            </div>
        </div>
        <div class="block">
            <h3>A Brief Summary Of My Professional Career</h3>
            <p>I'm ready to continue writing new chapters to my story. Will you help me?</p>
            <ul>
                <li>Graduated from The University Of Georgia with a AB Studio Art Degree</li>
                <li>Started out of college as a Graphic Designer at AKO Signs. Learned CNC and how to design and build things from start to finish</li>
                <li>Became AKO Signs web designer and manager during this time</li>
                <li>Moved to Atlanta and transistioned into the film industry. Reached CNC Foreman within 2 years and lead construction builds on HBO's Watchmen and Netflix's Thunder Force</li>
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
      
    <footer class="footer p-4">
      <div class="container-md">
        jacobwarmstrong.com | Home of Jacob W Armstrong from Atlanta, Georgia
        <ul class="list-inline my-3">
          <li class="list-inline-item"><a href="https://twitter.com/jacobwarmstrong" target="new"><?php echo file_get_contents('assets/iconmonstr-twitter-1.svg'); ?></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/jacob_w_armstrong/" target="new"><?php echo file_get_contents('assets/iconmonstr-instagram-11.svg'); ?></a></li>
        </ul>
      </div>
    </footer>
      
      <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
      </script>
      <script src="js/animate-header-on-scroll.js"></script>

  </body>
</html>