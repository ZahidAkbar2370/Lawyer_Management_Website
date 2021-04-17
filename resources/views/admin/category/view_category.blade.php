@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
		<div class="box span12">
			<a href="{{URL::to('add-category')}}"><button>Add Category</button></a>
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Categorys</h2>
			</div>

			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Category Name</th>
							<th>Category Regin</th>
							<th>Action</th>
						</tr>
					</thead>

				<tbody>
					@if(!empty($data))
					@foreach($data as $key=> $value)
					<tr>
						<td><?php echo $value->id; ?></td>
						<td><?php echo $value->category_name; ?></td>
						<td><?php echo $value->category_regin; ?></td>
						<td>
							<a class="btn btn-info" href="edit/{{$value->id}}">
							<i class="halflings-icon white edit"></i> 
							</a>
							<a class="btn btn-danger" href="delete/{{$value->id}}">
							<i class="halflings-icon white trash"></i> 
							</a>
						</td>
					</tr>
		@endforeach
		@endif
		
		</tbody>
	</table>
</div>
@endsection