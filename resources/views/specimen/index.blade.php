@include('settings.delete_modal')

@extends('layouts.app')

@section('content')

<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
		<li class="active">Specimens</li>
	</ol>
</div>

<div class="panel panel-primary tests-log">
        <div class="panel-heading ">
            <div class="container-fluid">
                <div class="row less-gutter">
                    <!-- <span class="glyphicon glyphicon-filter"></span> -->Specimens
                    <!-- @if(Auth::user()->can('request_test'))
                    <div class="panel-btn"> -->
                        <a class="btn btn-sm btn-info" href="{{ URL::route('specimen.create')}}">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            Receive New Specimen
                        </a>
                   <!--  </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-condensed">

								<thead>
									<tr>
									<th >Date Recieved</th>
									<th >Name</th>
								    <th >Sample ID</th>
									<th >Lab No</th>
								    <th >Sample Type</th>
								    <th >Hospital</th>
									<th >Status</th>
									<th >Actions</th>
									</tr>
								</thead>
							
						</div>
                    </div>
                </div>
					</table>
			</div>

            </div>
        </div>
    </div>
</div>
@endsection
