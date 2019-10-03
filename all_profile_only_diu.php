
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Experience Sharing Platform</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="A" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
</head>
<body>

<?php include('layouts/navbar.php'); ?>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-12 mt-3">
      
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row mt-5 pt-4">
    <div class="col-md-6 mt-5 ">
      <h2 style=" color:#2eca6a;">Daffodil Profile</h2>
    </div>
    <div class="col-md-6 mt-5 text-right">
      <span class=" text-right active btn" style="border:1px solid #2eca6a; padding:3px; border-radius: 5px;">
        <a href="all_profile.php">All_profile</a>
      </span>
      <span class=" text-right btn" style="border:1px solid #2eca6a; padding:3px; border-radius: 5px;">
        <a href="all_profile_only_diu.php">Daffodil_profile</a>
      </span>
      <span class=" text-right btn" style="border:1px solid #2eca6a; padding:3px; border-radius: 5px;">
        <a href="all_profile_only_exp.php">Experience_profile</a>
      </span>
    </div>
  </div>
</div>
  <hr>



    <div class="container">
    <div class="row">
      <?php
      $result = [];
      $ch = curl_init();
      $url ="http://localhost/Final-Project/config/all_profile_show_diu.php";
      $value = "req=profile";
      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$value);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $result = curl_exec($ch);
      curl_close ($ch);
      $data = json_decode($result);
              
      foreach($data as $profile){
                //print_r($product);
                /* echo $product->img;
                die(); */        
      ?> 
          <div class="col-md-4 mt-4"><hr>
          <div class="card">
            <div class="card-header m-0 text-center">
              <img src="<?php  echo $profile->image; ?>" alt="images" style="height:240px;width:240px;">
            </div>
            <div class="card-body text-center">
              <h5><?php  echo $profile->F_name;?></h5>
              <h6> <?php  echo $profile->Education;?></h6>
              <p><?php  echo $profile->Email;?></p>
              <span><a href="profile_diu.php?id=<?php echo $profile->id; ?>">View Profile</a></span>
            </div>
            <div class="card-footer text-center">
              <p class="lead">
                <a href="<?php echo $profile->facebook; ?>">
                  <i class="fa fa-facebook p-2"style="font-size:25px;"></i>
                </a>
                <a href="<?php echo $profile->twitter; ?>">
                  <i class="fa fa-twitter p-2"style="font-size:25px;"></i>
                </a>
                <a href="<?php echo $profile->skype; ?>">
                  <i class="fa fa-skype p-2"style="font-size:25px;"></i>
                </a>
              </p>
            </div>
          </div>
        </div>
     <?php 
        }      
      ?>
    </div>
  </div>




  <hr>
	<?php include('layouts/logo.php') ;?>
  <!-- footer part link -->
  <?php include('layouts/footer.php'); ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
