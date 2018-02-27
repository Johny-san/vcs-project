<!DOCTYPE html>
<html>
<head>
  <meta name="charset" content="UTF-8">
  <title>Baigiamasis_OW</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="fonts/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick-theme.css"/>
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
  <?php wp_head() ?>


<body>
<!-- START OF HEADER -->
  <header>
    <div class="container nav-flex-container" id="top">
      <div class="logo ">
        <!-- <a href="#"><img src="images\Overwatch_text_logo.svg.png" alt="Overwatch logo"><p>mini guides</p></a> -->
          <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
          echo "<img src='$logo'>";
          ?>
      </div>
      <!-- <div class="nav-container">
        <ul class="nav">
          <li><i class="fa fa-trash fa-3x" aria-hidden="true" style="margin-right:10px"></i></li>
          <li><a href="pages/csstest.html" target="_blank">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">About</a></il>
        </ul>
      </div> -->
      <?php wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'menu_class' => 'nav',
        'container' => 'div',
        'container-class' => 'nav-container'
      )); ?>

    </div>

      </div>
      <?php wp_nav_menu(array(
        'theme_location' => 'top-menu-2',
        'menu_class' => 'tabs',
        'container' => 'div',
        'container-class' => 'tabs-container'
      )); ?>
  </header>
