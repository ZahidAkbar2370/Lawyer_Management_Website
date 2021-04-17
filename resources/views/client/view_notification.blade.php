@extends('/client/client_layout')
@section('client_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Notifications</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr>
								  	<th>ID</th>
									<th>Meeting Date</th>
									<th>Meeting Time</th>
							  </tr>
						  </thead>   
						 		@if(!empty($all_notification))
								@foreach($all_notification as $key=> $value)
								 <tbody>
								 	
								 	<?php 
								 	if($value->meeting_date  == date("Y-m-d",strtotime("today")))
								 	{?>
									<tr>
										<td class="center"><?php echo $value->id; ?></td>
										<td class="center"><?php echo $value->meeting_date; ?></td>
										<td class="center"><?php echo $value->meeting_time; ?></td>
									</tr>
									<<?php }?>
							
						  </tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection