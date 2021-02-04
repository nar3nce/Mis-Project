<?php
include 'restriction.php'; 

				
				//selecting specific subject folder
				if(isset($_GET['teacher_id'])) {
				 $teacher_id = $_GET['teacher_id'];
				 $teacher_folder_name = $_GET['folder_name'];
				 $subject_name = $_GET['subject_name'];
				 $subject_id = $_GET['subject_id'];
				 
				 $_SESSION['teacher_id'] = $teacher_id;
				 $_SESSION['teacher_folder_name'] = $teacher_folder_name;
				 $_SESSION['subject_name'] = $subject_name;
				 $_SESSION['subject_id'] = $subject_id;
				 
				
				 chdir('../teacher/teacher_folders/'.$teacher_folder_name.'/'.$subject_name);
				
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
		<?php include "navbar_subject.php"; ?>

		<!--main content start-->
		<section id="main-content">
			
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-folder-o"></i> <?php echo $subject_name; ?> Study Materials </h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li><i class="fa fa-files-o"></i><a href="subjects.php">Subjects</a></li>
							<li><i class="fa fa-folder-o"></i> <?php echo $subject_name; ?> </li>
						</ol>
					</div>
				</div>
			</div>
			<!-- page start-->
			
			<div class="col-lg-4">
				<section class="panel ">
					<header class="panel-heading">
						<h4 style="color:#000000" class="panel-title">Folders</h4>

					</header>
					<div class="table-responsive">
						<table width="101%" class="table">
							
							<tbody> 
								
								<!-- ############################################## responsive table design -->
								<?php
								//display folders
								foreach(glob('*' , GLOB_ONLYDIR) as $dir) {
									?>
									<tr>
										<td><i class="fa fa-folder" aria-hidden="true"></i> <?php echo $dir; ?></a></td>              
										
										<td><a class="btn-sm btn-primary" href=" subject_manager.php?teacher_id=<?php echo $teacher_id; ?>&folder_name=<?php echo $teacher_folder_name ?>&subject_name=<?php echo $subject_name ?>&subject_id=<?php echo $subject_id ?>&folder=<?php echo $dir; ?>" data-toggle="modal"><span class="fa fa-folder-open"></span> Browse</a></td>
									</tr>
									
									<?php
								}//display folders end
								?>
								<!-- ################################################### end -->
								
							</tbody>
						</table>
					</div>
				</div>
				
				
				
				<?php
				
				//selecting specific folder
				if(isset($_GET['folder'])) {
					$folder = $_GET['folder'];
					chdir($folder);
				
					?> 
					
					<div class="col-lg-8">
						<section class="panel ">
							<header class="panel-heading">
								<h4 style="color:#000000" class="panel-title"><i class="fa fa-folder" aria-hidden="true"></i> <?php  echo $folder; ?></h4>
								
							</header>
							<div class="table-responsive">
								<table width="101%" class="table">
									<thead>
									<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><i class="fa fa-folder-o"></i> <?php echo $subject_name; ?> </li>
							<li><i class="fa fa-folder-o"></i> <?php echo $folder; ?> Files </li>
						</ol>
					</div>
				</div>
										<tr>
											<th><i class="fa fa-files-o"></i> File Name</th>
										</tr>							
									</thead>
									<tbody> 
										
										<!-- ############################################## responsive table design -->
										<?php
										//display contents from specific folder
								
										foreach(glob('*') as $folder_files) {
											?>
											<tr>
												<td><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="../teacher/teacher_folders/<?php echo $teacher_folder_name ?>/<?php echo $subject_name; ?>/<?php echo $folder; ?>/<?php echo $folder_files; ?>"> <?php echo $folder_files; ?></a></td>              
												
											</tr>
											
											<?php	
											
										}//display contents from specific folder end 
										?>
										<!-- ################################################### end -->
										
									</tbody>
								</table>
							</div>
							<?php


						}
						
						else {
							echo " No folder selected ";
						}
						
						//selecting specific folder end
						?>
					</section>
				</div>

				<!-- page end-->
			</section>
		</section>
		<!--main content end-->


	</section>
	<!--include the java scripts -->
	<?php include "scripts.php"; ?>
</body>

</html>



<?php
}
else {
echo "no subject selected";
exit();
}
?>