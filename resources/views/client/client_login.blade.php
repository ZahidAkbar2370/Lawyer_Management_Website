<!DOCTYPE html>
<html>
<head>
	
	<title>Client | Login</title>
</head>
<body style="background-image: url('Legal-Banner.jpg');background-repeat:no-repeat; background-size: 100%;">
         

	<?php 
	if(!empty($message))
	{
		print_r($message);
	 
	}?>
	<center>
		
	
	<h1>Client Login</h1>
	<form action="{{URL::to('/client')}}" method="post">
		@csrf
		<input type="text" name="user_name" placeholder="User Name" style="width: 280px;height: 35px;">
		<br><br>
		

	   <input type="passwrod" name="password" placeholder="Password" style="width: 280px;height: 35px;">
		<br><br>
		<input type="submit" name="submit" style="width: 120px; height: 35px; background-color: black;color: white;">
	</form>
	</center>

</body>
</html>