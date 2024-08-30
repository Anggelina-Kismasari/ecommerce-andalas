@extends('layout.home')

@section('content')
<!-- Hero Slider -->
<section class="hero-wrap text-center relative">
    <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
        @foreach ($sliders as $slider)
            <div class="hero-slide overlay" style="background-image:url(/uploads/{{$slider->gambar}}">
                <div class="container">
                    <div class="hero-holder">
                        <div class="hero-message">
                            <h1 class="hero-title nocaps">{{$slider->nama_slider}}</h1>
                            <h2 class="hero-subtitle lines">{{$slider->deskripsi}}</h2>
                            <div class="buttons-holder">
                                <a href="/login_member" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section> <!-- end hero slider -->

<!-- Product Widgets List -->
<section class="section-wrap products-list">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Sepatu Sandal Pria</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/pantofelpria1.jpg" alt="">
                            <span class="product-title">Sepatu Pantofel Crocodile</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 150,000</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/sandalpria1.jpg" alt="">
                            <span class="product-title">Sandal Pria Carvil</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 100,000</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end special offer -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Sepatu Anak</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/sepatuanak1.jpg" alt="">
                            <span class="product-title">Sepatu Sekolah Ando</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 100,000</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/sepatuanak2.jpg" alt="">
                            <span class="product-title">Sepatu Sekolah New Era</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 100,000</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end bestsellers -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Sepatu Sandal Wanita</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/pantofelwanita1.jpg" alt="">
                            <span class="product-title">Sepatu Pantofel Fladea</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 100,000</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/sandalwanita1.jpg" alt="">
                            <span class="product-title">Sandal Wanita Britano</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 120,000</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end top rated -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
                <h3 class="widget-title bottom-line full-grey">Sepatu Olahraga</h3>
                <ul class="product-list-widget">
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/sepatufutsal1.jpg" alt="">
                            <span class="product-title">Sepatu Futsal Specs</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 150,000</span>
                            </ins>
                        </span>
                    </li>
                    <li class="clearfix">
                        <a>
                            <img src="/front/img/shop/sepatufutsal2.jpg" alt="">
                            <span class="product-title">Sepatu Futsal League</span>
                        </a>
                        <span class="price">
                            <ins>
                                <span class="amount">Rp. 150,000</span>
                            </ins>
                        </span>
                    </li>
                </ul>
            </div> <!-- end sales -->
        </div> <!-- end row -->
    </div>
</section> <!-- end product widgets -->

<!-- Trendy Products -->
<section class="section-wrap-sm new-arrivals pb-50">
    <div class="container">

        <div class="row heading-row">
            <div class="col-md-12 text-center">
              <span class="subheading">Hot items of this year</span>
              <h2 class="heading bottom-line">
                trendy products
              </h2>
            </div>
        </div>

        <div class="row items-grid">
            @foreach ($products as $product)
                <div class="col-md-3 col-xs-6">
                    <div class="product-item hover-trigger">
                        <div class="product-img">
                            <a href="/front/shop-single.html">
                                <img src="/uploads/{{$product->gambar}}" alt="">
                            </a>
                            <div class="hover-overlay">
                                <div class="product-details valign">
                                    <span class="category">
                                        <a href="/products/{{$product->id_subkategori}}">{{$product->subcategory->nama_subkategori}}</a>
                                    </span>
                                    <h3 class="product-title">
                                        <a href="/product/{{$product->id}}">{{$product->nama_barang}}</a>
                                    </h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">Rp. {{number_format($product->harga)}}</span>
                                        </ins>
                                    </span>
                                    <div class="btn-quickview">
                                        <a href="/product/{{$product->id}}" class="btn btn-md btn-color">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- end row -->
    </div>
</section> <!-- end trendy products -->

<!-- Testimonials -->
<section class="section-wrap relative testimonials bg-parallax overlay" style="background-image:url(/front/img/testimonials/testimonial_bg.jpg);">
    <div class="container relative">

        <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="heading white bottom-line">Testimoni Pelanggan</h2>
            </div>
        </div>

        <div id="owl-testimonials" class="owl-carousel owl-theme text-center">
            @foreach ($testimonis as $testimoni)
                <div class="item">
                    <div class="testimonial">
                        <p class="testimonial-text">{{$testimoni->deskripsi}}</p>
                        <span>{{$testimoni->nama_testimoni}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> <!-- end testimonials -->
@endsection