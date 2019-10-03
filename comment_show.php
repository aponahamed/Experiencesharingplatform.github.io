<?php
session_start();
include('db_config.php');
$msg = [];
//if(isset($_POST['req'])){
	$sql  = "SELECT * FROM `comment` WHERE status=4 ORDER BY id DESC LIMIT 5";
	$res = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($res);
	if($num){
		//$msg['status'] = '1';
		//$msg['count'] = $num;
		//$i = 0;
		
		while($row = mysqli_fetch_array($res)){
			$Comment_User = [];
			$Comment_User['id'] = $row['id'];
			$Comment_User['name'] = $row['name'];
			$Comment_User['comments'] = $row['comments'];
			
			
			
			array_push($msg, $Comment_User);
		}
		
	} else {
		$msg['status'] = '0';
		$msg['msg'] = 'No Comment_User Found!';
	}
/* } else {
	$msg['status'] = '0';
	$msg['msg'] = 'Invalid Request!';
} */

//echo "<pre>"; 
print_r(json_encode($msg));
//return $msg;
?>


