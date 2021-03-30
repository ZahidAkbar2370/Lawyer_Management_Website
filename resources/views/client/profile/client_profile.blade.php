@extends('/client/client_layout')
@section('client_content')

		
	<div class="container">
	<form action="{{URL::to('/client_update')}}" method="post">
		@csrf
	 @foreach ($data as $key => $value): 

		<center><h2>{{$value->client_name}}</h2></center>
		<input type='hidden'  name='id'  value='{{$value->id}}'>

		<div class='input-group mb-3'>

		    <span class='input-group-text'>Client Name</span>
			<input type='text' class='form-control' name='client_name' value='{{$value->client_name}}'style='margin-left: 40px';>  
	 
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
			<span class='input-group-text'>Email</span>
			<input type='email' class='form-control' name='email' value='{{$value->email}}'  style='margin-left: 75px';> 
			<br>
		</div>


		<div class='input-group mb-3'><span class='input-group-text'>User Name</span>
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