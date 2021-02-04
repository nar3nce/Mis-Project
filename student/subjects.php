<?php 
include 'restriction.php'; 
include '../conn.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	
	<!-- Bootstrap CSS -->
	<?php include "css.php"; ?>
	<style type="text/css">
		<!--
		.style1 {
			color: #000000;
			font-weight: bold;
		}
		-->
	</style>
</head>

<body>

	<!-- container section start -->
	<section id="container" class="">

		<!-- include header -->
		<?php include "header.php"; ?>

		<!-- include nav bar --> 
		<?php include "navbar.php"; ?>

		<!--main content start-->
		<section id="main-content">
			
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-files-o"></i> Subject Manager</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li><i class="fa fa-files-o"></i> Subjects</li>
						</ol>
					</div>
				</div>
			</div>
			<!-- page start-->
			
			<section class="panel ">
				<header class="panel-heading">
					<h4 style="color:#000000" class="panel-title">Subjects</h4>
					<p><a class="btn-sm btn-success" href="#new" data-toggle="modal"><span class="fa fa-plus-square"></span> Add</a> </p>
					
					<!-- new subject -->
					<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">add new subject</h4>
								</div>
								<div class="modal-body">

									<!-- ############## -->
									
									<form id="form1" name="form3"method="post" action="subjects_script.php">
										<div class="form-group">
											<label for="exampleInputEmail1">Enter Class Access Code</label>
											<input type="text" name="subj_access_code" class="form-control" id="exampleInputEmail1" placeholder="">
										</div>
										
										<input type="submit" name="add_subject" value="Add" class="btn btn-primary">
									</form>
									
									<!-- bodyyyyyyyyyyyy///// -->
								</div>
								<div class="modal-footer">
									<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
								</div>
							</div>
						</div>
					</div>
				</header>
			</section>
			
		
		  <?php		
		   
          $id = $_SESSION['student_id'];  
		  $sql = "select * from subject_members where usertype = 'student' and subject_member_status = 'accepted' and subj_member_user_id = '$id'"; 
		  $result = $conn->query($sql);
		  
		  //for subject
		  while ($row = $result->fetch_array()){
		    $subj_id = $row['subj_class_id'];
			
 		     $s = "select * from subject where subject_id = '$subj_id'";
		     $r = $conn->query($s);
		     while ($row2 = $r->fetch_array()){
			 
			 //for teacher
			 $teacher_id = $row2['subject_teacher_id'];
		     $s2 = "select * from teacher where teacher_id = '$teacher_id'";
		     $r2 = $conn->query($s2);
		     while ($row3 = $r2->fetch_array()){
		   
			 ?>  
			 <a href="subject_manager.php?teacher_id=<?php echo $teacher_id; ?>&folder_name=<?php echo $row3['teacher_firstname']; ?>_<?php echo $row3['teacher_lastname']; ?>&subject_name=<?php echo $row2['subject_name']; ?>&subject_id=<?php echo $row2['subject_id']; ?>">
			 	<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
			 		<div class="info-box <?php echo $row2['subject_color']; ?>-bg">
			 			<div class="count"><?php echo $row2['subject_name']; ?></div>
			 			
			 <?php 
			 
			 
		     	?>
		     	<div class="">Teacher: <?php echo $row3['teacher_firstname']; ?> <?php echo $row3['teacher_lastname']; ?></div>
				<div class="">Schedule: <?php echo $row2['subject_sched']; ?></div></div>
				
		     	<?php
			 }}
		     	?>
		     </div>
		     <!--/.info-box-->
		 </div>
		 <!--/.col-->
		</a>
		<?php
	}
	?>
	
	
	
	

	<!-- page end-->
</section>
</section>
<!--main content end-->


</section>
<!--include the java scripts -->
<?php include "scripts.php"; ?>
</body>

</html>
