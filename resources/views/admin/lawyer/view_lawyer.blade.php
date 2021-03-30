@extends('admin_layout')
@section('admin_content')





<div class="row-fluid sortable">		
				<div class="box span12">
					<a href="{{URL::to('add-lawyer')}}"><button>Add Lawyer</button></a>
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Lawyers</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  	<th>ID</th>
									<th>Name</th>
									<th>F.Name</th>
									<th>CNIC</th>
									<th>Mobile</th>
									<th>Address</th>
									<th>Qualification</th>
									<th>Court</th>
									<th>Publication Status</th>
									<th>Action</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($data))
								@foreach($data as $key=> $value)
								 <tbody>
									<tr>
										<td class="center"><?php echo $value->id; ?></td>
										<td class="center"><?php echo $value->lawyer_name; ?></td>
										<td class="center"><?php echo $value->father_name; ?></td>
										<td class="center"><?php echo $value->cnic; ?></td>
										<td class="center"><?php echo $value->mobile_number; ?></td>
										<td class="center"><?php echo $value->address; ?></td>
										<td class="center"><?php echo $value->qualification; ?></td>
										<td class="center"><?php echo $value->court; ?></td>

										@if(($value->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($value->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('unapprove/'.$value->id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('approve/'.$value->id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('edit_lawyer/'.$value->id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete_lawyer/{{$value->id}}">
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