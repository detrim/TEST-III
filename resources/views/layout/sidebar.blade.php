@section('sidebar')
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        @if (Auth()->user()->level == 'admin')
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


            </ul>
        @elseif (Auth()->user()->level == 'user')
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('user/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Biodata Diri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('user/' . Auth()->user()->email . '/profil') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user/' . Auth()->user()->email . '/pengalaman') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengalaman</p>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        @endif

    </nav>
    <!-- /.sidebar-menu -->
@endsection
