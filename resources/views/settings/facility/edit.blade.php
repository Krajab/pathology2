@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">
                                    
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">Edit Facility</div>
                <div class="panel-body">
                    {!! Form::model($facility, array('route' => array('facility.update', $facility->id),'autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator', 'method' => 'PUT')) !!}


                        {{ csrf_field() }}

                            <fieldset>

                             <div class="form-group">
                                {{ Form::label('facility', 'Patient Number', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::text('facility',null,['class' => 'form-control','placeholder' => 'patient number', 'required' => 'true']) }}
                                  </div>
                            </div>
                               
                                <div class="form-group">
                                {{ Form::label('regional_hub', 'Date Recieved', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        {{ Form::text('date_recieved',null,['class' => 'form-control date','placeholder' => 'Date Recieved', 'required'=>'true',
                                       'data-provide' => 'datepicker','data-date-format' => 'd-m-yyyy']) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                {{ Form::label('district', 'Patient Name', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        {{ Form::text('district',null,['class' => 'form-control','placeholder' => 'Name', 'required' => 'true']) }}
                                    </div>
                                </div>

                                   <div class="form-group">
                                {{ Form::label('district', 'Sex', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        {{ Form::text('district',null,['class' => 'form-control','placeholder' => 'gender', 'required' => 'true']) }}
                                    </div>
                                </div>

                                   <div class="form-group">
                                {{ Form::label('district', 'Age', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                   <div class="form-group">
                                {{ Form::label('district', 'Tribe', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        {{ Form::text('district',null,['class' => 'form-control','placeholder' => 'tribe', 'required' => 'true']) }}
                                    </div>
                                </div>

                                   <div class="form-group">
                                {{ Form::label('district', 'Phone Number', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        {{ Form::text('district',null,['class' => 'form-control','placeholder' => 'Contact', 'required' => 'true']) }}
                                    </div>
                                </div>

                                   <div class="form-group">
                                {{ Form::label('district', 'Results', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                         <select class="form-control">
                                            <option>AA</option>
                                            <option>AS</option>
                                            <option>Results Missing</option>
                                            <option>Pending</option>

                                        </select>
                                    </div>
                                </div>

                                   <div class="form-group">
                                {{ Form::label('district', 'DBS Done', ['class' => 'col-lg-2 control-label']) }}
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>Done</option>
                                            <option>Not Done</option>
                                        </select>
                                    </div>
                                </div>



                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                        <a href="{{url('/facility')}}" class="btn btn-default">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save</button>
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
@endsection
