<?php	
session_start();
include 'conn.php';

if(isset($_POST['login'])){
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);
	$utype = $conn->real_escape_string($_POST['usertype']);
	
	$sql = " select * from accounts where username = '$username' and password = '$password' and usertype = '$utype' ";
	$query = $conn->query($sql);
	
	
	
	if($query->num_rows != 0){
		
		while($row = $query->fetch_array()) {
			$type = $row['usertype'];
			
			if ( $type == 'admin' ){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				@header("location: administrator/index.php");
				exit();
			}
			else if ( $type == 'employee' ) {
				echo "employee";
			}
			else {
				exit();
			}
			
		}
	}
	
	else {
		echo ' wrong username or password, try again later <a href="index.php">Click Here</a>';
		exit();
	}  
}



?>