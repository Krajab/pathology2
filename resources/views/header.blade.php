@section ("header")
        <header class="navbar navbar-fixed-top" role="banner" style="background-color:maroon;">
            <div class="container-fluid">

              <ul class="nav navbar-nav navbar-left">
          <b> <font color="white" size="5"> PATHOLOGY LABORATORY Management System </font></b>
                </ul>
                @if (Auth::check())
                <ul class="nav navbar-nav navbar-right">

  <li><a href="{{ url('/logout') }}"><span class="ion-log-out">
  </span><font size="3"> Logout :: {{{isset (Auth::user()->username) ? Auth::user()->username : Auth::user()->username}}}</font>
</a>
</li>
</ul>
@if(Auth::user()->can('manage_users'))
<ul class="nav navbar-nav navbar-right">
    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="ion-key"></span>
    <font size="3">Access Control</font>
 <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{{{URL::route('user.index')}}}"><font size="3">Users</a></font></li>
              <li class="divider"></li>
            <li><a href="{{{URL::route('role.index')}}}"><font size="3">Roles </a></font></li>
              <li class="divider"></li>
            <li><a href="{{{URL::route('role.assign')}}}"><font size="3">Assign Roles </a></font></li>
              <li class="divider"></li>
            <li><a href="{{{URL::route('permission.index')}}}"><font size="3">Permissions </a></font></li>
              <li class="divider"></li>
              </ul>
    </li>
</ul>
@endif

<ul class="nav navbar-nav navbar-right">

    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="ion-chatbubbles"></span>
    <font size="3">  Requisitions <span class="badge badge-inverse"> {{ $count = Inhouse::where('request_status_id', '=', '0')->count()}}</font></span>
 <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="inhouserequest"><font size="3">
              In-house <span class="badge"> {{ $count = Inhouse::where('request_status_id', '=', '0')->count()}} </a></span></font></li>
              <li class="divider"></li>
            <li><a href="#"><font size="3">
              Facility</a></font></li>
              <li class="divider"></li>
              </ul>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">

  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <span class="con ion-gear-b"></span>
    <font size="3"> Asset Management </font>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu dropdown-menu-right">
    <li><a href="{{{URL::route('ictasset.index')}}}"><font size="3">ICT </a></font></li>
    <li class="divider"></li>
    <li><a href="{{URL::route('mechanicalinventory.index')}}"><font size="3">Bio-Medical </a></font></li>
    <li class="divider"></li>
    <li><a href="transport"><font size="3">Transport & Fleet Mgt </a></font></li>
    <li class="divider"></li>
  </ul>
</li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <span class="ion-ios-cart"></span>
    <font size="3"> Supply Chain Management</font>
 <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{{URL::route('supplychainmgt.supplychainmgt')}}" ><font size="3">Commodity Management </a></font></li>
              <li class="divider"></li>
            <li><a href="stores"><font size="3">Stores Management </a></font></li>
              <li class="divider"></li>
            <li><a href="order"><font size="3">Ordering </a></font></li>
            <li class="divider"></li>
            </ul>
    </li>
  </ul>
<ul class="nav navbar-nav navbar-right">
   <li><a href="{{ url('/home') }}"><span class="ion-home"></span>  <font size="3">  Home ::  </font></a></li>
</ul>
@endif
      </div>
        </header>
@show