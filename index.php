<?php
 $page = '';
     if(isset($_GET['page'])){
         $page = $_GET['page'];
     }else{
         $page = 'home';
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Oceangreen Technologies - We Work For Excellence</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="Oceangreen Technology, Web, World Wide Web, Web Services, Web Applications, " />
  <meta  name="description" content="Oceangreen Technology is Leading Web Developing Company focusing for Excellence Work"/>
    <meta property="og:sitename" content="Oceangreen Technologies - We Work For Excellence" />
    <meta property="og:url" content="http://oceangreen.ml/" />
    <meta property="og:title" content="Oceangreen Technologies - We Work For Excellence" />
    <meta property="og:description" content="Oceangreen Technology is Leading Web Developing Company focusing for Excellence Work" />
    <meta property="og:type" content="Website" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locality" content="Pandharkawada" />
    <meta property="og:region" content="Maharashtra" />
    <meta property="og:postal-code" content="445302" />
    <meta property="og:country-name" content="India" />
    <meta name="theme-color" content="#000">
    <?php include_once"include/config.php";?>


  <!-- Favicons -->
  <link href="img/favicon.png?i=Dmsg" rel="icon">
  <link href="img/apple-touch-icon.png?i=Dmsg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css?i=Dmsg" rel="stylesheet">
  

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css?i=Dmsg" rel="stylesheet">
  <link href="lib/animate/animate.min.css?i=Dmsg" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css?i=Dmsg" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css?i=Dmsg" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css?i=Dmsg" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css?v.0.0.1" rel="stylesheet">

  <?php if($page!='home'){ ?>
  <link href="css/oceangreen.css?i=Dmsg" rel="stylesheet">
  <?php } ?>

  <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>

 
</head>

<body>

  <!-- #header -->
    <?php include_once"include/header_index.php"; ?>
  <!-- #header -->

 <?php include_once"pages/".$page.".php";?>
 <?php //include_once"index/index_intro.php";?>



  <!-- #footer -->
    <?php include_once"include/footer.php"; ?>
  <!-- #footer -->
    <style type="text/css">
      .back-to-top{
        right: 100px;
        bottom: 30px;
      }
    </style>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js?i=Dmsg"></script>
  <script src="lib/jquery/jquery-migrate.min.js?i=Dmsg"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js?i=Dmsg"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js?i=Dmsg"></script>

  <script src="lib/easing/easing.min.js?i=Dmsg"></script>
  <script src="lib/superfish/hoverIntent.js?i=Dmsg"></script>
  <script src="lib/superfish/superfish.min.js?i=Dmsg"></script>
  <script src="lib/wow/wow.min.js?i=Dmsg"></script>
  <script src="lib/waypoints/waypoints.min.js?i=Dmsg"></script>
  <script src="lib/counterup/counterup.min.js?i=Dmsg"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js?i=Dmsg"></script>
  <script src="lib/isotope/isotope.pkgd.min.js?i=Dmsg"></script>
  <script src="lib/lightbox/js/lightbox.min.js?i=Dmsg"></script>
  
  <!-- Contact Form JavaScript File -->
  <!-- <script src="contactform/contactform.js"></script> -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js?i=Dmsg"></script>
  <script src="login.php"></script>
  
  <!-- <script src="js/contact_react_component.js?newJS"></script> -->
<div id="contact_component"></div>

</body>
</html>
