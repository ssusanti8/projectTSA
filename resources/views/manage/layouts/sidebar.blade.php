<nav id="sidebarMenu">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <a class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted border-bottom" aria-current="page" href="/home"> 
            <span data-feather="arrow-center" class="align-text-bottom" style="font-weight: bold;">DASHBOARD</span>
            </a>
            <li class="nav-item">

                        @can('user')
                        <li class="nav-item">
                                <a class="nav-link @if($title=='Manage') active @endif" href="#">Halaman User</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ ('/reservasi') }}">Reservasi</a></li>
                        @endcan
                        
                        @can('admin')
                            <li class="nav-item">
                                <a class="nav-link @if($title=='Manage') active @endif" href="#">Halaman Admin</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/galeri') }}">Galeri</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/menu') }}">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/diskon') }}">Paket Diskon</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ ('/reservasiku') }}">Reservasi</a></li>
                        @endcan

                        @can('superadmin')
                            <li class="nav-item">
                                <a class="nav-link @if($title=='Manage') active @endif" href="#">Halaman Super Admin</a>
                            </li>
                            <a class="nav-link @if($title=='Users') active @endif" aria-current="page" href="/user">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Users
                            </a>
                        @endcan
            
</nav>
