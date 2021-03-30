<!DOCTYPE html>
<html>
<head>
	<center>
	<title>Register Client</title>
</head>
<body style="background-image: url('Legal-Banner.jpg');background-repeat:no-repeat; background-size: 120%;">
	<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2 style="font-size: 40px;"><i class="halflings-icon user"></i><span class="break"></span>Register Client</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/register-client')}}" method="post">
			@csrf

			<div class="control-group">
				
				<label class="control-label" for="date01"></label>
				<div class="controls">

					<input type="text" class="input-xlarge" name="client_name" placeholder="Client Name"required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="father_name"placeholder="Father Name" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="cnic" placeholder="CNIC"required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="mobile_number" placeholder="Mobile Number" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="email" class="input-xlarge" name="email" placeholder="example@gmail.com" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="address" placeholder="Address" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<!-- <div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="qualification" placeholder="Qualification" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="court" placeholder="Court" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div> -->

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_name"placeholder="User Name" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01"></label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="password"placeholder="Password" required style="width: 280px;height: 35px;">
					<br><br>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					
					<input type="submit" class="input-xlarge" name="member_name" value="Register" style="width: 100px;height: 35px; 35px; background-color: blue;color: white;">
				</div>
			</div>
		</form>
		</center>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->
</body>
</html>