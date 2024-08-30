@extends('layout.home')

@section('title', 'About Us')

@section('content')
<!-- Page Title -->
<section class="page-title text-center bg-img overlay" style="background-image: url(/front/img/page_title/coverpage1.jpg)">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">About Us</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">
                        About Us
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Intro -->
<section class="section-wrap intro pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mb-50" style="text-align: justify;">
                <h2 class="intro-heading">tentang toko sepatu andalas</h2>
                <p>Selamat datang di Andalas, destinasi utama Anda untuk menemukan berbagai macam sepatu berkualitas dengan harga yang terjangkau. Di Andalas, kami percaya bahwa sepatu bukan hanya pelengkap penampilan, tetapi juga cerminan dari gaya dan kenyamanan yang Anda butuhkan setiap hari.
                </p>
                <p>Kami bangga menawarkan koleksi sepatu yang beragam, mulai dari sepatu kasual, formal, hingga olahraga, yang semuanya dipilih dengan teliti untuk memastikan Anda mendapatkan produk dengan kualitas terbaik. Dengan harga yang bersahabat, kami berkomitmen untuk memberikan nilai lebih kepada pelanggan kami tanpa mengorbankan mutu.</p>
                <p>Di Andalas, kepuasan pelanggan adalah prioritas utama kami. Kami selalu berusaha memberikan pengalaman berbelanja yang menyenangkan dan memuaskan. Terima kasih telah memilih Andalas sebagai mitra fashion Anda. Mari melangkah bersama dengan penuh gaya dan percaya diri!</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <span class="result">24 Tahun</span>
                <p>Toko Sepatu Andalas berdiri sejak 2000</p>
                <span class="result">20+</span>
                <p>Berbagai macam koleksi alas kaki</p>
            </div>
        </div>
        <hr class="mb-0">
    </div>
</section> <!-- end intro -->

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

<!-- Testimonials -->
<section class="section-wrap relative testimonials bg-parallax overlay" style="background-image:url(/front/img/testimonials/testimonial_bg.jpg);">
    <div class="container relative">

        <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="heading white bottom-line">Testimoni Pelanggan</h2>
            </div>
        </div>

        <div id="owl-testimonials" class="owl-carousel owl-theme text-center">

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">Sepatu yang saya beli disini sangat nyaman untuk dipakai seharian. Kualitasnya sangat bagus dengan harga ramah di kantong.</p>
                    <span>Cak Du'i/Pekerja Kantoran</span>
                </div>
            </div>

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">Pilihan sepatunya beragam dengan berbagai macam ukuran. Harga untuk sepatu sekolah tergolong murah dengan kualitas yang bagus.</p>
                    <span>Bu Win/Ibu Rumah Tangga</span>
                </div>
            </div>

            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">Koleksinya lengkap, harga terjangkau, dan barang awet untuk pemakaian waktu yang lama.	</p>
                    <span>Bu Yat/Pedagang</span>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end testimonials -->
@endsection