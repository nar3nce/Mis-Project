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
							<li><i class="fa fa-files-o"></i> Subject Manager</li>
						</ol>
					</div>
				</div>
			</div>
			<!-- page start-->
			
			<div class="col-lg-12">
				<section class="panel ">
					<header class="panel-heading">
						<h4 style="color:#000000" class="panel-title">Subjects</h4>
						<p><a class="btn-sm btn-success" href="#new" data-toggle="modal"><span class="fa fa-plus-square"></span> New</a> </p>

					</header>
					<div class="table-responsive">
						<table width="101%" class="table">
							
							<tbody> 
								
								<!-- ############################################## responsive table design -->
								<?php
								//display subjects
								chdir('teacher_folders/'.$_SESSION['folder_name']);
								foreach(glob('*' , GLOB_ONLYDIR) as $subj_dirs) {
									?>
									<tr>
										<td><i class="fa fa-folder" aria-hidden="true"></i> <a><?php echo $subj_dirs; ?></a></td>              
											
										<td><a class="btn btn-warning" href="fmanager_script.php?delete_subject=<?php echo $subj_dirs; ?>" data-toggle="modal"><span class="fa fa-times"></span> Delete subject</a></td>
										<td><a class="btn btn-primary" href="subject_manager.php?subject=<?php echo $subj_dirs; ?>" data-toggle="modal"><span class="fa fa-folder-open"></span> Browse subject</a></td>
										
									</tr>
									
									<?php
								}
								?>
								<!-- ################################################### end -->
								
							</tbody>
						</table>
					</div>
				</div>
				
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
								
								<form id="form1" name="form3"method="post" action="fmanager_script.php">
									<div class="form-group">
										<label for="exampleInputEmail1">Subject Name</label>
										<input type="text" name="subj_name" value=""class="form-control" id="exampleInputEmail1" placeholder="">
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
