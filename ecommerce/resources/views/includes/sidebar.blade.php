<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/admin2"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Barang</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('product.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('product.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Toko</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('shop.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Daftar Toko</a>
                </li>
                <li class="">
                    <a href="{{ route('shop.create') }}"> <i class="menu-icon fa fa-plus"></i>Buat Toko</a>
                </li>

                <li class="menu-title">Categories</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('categorie.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Categories</a>
                </li>
                <li class="">
                    <a href="{{ route('categorie.create') }}"> <i class="menu-icon fa fa-plus"></i>Buat Categories</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="">
                    <a href="/transaction"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                </li>

                <li class="menu-title">Petunjuk Penggunaan</li><!-- /.menu-title -->
                <li class="">
                    <a href="/view-statement"> <i class="menu-icon fa fa-file-o"></i>Lihat Petunjuk</a>
                </li>
                <li class="">
                    <a href="/statement"> <i class="menu-icon fa fa-download"></i>Download Petunjuk</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
