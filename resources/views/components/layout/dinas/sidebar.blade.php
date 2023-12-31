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
            <x-layout.sidebar.menu-item url="dinas" label="Dashboard" icon="fa fa-home" />
            <li>
                <a href="javascript: void(0);"> <i data-feather="grid"
                        class="align-self-center menu-icon"></i><span>Atraksi</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                @yield('dinas_menu')
            </li>
            <li>
                <a href="javascript: void(0);"> <i data-feather="grid"
                        class="align-self-center menu-icon"></i><span>Fasilitas</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                @yield('dinas_fasilitas')
            </li>
            <x-layout.sidebar.menu-item url="dinas/taman-nasional" label="Taman Nasional" icon="fa fa-fan" />

        </ul>

    </div>
</div>
