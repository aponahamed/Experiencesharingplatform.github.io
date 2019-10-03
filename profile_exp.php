

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
  
</head>
<body>

<?php include('layouts/navbar.php') ;?>

  
  <!--section2 is start in profile in supervisor-->
  <div class="container">
    <div class="row ">
      <div class="col-md-12 mt-5">
        <h1 class=""></h1>
      </div>
      <div class="col-md-12 mt-5">
        <p class=""></p>
      </div>
    </div>
  </div>
  <br>

  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card mt-2">
          <div class="card-title">
            <div class="row text-left">
              <div class="col-md-5 text-center">
                <img src="<?php echo $row_prod['img']; ?>" alt="images"style="height:240px;width:220px;border:1px solid #2eca6a;"><hr>
                <h4 class="mx-4"><?php echo $row_prod['F_name']; ?></h4>
                <h7 class="mx-4"><?php echo $row_prod['Education']; ?></h7><br>
                <h7 class=" mx-4"><?php echo $row_prod['Workfield']; ?></h7><br>
                <h7 class="mx-4"><span style="font-size:18px;">Address: </span><?php echo $row_prod['Address']; ?></h7><br>
                <h7 class="mx-4"><span style="font-size:18px;">Current Location: </span><?php echo $row_prod['Location']; ?></h7><br>
                <h7 class="mx-4"><span style="font-size:18px;">Position: </span><?php echo $row_prod['Position']; ?></h7><br>
                <h7 class="mx-4"><span class="text-danger">Helping Status :</span> Yes</h7>
              </div>
              <div class="col-md-6 mt-3 text-justify">
                <h3 style=" color:#2eca6a;">About Me</h3><hr>
                <p style="font-family: times-roman;font-size:18px"><?php echo $row_prod['Description']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      
      </div>
      <div class="col-md-4 text-center mt-2">
        <h5>Contact With Me</h5><hr>
        <p><?php echo $row_prod['Phone']; ?><br>
          <?php echo $row_prod['Email']; ?></p>
          <p class="lead">
            <a href="<?php echo $row_prod['facebook']; ?>">
              <i class="fa fa-facebook p-2"style="font-size:25px;"></i>
            </a>
            <a href="<?php echo $row_prod['twitter']; ?>">
              <i class="fa fa-twitter p-2"style="font-size:25px;"></i>
            </a>
            <a href="<?php echo $row_prod['skype']; ?>">
              <i class="fa fa-skype p-2"style="font-size:25px;"></i>
            </a>
          </p>
        </div>
        <div class="col-md-4 text-left mt-5 text-right">
          <p class=" mt-5"><a href="index.php">Back to home</a></p>
        </div>
      </div>
    </div><hr>

 <!-- view comment in this part start-->
   <!-- <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-4">
          <h2 style=" color:#2eca6a;">Comments</h2><hr style="width:200px; float: left;">
        </div>
      </div>
      <div class="row">
        <div class="col">
           <?php
          $result = [];
          $ch = curl_init();
          $url ="http://localhost/Final-Project/profile_comment_show_exp.php";
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
                  <p7><span style="font-size:18px;color:black;"> <?php  echo $Comment_User->Name;?></span>
                      <span style="font-size:14px;"> <?php  echo $Comment_User->Comment;?>
                  </p7>
                </div>



                <?php 
              }
              
              ?> 
            </div>
          </div>
        </div>
      </section> 
   -->
  <!-- end comment part-->


  <!-- <div class="container">
    <div class="row">
      <div class="col-md-12">
         <form action="config/profile_comment.php" method="POST" enctype="multipart/form-data">
              <table style="width:100%;">
              <tr class="input-group input-group-lg">
                <td class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i></span>
                  <input type="text" placeholder="Ahamed_Raton" id="UName" name="Name"class="form-control form-control-lg"size="60">
                </td>
              </tr>
              <tr class="input-group input-group-lg">
                <td class="input-group-prepend" width="70%">
                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  <input type="Email" placeholder="Enter Email Address" id="Email" name="Email" class="form-control form-control-lg"size="60">
                </td>
              </tr>
              <br>
              <tr class="input-group input-group-lg">
                <td class="input-group-prepend" width="70%">
                  <span class="input-group-text mt-4" ><i class="fa fa-pencil"></i></span>
                  <textarea type="text" rows="2"  size="80" placeholder="!!! Please Comment Or Any Question ??" class="form-control form-control-lg" id="Description" name="Comment"></textarea>
                </td>
              </tr>
              <tr>
                <td><input type="submit" name="submit" value="Comment" class="btn btn-dark btn-lg btn-block mt-2"style="width:25%;"></td>
              </tr>
            </table>
          </form>
      </div>
    </div>
  </div>
 -->
<div class="container">
    <div class="row">
      <div class="col-md-12">
 <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://youthway.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
  
      </div>
    </div>
  </div>

  
  

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