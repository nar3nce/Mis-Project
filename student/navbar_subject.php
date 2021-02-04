<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
		<li class="sub-menu">
            <a class="" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>                      </a>          </li>
          <li class="sub-menu">
            <a class="" href=" subject_manager.php?teacher_id=<?php echo $_SESSION['teacher_id']; ?>&folder_name=<?php echo $_SESSION['teacher_folder_name']; ?>&subject_name=<?php echo $_SESSION['subject_name']; ?>&subject_id=<?php echo $_SESSION['subject_id']; ?>">
                          <i class="fa fa-files-o"></i>
                          <span>Materials</span>                      </a>          </li>
          <li class="sub-menu">
            <a class="" href="notices.php">
                          <i class="fa fa-files-o"></i>
                          <span>updates</span>                      </a>          </li>
          </li>
		   <li class="sub-menu">
            <a class="" href="assignment.php">
                          <i class="fa fa-files-o"></i>
                          <span>Assignment</span>                      </a></li>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
	  
    </aside>
