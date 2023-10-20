<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="dashboard/crm-index.html" class="logo">
            <span>
                <img src="{{ url('public/admin') }}/assets/images/kku-white.png" alt="logo-small" class="logo-sm">
            </span>

        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <x-layout.sidebar.menu-item url="mitra" label="Dashboard" icon="fa fa-home" />

            @if (Auth::guard('mitra')->user()->kategori == 'Pengelola Wisata')
                @yield('mitra_menu')
            @endif
            @if (Auth::guard('mitra')->user()->kategori == 'Pelaku Usaha')
                @yield('mitra_fasilitas')
            @endif
            @if (Auth::guard('mitra')->user()->kategori == 'Pengelola Taman Nasional')
                <x-layout.sidebar.menu-item url="mitra/taman-nasional" label="Taman Nasional" icon="fa fa-home" />
            @endif
        </ul>

    </div>
</div>
