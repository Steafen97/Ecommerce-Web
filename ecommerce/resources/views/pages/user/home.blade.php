@extends('layouts.home')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{asset('user/img/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Baju Perempuan</span>
                            <h1>Sweater Biru Katun</h1>
                            <p>
                                Bahan terbaik kualitas import dan cocok untuk bepergian
                                dan berwisata
                            </p>
                            <a href="{{route('order.create')}}" class="primary-btn">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Diskon <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{asset('user/img/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Baju Anak</span>
                            <h1>Jaket Denim Trendy</h1>
                            <p>
                                Bahan kualitas terbaik dan import dari Amerika. Bisa membuat
                                penampilanmu makin keren
                            </p>
                            <a href="{{route('order.create')}}" class="primary-btn">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Diskon <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('user/img/products/women-1.jpg')}}" alt="" />
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{route('order.create')}}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="#">+ Lihat Produk</a></li>
                                    <li class="w-icon">
                                        <a href="#"><i class="fa fa-random"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Baju Perempuan</div>
                                <a href="#">
                                    <h5>Sweater Type 20</h5>
                                </a>
                                <div class="product-price">
                                    Rp 140,000
                                    <span>Rp 250,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('user/img/products/women-2.jpg')}}" alt="" />
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{route('order.create')}}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="#">+ Lihat Produk</a></li>
                                    <li class="w-icon">
                                        <a href="#"><i class="fa fa-random"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Baju Perempuan</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    Rp 125,000
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('user/img/products/women-3.jpg')}}" alt="" />
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{route('order.create')}}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="#">+ Lihat Produk</a></li>
                                    <li class="w-icon">
                                        <a href="#"><i class="fa fa-random"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Baju Perempuan</div>
                                <a href="#">
                                    <h5>Sweater Type 55</h5>
                                </a>
                                <div class="product-price">
                                    Rp 100,000
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('user/img/products/women-4.jpg')}}" alt="" />
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a href="{{route('order.create')}}"><i class="icon_bag_alt"></i></a>
                                    </li>
                                    <li class="quick-view"><a href="#">+ Lihat Produk</a></li>
                                    <li class="w-icon">
                                        <a href="#"><i class="fa fa-random"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tas Perempuan</div>
                                <a href="#">
                                    <h5>Traditional Bag</h5>
                                </a>
                                <div class="product-price">
                                    Rp 200,000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{asset('user/img/insta-1.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shayna_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('user/img/insta-2.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shayna_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('user/img/insta-3.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shayna_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('user/img/insta-4.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shayna_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('user/img/insta-5.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shayna_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{asset('user/img/insta-6.jpg')}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shayna_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->
@endsection
