<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <li class="sidebar-user-panel">
        <div class="user-panel">
            <div class="row">
                <div class="sidebar-userpic">
                    <img src="{{ asset('assets/img/dp.jpg') }}" class="img-responsive" alt="">
                </div>
            </div>
            <div class="profile-usertitle">
                <div class="sidebar-userpic-name"> {{ Auth::user()->username }} </div>
                <div class="profile-usertitle-job"> Manager </div>
            </div>
            <div class="sidebar-userpic-btn">
                <a class="tooltips" href="user_profile.html" data-placement="top" data-original-title="Profile">
                    <i class="material-icons">person_outline</i>
                </a>
                <a class="tooltips" href="email_inbox.html" data-placement="top" data-original-title="Mail">
                    <i class="material-icons">mail_outline</i>
                </a>
                <a class="tooltips" href="chat.html" data-placement="top" data-original-title="Chat">
                    <i class="material-icons">chat</i>
                </a>
                <a class="tooltips" href="login.html" data-placement="top" data-original-title="Logout">
                    <i class="material-icons">input</i>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Warehouse</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="{{ route('admin.warehouse') }}" class="nav-link ">
                    <span class="title">Data Warehouse</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.warehouse.create') }}" class="nav-link ">
                    <span class="title">Tambah Warehouse</span>
                </a>
            </li>            
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Cabang</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="{{ route('admin.cabang') }}" class="nav-link ">
                    <span class="title">Data Cabang</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.cabang.create') }}" class="nav-link ">
                    <span class="title">Tambah Cabang</span>
                </a>
            </li>            
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Sales</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Data Sales</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Tambah Sales</span>
                </a>
            </li>            
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Outlet</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="{{ route('admin.bts') }}" class="nav-link ">
                    <span class="title">Data BTS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.outlet') }}" class="nav-link ">
                    <span class="title">Data Outlet</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.jenis_outlet') }}" class="nav-link ">
                    <span class="title">Data Jenis Outlet</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.outlet.create') }}" class="nav-link ">
                    <span class="title">Tambah Outlet</span>
                </a>
            </li>            
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Petugas</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="{{ route('admin.petugas') }}" class="nav-link ">
                    <span class="title">Data Petugas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.petugas.create') }}" class="nav-link ">
                    <span class="title">Tambah Petugas</span>
                </a>
            </li>            
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Barang</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="{{ route('admin.jenis_barang') }}" class="nav-link ">
                    <span class="title">Data Jenis Barang</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.barang') }}" class="nav-link ">
                    <span class="title">Daftar Barang</span>
                </a>
            </li> 
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Daftar Detail Barang</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Daftar Harga Barang</span>
                </a>
            </li> 
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Daftar History Barang</span>
                </a>
            </li>          
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Transaksi</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Barang Masuk</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.transaksi.distribusi_cabang') }}" class="nav-link ">
                    <span class="title">Distribusi Ke Cabang</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.transaksi.distribusi_sales')}}" class="nav-link ">
                    <span class="title">Distribusi Ke Sales</span>
                </a>
            </li>            
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link nav-toggle">
            <i class="fa fa-list"></i>
            <span class="title">Laporan</span>
            <span class="arrow"></span>            
        </a>
        <ul class="sub-menu">
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Laporan omset</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Laporan Performa Cabang</span>
                </a>
            </li> 
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <span class="title">Laporan Performa Sales</span>
                </a>
            </li>            
        </ul>
    </li>
</ul>
