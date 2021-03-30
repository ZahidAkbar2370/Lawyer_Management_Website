@extends('/lawyer_profile/lawyer_layout')
@section('lawyer_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Payments</h2>
					</div>
					<div class="box-content">
							
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr>
								  	<th>ID</th>
									<th>Client Name</th>
									<th>Lawyer Name</th>
									<th>Amount</th>
									<th>Description</th>
									<th>Publication Status</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($data))
								@foreach($data as $key=> $value)
								 <tbody>
									<tr>
										<td class="center"><?php echo $value->id; ?></td>
										<td class="center"><?php echo $value->client_id; ?></td>
										<td class="center"><?php echo $value->lawyer_id; ?></td>
										<td class="center"><?php echo $value->amount; ?></td>
										<td class="center"><?php echo $value->description; ?></td>

										@if(($value->status)=="1")
											<td class="center">
											<span class="label label-success">Expired</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Paid</span>
											</td>
										@endif

										
									</tr>
							
						  </tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection