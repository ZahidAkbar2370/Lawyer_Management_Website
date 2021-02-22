@extends('admin_layout')
@section('admin_content')





<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Cases</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  	<th>ID</th>
									<th>Lawyer ID</th>
									<th>Category</th>
									<th>Description</th>
									<th>Action</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($data))
								@foreach($data as $key=> $value)
								 <tbody>
									<tr>
										<td class="center"><?php echo $value->id; ?></td>
										<td class="center"><?php echo $value->lawyer_id; ?></td>
										<td class="center"><?php echo $value->category; ?></td>
										<td class="center"><?php echo $value->description; ?></td>
										<td class="center">
											<a class="btn btn-danger" href="delete_case/{{$value->id}}">
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