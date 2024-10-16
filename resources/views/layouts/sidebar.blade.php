<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('logo.jpg') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Goverment  of odisa  </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{route('auth.dashboard')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                     <a href="{{route('about.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-address-book"></i>
                        <p>
                            About Us
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{route('pdf.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-address-book"></i>
                        <p>
                           pdf
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('permanent.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-address-book"></i>
                        <p>
                           p/add
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('caste.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-address-book"></i>
                        <p>
                          caste
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-address-book"></i>
                        <p>
                           logOut
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
