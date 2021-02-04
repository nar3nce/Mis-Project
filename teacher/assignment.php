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
.style7 {color: #FF0000}
.style8 {color: #0000FF}
.style10 {color: #000000; font-size: 16px; }
.style11 {color: #FF0000; font-weight: bold; }
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
						<h3 class="page-header"><i class="fa fa-edit"></i> Create Assignment </h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li><i class="fa fa-files-o"></i>subjects</li>
							<li><i class="fa fa-folder-o"></i> Members </li>
						</ol>
					</div>
		</div>
   </div>
   <!-- page start-->
   
   <section class="panel ">
				<header class="panel-heading">
					<h4 style="color:#000000" class="panel-title">Assignment</h4>
					<p><a class="btn-sm btn-success" href="#new" data-toggle="modal"><span class="fa fa-plus-square"></span> Create</a> </p>
					
					<!-- new subject -->
					<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Create Assignment</h4>
								</div>
								<div class="modal-body">

									<!-- ############## -->
									
									<form id="form1" name="form3" method="post" enctype="multipart/form-data" action="fmanager_script.php">
                        <div class="form-group">
                         	
							 <input type="hidden" name="teacher_id" value="<?php echo $_SESSION['teacher_id']; ?>">
							  <input type="hidden" name="subj_id" value="<?php echo $_SESSION['subject_id']; ?>">
                          <div class="form-group">
						   <label for="exampleInputEmail1">Enter Title</label>
                           <input type="text" class="form-control" name="assign_title">
                          </div>
						  					 

                          <div class="form-group">
						   <label for="exampleInputEmail1">Enter Content</label>
                          
						   
							<textarea class="form-control ckeditor" name="assign_content" cols="10" rows="10" ></textarea>
                          </div>
						  
						   <div class="form-group">
						   <label for="exampleInputEmail1">Add Attachments</label>
							<input name="attach_ment" type="file" class="form-control">
                          </div>
						  
						    <div class="form-group">
						   <label for="exampleInputEmail1">Set Expiry Date</label>
							<input name="exp_date" type="date" class="form-control">
                          </div>
						  
                        </div>
						<div align="center">
						<input type="submit" name="assignment" value="Create" class="btn btn-primary btn-lg">
					      </div>
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
   
  
				  
      </section>
              </div>
            </div>
	
		  
		  <?php
		    $subj_id = $_SESSION['subject_id'];
			
			$sql = " SELECT * FROM assignment where assign_subj_id = '$subj_id' ORDER BY assign_id DESC";
			$result = $conn->query($sql);
			while ($row = $result->fetch_array()){
			
			?>
         <div class="col-lg-6">
            <!--notification start-->
            <section class="panel">
              <header class="panel-heading">
                <p align="right" class="style10 style7"><a href="fmanager_script.php?assign_del_id=<?php echo $row['assign_id']; ?>&assign_subject=<?php  echo $row['assign_subj_id']; ?>&assign_file_id=<?php echo $row['assign_attach_name']; ?>" class="style11">Delete</a></p>
                <p class="style10"><?php echo $row['assign_title']; ?></p>
                <p class="style8"><span class="style3">File:</span> <a href="teacher_folders/<?php echo $_SESSION['folder_name'] ?>/assignment/<?php echo $row['assign_attach_name']; ?>"> <?php echo $row['assign_attach_name']; ?></a> </p>
              </header>
              <div class="panel-body">
               
                <div class="alert alert-block alert-danger fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                  </button>
                  <p><span class="style3"><strong>Due Date : </strong></span> <?php echo date('l jS \of F Y', strtotime($row['assign_exp_date'])); ?> </p>
				  <?php
				  $date_now = date_create(date("y-m-d")); 
                  $exp_date = date_create($row['assign_exp_date']);
                  $diff = date_diff($date_now,$exp_date);
                  $days =  $diff->format("%r%a");
				  $output;
				  if($days <=0)
				  {
				  $output = "expired";
				  }
				  else
				  {
				   $output = $days. ' Days left';
				  }
                  ?>
                  <p><span class="style3"><strong>status : </strong></span> <?php echo $output; ?>  </p>
                </div>
               
				<div class="alert  fade in">
                  
                  <?php echo $row['assign_content']; ?>
                </div>

              </div>
            </section>
	       </div>
			<?php
			}
			?>
			
			
			
			
            <!--notification end-->
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