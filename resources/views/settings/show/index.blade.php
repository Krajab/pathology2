@extends('layouts.app')

@section('content')

<div>
	<ol class="breadcrumb" style="width:97%">
		<li><a href="{{ url('/home') }}">home</a></li>
	 <li class="active">Manage Settings</li>
	</ol>
</div>
<div class="panel panel-primary row" style="width:97%">
<div class="panel-heading ">
		<span class="glyphicon glyphicon-add"></span>
		CONFIGURATIONS
	</div>
<div class="panel-body row">
	<div class="btn-group container col-md-3">
        <a href="{{ URL::route('district.index')}}" data-toggle="tooltip" data-placement="bottom" title="Click to view and add hospitals">
            <div class="panel panel-info">
            <span class="ion-ios-medkit" style=" font-size:60px" align="center"></span> <br><font  size='5' <span class="nav_title"  >HOSPITALS</span></font>
            </div>
        </a>
    </div>

        <div class="btn-group container col-md-3">
        <a href="{{ URL::route('testcategory.index')}}" data-toggle="tooltip" data-placement="bottom" title="Click to view and add Test Categories">
            <div class="panel panel-info">
            <span class="ion-android-list" style=" font-size:60px" align="center"></span> <br><font size='5' <span class="nav_title">TEST CATEGORY</span></font>
            </div>
        </a>
    </div>

<div class="btn-group container col-md-3">
        <a class="link-tip" href="{{ URL::route('specimentype.index')}}" data-toggle="tooltip" data-placement="bottom" title="Click to view and add specimens">
            <div class="panel panel-info">
            <span class="ion-erlenmeyer-flask" style=" font-size:60px" align="center"></span> <br><font size='5' <span class="nav_title">SPECIMENS TYPES</span></font>
            </div>
        </a>
</div>

<div class="btn-group container  col-md-3" >
        <a href="{{ URL::route('district.index')}}"  data-toggle="tooltip" data-placement="bottom" title="Click to manage districts">
            <div class="panel panel-info" >
            <span class="ion-person-stalker" style="color:orange; font-size:60px" align="center"></span> <br><font  color='orange' size='5' <span class="nav_title">DISTRICTS</span> </font>
            </div>
        </a>
</div>


<div class="btn-group container  col-md-3" >
        <a href="{{ URL::route('testtype.index')}}"  data-toggle="tooltip" data-placement="bottom" title="Click to manage districts">
            <div class="panel panel-info" >
            <span class="ion-erlenmeyer-flask" style="color:orange; font-size:60px" align="center"></span> <br><font  color='orange' size='5' <span class="nav_title">TEST TYPES</span> </font>
            </div>
        </a>
</div>

<div class="btn-group container col-md-3">
        <a href="{{ URL::route('user.index')}}" data-toggle="tooltip" data-placement="bottom" title="Click to manage Barcodes">
            <div class="panel panel-info">
            <span class="ion-ios-barcode-outline" style="color:black; font-size:60px;" align="center"></span> <br><font color='black' size='5'<span class="nav_title">BARCODES</span></font>
            </div>
        </a>
</div>
</div>
@endsection
