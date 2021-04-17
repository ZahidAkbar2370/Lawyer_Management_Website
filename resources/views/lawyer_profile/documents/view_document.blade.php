@extends('/lawyer_profile/lawyer_layout')
@section('lawyer_content')

<div class="row-fluid sortable">		
		<div class="box span12">
			<a href="{{URL::to('lawyer-add-document')}}"><button>Add Document</button></a>
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Documents</h2>
			</div>

			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Client Id</th>
							<th>Document</th>
							<th>Download</th>
						</tr>
					</thead>

				<tbody>
					@if(!empty($all_document))
					@foreach($all_document as $key=> $document)
					<tr>
						<td><?php echo $document->id; ?></td>
						<td><?php echo $document->client_id; ?></td>
						<td><?php echo $document->document; ?></td>
						<td>
							<a class="btn btn-danger" href="lawyer-delete-document/{{$document->id}}">
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