@extends('layouts.app')

@section('content')

<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
		<li><a href="{{ url('testcategory') }}">settings</a></li>
	  <li class="active">Specimen Types</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon"></span>
        Create Categories
    </div>
    <div class="panel-body">
		
		 {!! Form::open(array('url' => 'testcategory', 'id' => 'form-create-testcategory')) !!}

                {{ csrf_field() }}

            <fieldset>

			<div class="form-group">
               {{ Form::label('name', 'Test Category Name', ['class' => 'col-md-2']) }}
                    <div class="col-lg-3">
                		{{ Form::text('name',null,['class' => 'form-control','placeholder' => 'Specimen Type', 'required' => 'true']) }}
                    </div>
            </div><br><br>
			<div class="form-group">
               {{ Form::label('description', 'Description', ['class' => 'col-lg-2']) }}
                    <div class="col-lg-3">
                		{{ Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Description']) }}
                    </div>
            </div>
			<div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <a href="{{ URL::route('specimentype.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

		{!! Form::close() !!}
	</div>
</div>

@endsection