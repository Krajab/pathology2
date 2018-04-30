@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
	<div class="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
						<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="drug" data-form="deleteForm">
								<caption>
										<h4 class="pull-left">Drugs</h4>
										<a type="button" href="{{ url('/drug/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus"> Add Drug</span></a>
								</caption>
										  <thead>
										    <tr>
										      <th >#</th>
										      <th >Name</th>
										      <!-- <th >Description</th> -->
										    <!--   <th >Drug Description</th> -->
										      <th ></th>

										    </tr>
										  </thead>
									 	<tbody>
										  	<?php $row=1; ?>
										  	@foreach($drugs as $drug)
										    <tr>
										      <th> {{ $row }} </th>
										      <td>{{ $drug->name }}</td>
										    <!--   <td>{{ $drug->description }}</td> -->
										     										      	
										     	<td>

								                {{ Form::open(array('url' => 'drug/' . $drug->id, 'class' => 'pull-right form-delete')) }}
								                    {{ Form::hidden('_method', 'DELETE') }}
								                    {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
								                {{ Form::close() }}

										      	<a href="{{ route('drug.edit', $drug->id) }}" class="btn btn-link form-control-static pull-right"><span class="glyphicon glyphicon-edit"></span> Edit</a>
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
