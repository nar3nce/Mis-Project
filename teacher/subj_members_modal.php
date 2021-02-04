<!-- accept -->
<style type="text/css">
<!--
.style1 {color: #0000FF}
-->
</style>

<div class="modal fade" id="accept<?php echo $row['subj_member_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Accept</h4>
      </div>
      <div class="modal-body">

        Accept Student <span class="style1"><?php echo $rw['student_firstname']; ?> <?php echo $rw['student_lastname']; ?></span> ?

      </div>
      <div class="modal-footer">
	  <form id="form1" name="form2" method="post" action="fmanager_script.php?accept=<?php echo $row['subj_member_id']; ?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="accept" value="accept" class="btn btn-primary" required>;
	  </form>
      </div>
    </div>
  </div>
</div>

<!-- deny -->
<div class="modal fade" id="deny<?php echo $row['subj_member_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Deny</h4>
      </div>
      <div class="modal-body">

       Are you sure to Deny Student <span class="style1"><?php echo $rw['student_firstname']; ?> <?php echo $rw['student_lastname']; ?></span> ?      </div>
      <div class="modal-footer">
	  <form id="form1" name="form2" method="post" action="fmanager_script.php?deny=<?php echo $row['subj_member_id']; ?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="accept" value="deny" class="btn btn-danger" required>
	  </form>
      </div>
    </div>
  </div>
</div>


<!-- deny -->
<div class="modal fade" id="remove<?php echo $row['subj_member_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Deny</h4>
      </div>
      <div class="modal-body">

       Are you sure to Remove Student <span class="style1"><?php echo $rw['student_firstname']; ?> <?php echo $rw['student_lastname']; ?></span> from this class ?      </div>
      <div class="modal-footer">
	  <form id="form1" name="form2" method="post" action="fmanager_script.php?remove_stud_id=<?php echo $row['subj_member_id']; ?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
         <input type="submit" name="accept" value="remove" class="btn btn-danger" required>
	  </form>
      </div>
    </div>
  </div>
</div>