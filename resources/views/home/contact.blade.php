@extends('layout.home')

@section('title', 'Contact')

@section('content')
<!-- Page Title -->
<section class="page-title text-center bg-img overlay" style="background-image: url(/front/img/page_title/coverpage3.jpg)">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Contact</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">
                        Contact
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section-wrap contact pb-40">
    <div class="container">
        <div class="row">

            <div class="col-md-8 mb-40">
                <div class="contact-item">
                    <h6>Find Us</h6>
                    <!-- Google Maps Embed -->
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.8148554173403!2d112.63429131534859!3d-7.285849173153635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f5cfcf8f7a1b%3A0x328b74d20b2a24!2sJl.%20Praban%20No.21%2C%20Surabaya%2C%20Jawa%20Timur%2040125!5e0!3m2!1sen!2sid!4v1633366856814!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div> <!-- end map -->
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-5 mb-40">
                <div class="contact-item">
                    <h6>Address</h6>
                    <address>Toko Sepatu Andalas<br>
                    Jl. Praban No.21<br>
                    Kecamatan Genteng<br>
                    Surabaya, Jawa Timur</address>
                </div> <!-- end address -->

                <div class="contact-item">
                    <h6>Information</h6>
                    <ul>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:tokoandalas@gmail.com">tokoandalas@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><span>+62 881 5075 943</span>
                        </li>
                    </ul>               
                </div> <!-- end information -->

                <div class="contact-item">
                    <h6>Business hours</h6>
                    <ul>
                        <li>Senin – Sabtu : 09.00 WIB - 22.00 WIB</li>
                        <li>Minggu : 09.00 WIB - 22.30 WIB</li>
                    </ul>               
                </div> <!-- end business hours -->
            </div>
        </div>
    </div>
</section> <!-- end contact -->
@endsection