<!DOCTYPE html>
<html>
<head>
	
	<title>Lawyer | Login</title>
</head>
<body style="background-image: url('Legal-Banner.jpg');background-repeat:no-repeat; background-size: 100%;">
         

	<?php 
	if(!empty($message))
	{
		print_r($message);
	 
	}?>
	<center>
		
	
	<h1>lawyer login</h1>
	<form action="{{URL::to('/lawyer')}}" method="post">
		@csrf
		<input type="text" name="user_name" placeholder="Enter user name" style="width: 280px;height: 35px;">
		<br><br>
		

	   <input type="passwrod" name="password" placeholder="password" style="width: 280px;height: 35px;">
		<br><br>
		<input type="submit" name="submit" style="width: 120px; height: 35px; background-color: black;color: white;">
	</form>
	</center>

</body>
</html>