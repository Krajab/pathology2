@extends('layouts.app')

@section('content')

@extends('footer')
<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
		<li><a href="{{ url('/show') }}">settings</a></li>
	  <li class="active">Specimen Types</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-add"></span>
		List of Specimen Types   
			<a class="btn btn-sm btn-info" href="{{ URL::to("specimentype/create") }}" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				  New Specimen Type
			</a>
			
		</div>
	
	<div class="panel-body">
		<div class="table-responsive">
		  <table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="personnel" data-form="deleteForm">
			<thead>
				<tr>
					<th>#</th>
					<th>Names</th>
					<th>Description</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $row=1; ?>
					@foreach($specimentype as $specimentype)
					<tr>
					<th> {{ $row }} </th>
					<td>{{ $specimentype->name }}</td>
					<td>{{ $specimentype->description }}</td>										      	
					<td>
						<!-- show the specimentype (uses the show method found at GET /specimentype/{id} -->
						<a class="btn btn-sm btn-success" href="{{ URL::to("specimentype/" . $specimentype->id) }}" >
							<span class="glyphicon glyphicon-eye-open"></span>
							View
						</a>

						<!-- edit this specimentype (uses the edit method found at GET /specimentype/{id}/edit -->
						<a class="btn btn-sm btn-info" href="{{ URL::to("specimentype/" . $specimentype->id . "/edit") }}" >
							<span class="glyphicon glyphicon-edit"></span>
							Edit
						</a>
						<button class="btn btn-sm btn-danger delete-item-link" 
							data-toggle="modal" data-target=".confirm-delete-modal"	
							data-id='{{ URL::to("specimentype/" . $specimentype->id . "/destroy") }}'>
							<span class="glyphicon glyphicon-trash"></span>
							Delete
						</button>


				<!-- 		{{ Form::open(array('url' => 'specimentype/' . $specimentype->id, 'class' => 'pull-right form-delete')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
						{{ Form::close() }} -->
							
					</td>
							</tr>
					<?php $row++; ?>
					@endforeach
			</tbody>
		</table>
	</div>
</div>




@endsection