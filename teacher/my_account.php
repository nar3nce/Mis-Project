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
						<h3 class="page-header"><i class="fa fa-files-o"></i> Update Your Account</h3>
						
					</div>
				</div>
			</div>
			<?php 
			$teacher_id = $_SESSION['teacher_id'];
			$sql = " select * from teacher where teacher_id = '$teacher_id' ";
            $result = $conn->query($sql);
			$row = $result->fetch_array();
			
			?>
			<!-- page start-->
			<div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                My Account              </header>
              <div class="panel-body">
                <form role="form" method="post" action="my_account_script.php" enctype="multipart/form-data">
				<div class="form-group">
                    <input name="id" type="hidden" value="<?php echo $teacher_id; ?>" class="form-control" id="exampleInputEmail1" >
                  </div>
				<div class="form-group">
                    <input name="fname" type="hidden" value="<?php echo $row['teacher_firstname']; ?>" class="form-control" id="exampleInputEmail1" >
                  </div>
				  <div class="form-group">
                    <input name="lname" type="hidden" value="<?php echo $row['teacher_lastname']; ?>" class="form-control" id="exampleInputEmail1">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input name="uname" type="text" value="<?php echo $row['teacher_username']; ?>" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" value="<?php echo $row['teacher_email']; ?>"class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Change Profile Picture</label>
                    <input name="file" type="file" id="exampleInputFile">
                  </div>
                  <div class="checkbox">
                  </div>
                  <input type="submit" name="update_profile" value="Update" class="btn btn-primary btn-lg">
                </form>
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
