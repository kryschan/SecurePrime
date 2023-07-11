
<script>
  function autoRefreshPage() {
  setTimeout(function() {
    location.reload();
  }, 3601000); // 3601000 Refresh after 30min (adjust the time as needed)
}
autoRefreshPage();
</script>

@if (empty(session("name")))
@php
header("Location: ../Credentials");
exit;
@endphp
@endif



<link rel="icon" type="image/jpg" href="/image/defPro.jpg">

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
       @if(session("power") == '1')
      <div class="navbar nav_title" style="border: 0;">
        <a href="{{ route("dashboard") }}" class="site_title"><span>Secure Prime</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="../image/defPro.jpg"  alt="image/defPro.jpg" class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>{{ session("name") }}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />
     
      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
               <!-- <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="index3.html">Dashboard3</a></li>-->
              </ul>
            </li>
            <li><a><i class="fa fa-users"></i> Members <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="{{ route('fireData') }}">Members List</a></li>
                  <li><a href="{{ route('comMem') }}">Create Group</a></li>
                  <li><a href="{{ route('pCard') }}">Issued SPW Card List</a></li>
             
              </ul>
            </li>
            <li><a><i class="fa fa-folder-open-o"></i> Inquiry <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="{{ route('inquiry') }}">Inquiry</a></li>
                  {{-- <li><a href="{{ route('agent') }}">Client List</a></li> --}}
             
              </ul>
            </li>
      
            <li><a><i class="fa fa-institution"></i> Establishement <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('establishment') }}">Establishement List</a></li>
                <li><a href="{{ route('estTrans') }}">List of discounted Client</a></li>
               <!-- <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="index3.html">Dashboard3</a></li> -->
              </ul>
            </li>
            <li><a><i class="fa fa-user"></i> User List <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('userList') }}">User List</a></li>
               <!-- <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="index3.html">Dashboard3</a></li> -->
              </ul>
            </li>
            <li><a><i class="fa fa-folder"></i> Reports <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('repMemCondition') }}">Member Information</a></li>
                <li><a href="{{ route('repCardReleased') }}">Released Card</a></li>
                 <li><a href="{{ route('repEstablishement') }}">Establishement Transactions</a></li>
               {{--<li><a href="">Establishement</a></li>
               --}}
              </ul>
            </li>
   
        </div>

      </div>
 
 {{-- ELSE STATEMENT --}}
      @else



 <div class="navbar nav_title" style="border: 0;">
  <a href="{{ route("dashboard") }}" class="site_title"><span>Secure Prime</span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="../image/defPro.jpg"  alt="image/defPro.jpg" class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>{{ session("name") }}</h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
         <!-- <li><a href="index2.html">Dashboard2</a></li>
          <li><a href="index3.html">Dashboard3</a></li>-->
        </ul>
      </li>
      <li><a><i class="fa fa-users"></i> Members <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="{{ route('fireData') }}">Members List</a></li>
           
       
        </ul>
      </li>
  </div>

</div>
 
    @endif
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../../index.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>

  <!-- top navigation -->
 
  <div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img  src="../image/defPro.jpg" alt="">{{ session("name") }}
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="profile.html"> Profile</a>
                <a class="dropdown-item"  href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
            <a class="dropdown-item"  href="javascript:;">Help</a>
              <a class="dropdown-item"  href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
          </li>

          {{-- <li role="presentation" class="nav-item dropdown open">
            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">6</span>
            </a>
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <div class="text-center">
                  <a class="dropdown-item">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
    </div>
  </div>
  