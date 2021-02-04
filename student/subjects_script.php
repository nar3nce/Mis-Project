<?php
session_start();
include '../conn.php';

//add subject
if(isset($_POST['add_subject'])) {
  $subj_access_code = $_POST['subj_access_code'];
  $stud_id = $_SESSION["student_id"];
  
  $sql = " select * from subject where subj_access_code = '$subj_access_code'";
  $r = $conn->query($sql);
  while($row = $r->fetch_array()){
   $subj_class_id = $row['subject_id'];
  }
  
  $sq_l = " INSERT INTO `subject_members` (`subj_member_id`, `subj_class_id`, `usertype`, `subject_member_status`, `subj_member_user_id`) VALUES (NULL, '$subj_class_id', 'student', 'pending', '$stud_id') ";
  $r_1 = $conn->query($sq_l);
  header('location:subjects.php');
  
  //chdir('teacher_folders/'.$_SESSION['folder_name']);
  //mkdir($subj_name);
 // header('location:subjects.php');
}


?>