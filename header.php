<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Medelec</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
<?php wp_head();?>
</head>

<body <?php body_class();?>>
  <header>
    <div class="main-banner">
      <!--<img src="images/main-banner.png" alt="medelec factory">-->
      <!--<h2>Main Navigation</h2>-->
      <div class="topnav">
        <ul class="nav">
          <h1 class="logo">Medelec</h1>
          <li class="nav-item"><a href="">Home</a></li>
          <li class="nav-item"><a href="">About Us</a></li>
          <li class="nav-item"><a href="">Products</a></li>
          <li class="nav-item"><a href="">News</a></li>
          <li class="nav-item"><a href="">Contact Us</a></li>


          <!--<h3>Social Navigation</h3>-->
          <ul id="social-nav">
            <li><a href="in"><img src="images/in.png"></a></li>
            <li><a href="fb"><img src="images/f.png"></a></li>
            <li><a href="tw"><img src="images/tw.png"></a></li>
            <li><a href="g+"><img src="images/g+.png"></a></li>
          </ul>
        </ul>
        </nav>
      </div>
    </div>
    </div>
  </header>

  <!--Start homepage content-->
  <div id="devoted">
    <div class="devoted-text">
      <p>Devoted to Achieving <span class="red">Reliable Switchgears</span>
        <span class="since">est 1977
          <button type="button" class="btn">Get in touch</button></span>
      </p>
    </div>
  </div>
  <div id="wrapper">


    <?php get_template_part('parts/slider1'); ?>

    
