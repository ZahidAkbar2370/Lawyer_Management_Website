@extends('admin_layout')
@section('admin_content')




<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Client</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/save-client')}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Client Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="client_name" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Father Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="father_name" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">CNIC</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="cnic" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Mobile #</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="mobile_number" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Address</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="address" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Email</label>
				<div class="controls">
					<input type="email" class="input-xlarge" name="email" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">User Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="user_name" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Password</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="password" required>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge" name="member_name" value="Save">
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->
@endsection