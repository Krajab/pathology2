@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading"><b>Recieve Specimen</div></b>
                <div class="panel-body">

                    {!! Form::open(array('url' => 'user','autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator')) !!}

                        {{ csrf_field() }}

                            <fieldset>

                                <div class="form-group">
                                {{ Form::label('date_recieved', 'Date Recieved', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-4">
                                        {{ Form::text('date_recieved',null,['class' => 'form-control date','placeholder' => 'Date Recieved', 'required'=>'true',
                                       'data-provide' => 'datepicker','data-date-format' => 'd-m-yyyy']) }}

                                          @if ($errors->has('date_recieved'))
                                            <span class="text-danger">
                                              <strong>{{ $errors->first('date_recieved') }}</strong>
                                            </span>
                                           @endif

                                  </div>
                                </div>

                           
                                    <div class="form-group">
                                    {{ Form::label('body_weight', 'Body Weight', ['class' => 'col-lg-2 control-label']) }}
                                      <div class="col-lg-4">
                                            {{ Form::number('refered_to',null,['class' => 'form-control', 'required' => 'true']) }}

                                            @if ($errors->has('body_weight'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('body_weight') }}</strong>
                                                </span>
                                            @endif

                                      </div>
                                    </div> 

                                    <div class="form-group">
                                {{ Form::label('rifampicin', 'Patient on Rifampicin', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-4">
                                        {{ Form::radio('rifampicin', 1) }} Yes
                                          {{ Form::radio('rifampicin', 0) }} No

                                  </div>
                                </div>


                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <a href="{{url('/specimen')}}" class="btn btn-default">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Save</button>
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
