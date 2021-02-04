<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {
	color: #FF9933;
	font-weight: bold;
}
-->
</style>


<div class="container">
   <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    </br></br></br></br></br>
    <form class="login-form" id="form1" name="form1" method="post" action="admin_script.php">
      <div class="login-wrap">
        <h3 class="page-header"><center>
          <h2><span class="style1"><span class="fa  fa-lock"> </span> Account </span> <span class="style2">login</span></h2>
          </center>
        </h3>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
		<div class="input-group">
		  <select name="usertype"  class="form-control">
	      <option value="">User Type</option>
          <option value="admin">Admin</option>
          <option value="employee">Employee</option>
          </select>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button><p>
      </div>
     </form>		</p>
		<!--
		<div class="alert alert-block alert-danger fade in shit">
          <div align="center"><p>".$_SESSION['error']."</p> 

          </div>
		</div>
		
		<div class="alert alert-success fade in shit">
          <div align="center"><strong>Success!</strong> Redirecting . . . .
          </div>
		</div>
		
		-->
</div>

</div>
