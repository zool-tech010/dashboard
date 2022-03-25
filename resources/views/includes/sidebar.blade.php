<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">لوحة التحكم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills pr-0 nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

                <!--Types of  courses -->

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="{{ \Request::is('/') ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>الرئيسية</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user.index') }}"
                        class="{{ \Request::is('users') || \Request::is('users/*') ? 'active' : '' }} nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>المستخدمين</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();if(confirm('سوف يتم تسجيل خروجك؟'))
                                  document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>تسجيل الخروج</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
