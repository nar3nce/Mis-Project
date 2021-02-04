<?php
session_start();

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
  $subject = $_POST['subject'];
  $folder_name = $_POST['folder_name'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject);
  mkdir($folder_name);
  header('location:subject_manager.php?subject='.$subject.'&folder='.$folder_name);
}

//delete folder 
if(isset($_GET['del'])) { 
  $subject = $_GET['subject'];
  $del = $_GET['del'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject);
  array_map('unlink', glob("$del/*.*"));
  rmdir($del);
  header('location:subject_manager.php?subject='.$subject);
}


//upload file 
if(isset($_POST['upload'])) {
  $subject = $_POST['subject'];
  $folder = $_POST['folder'];
  $path = $_POST['path']; 	
  if (move_uploaded_file($_FILES['upload_file']['tmp_name'], __DIR__.'/teacher_folders/'.$_SESSION['folder_name'].'/'.$path.'/'. $_FILES["upload_file"]['name'])) {
    header('location:subject_manager.php?subject='.$subject.'&folder='.$folder);
  } 
  else {
   echo "File was not uploaded";
  }

}

//delete file 
if(isset($_GET['folder'])) { 
  $subject = $_GET['subject'];
  $folder = $_GET['folder'];
  chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject.'/'.$folder);
  $id=$_GET['fdel'];
  unlink($id);
  header('location:subject_manager.php?subject='.$subject.'&folder='.$folder);
}

?>