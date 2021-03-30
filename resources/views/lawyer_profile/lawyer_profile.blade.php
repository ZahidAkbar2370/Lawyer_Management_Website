@extends('/lawyer_profile/lawyer_layout')
@section('lawyer_content')

<body style="background-image: url('Legal-Banner.jpg');background-repeat:no-repeat; background-size: 120%;">

<div class="container">
	<form action="{{URL::to('/lawyer_update')}}" method="post">
		@csrf
	 @foreach ($data as $key => $value): 

		<center><h2>{{$value->lawyer_name}}</h2></center>
		<input type='hidden'  name='id'  value='{{$value->id}}'>

		<div class='input-group mb-3'>

		    <span class='input-group-text'>Lawyer Name</span>
			<input type='text' class='form-control' name='lawyer_name' value='{{$value->lawyer_name}}'style='margin-left: 40px';>  
	 
<br>

			<span class='input-group-text'>Father Name</span>
			<input type='text' class='form-control' name='father_name' value='{{$value->father_name}}' style='margin-left: 43px';> 
<br>
		</div>
		 
		



		<div class='input-group mb-3'>

		    <span class='input-group-text'>Cnic</span>
			<input type='text' class='form-control' name='cnic' value='{{$value->cnic}}' style='margin-left: 100px';> 
<br>
		    <span class='input-group-text'>Mobile Number</span>
		    <input type='text' class='form-control' name='mobile_number' value='{{$value->mobile_number}}'  style='margin-left: 25px';> 
           
        			
		</div>


		<div class='input-group mb-3'>

		    <span class='input-group-text'>Address</span>
			<input type='text' class='form-control' name='address' value='{{$value->address}}'  style='margin-left: 75px';> 
<br>
			<span class='input-group-text'>Qualification</span>
			<input type='text' class='form-control' name='qualification' value='{{$value->qualification}}'  style='margin-left: 44px';> 
			<br>
		</div>


		<div class='input-group mb-3'>

		    <span class='input-group-text'>Court</span>
			<input type='text' class='form-control' name='court' value='{{$value->court}}'  style='margin-left: 88px';> 
<br>
			<span class='input-group-text'>User Name</span>
			<input type='text' class='form-control' name='user_name' value='{{$value->user_name}}' style='margin-left: 50px';> 
			<br>
		</div>

		<div class='input-group mb-3'>
			<span class='input-group-text'>Password</span>
			<input type='text' class='form-control' name='password' value='{{$value->password}}'  style='margin-left: 59px' disabled=""> 
			<br><br>
		</div>
		
	@endforeach
	<input type="submit" value="Save Changes" style="width: 120px; height: 35px; background-color: black;color: white;" style='margin-left: 70px';> 
	</form>
</div>




@endsection
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lawyer</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

	

	
	<link rel="shortcut icon" href="img/favicon.ico">




<style type="text/css">
	
	.input1{
		margin-left: 50px;
	}

</style>




</head>
<body style="background-image: url('Legal-Banner.jpg');background-repeat:no-repeat; background-size: 120%;">

<div class="container">
	<form action="{{URL::to('/lawyer_update')}}" method="post">
		@csrf
	 @foreach ($data as $key => $value): 

		<center><h2>{{$value->lawyer_name}}</h2></center>
		<input type='hidden'  name='id'  value='{{$value->id}}'>

		<div class='input-group mb-3'>

		    <span class='input-group-text'>Lawyer Name</span>
			<input type='text' class='form-control' name='lawyer_name' value='{{$value->lawyer_name}}'style='margin-left: 40px';>  
	 
<br>

			<span class='input-group-text'>Father Name</span>
			<input type='text' class='form-control' name='father_name' value='{{$value->father_name}}' style='margin-left: 43px';> 
<br>
		</div>
		 
		



		<div class='input-group mb-3'>

		    <span class='input-group-text'>Cnic</span>
			<input type='text' class='form-control' name='cnic' value='{{$value->cnic}}' style='margin-left: 100px';> 
<br>
		    <span class='input-group-text'>Mobile Number</span>
		    <input type='text' class='form-control' name='mobile_number' value='{{$value->mobile_number}}'  style='margin-left: 25px';> 
           
        			
		</div>


		<div class='input-group mb-3'>

		    <span class='input-group-text'>Address</span>
			<input type='text' class='form-control' name='address' value='{{$value->address}}'  style='margin-left: 75px';> 
<br>
			<span class='input-group-text'>Qualification</span>
			<input type='text' class='form-control' name='qualification' value='{{$value->qualification}}'  style='margin-left: 44px';> 
			<br>
		</div>


		<div class='input-group mb-3'>

		    <span class='input-group-text'>Court</span>
			<input type='text' class='form-control' name='court' value='{{$value->court}}'  style='margin-left: 88px';> 
<br>
			<span class='input-group-text'>User Name</span>
			<input type='text' class='form-control' name='user_name' value='{{$value->user_name}}' style='margin-left: 50px';> 
			<br>
		</div>

		<div class='input-group mb-3'>
			<span class='input-group-text'>Password</span>
			<input type='text' class='form-control' name='password' value='{{$value->password}}'  style='margin-left: 59px' disabled=""> 
			<br><br>
		</div>
		
	@endforeach
	<input type="submit" value="Save Changes" style="width: 120px; height: 35px; background-color: black;color: white;" style='margin-left: 70px';> 
	</form>
</div>


<div class="container">
	<center><h2>Add Case</h2></center>
<center>
	<form action="{{URL::to('/add_case')}}" method="post">
	@csrf
		@foreach ($data as $key => $value)
			<input type='hidden'  name='id1'  value='{{$value->id}}}'>
			
		@endforeach

		<div class='input-group mb-3'>

			<span class='input-group-text'></span>
			<br>
			<input type='text' class='form-control' name='category' placeholder="category"> 
<br>
			
		<span class='input-group-text'></span>
		<br>
			<input type='text' class='form-control' name='description'placeholder="description">
<br>
			<input type="submit" value="Add Case" style="width: 120px; height: 35px; background-color: black;color: white;">
		</div>
		
		</center>
	</form>
</div>



</body>
</html> -->