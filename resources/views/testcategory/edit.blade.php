@extends('layouts.app')

@section('content')

<br>
<div>
    <ol class="breadcrumb" style="width:97%">
        <li><a href="{{ url('/home') }}">home</a></li>
        <li><a href="{{ URL::route('testcategory.index')}}">Test category</a></li>
      <li class="active">Test Categories</li>
    </ol>
</div>
<div class="panel panel-primary">
    <div class="panel-heading ">
        <span class="glyphicon glyphicon-non"></span>
        Edit Category
    </div>
    <div class="panel-body">
        
        {!! Form::model($testcategory, array('route' => array('testcategory.update', $testcategory),'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator', 'method' => 'PUT')) !!}

                {{ csrf_field() }}

            <fieldset>

            <div class="form-group">
               {{ Form::label('name', 'Test Category Name', ['class' => 'col-md-2']) }}
                    <div class="col-lg-3">
                        {{ Form::text('name',null,['class' => 'form-control','placeholder' => 'Category Name', 'required' => 'true']) }}
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
                    <a href="{{ URL::route('testcategory.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>

@endsection