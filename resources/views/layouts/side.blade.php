<nav class="main-sidebar ps-menu">
    <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div>
    <div class="sidebar-header">
        <div class="text mx-5 p-3 text-center"><img src="/assets/images/logo_kabupatentangerang_perda.png" class="img" width="80" height="85"></div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}" class="link">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @can('read role')
                <li class="{{ Request::is('user') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="link">
                        <i class="fa fa-users"></i>
                        <span>Data Pegawai</span>
                    </a>
                </li>
            @endcan
            <li class="{{ Request::is('spt*', 'nppd*', 'sppd*') ? 'active open' : '' }}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Data SPPD</span>
                </a>
                <ul class="sub-menu {{ Request::is('spt*','nppd*', 'sppd*') ? 'expand' : '' }}">
                    <li class="{{ Request::is('spt*') ? 'active' : '' }}"><a href="{{ route('spt.index') }}" class="link"><span>Surat Tugas</span></a></li>
                    <li class="{{ Request::is('nppd*') ? 'active' : '' }}"><a href="{{ route('nppd.index') }}" class="link"><span>Nota Dinas</span></a></li>
                    <li class="{{ Request::is('sppd*') ? 'active' : '' }}"><a href="{{ route('sppd.index') }}" class="link"><span>SPPD</span></a></li>
                </ul>
            </li>

            @can('read report')
                <li class="{{ Request::is('report') ? 'active' : '' }}">
                    <a href="{{ route('report.index') }}" class="link">
                        <i class="ti-file"></i>
                        <span>Laporan Kegiatan</span>
                    </a>
                </li>
            @endcan

            @can('read role')

                <div class="text-center">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</div>

                <li class="{{ Request::is('location*', 'transport*', 'anggaran*', 'pejabat*') ? 'active open' : '' }}">
                    <a href="#" class="main-menu has-dropdown">
                        <i class="ti-settings"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="sub-menu {{ Request::is('location*', 'transport*', 'anggaran*', 'pejabat*') ? 'expand' : '' }}">
                        <li class="{{ Request::is('location*') ? 'active' : '' }}"><a href="{{ route('location.index') }}" class="link"><span> Data Lokasi</span></a></li>
                        <li class="{{ Request::is('transport*') ? 'active' : '' }}"><a href="{{ route('transport.index') }}" class="link"><span> Data Transport</span></a></li>
                        <li class="{{ Request::is('anggaran*') ? 'active' : '' }}"><a href="{{ route('anggaran.index') }}" class="link"><span> Data Anggaran</span></a></li>
                        <li class="{{ Request::is('pejabat*') ? 'active' : '' }}"><a href="{{ route('pejabat.index') }}" class="link"><span> Data Pejabat</span></a></li>
                    </ul>
                </li>
            @endcan
        </ul>
    </div>
</nav>
