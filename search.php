<?php session_start(); 
include('db_config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Youth Way</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo1.png" rel="icon">

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

<div class="container">
  <div class="row mt-5">
    <div class="col-md-12 mt-5">
      
    </div>
  </div>
</div>
<hr>
  <div class="container">
    <div class="row mt-5">
      <div class="co-md-12 ">
        
      </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5">
      <h6 class="subhead theme text-danger"><strong>YOUR SEARCH ITEMS HEARE......</strong></h6>
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
    <div class="row my-2 ">
 
								<?php
					if(isset($_GET['req'])){
						$limit =3;
						if(isset($_GET['page'])){
							$page = $_GET['page'];
						}else{
							$page= 1;
						}
						$start_from =($page-1)* $limit;
						$data = mysqli_real_escape_string($conn, isset($_GET['data'])? $_GET['data'] : '');
						$sql = "SELECT * FROM users WHERE U_Name OR Email OR F_name like '%$data%' LIMIT $start_from, $limit ";
						$res = mysqli_query($conn, $sql);
						
								$num = mysqli_num_rows($res);
								$msg = [];
								if($num){
									
									while($row = mysqli_fetch_array($res)){
										
										?>
          <div class="col-md-4 mt-4"><hr>
          <div class="card">
            <div class="card-header m-0 text-center">
              <img src="<?php  echo $row['img'];?>" alt="images" style="height:240px;width:240px;">
            </div>
            <div class="card-body text-center">
              <h5><?php  echo $row['F_name'];?></h5>
              <h6> <?php  echo $row['Education'];?></h6>
              <p><?php  echo $row['Email'];?></p>
              <span><a href="profile_exp.php?id=<?php echo $row['id']; ?>">View Profile</a></span>
            </div>
            <div class="card-footer text-center">
              <a href="#" class="fa fa-facebook"style="font-size:28px;"></a>
              <a href="#" class="fa fa-twitter mx-3"style="font-size:28px;"></a>
              <a href="#" class="fa fa-skype"style="font-size:28px;"></a>
              <a href="#" class="fa fa-linkedin mx-3"style="font-size:28px;"></a>
            </div>
          </div>
        </div>
     <?php 
			} ?>
									</div>
									<div style="   margin-left:50%; margin-button:70px;" >
									<?php  
										/* pagination 1 */
										$sql = "SELECT COUNT(id) FROM users WHERE F_Name OR Email OR F_name like '%$data%'";  
										$rs_result = mysqli_query($conn, $sql);  
										$row = mysqli_fetch_array($rs_result);  
										$total_records = $row[0];  
										$total_pages = ceil($total_records / $limit);  
										$pagLink = "<div class='pagination'>";								
										
										for ($i=1; $i<=$total_pages; $i++) { 
											if($i == $page){
												$pagLink .= "<a href='search.php?req=data&page=".$i."&data=".$data."' class='btn btn-primary'>".$i."</a>";  
											} else {
												$pagLink .= "<a href='search.php?req=data&page=".$i."&data=".$data."' class='btn'>".$i."</a>";  
											}													 
										} 
										echo $pagLink . "</div>"; 
										/* pagination 1 */										
										?>
										</div>
										
										<?php
								} else {
									echo "<div>No Product found. Please try again.</div>";
								}
								?>
								 
						 <!-- End tab-content -->
						<?php
							} else {
								echo "<div>Page Not Found!</div>";
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