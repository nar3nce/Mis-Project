<?php
include 'restriction.php'; 

				
				//selecting specific subject folder
				if(isset($_GET['subject_name'])) {
				 $subject_id = $_GET['subject_id'];
				 $subject = $_GET['subject_name'];
				 
		         $_SESSION['subject_id'] = $subject_id;
			     $_SESSION['subject_name'] = $subject;
						
				 chdir('teacher_folders/'.$_SESSION['folder_name'].'/'.$subject);
				
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
						<h3 class="page-header"><i class="fa fa-folder-o"></i> <?php echo $subject; ?> Subject</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li><i class="fa fa-files-o"></i><a href="subjects.php">Subjects</a></li>
							<li><i class="fa fa-folder-o"></i> <?php echo $subject; ?> </li>
						</ol>
					</div>
				</div>
			</div>
			<!-- page start-->
			
			<div class="col-lg-4">
				<section class="panel ">
					<header class="panel-heading">
						<h4 style="color:#000000" class="panel-title">Folders</h4>
						<p><a class="btn-sm btn-success" href="#new" data-toggle="modal"><span class="fa fa-plus-square"></span> New</a> </p>

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
										
										<td><a class="btn-sm btn-warning" href="fmanager_script.php?id=<?php echo $subject_id; ?>&subject=<?php echo $subject; ?>&del=<?php echo $dir; ?>" data-toggle="modal"><span class="fa fa-times"></span> Delete</a> <a class="btn-sm btn-primary" href="subject_manager.php?subject_id=<?php echo $subject_id; ?>&subject_name=<?php echo $subject; ?>&folder=<?php echo $dir; ?>" data-toggle="modal"><span class="fa fa-folder-open"></span> Browse</a></td>
									</tr>
							
									<?php
								}//display folders end
								?>
								<!-- ################################################### end -->
								
							</tbody>
						</table>
					</div>
				</div>
				
				<!-- new folder -->
				<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Create New Folder</h4>
							</div>
							<div class="modal-body">

								<!-- ############## -->
								
								<form id="form1" name="form3" method="post" action="fmanager_script.php">
								    <div class="form-group">
								<input type="hidden" name="id" value="<?php echo $subject_id; ?>"class="form-control" id="exampleInputEmail1" placeholder="">		
								<input type="hidden" name="subject" value="<?php echo $subject; ?>"class="form-control" id="exampleInputEmail1" placeholder="">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">New Folder</label>
										<input type="text" name="folder_name" value=""class="form-control" id="exampleInputEmail1" placeholder="">
									</div>
									<input type="submit" name="add" value="new" class="btn btn-primary">
								</form>
								
								<!-- bodyyyyyyyyyyyy///// -->
							</div>
							<div class="modal-footer">
								<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
							</div>
						</div>
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
								<p><a class="btn-sm btn-danger" href="#upload<?php  echo $folder; ?>" data-toggle="modal"><span class="fa fa-cloud-upload"></span> Upload</a></p>
							</header>
							<div class="table-responsive">
								<table width="101%" class="table">
									<thead>
									<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><i class="fa fa-folder-o"></i> <?php echo $subject; ?> </li>
							<li><i class="fa fa-folder-o"></i> <?php echo $folder; ?> Files </li>
						</ol>
					</div>
				</div>
										<tr>
											<th><i class="fa fa-files-o"></i> File Name</th>
											<th><i class="icon_cogs"></i> Action</th>
										</tr>							
									</thead>
									<tbody> 
										
										<!-- ############################################## responsive table design -->
										<?php
										//display contents from specific folder
								
										foreach(glob('*') as $folder_files) {
											?>
											<tr>
												<td><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="teacher_folders/<?php echo $_SESSION['folder_name'] ?>/<?php echo $subject; ?>/<?php echo $folder; ?>/<?php echo $folder_files; ?>"> <?php echo $folder_files; ?></a></td>              
												<td><a class="btn btn-warning" href="fmanager_script.php?id=<?php echo $subject_id; ?>&subject=<?php echo $subject; ?>&folder=<?php echo $folder; ?>&fdel=<?php echo $folder_files; ?>" data-toggle="modal"><span class="fa fa-times"></span> Delete</a></td>
											</tr>
											
											<?php	
											
										}//display contents from specific folder end 
										?>
										<!-- ################################################### end -->
										
									</tbody>
								</table>
							</div>
							<?php


							include 'upload.php';
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