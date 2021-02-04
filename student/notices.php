<?php 
include 'restriction.php'; 
include('../conn.php');			 	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  
  <!-- Bootstrap CSS -->
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  
  
  <style type="text/css">
    <!--
.style3 {color: #000000}
.style4 {color: #000099}
.style5 {font-size: 16px}
.style6 {font-size: 12px}
.style7 {color: #FF0000}
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
						<h3 class="page-header"><i class="fa fa-"></i> <?php echo $_SESSION['subject_name']; ?> Updates</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li><i class="fa fa-files-o"></i><a href="subjects.php">Subjects</a></li>
							<li><i class="fa fa-folder-o"></i> Updates </li>
						</ol>
					</div>
				</div>
   </div>
   <!-- page start-->
   
   <section class="panel ">
				
			</section>
   
  
				  
                </section>
              </div>
            </div>
			<?php
			$teacher = $_SESSION['teacher_id'];
			$subj_id = $_SESSION['subject_id'];
			$sql = " SELECT * FROM `notices` where notice_teacher_id = '$teacher' and notice_subj_id = '$subj_id' ORDER BY `notices`.`notice_id` DESC";
			$result = $conn->query($sql);
			while ($row = $result->fetch_array()){
			
			?>
		 
			 <!-- CKEditor -->
               <!-- CKEditor -->
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading style3 style5">
                   
                    <p><span class="style6">Date posted : <span class="style4"><?php echo date('l jS \of F Y', strtotime($row['notice_date_posted'])); ?> at <?php echo date('h:i:s A', strtotime($row['notice_date_posted'])); ?></span></span></p>
                  </header>
                  <div class="panel-body">
                    <p><?php echo $row['notice_content']; ?></p>
                  </div>
                </section>
              </div>
            </div>
          <?php
		  }
		  ?>
<!-- page end-->
</section>
</section>
<!--main content end-->



</section>

<!--include the java scripts -->
<!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>
</body>

</html>