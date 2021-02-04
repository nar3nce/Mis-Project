<?php include 'restriction.php'; 
include('../conn.php');
if(isset($_GET['subject'])) {
				 $subject = $_GET['subject'];
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
						<h3 class="page-header"><i class="fa fa-user"></i> Members</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li><i class="fa fa-files-o"></i>subjects</li>
							<li><i class="fa fa-folder-o"></i> Members </li>
						</ol>
					</div>
				</div>
   </div>
   <!-- page start-->
   <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
       
      </header>
      <div class="table-responsive">
        <table width="101%" class="table">
          <thead>
            <tr>
                      <th>#</th>
                      <th><i class=""></i> Firstname</th>
                      <th><i class=""></i> Lastname</th>
					  <th><i class=""></i> Email</th>
                      <th><i class=""></i> Student Id</th>
					  <th><i class="icon_cogs"></i> Actionl</th>
                    </tr>
          </thead>
          <tbody> 
<!-- ############################################## responsive table design -->

              <?php
	
			  $sql = "select * from subject_members";
			  $result = $conn->query($sql);
			  while ($row = $result->fetch_array()){
			  
			 $id = $row['subj_member_user_id'];
			  
			    $s = "select * from student where student_id = '$id ' ";
			    $q = $conn->query($s);
			    while ($r = $q->fetch_array()){
	        ?>
			
            <tr>
              <td><?php echo $r['student_id']; ?></td>
              <td><?php echo $r['student_firstname']; ?></td>
			  <td><?php echo $r['student_lastname']; ?></td>
			  <td><?php echo $r['student_email']; ?></td>
			  <td><?php echo $r['student_school_id']; ?></td>
			  
              <td>
              
            </td>
          </tr>
<?php 
}}

		     
  ?>
<!-- ################################################### end -->
       
        </tbody>
      </table>
    </div>
	
	<!-- add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add new Deduction</h4>
      </div>
      <div class="modal-body">

       <!-- ############## -->
       
       <form id="form1" name="form3" method="post" action="deduction_script.php">
        <div class="form-group">
         <label for="exampleInputEmail1"></label>
         <input type="hidden" name="id" value=""class="form-control" id="exampleInputEmail1" placeholder="">
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1">Description</label>
         <input type="text" name="desc"  value="" class="form-control" id="exampleInputEmail1" placeholder="Pagibig" required>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Amount</label>
         <input type="text" name="amount" value="" class="form-control" id="exampleInputPassword1" placeholder="20000" required>
       </div>
       <input type="submit" name="add" value="Add" class="btn btn-primary">
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


<?php
}
else {
echo "no subject selected";
exit();
}
?>