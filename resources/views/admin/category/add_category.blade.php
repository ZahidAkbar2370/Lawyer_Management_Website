@extends('admin_layout')
@section('admin_content')




<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Category</h2>
		</div>
		<div class="box-content">

		<form action="{{URL::to('/save-category')}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Category</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="category_name" required>
				</div>

				<label class="control-label" for="date01">Category Regin</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="category_regin" required>
				</div>

				<div class="controls">
					<input type="submit" class="input-xlarge" name="member_name" value="Save">
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->
@endsection