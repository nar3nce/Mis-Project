<?php 
include 'restriction.php'; 
include('../conn.php');			 	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  
  <!-- Bootstrap CSS -->
  <?php include "css.php"; ?>
  <style type="text/css">
    <!--
.style2 {
	color: #0000FF;
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
                      <th><i class=""></i> Full Name</th>
                      <th><i class=""></i> Student Id</th>
					  <th><i class=""></i> Email</th>
                      <th><i class=""></i> Access Status</th>
					  <th><i class="icon_cogs"></i> Action</th>
                    </tr>
          </thead>
          <tbody> 
<!-- ############################################## responsive table design -->

              <?php
			 $subj_id = $_SESSION['subject_id'];
			
			  $sql = "select * from subject_members where subj_class_id = '$subj_id' and usertype = 'student'";
			  $result = $conn->query($sql);
			  while ($row = $result->fetch_array()){
			  
			  $stud_id = $row['subj_member_user_id'];
			  
			       $s = "select * from student where student_id = '$stud_id'";
			       $r = $conn->query($s);
			       while ($rw = $r->fetch_array()){
			   
	        ?>
			
            <tr>
			  <td><?php echo $rw['student_id']; ?></td>
              <td><?php echo $rw['student_firstname']; ?> <?php echo $rw['student_lastname']; ?></td>
			  <td><?php echo $rw['student_school_id']; ?></td>
			  <td><?php echo $rw['student_email']; ?></td>
			  <td><span class="style2"><?php echo $row['subject_member_status']; ?></span></td>
             <td>
               <div class="btn-group">
                <a class="btn btn-primary" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="fa fa-pencil-square-o"></span> Manage</a>
                <ul class="dropdown-menu">
                  <li><a href="#accept<?php echo $row['subj_member_id']; ?>" data-toggle="modal" >Accept</a></li>
				  <li><a href="#deny<?php echo $row['subj_member_id']; ?>" data-toggle="modal" >Deny</a></li>
				  <li><a href="#remove<?php echo $row['subj_member_id']; ?>" data-toggle="modal" >Remove</a></li>
                </ul>
              </div>
            </td>
			  
              <td>
              
            </td>
          </tr>
		  
<?php 
include('subj_members_modal.php');  
}
}
		     
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