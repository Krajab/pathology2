@extends('layouts.app')

@section('content')

@extends('footer')

<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
		<li><a href="{{ url('/show') }}">settings</a></li>
	  <li class="active">Test Type</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
	<div class="panel-heading ">
		<span class="glyphicon glyphicon-add"></span>
		List of Lab Tests   
			<a class="btn btn-sm btn-info" href="{{ URL::to("testtype/create") }}" >
				<span class="glyphicon glyphicon-plus-sign"></span>
				  Create New Test type
			</a>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-condensed search-table">
			<thead>
				<tr>
					<th>{{ Lang::choice('Name',1) }}</th>
					<th>{{trans('Description')}}</th>
					<th>{{trans('Targeted Turnaround Time')}}</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

</div>	


@endsection