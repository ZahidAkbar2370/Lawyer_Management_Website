@extends('/lawyer_profile/lawyer_layout')
@section('lawyer_content')
<div class="container">
	<center><h2>Add Case</h2></center>
<center>
	<form action="{{URL::to('/save-case')}}" method="post">
	@csrf
	<div class='input-group mb-3'>

			<span class='input-group-text'></span>
			<br>
			<input type='text' class='form-control' name='category' placeholder="category"> 
<br>
			
		<span class='input-group-text'></span>
		<br>
			<input type='text' class='form-control' name='description'placeholder="description">
<br>
			<input type="submit" value="Add Case" style="width: 120px; height: 35px; background-color: black;color: white;">
		</div>
		
		</center>
	</form>
</div>


@endsection