@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">Add Role</div>
                <div class="panel-body">

                    {!! Form::open(array('url' => 'role','autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator')) !!}

                        {{ csrf_field() }}

                            <fieldset>

                                <div class="form-group">
                                {{ Form::label('role', 'Role', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::text('role',null,['class' => 'form-control','placeholder' => 'Role', 'required' => 'true']) }}

                                        @if ($errors->has('role'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('role') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>

                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                        <a href="{{url('/role')}}" class="btn btn-default">Cancel</a>
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
