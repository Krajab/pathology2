@extends('layouts.app')

@section('content')
<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
		<li><a href="{{ url('/show') }}">settings</a></li>
	  <li class="active">Test Type</li>
	</ol>
</div>
<div class="panel panel-primary">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-cog"></span>
		{{trans('Create Test Type')}}
	</div>
	{{ Form::open(array('route' => array('testtype.index'), 'id' => 'form-create-testtype')) }}
	<div class="panel-body">
		<!-- if there are creation errors, they will show here -->
		
		@if($errors->all())
			<div class="alert alert-danger">
				{{ HTML::ul($errors->all()) }}
			</div>
		@endif
	
		<div class="form-group">
			{{ Form::label('name', Lang::choice('Name',1)) }}
			<div class="col-lg-3">
			{{ Form::text('name', ('name'), array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('description', trans('Description')) }}
			<div class="col-lg-3">
			{{ Form::textarea('description', ('description'), 
				array('class' => 'form-control', 'rows' => '2')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('test_category_id', Lang::choice('Test category',1)) }}
			{{ Form::select('test_category_id', array(0 => '')+$testcategory->lists('name', 'id'),
				Input::old('test_category_id'),	array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
				{{ Form::label('specimen_types', trans('Select specimen types')) }}
				<div class="form-pane panel panel-default">
					<div class="container-fluid">
						<?php 
							$cnt = 0;
							$zebra = "";
						?>
						@foreach($specimentypes as $key=>$value)
							{{ ($cnt%4==0)?"<div class='row $zebra'>":"" }}
							<?php
								$cnt++;
								$zebra = (((int)$cnt/4)%2==1?"row-striped":"");
							?>
							<div class="col-md-3">
								<label  class="checkbox">
									<input type="checkbox" name="specimentypes[]" value="{{ $value->id}}" />{{$value->name}}
								</label>
							</div>
							{{ ($cnt%4==0)?"</div>":"" }}
						@endforeach
					</div>
				</div>
		</div>
	</div>

	
</div>










@endsection