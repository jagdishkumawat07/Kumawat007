<!DOCTYPE html>
<html lang="en">
<head>
  <title>kumawat samaj</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <script src="css/boot_js.js"></script>
  <script src="css/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<?php include("top.php");?>

<div class="container">


<?php 
if(!isset($_REQUEST['action']))
{
	include("header.php");
}

?>

<?php include("middle.php");?>
<br>

<footer class="container-fluid" style="background:#000">
<div class="container" >
<div class="row">

<div class="col-md-3">

<h4 style="color:#FFF;">About Us</h4>
<p style="color:#fff;">8Bit System (8BIT) is a premium web development and web design firm since 2009. 8BIT always aims at infusion of latest technologies for advancements of Website and App development.</p>


</div>
<div class="col-md-3">
<h4 style="color:#FFF;">Important Link</h4>
<p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>

</div>
<div class="col-md-3"><h4 style="color:#FFF;">Contact Us</h4>
<p>
          <i class="glyphicon glyphicon-home"></i> New York, NY 10012, US</p>
        <p>
          <i class="glyphicon glyphicon-envelope"></i> info@example.com</p>
        <p>
          <i class="glyphicon glyphicon-phone"></i> + 01 234 567 88</p>
        <p>
          <i class="glyphicon glyphicon-phone"></i> + 01 234 567 89</p>
</div>
<div class="col-md-3"><h4 style="color:#FFF;">Social Links </h4>
<a href="#" class="fa fa-facebook"></a><br>

<a href="#" class="fa fa-twitter"></a><br>

<a href="#" class="fa fa-google"></a><br>

<a href="#" class="fa fa-linkedin"></a><br>

<a href="#" class="fa fa-youtube"></a><br>

</div>
</div>
  </div>
  
</footer>

</body>
</html>
