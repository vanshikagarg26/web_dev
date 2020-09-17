<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
            <a href="single.php" class="h-entry mb-30 v-height gradient" style="background-image: url('images/img_1.jpg');">
              
              <div class="text">
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.php" class="h-entry v-height gradient" style="background-image: url('images/img_2.jpg');">
              
              <div class="text">
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.php" class="h-entry img-5 h-100 gradient" style="background-image: url('images/img_v_1.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">Travel</span>
                  <span class="post-category bg-primary">Food</span>
                </div>
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.php" class="h-entry mb-30 v-height gradient" style="background-image: url('images/img_3.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.php" class="h-entry v-height gradient" style="background-image: url('images/img_4.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>


          </div>
        </div>
      </div>
    </div> 
    <?php
 $result=getStory($link);
  while($row=$result->fetch_assoc()){
	  component($row['stitle'],$row['content'],$row['sid']);
  }
  ?>
    
  </div>
 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</html>