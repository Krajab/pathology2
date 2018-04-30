@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
	<div class="page_content">
        <div class="container-fluid">
			<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
						<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="facility" data-form="deleteForm">

							<caption>
								<h4 class="pull-left">Patients</h4>
									<a type="button" href="{{ url('/facility/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-person-stalker">  Add Patient</span></a>
										</caption>

										  <thead>
										    	<tr>
										      	<th>#</th>
										      	<th>Patient Number</th>
										       	<th>Date Collected</th>
										      	<th>Name</th>
										      	<th>Gender</th>
										      	<th>Age</th>
										      	<th>Tribe</th>
										      	<th>Phone Number</th>
										      	<th>Results</th>
										      	<th>DBS Done</th>
										      	<th>Status</th>
										    	</tr>
										  </thead>
										  <tbody>
										  	<?php $row=1; ?>
										  	@foreach($facilities as $facility)
										    <tr>
										      <th> {{ $row }} </th>
										      <td>{{ $facility->facility }}</td>
										      <td>{{ $facility->regional_hub }}</td>
										      <td>{{ $facility->district }}</td>
										      	
										     	<td>

								                {{ Form::open(array('url' => 'facility/' . $facility->id, 'class' => 'pull-right form-delete')) }}
								                    {{ Form::hidden('_method', 'DELETE') }}
								                    {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
								                {{ Form::close() }}

										      	<a href="{{ route('facility.edit', $facility->id) }}" class="btn btn-link form-control-static pull-right"><span class="glyphicon glyphicon-edit"></span> Edit</a>
											</td>
										    </tr>
										    <?php $row++; ?>
										    @endforeach
										  </tbody>
						</table>
					</div>
				</div>
            </div>
        </div>
	</div>
@endsection
