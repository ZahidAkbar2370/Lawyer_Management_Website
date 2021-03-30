@extends('admin_layout')
@section('admin_content')


<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Lawyer</h2>
		</div>
		<div class="box-content">
		@foreach ($data as $key => $value)
		<form action="{{URL::to('/update-lawyer',$value->id)}}" method="post">
			@csrf
			<div class="control-group">
				<div class="controls">
					<input type="hidden" class="input-xlarge" name="member_name" value="<?php echo $value->id ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Lawyer Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="lawyer_name" value="<?php echo $value->lawyer_name ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Father Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="father_name" value="<?php echo $value->father_name ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">CNIC</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="cnic" value="<?php echo $value->cnic ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Mobile #</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="mobile_number" value="<?php echo $value->mobile_number ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Address</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="address" value="<?php echo $value->address ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Qualification</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="qualification" value="<?php echo $value->qualification ?>" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Court</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="court" value="<?php echo $value->court ?>" required>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge" name="member_name" value="Update" required>
				</div>
			</div>
		</form>
		@endforeach

</div>
</div>
</div>
@endsection