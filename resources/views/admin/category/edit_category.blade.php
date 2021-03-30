@extends('admin_layout')
@section('admin_content')

		@foreach ($data as $key => $value)

			
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Category</h2>
		</div>
		<div class="box-content">

		<form action="{{URL::to('/update-category',$value->id)}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Category</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="category_name" required value="<?php echo $value->category_name ?>">
				</div>
				<div class="controls">
					<input type="submit" class="input-xlarge" name="member_name" value="Update">
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->


		
			
		@endforeach
@endsection