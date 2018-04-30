@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">Add User</div>
                <div class="panel-body">

                    {!! Form::open(array('url' => 'user','autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator')) !!}

                        {{ csrf_field() }}

                            <fieldset>

                                <div class="form-group">
                                {{ Form::label('username', 'User Name', ['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-7">
                                        {{ Form::text('username',null,['class' => 'form-control','placeholder' => 'User Name', 'required' => 'true']) }}

                                        @if ($errors->has('username'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif

                                  </div>
                                </div>

                                <div class="form-group">
                            {{ Form::label('role', 'Role', ['class' => 'col-lg-2 control-label']) }}
                              <div class="col-lg-7">
                              {{ Form::select('role_id', $role_list, null, ['data-placeholder' => 'Select a role for this user','class'=>'form-control' ]) }}


                                    @if ($errors->has('role'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif

                              </div>
                            </div>

                            <div class="form-group">
                          {{ Form::label('email', 'Email', ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-7">
                                  {{ Form::email('email',null,['class' => 'form-control','placeholder' => 'Email', 'required' => 'true']) }}

                                  @if ($errors->has('email'))
                                      <span class="text-danger">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif

                            </div>
                          </div>

                          <div class="form-group">
                          {{ Form::label('password', 'User Password ', ['class' => 'col-lg-2 control-label']) }}
                            <div class="col-lg-7">
                                  {{ Form::text('password',null,['class' => 'form-control','placeholder' => 'User Password', 'required' => 'true']) }}

                                  @if ($errors->has('password'))
                                      <span class="text-danger">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif

                            </div>
                          </div>
                                    <div class="form-group">
                                      <div class="col-lg-10 col-lg-offset-2">
                                        <a href="{{url('/user')}}" class="btn btn-default">Cancel</a>
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
