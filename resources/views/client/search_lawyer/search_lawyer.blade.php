@extends('/client/client_layout')
@section('client_content')




<div class="row-fluid sortable">		
				<div class="box span12">
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

									</tr>
							
						  </tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection