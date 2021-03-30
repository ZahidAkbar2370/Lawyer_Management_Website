@extends('/client/client_layout')
@section('client_content')

<a href="{{URL::to('add-meeting')}}"><button>Add Meeting</button></a>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Meetings</h2>
					</div>
					<div class="box-content">
							
						<table class="table table-striped table-bordered bootstrap-datatable datatable">

						  <thead>
							  <tr>
								  	<th>ID</th>
									<th>Client Name</th>
									<th>Lawyer Name</th>
									<th>Meeting Date</th>
									<th>Meeting Time</th>
									<th>Status</th>
									<th>Publication Status</th>
									<th>Action</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($data))
								@foreach($data as $key=> $value)
								 <tbody>
									<tr>
										<td class="center"><?php echo $value->id; ?></td>
										<td class="center"><?php echo $value->client_id; ?></td>
										<td class="center"><?php echo $value->lawyer_id; ?></td>
										<td class="center"><?php echo $value->meeting_date; ?></td>
										<td class="center"><?php echo $value->meeting_time; ?></td>
										
										@if(($value->status)=="1")
											<td class="center">
											<span class="label label-success">Accept</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Reject</span>
											</td>
										@endif

										<?php $date=date("Y-m-d"); ?>
										@if(($value->meeting_date)>= $date )
											<td class="center">
											<span class="label label-success">Pending</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Expired</span>
											</td>
										@endif

										<td class="center">
											<!-- @if(($value->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('unapprove/'.$value->id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('approve/'.$value->id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif -->
											<!-- <a class="btn btn-info" href="{{URL::to('edit_lawyer/'.$value->id)}}">
												<i class="halflings-icon white edit"></i>  
											</a> -->
											<a class="btn btn-danger" href="client/delete_meeting/{{$value->id}}">
												<i class="halflings-icon white trash"></i> 
											</a>
										</td>
									</tr>
							
						  </tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection