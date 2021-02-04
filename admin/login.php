<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <?php require "css.php"; ?>
  <style type="text/css">
<!--
.style2 {color: #000000}
.style3 {color: #6633CC}
.style4 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
  </style>
</head>

<body class = "main-content">

<div class="container">

  
 
    <form class="login-form" action="index.html">
      <div class="login-wrap">
        <h3 class="page-header"><center>
          <h2 class="logo style4"><strong><span class="style2">Admin</span> <span class="lite style3">Login</span></strong></h2>
          </center>
        </h3>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button><p>
		<div class="alert alert-block alert-danger fade in ">
         <strong>Error!</strong> incorrect username or password.
        </div>
      </div>
        </form>
	
    
</div>
</body>

</html>
