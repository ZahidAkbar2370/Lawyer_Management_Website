<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
	<title>Admin|Login</title>
	<br><br>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
</head>


<body style="background-color:skyblue";> 
	<center>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class=""><h1>Admin Login</h1></div>
      <div class="card-body">
      	<?php 
	if(!empty($message))
	{
		
		print_r("<p style='color:red;font-size:18px'>$message</p>");
	 
	}?>
	<br><br>
      <form action="{{URL::to('/admin_login')}}" method="POST">
      	@csrf
          <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input class="form-control" id="exampleInputEmail1" name="user_name" type="text" placeholder="Enter User Name" style="width: 280px;height: 35px;">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"></label>
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" style="width: 280px;height: 35px;">
          </div>
          
        
           <input class="btn btn-primary btn-block" type="submit" name="btnLogin" value="Login" style="width: 120px; height: 35px; background-color: blue;color: white;" />
        </form>
       </center>
      </div>
    </div>
  </div>
</body>

</html>