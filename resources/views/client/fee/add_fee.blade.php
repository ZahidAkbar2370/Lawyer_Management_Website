@extends('/client/client_layout')
@section('client_content')

	<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Fee</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/save-fee')}}" method="post">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Account #</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="account_no" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Account Password</label>
				<div class="controls">
					<input type="password" class="input-xlarge" name="account_password" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Lawyer Name</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="lawyer_id" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Amount</label>
				<div class="controls">
					<input type="number" class="input-xlarge" name="amount" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Description</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="description" required>
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