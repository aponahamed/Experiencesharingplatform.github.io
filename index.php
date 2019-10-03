<?php session_start();
include('config/profile_details_exp.php'); 
?>
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
  <style>
    table,tr,td,input{
      margin:5px;
      padding: 5px;
      border-radius: 3px;
    }
  </style>
</head>
<body>

<!-- navbar link -->
    
  <?php include('layouts/navbar.php') ;?>

  <!-- User signup modals -->

<div class="container">
  <div class="row mt-5">
    
  </div>
</div>

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel mt-5">
    <div id="carousel" class="owl-carousel owl-theme mt-5">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <a href=""><p class="intro-title-top">Daffodil<br>International
                      <br>University</p></a>
                    <h2 class="intro-title mb-4">
                      <span class="color-b">Exper</span>ience
                      <br><span style="font-size:50px;">Sharing </span><span class="color-b"style="font-size:50px;">Platform</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <a href=""><p class="intro-title-top">Daffodil<br>International
                      <br>University</p></a>
                      <h2 class="intro-title mb-4">
                        <span class="color-b">Exper</span>ience
                          <br><span style="font-size:50px;">Sharing </span><span class="color-b"style="font-size:50px;">Platform</span>
                      </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <a href=""><p class="intro-title-top">Daffodil<br>International
                      <br>University</p></a>
                    <h2 class="intro-title mb-4">
                      <span class="color-b">Exper</span>ience
                      <br><span style="font-size:50px;">Sharing </span><span class="color-b"style="font-size:50px;">Platform</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

						<!-- =======
		experienced description and profile view start
		==========-->
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-md-12  mt-5 mb-3">
					<h3 style="color:#2eca6a;">Description of Experienced Person</h3>
					<hr>
				</div>
				<div class="col-md-12">
					<p class=" text-justify">Experience Sharing platform is the web based platform where we can meet an experiences persons and get value able knowledge.This platform is totally free so it is helpfull for all people who need solving problems or gain interested sides. 

          So,this is the thing Youthway is the platform that provide sharing experience and motivation.Here we have create profile system that anyone find out by search option and connect with them.</br>

          Finally we can say if this platform will helps all of the people. It will help people to make right decision and also make self-confidence,that what does he need to do for his skill development.</br>
					<span class="button text-right my-3"><a href="experience.php">Create Profile</a></span>
				</div>
			</div>
		</div>

		<!-- ======== experienced description and profile view End===========-->
		 <div class="container">
        <div class="row">
			<?php
			$result = [];
			$ch = curl_init();
			$url ="http://localhost/Final-Project/config/profile_show_exp.php";
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
		
		
     
          <div class="col-md-4">
          <div class="card">
            <div class="card-header m-0 text-center">
              <img src="<?php  echo $profile->image; ?>" alt="images" style="height:240px;width:240px;">
            </div>
            <div class="card-body text-center">
              <h6><?php  echo $profile->F_name;?></h6>
              <p> <?php  echo $profile->Education;?></p>
              <p><?php  echo $profile->Email;?></p>
              <span><a href="profile_exp.php?id=<?php echo $profile->id; ?>">View Profile</a></span>
            </div>
            <div class="card-footer text-center">
              <a href="<?php  echo $profile->facebook;?>" class="fa fa-facebook"style="font-size:28px;"></a>
              <a href="<?php  echo $profile->twitter;?>"class="fa fa-twitter mx-3"style="font-size:28px;"></a>
              <a href="<?php  echo $profile->skype;?>" class="fa fa-skype"style="font-size:28px;"></a>
            </div>
          </div>
        </div>
     

      
	  		            <?php 
				}
							
			?>
					  
              </div>
      </div>      
	  

<!-- =======
    experienced end !!
    ==========-->


     <!-- ======== View More Button===========-->

    <div class="container">
      <div class="row mt-2">
        <div class="col-md-10">
          || || ||
        </div>
        <div class="col-md-2">
          <p class="my-3 "><a href="all_profile.php">View More Profiles</a></p>
        </div>
      </div>
    </div>
    <!-- ======== View More Button End===========-->

	  
				<!-- =======
		experienced description and profile view start
		==========-->
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-5 mb-3">
					<h3 style="color:#2eca6a;">Description of Daffodil Person</h3>
					<hr>
				</div>
				<div class="col-md-12">
					<p class="text-justify">The following Graduation Writing Proficiency Examination essays were written by HSU students during a regularly scheduled GWPE.  Except for the elimination of cross-outs, the essays are reproduced here exactly as written.  Insofar as possible, the essays were chosen to represent the entire range of possible scores.  (No essay received a score of One on Essay Topic I.)  The majors represented by the authors of these essays are, in alphabetical order, Art, Biology, Business Administration, Environmental Resources Engineering, Fisheries, Geography, Geology, Industrial Arts, and Resource Planning and Interpretation.
					<span class="button my-4"><a href="daffodil.php">Create Profile</a></span>
				</div>
			</div>
		</div>

		<!-- ======== experienced person description and profile view End===========-->


    <!-- ======== Daffodil person description and profile view start===========-->
    <div class="container">
        <div class="row">

      <?php
      $result = [];
      $ch = curl_init();
      $url ="http://localhost/Final-Project/config/profile_show_diu.php";
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

          <div class="col-md-4">
          <div class="card">
            <div class="card-header m-0 text-center">
              <img src="<?php  echo $profile->image; ?>" alt="images" style="height:240px;width:240px;">
            </div>
            <div class="card-body text-center">
              <h5><?php  echo $profile->F_name;?></h5>
              <h6> <?php  echo $profile->Education;?></h6>
              <h6><?php  echo $profile->Email;?></h6>
              <hp>Daffodil International University</p>
              <span><a href="profile_diu.php?id=<?php echo $profile->id; ?>">View Profile</a></span>
            </div>
            <div class="card-footer text-center">
              <a href="<?php  echo $profile->facebook;?>" class="fa fa-facebook"style="font-size:28px;"></a>
              <a href="<?php  echo $profile->twitter;?>" class="fa fa-twitter mx-3"style="font-size:28px;"></a>
              <a href="<?php  echo $profile->skype;?>" class="fa fa-skype"style="font-size:28px;"></a>
            </div>
          </div>
        </div>

                        <?php 
        }
              
      ?>
        </div>
      </div>
    <!-- ======== Daffodil person description and profile view End===========-->


    <!-- ======== View More Button===========-->

    <div class="container">
      <div class="row mt-2">
        <div class="col-md-10">
          ||  ||  ||
        </div>
        <div class="col-md-2">
          <p class=" my-3"><a href="all_profile.php">View More Profiles</a></p>
        </div>
      </div>
    </div>
    <!-- ======== View More Button End===========-->

	
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

