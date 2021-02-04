<?php
session_start();
include '../conn.php';

//add subject
if(isset($_POST['update_profile'])) {
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql = " UPDATE `teacher` SET `teacher_firstname` = '$fname', `teacher_lastname` = '$lname', `teacher_username` = '$uname', `teacher_password` = '$password', `teacher_email` = '$email' WHERE `teacher`.`teacher_id` = '$id' ";
  $conn->query($sql);
  
 $newname = $id.'_'.$fname.'_'.$lname.'.jpg';
 if( move_uploaded_file( $_FILES['file']['tmp_name'], "profile_pic/$newname")){echo "success";} else {echo "error";}
 
  header('location:my_account.php');
}


?>