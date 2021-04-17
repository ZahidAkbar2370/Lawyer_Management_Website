@extends('/lawyer_profile/lawyer_layout')
@section('lawyer_content')




<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Document</h2>
		</div>
		<div class="box-content">

		<form action="{{URL::to('/save-document')}}" method="post" enctype="multipart/form-data">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Client Id</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="client_id" required>
				</div>

				<label class="control-label" for="date01">Document</label>
				<div class="controls">
					<input type="file" class="input-xlarge" name="document" required>
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