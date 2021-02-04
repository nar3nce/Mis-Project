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
			
			<section class="panel ">
					<header class="panel-heading">
						<h4 style="color:#000000" class="panel-title">Subjects</h4>
						<p><a class="btn-sm btn-success" href="#new" data-toggle="modal"><span class="fa fa-plus-square"></span> New</a> </p>
						
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
										<label for="exampleInputEmail1">Subject Name</label>
										<input type="text" name="subj_name" value=""class="form-control" id="exampleInputEmail1" placeholder="">
									</div>
									<div class="form-group">
										
										<input type="hidden" name="teacher_id" value="<?php echo $_SESSION['teacher_id']; ?>"class="form-control" id="exampleInputEmail1" placeholder="">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Subject Acess Code</label>
										<input type="text" name="subj_access_code" value=""class="form-control" id="exampleInputEmail1" placeholder="">
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
			
		   
		   <a href="../../rsa_thesis/phpseclib/encrypt.php">
		   <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <div class="count">THESIS-01</div>
              <div class="">instructor: Geraldine Rilles</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
		  </a>
		    
		   <a href="../../rsa_thesis/phpseclib/encrypt.php">
		   <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <div class="count">MIS-01</div>
              <div class="">instructor: Geraldine Rilles</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
		  </a>
		    
		   <a href="../../rsa_thesis/phpseclib/encrypt.php">
		   <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <div class="count">POS-01</div>
              <div class="">instructor: Geraldine Rilles</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
		  </a>
		  
		  
		  <?php
		  $id = $_SESSION['teacher_id'];
		  $sql = "select * from subject where subject_teacher_id = '$id'"; 
		  $result = $conn->query($sql);
		  while ($row = $result->fetch_array()){
		  ?>  
		   <a href="../../rsa_thesis/phpseclib/encrypt.php">
		   <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <div class="count">SAD-01</div>
              <div class="">instructor: <?php echo $_SESSION['teacher_name']; ?></div>
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
