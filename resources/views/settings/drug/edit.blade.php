@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">Edit Drugs</div>
                <div class="panel-body">
             {!! Form::model($drug, array('route' => array('drug.update', $drug->id),'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator', 'method' => 'PUT')) !!}


                        {{ csrf_field() }}
                            <fieldset>

                                <div class="form-group">
                                {{ Form::label('name', 'Name', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::text('name',null,['class' => 'form-control','placeholder' => 'Name', 'required' => 'true']) }}

                                        @if ($errors->has('name'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>

                               <!--  <div class="form-group">
                                {{ Form::label('description', 'Description', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::text('description',null,['class' => 'form-control','placeholder' => 'Description', 'required' => 'true']) }}

                                        @if ($errors->has('description'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div> -->

                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                        <a href="{{url('/drug')}}" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                </div>

                            </fieldset>

                {!! Form::close() !!}

                </div>
            </div>

                        </div>
                    </div>
                </div>
</div>
@endsection
