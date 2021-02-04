<?php
session_start();
include '../conn.php';

//add subject
if(isset($_POST['add_subject'])) {
  $subj_name = $_POST['subj_name'];
  $teacher_id = $_POST['teacher_id'];
  $color = $_POST['color'];
  $class_sched = $_POST['class_sched'];
  $subj_access_code = $_POST['subj_access_code'];
  
  $sql = " INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_teacher_id`, `subject_color`, `subject_sched`, `subj_access_code`) VALUES (NULL, '$subj_name', '$teacher_id', '$color', '$class_sched', '$subj_access_code') ";
  $conn->query($sql);
  chdir('teacher_folders/'.$_SESSION['folder_name']);
  mkdir($subj_name);
  header('location:subjects.php');
}


?>