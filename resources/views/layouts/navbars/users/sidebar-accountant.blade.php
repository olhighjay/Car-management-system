
<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo" >
      <a href="/" class="loader simple-text logo" style="padding-bottom: -50px !important">
      <img src="{{ asset('storage/img/systemtc.png') }}" alt="" width="500px">
      </a>
      {{-- <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        {{ __('Creative Tim') }}
      </a> --}}
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="@if ($activePage == 'home') active @endif">
          {{-- {{-- <a href="{{ route('home') }}"> --}}
            <i class=" now-ui-icons design_app"></i>
            <a href="/" class="loader">
            <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
        <li class="@if ($activePage == 'profile') active @endif">
          {{-- <a href="{{ route('page.index','icons') }}"> --}}
            <a href="/profile" class="loader">
            <i class="fa fa-user-circle"></i>
            <p>{{ __('Profile') }}</p>
          </a>
        </li>
        <li class="@if ($activePage == 'vehicles') active @endif">
          {{-- <a href="{{ route('page.index','icons') }}"> --}}
            <a href="/mycars" class="loader">
            <i class="fa fa-bus"></i>
            <p>{{ __('Vehicles') }}</p>
          </a>
        </li>
        <li class = "@if ($activePage == 'mydriver') active @endif">
          {{-- {{ route('page.index','maps') }} --}}
          <a href="/mydrivers" class="loader">
            <i class="fa fa-user-secret "></i>
            <p>{{ __('My Drivers') }}</p>
          </a>
        </li>
        <li class = "@if ($activePage == 'trips') active @endif">
          {{-- {{ route('page.index','maps') }} --}}
          <a href="/mytrips" class="loader">
            <i class="fa fa-bookmark "></i>
            <p>{{ __('Trips') }}</p>
          </a>
        </li>
        <li class = "@if ($activePage == 'emergency') active @endif">
          {{-- {{ route('page.index','maps') }} --}}
          <a href="/myemergencies" class="loader">
            <i class="fa fa-universal-access "></i>
            <p>{{ __('Emergency Trips') }}</p>
          </a>
        </li>
        <li class="@if ($activePage == 'fuel') active @endif">
            <a href="/fuelrecords" class="loader">
              <i class="fa fa-tint" aria-hidden="true"></i>
              <p>
                {{ __("Fuel") }}
                {{-- <b class="caret"></b> --}}
              </p>
            </a>
        </li>
        <li class="@if ($activePage == 'repair') active @endif">
            <a href="/repairrecords" class="loader">
              <i class="fa fa-wrench" aria-hidden="true"></i>
              <p>
                {{ __("Repairs") }}
                {{-- <b class="caret"></b> --}}
              </p>
            </a>
        </li>
        <li class="@if ($activePage == 'reports') active @endif">
          <a data-toggle="collapse" href="#reports">
              <i class="fa fa-book"></i>
            <p>
              {{ __("Reports") }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="reports">
            <ul class="nav">
              <li >
                {{-- <a href="{{ route('profile.edit') }}"> --}}
                  <a href="reportadriver" class="loader">
                  <i class=" fa fa-arrows-alt"></i>
                  <p> {{ __("Report a Driver") }} </p>
                </a>
              </li>
              <li class="">
                {{-- <a href="{{ route('user.index') }}"> --}}
                  <a href="carreport" class="loader">
                  <i class=" fa fa-wrench"></i>
                  <p> {{ __("Report a Car") }} </p>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class = " @if ($activePage == 'notifications') active @endif">
          {{-- {{ route('page.index','notifications') }} --}}
          <a href="/notifications" class="loader">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <p>{{ __('Notifications') }} &nbsp; &nbsp; @if(count(auth()->user()->unreadNotifications) > 0) 
              <span style="background-color: white; color:rgb(216, 5, 5); padding:5px 8px; border-radius:50%"><b>{{count(auth()->user()->unreadNotifications)}}</b></span> @endif</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  