<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-user"></i>
                    Hello, {{ Auth::user()->name }}
                </div>
                <div class="phone-service">
                    <i class=" fa fa-square"></i>
                    {{ Auth::user()->email }}
                </div>
            </div>
            <div class="ht-right">
                <a href="/home" class="login-panel">Home</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="{{asset('user/img/logo.png')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7"></div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            Keranjang Belanja &nbsp;
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                            </a>
                            <div class="cart-hover">
                                
                                <div class="select-button">
                                    <a href="{{route('order.create')}}" class="primary-btn view-card">BUAT ORDER</a>
                                    <a href="{{route('order.index')}}" class="primary-btn checkout-btn">TRANSAKSI</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
