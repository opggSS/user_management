
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav" >
            <li class="nav-item">
              <img src="{{url('/images/logo.png')}}" >
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

                <span class="mr-2 d-none d-lg-inline text-gray-600 ">Hello {{Auth()->user()->first_name}} {{Auth()->user()->last_name }}</span>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      {{-- <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                       {{Auth()->user()->email}}
                    </a> 
                    <div class="top-right links">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>
                    
                  </div>
              </a>

            </li>

          </ul>
     

        </nav>