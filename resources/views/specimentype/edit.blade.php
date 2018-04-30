@extends('layouts.app')

@section('content')

<br>
<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
		<li><a href="{{ URL::route('specimentype.index')}}">specimen type</a></li>
	  <li class="active">Specimen Types</li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-non"></span>
		Edit Specimen
	</div>
	<div class="panel-body">
		
		{!! Form::model($specimentype, array('route' => array('specimentype.update', $specimentype),'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator', 'method' => 'PUT')) !!}

                {{ csrf_field() }}

            <fieldset>

			<div class="form-group">
               {{ Form::label('name', 'Specimen Name', ['class' => 'col-md-2']) }}
                    <div class="col-lg-3">
                		{{ Form::text('name',null,['class' => 'form-control','placeholder' => 'Specimen Type', 'required' => 'true']) }}
                    </div>
            </div>
			<div class="form-group">
               {{ Form::label('description', 'Description', ['class' => 'col-lg-2']) }}
                    <div class="col-lg-3">
                		{{ Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Description', 'required' => 'true']) }}
                    </div>
            </div>
			<div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <a href="{{ URL::route('specimentype.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>

		{!! Form::close() !!}
	</div>
</div>

@endsection