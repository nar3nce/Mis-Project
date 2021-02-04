 <!-- start header -->
    <header>
      <div class="container ">
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" id="form2" name="form2" method="post" action="login_script.php">
				<div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Firstname</label>
                    <div class="controls">
                      <input type="text" name="fname" id="inputSignupPassword" placeholder="">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Lastname</label>
                    <div class="controls">
                      <input type="text" name="lname" id="inputSignupPassword" placeholder="">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Username</label>
                    <div class="controls">
                      <input type="text" name="username" id="inputSignupPassword" placeholder="">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input  type="password" name="password" id="inputSignupPassword" placeholder="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="email" name="email" id="inputEmail" placeholder="">
                    </div>
                  </div>
				   <div class="control-group">
                   
                    <div class="controls">
                      <select name="usertype" required>
					  <option disabled="disabled" selected>User Type</option>
                      <option value="teacher">Teacher</option>
                      <option value="student">Student</option>
                      </select>
                    </div>
					 </div>
                  <div class="control-group">
                    <div class="controls">
					  <button type="submit" class="btn" name="register">Sign up</button>
                    </div>
				 </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>                    </p>
                  </div>
                </form>
            </div>
            </div>
            <!-- end signup modal -->
			
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" id="form1" name="form1" method="post" action="login_script.php">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" name="username" id="inputText" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" name="password" id="inputSigninPassword" placeholder="Password" required>
                    </div>
                  </div>
				     <div class="control-group">
                   
                    <div class="controls">
                      <select name="usertype" required>
					  <option disabled="disabled" selected>User Type</option>
                      <option value="teacher">Teacher</option>
                      <option value="student">Student</option>
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
					  <button type="submit" class="btn" name="login">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="img/logo.png" style="max-height:50px" alt="" class="logo"/> </a>
              <h1> Learning Management System</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Home </a>                    </li>
                     <li>
                      <a href="about.php">about us </a>                    </li>
                   
                    <li>
                      <a href="contact.php">Contact us </a>                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>