<?php	
session_start();
include 'conn.php';

if(isset($_POST['login'])){
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);
	$utype = $conn->real_escape_string($_POST['usertype']);
	
	
	
	if ( $utype == 'admin' ){
                $sql = " select * from admin where admin_username = '$username' and admin_password = '$password' ";
	            $query = $conn->query($sql);
				  
				  if($query->num_rows != 0){
			        	$row = $query->fetch_array();
				        $admin_id = $row['admin_id'];
                        $_SESSION['admin_id'] = $admin_id;
				        @header("location: ./admin");
				   } 
				  else {
				        echo ' wrong username or password, try again later <a href="index.php">Click Here</a>';
				        exit();
				  }
			}
			else if ( $utype == 'teacher' ) {
				 $sql = " select * from teacher where teacher_username = '$username' and teacher_password = '$password' ";
	             $query = $conn->query($sql);
				  
				  if($query->num_rows != 0){
			        	$row = $query->fetch_array();
				        $firstname = $row['teacher_firstname'];
						$lastname = $row['teacher_lastname'];
						$folder_name =  $firstname._.$lastname;
						$teacher_name = $firstname." ".$lastname;
						$teacher_id = $row['teacher_id'];
						
                        $_SESSION['folder_name'] = $folder_name;
						$_SESSION['teacher_name'] = $teacher_name;
						$_SESSION['teacher_id'] = $teacher_id;
						$_SESSION['teacher_profile_pic'] = $teacher_id.'_'.$firstname.'_'.$lastname.'.jpg';
				        @header("location: ./teacher");
				   } 
				  else {
				        echo ' wrong username or password, try again later <a href="index.php">Click Here</a>';
				        exit();
				  }
				 
			}
			else if ( $utype == 'student' ) {
				 
				 $sql = " select * from student where student_school_id = '$username' and student_password = '$password' ";
	             $query = $conn->query($sql);
				  
				  if($query->num_rows != 0){
			        	$row = $query->fetch_array();
				        $student_id = $row['student_id'];
						$firstname = $row['student_firstname'];
						$lastname = $row['student_lastname'];
						$student_name = $firstname." ".$lastname;
                        $_SESSION['student_id'] = $student_id;
						$_SESSION['student_name'] = $student_name;
						$_SESSION['profile_pic'] = $student_id.'_'.$firstname.'_'.$lastname.'.jpg';
				        @header("location: ./student");
				   } 
				  else {
				        echo ' wrong username or password, try again later <a href="index.php">Click Here</a>';
				        exit();
				  }
				 
			}
			else {
			    echo ' Please select user type <a href="index.php">Click Here</a>';
				exit();
			}
}


//register
if(isset($_POST['register'])){
$usertype = $conn->real_escape_string($_POST['usertype']);
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);
$email = $conn->real_escape_string($_POST['email']);

  if ( $usertype == 'teacher' ){
     $sql = " INSERT INTO `teacher` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `teacher_username`, `teacher_password`, `teacher_email`) VALUES (NULL, '$fname', '$lname', '$username', '$password', '$email') ";
	 $query = $conn->query($sql);
	 $path = 'teacher/teacher_folders';
	 $folder_name = $fname."_".$lname;
	 chdir($path);
	 mkdir($folder_name);
	 chdir($folder_name);
	 mkdir("assignment");
	 @header("location: index.php");
  }
  
  else if ( $usertype == 'student' ){
     $sql = " INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_school_id`, `student_password`, `student_email`) VALUES (NULL, '$fname', '$lname', '$username', '$password', '$email') ";
	 $query = $conn->query($sql);
	 @header("location: index.php");
  }
  else
  {
   echo "invalid usertype";
  }
  
}

?>