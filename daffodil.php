<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daffodil Registration</title>
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
			width:400px;
			margin:5px;
			padding: 5px;
			border-radius: 3px;
		}
		table,tr,td,textarea{
			width:400px;
		}
		table,tr,td,select,option{
			width:200px;
			padding: 5px;
		}
	</style>

</head>
<body>

	<?php include('layouts/navbar-form.php') ;?>

	<div class="container">
		<div class="row mt-5">
			<div class="col-md-12 mt-3">

			</div>
		</div>
	</div>

	<div class="container">

		<div class="row my-5">
			<div class="col-md-3 mt-5">
				
			</div>
			<div class="col-md-9 mt-3">
				<h1 class="mb-4 pt-2 text-center" style="color:#2eca6a; font-size:46px;">Please Registration<sup><span style="font-size:14px; color:red;">Diu</span></sup></h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 my-2">
					<h6 style="color:#2eca6a; ">Please Fillup The Form To Complete Registration: </h6>
				</div>
			</div>
		</div>
		
			<form action="config/daffodil_php.php" method="POST" enctype="multipart/form-data">
				<table style="width:100%;">
					<tr>
						<td>Name: </td>
						<td>
							<input type="text" placeholder="Full name" id="Fname" name="F_name"class=""required>
						</td>
						<td>User Name: </td>
						<td>
							<input type="text" placeholder="Ahamed_Raton" id="UName" name="U_Name"class=" ">
						</td>
					</tr>

					<tr>
						<td>Password</td>
						<td>
							<input type="password" placeholder="Create Password" id="Pass" name="Pass" class="">
						</td>
						<td>Email</td>
						<td>
							<input type="Email" placeholder="Enter Valid Email Address" id="Email" name="Email" class="">
						</td>
					</tr>

					<tr>
						<td>Phone Number</td>
						<td>
							<input type="text" placeholder="+08801744-384113" id="Phone" name="Phone"class="">
						</td>
						<td>ID Number</td>
						<td>
							<input type="text" placeholder="162-15-7992" id="Id_number" name="Id_number"class=""required>
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>
							<input type="text" placeholder="Vill/city,Thana/Upojila,District,Country." class=" " id="Present" name="Address">
						</td>
						<td>Current Location</td>
						<td>
							<input type="text" placeholder="Mirpur-2,Dhaka-1216" id="Location" name="Location"class="">
						</td>
						<td></td>
					</tr>

					<tr>
						<td>Educational Background</td>
						<td>
							<input type="text" placeholder="B.sc CSE Engineering" id="Education" name="Education"class="">
						</td>
						<td>Given Your Workfield</td>
						<td>
							<input type="text" placeholder="Programming c++" id="Workfield" name="Workfield"class="">
						</td>
					</tr>
					
					<tr>
						<td>Facebook Link</td>
						<td>
							<input type="text" placeholder="https://facebook.com/profile.php" id="facebook" name="facebook"class="">
						</td>
					</tr>

					<tr>
						<td>Twitter Link</td>
						<td>
							<input type="text" placeholder="https://twitter.com/profile.php" id="twitter" name="twitter"class="">
						</td>
					
						<td>Skype Link</td>
						<td>
							<input type="text" placeholder="https://skype.com/profile.php" id="skype" name="skype"class="">
						</td>
						
					</tr>

					<tr>
						<td >Describe Your Experience</td>
						<td>
							<textarea type="text" rows="4" placeholder="!!! Description Must Be Full Overview of Your Working Experience ----" class="" id="Description" name="Description"></textarea>
						</td>
						<td >Upload image</td>
						<td>
							<input type="file" class="form-control" name="image" required id="image">
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<select class="" id="Gender"name="Gender">
								<option  value="male">Male</option>
								<option  value="female">Female</option>
							</select>
						</td>
						
						<td>Job Stage</td>
						<td>
							<select class="" id="Job" name="Position" >
								<option value="Jobless">Jobless</option>
								<option value="running_job">Running_Job</option>
							</select>
						</td>
					</tr>

					<tr>
						<td colspan="2" align="right"><input type="submit" name="submit" value="Register" class=" btn btn-success my-5"style="width:150px;"></td>
					</tr>

				</table>
			</form>
		</div>
	
</body>
</html>


