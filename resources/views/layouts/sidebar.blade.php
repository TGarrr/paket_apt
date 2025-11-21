<!-- Sidebar -->
<ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-box"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APARTEMEN<sup>PKT</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $menuDashboard ?? '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
                Interface
            </div> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU TOWER
    </div>


    <!-- Nav Item - Tower -->
    <li class="nav-item {{ $menuTower ?? '' }}">
        <a class="nav-link" href="{{ route('tower') }}">
            <i class="fas fa-fw fa-building"></i>
            <span>Tower</span></a>
    </li>

    <!-- Nav Item - Unit -->
    <li class="nav-item {{ $menuUnit ?? '' }}">
        <a class="nav-link" href="{{ route('unit') }}">
            <i class="fas fa-th-large"></i>
            <span>Unit</span></a>
    </li>

    <!-- Nav Item - Tenant -->
    <li class="nav-item {{ $menuTenant ?? '' }}">
        <a class="nav-link" href="{{ route('tenant') }}">
            <i class="fas fa-user-friends"></i>
            <span>Tenant</span></a>
    </li>

    <!-- Nav Item - Contract -->
    <li class="nav-item  {{ $menuContract ?? '' }}">
        <a class="nav-link" href="{{ route('contract') }}">
            <i class="fas fa-file-contract"></i>
            <span>Contract</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU PENERIMAAN PAKET
    </div>

    <!-- Nav Item - Jenis Paket -->
    <li class="nav-item {{ $menuJenisPaket ?? '' }}">
        <a class="nav-link" href="{{ route('jenispaket') }}">
            <i class="fas fa-tags"></i>
            <span>Jenis Paket</span></a>
    </li>

    <!-- Nav Item - Nama Ekspedisi -->
    <li class="nav-item {{ $menuNamaEkspedisi ?? '' }}">
        <a class="nav-link" href="{{ route('namaekspedisi') }}">
            <i class="fas fa-truck"></i>
            <span>Nama Ekspedisi</span></a>
    </li>

    <!-- Nav Item - Transaksi -->
    <li class="nav-item {{ $menuTransaksi ?? '' }}">
        <a class="nav-link" href="{{ route('transaksi') }}">
            <i class="fas fa-exchange-alt"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Heading -->
    <div class="sidebar-heading">
        MENU USER
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ $menuUser ?? '' }}">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
