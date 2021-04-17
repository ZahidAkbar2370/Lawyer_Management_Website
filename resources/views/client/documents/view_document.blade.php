@extends('/client/client_layout')
@section('client_content')

<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Categorys</h2>
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
							<a class="btn btn-successfull" href="documents/<?php echo $document->document; ?>" target="_blank">Download
							</a>
						</td>
					</tr>
		@endforeach
		@endif
		
		</tbody>
	</table>
</div>
@endsection