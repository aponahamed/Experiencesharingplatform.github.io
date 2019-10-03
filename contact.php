
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

<?php include('layouts/navbar.php') ;?>

  
  <!--section2 is start in profile in supervisor-->
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12 ">
        <h1 class="mt-5"></h1>
      </div>
      <div class="col-md-12 ">
        <p class="mt-2"></p>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4 my-5">
          <div class="card text-center">
            <div class="card-head">
              <img src="img/foun1.jpg" alt="founder" class="founder-img mt-3 py-0"style="border-radius:50%;max-height:300px;max-width:50%;">
            </div><hr>
            <div class="card-body">
              <p class="lead"style="font-size: 20px;"><b>Enamul Karim</b></p>
              <h6>Lecturer <br></h6>
              <h6>Department Of CSE <br></h6>
              <h6>Daffodil International University</h6>
              <h6>enamul.cse@diu.edu.bd</h6>
            </div>
          </div>
          <div class="col-md-4">
        
          </div>
      </div>
    </div>
  </div>


  
  <!--section3 is start editor profile -->
  
  <div class="section1">
    <div class="container">   
 
    <div class="row">
        <div class="col-md-12 my-4">
          <h2 style=" color:#2eca6a;">Team Members</h2>
        </div>
    </div>

      <div class="row ml-5">
        <div class="col-md-3 mt-2">
          <div class="card text-center">
            <div class="card-head">
              <img src="img/foun2.jpg" alt="founder" class="founder-img my-2 py-0"style="border-radius:50%;max-height:200px;max-width:50%;">
            </div><hr>
            <div class="card-body mb-2 p-1">
              <p class="lead"style="font-size: 20px;"><b>Sababa Islam</b></p>
              <h6>B.Sc in CSE<br></h6>
              <h6>Daffodil International University</h6>
              <h6>sababa15-7992@diu.edu.bd</h6>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          
        </div>        
        <div class="col-md-3 mt-2">
          <div class="card text-center">
            <div class="card-head">
              <img src="img/foun3.jpg" alt="founder" class="founder-img my-2 py-0"style="border-radius:50%;max-height:200px;max-width:50%;">
            </div><hr>
            <div class="card-body mb-2 p-1">
              <p class="lead"style="font-size: 20px;"><b>Sababa Islam</b></p>
              <h6>B.Sc in CSE<br></h6>
              <h6>Daffodil International University</h6>
              <h6>sababa15-7992@diu.edu.bd</h6>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          
        </div>
        <div class="col-md-3 mt-2">
          <div class="card text-center">
            <div class="card-head">
              <img src="img/foun4.jpg" alt="founder" class="founder-img my-2 py-0"style="border-radius:50%;max-height:200px;max-width:50%;">
            </div><hr>
            <div class="card-body mb-2 p-1">
              <p class="lead"style="font-size: 20px;"><b>Anamul Hasan</b></p>
              <h6>B.Sc in CSE<br></h6>
              <h6>Daffodil International University</h6>
              <h6>anamul15-7992@diu.edu.bd</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  
  
  <!-- view comment in this part start-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-4">
          <h2 style=" color:#2eca6a;">Comments</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">

          <?php
          $result = [];
          $ch = curl_init();
          $url ="http://localhost/Final-Project/comment_show.php";
          $value = "req=profile";
          curl_setopt($ch, CURLOPT_URL,$url);
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS,$value);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

          $result = curl_exec($ch);
          curl_close ($ch);
          $data = json_decode($result);

          foreach($data as $Comment_User){
                //print_r($product);
                /* echo $product->img;
                die(); */


                ?>

                <div style="border:1px solid #e9ecef; margin:5px; padding: 5px;border-radius: 5px;" >
                  <p7>
                    <span style="font-size:16px;color:black;"> <b><?php  echo $Comment_User->name;?></b></span>
                    <span style="font-size:14px;"> <?php  echo $Comment_User->comments;?>
                  </p7>
                </div>

                <?php 
              }
              
              ?>
            </div>
          </div>
        </div>
      </section>
  
  <!-- end comment part-->
  
  
  
  <!--start comment form section5 -->
  
   <section id="contact" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info-contact">
            <h2 class="dsplay-4">Please Give Your Massage</h2>
            <p class="text-danger">Please Provide Suggestions To Develop Our System Or Platform & Any comment</p>
          </div>
           <form action="comment.php" method="POST" enctype="multipart/form-data">
              <table style="width:100%;">
              <tr class="input-group input-group-lg">
                <td class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i></span>
                  <input type="text" placeholder="Ahamed_Raton" id="UName" name="name"class="form-control form-control-lg"size="60" required>
                </td>
              </tr>
              <tr class="input-group input-group-lg">
                <td class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  <input type="Email" placeholder="Enter registerd Email Address" id="Email" name="email" class="form-control form-control-lg"size="60"required>
                </td>
              </tr>
              <br>
              <tr class="input-group input-group-lg">
                <td class="input-group-prepend" width="100%">
                  <span class="input-group-text mt-4"><i class="fa fa-pencil"></i></span>
                  <textarea type="text" rows="3"  size="100" placeholder="!!! Please Share Your Comment And Suggestions..." class="form-control form-control-lg" id="Description" name="comments" required></textarea>
                </td>
              </tr>
              <tr>
                <td><input type="submit" name="submit" value="Comment" class="btn btn-dark btn-lg btn-block mt-2"></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map" class=""><img src="img/map.png" alt="map" style="width:100%;height:100%"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section part5 in comment form-->
  

  
  

  
  
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