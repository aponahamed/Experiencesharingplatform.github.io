<?php
include('db_config.php');
if(isset($_POST['submit'],$_POST['Address'],$_POST['Position'],$_POST['Education'],$_POST['Workfield'],$_POST['Location'],$_POST['Description'],$_POST['Id_number'])){
	$F_name = $_POST['F_name'];
	$U_Name = $_POST['U_Name'];
	$Pass = $_POST['Pass'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone'];
	$Id_number = $_POST['Id_number'];
	$Gender = $_POST['Gender'];
	$Position = $_POST['Position'];
	$Education = $_POST['Education'];
	$Address = $_POST['Address'];
	$Workfield = $_POST['Workfield'];
	$Location = $_POST['Location'];
	$Description = $_POST['Description'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$skype = $_POST['skype'];

	
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$extensions= array("jpeg","jpg","png");

	
	//echo "<br>".$msg;
	if($file_size > 2097152){
		$msg='File size must be less then 2 MB';
	}
	

	
	$sql = "SELECT * FROM `users` WHERE Email='$Email'";
	
	$res = mysqli_query($conn, $sql);
	if($row = mysqli_fetch_array($res)){
		header("Location: ../daffodil.php");
	} else {

		move_uploaded_file($file_tmp,"../image/".$file_name);
		$file_path = 'image/'.$file_name;
		$sql = "insert into `users` (`F_name`,`U_Name`,`Pass`,`Email`,`Phone`,`Id_number`,`Gender`,`Position`,`Education`,`Address`,`Workfield`,`Location`,`Description`,`facebook`,`twitter`,`skype`,`status`,img)
		
		values ('$F_name','$U_Name','$Pass', '$Email','$Phone','$Id_number','$Gender','$Position','$Education','$Address','$Workfield','$Location','$Description','$facebook','$twitter','$skype',1,'$file_path')";
		if ($conn->query($sql) === TRUE) {
			header("Location: ../index.php");	
		} else {
			echo"Please Try again!";
		}
		

		//$sql1 = "INSERT INTO `users` (`username`,`password`,`status`) VALUES ('$username','$password',1)";
		

	}
}
?>