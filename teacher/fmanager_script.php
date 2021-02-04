<?php
session_start();
include('../conn.php');
//delete subject folder
if(isset($_GET['delete_subject'])) { 
  $subject = $_GET['delete_subject'];
  chdir('teacher_folders/'.$_SESSION['folder_name']);
  echo getcwd();
  array_map('unlink', glob($subject."/*.*"));
  rmdir($subject);
  header('location:classes.php');
}

//add folder 
if(isset($_POST['add'])) {
  $id = $_POST['id'];
  $subject = $_POST['subject'];
  $folder_name = $_POST['folder_name'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject);
  mkdir($folder_name);
  header('location:subject_manager.php?subject_id='.$id.'&subject_name='.$subject.'&folder='.$folder_name);
}

//delete folder 
if(isset($_GET['del'])) { 
  $id = $_POST['id'];
  $subject = $_GET['subject'];
  $del = $_GET['del'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject);
  array_map('unlink', glob("$del/*.*"));
  rmdir($del);
  header('location:subject_manager.php?subject_id='.$id.'&subject_name='.$subject);
}


//upload file 
if(isset($_POST['upload'])) {
  $id = $_POST['id'];
  $subject = $_POST['subject'];
  $folder = $_POST['folder'];
  $path = $_POST['path']; 	
  if (move_uploaded_file($_FILES['upload_file']['tmp_name'], __DIR__.'/teacher_folders/'.$_SESSION['folder_name'].'/'.$path.'/'. $_FILES["upload_file"]['name'])) {
    header('location:subject_manager.php?subject_id='.$id.'&subject_name='.$subject.'&folder='.$folder);
	
  } 
  else {
   echo "File was not uploaded";
  }

}

//delete file 
if(isset($_GET['folder'])) { 
  $id = $_POST['id'];
  $subject = $_GET['subject'];
  $folder = $_GET['folder'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject.'/'.$folder);
  $id=$_GET['fdel'];
  unlink($id);
  header('location:subject_manager.php?subject_id='.$id.'&subject_name='.$subject.'&folder='.$folder);
}


//accept student
if(isset($_GET['accept'])){
   $id=$_GET['accept'];
   $sql = " UPDATE `subject_members` SET `subject_member_status` = 'accepted' WHERE `subject_members`.`subj_member_id` = '$id' ";
   $conn->query($sql);
   header('location:subject_members.php');
}

//deny student
if(isset($_GET['deny'])){
    $id=$_GET['deny'];
   	$sql = " UPDATE `subject_members` SET `subject_member_status` = 'Denied' WHERE `subject_members`.`subj_member_id` = '$id' ";
	$conn->query($sql);
	header('location:subject_members.php');
}

//remove student
if(isset($_GET['remove_stud_id'])){
    $id=$_GET['remove_stud_id'];
   	$sql = " UPDATE `subject_members` SET `subject_member_status` = 'Removed' WHERE `subject_members`.`subj_member_id` = '$id' ";
	$conn->query($sql);
	header('location:subject_members.php');
}

//add notice 
if(isset($_POST['submit'])) {
  $date = date('Y-m-d h:i:s');
  $notice2 = $_POST['notices'];
  $teacher_id = $_POST['teacher_id'];
  $subj_id = $_POST['subj_id'];
  $sql = " INSERT INTO `notices` (`notice_id`, `notice_teacher_id`, `notice_subj_id`,  `notice_content`, `notice_date_posted`) VALUES (NULL, '$teacher_id', '$subj_id', '$notice2', '$date') ";
  $conn->query($sql);
  header('location:notices.php');
  
}

//delete notice 
if(isset($_GET['notice_del_id'])) {
  $id = $_GET['notice_del_id'];
  $sql = " DELETE FROM `notices` WHERE `notices`.`notice_id` = '$id' ";
  $conn->query($sql);
  header('location:notices.php');
  
}

//add assignment 
if(isset($_POST['assignment'])) {
$teacher_id = $_POST['teacher_id'];
$subj_id = $_POST['subj_id'];
$assign_title = $_POST['assign_title'];
$assign_content = $_POST['assign_content'];
$exp_date = $_POST['exp_date'];

$original = explode('.', $_FILES["attach_ment"]["name"]);
$extension = array_pop($original);

$new = $subj_id.$assign_title.'.'.$extension;

$sql = " INSERT INTO `assignment` (`assign_id`, `assign_subj_id`, `assign_teacher_id`, `assign_title`, `assign_content`, `assign_attach_name`, `assign_exp_date`) VALUES (NULL, '$subj_id', '$teacher_id', '$assign_title', '$assign_content', '$new', '$exp_date') ";
$conn->query($sql);



if (move_uploaded_file($_FILES['attach_ment']['tmp_name'], __DIR__.'/teacher_folders/'.$_SESSION['folder_name'].'/assignment/'.$new)) {
  header('location:assignment.php');
  } 
  else {
   echo "File was not uploaded";
  }

}

//delete assignment 
if(isset($_GET['assign_del_id'])) { 
  $assign_del_id = $_GET['assign_del_id'];
  $assign_subject = $_GET['assign_subject'];
  $assign_file_id = $_GET['assign_file_id'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/assignment');
  unlink($assign_file_id);
  $sql = " DELETE FROM `assignment` WHERE `assignment`.`assign_id` = '$assign_del_id' ";
  $conn->query($sql);
  header('location:assignment.php');

}
?>