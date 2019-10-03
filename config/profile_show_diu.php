<?php
session_start();
include('db_config.php');
$msg = [];
//if(isset($_POST['req'])){
	$sql  = "SELECT * FROM `users` WHERE status=1 ORDER BY id DESC LIMIT 3";
	$res = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($res);
	if($num){
		//$msg['status'] = '1';
		//$msg['count'] = $num;
		//$i = 0;
		
		while($row = mysqli_fetch_array($res)){
			$profile = [];
			$profile['id'] = $row['id'];
			$profile['image'] = $row['img'];
			$profile['F_name'] = $row['F_name'];
			$profile['Education'] = $row['Education'];
			$profile['Workfield'] = $row['Workfield'];
			$profile['Address'] = $row['Address'];
			$profile['Location'] = $row['Location'];
			$profile['Gender'] = $row['Gender'];
			$profile['Phone'] = $row['Phone'];
			$profile['Email'] = $row['Email'];
			$profile['facebook'] = $row['facebook'];
			$profile['twitter'] = $row['twitter'];
			$profile['skype'] = $row['skype'];
			
			
			
			array_push($msg, $profile);
		}
		
	} else {
		$msg['status'] = '0';
		$msg['msg'] = 'No profile Found!';
	}
/* } else {
	$msg['status'] = '0';
	$msg['msg'] = 'Invalid Request!';
} */

//echo "<pre>"; 
print_r(json_encode($msg));
//return $msg;
?>


