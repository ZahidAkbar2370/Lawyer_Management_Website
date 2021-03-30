@extends('/client/client_layout')
@section('client_content')

	<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Meeting</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/save-meeting')}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Lawyer Name</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="lawyer_id" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Meeting Date</label>
				<div class="controls">
					<input type="date" class="input-xlarge" name="meeting_date" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Meeting Time</label>
				<div class="controls">
					<input type="time" class="input-xlarge" name="meeting_time" required>
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