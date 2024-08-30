@extends('layout.home')

@section('title', 'FAQ')

@section('content')
<!-- Page Title -->
<section class="page-title text-center bg-img overlay" style="background-image: url(/front/img/page_title/coverpage2.jpg)">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">F.A.Q</h1>
                <ol class="breadcrumb">
                    <li>
                    <a href="/">Home</a>
                    </li>
                    <li class="active">
                        F.A.Q
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section-wrap faq">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">
                <h2 class="mb-20"><small>delivery questions</small></h2>

                <div class="panel-group accordion mb-50" id="accordion-1">
                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1" class="minus">Apakah Toko Sepatu Andalas menawarkan pengiriman ke seluruh Indonesia?<span>&nbsp;</span></a>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Ya, kami menawarkan pengiriman ke seluruh wilayah Indonesia. Kami bekerja sama dengan berbagai layanan kurir untuk memastikan pesanan Anda tiba tepat waktu.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2" class="plus">Berapa biaya pengiriman untuk pesanan saya?<span>&nbsp;</span></a>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Biaya pengiriman dihitung berdasarkan berat pesanan Anda dan lokasi pengiriman. Biaya pengiriman akan ditampilkan di halaman checkout sebelum Anda menyelesaikan pembelian.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3" class="plus">Berapa lama waktu pengiriman yang diperlukan?<span>&nbsp;</span>
                            </a>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Waktu pengiriman tergantung pada lokasi Anda. Biasanya, pesanan akan tiba dalam 3-7 hari kerja setelah pembayaran dikonfirmasi. Untuk wilayah tertentu, waktu pengiriman mungkin lebih lama.
                            </div>
                        </div>
                    </div>
                </div> <!-- end accordion -->


                <h2 class="mb-20 mt-80"><small>payment and technical questions</small></h2>

                <div class="panel-group accordion mb-50" id="accordion-2">
                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-4" class="minus">Bagaimana cara memesan sepatu di Toko Sepatu Andalas?<span>&nbsp;</span></a>
                        </div>
                        <div id="collapse-4" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anda dapat memesan sepatu secara online melalui website kami. Cukup pilih produk yang Anda inginkan, pilih ukuran dan warna, lalu tambahkan ke keranjang belanja. Setelah itu, lanjutkan ke checkout dan ikuti instruksi untuk menyelesaikan pembayaran.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-5" class="plus">Apakah saya bisa menukar atau mengembalikan sepatu yang sudah dibeli?<span>&nbsp;</span></a>
                        </div>
                        <div id="collapse-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                Tentu saja! Kami menawarkan kebijakan pengembalian dan penukaran dalam waktu 7 hari setelah Anda menerima produk. Sepatu harus dalam kondisi asli, belum pernah dipakai, dan dikembalikan dengan kemasan asli. Silakan hubungi layanan pelanggan kami untuk proses pengembalian atau penukaran.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-6" class="plus">Bagaimana cara saya menghubungi layanan pelanggan Toko Sepatu Andalas?<span>&nbsp;</span></a>
                        </div>
                        <div id="collapse-6" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anda dapat menghubungi layanan pelanggan kami melalui WhatsApp atau melalui telepon di halaman "Contact" pada website kami. Adapun untuk jam pelayanan kami setiap hari mulai dari pukul 09.00 WIB sampai 21.00 WIB.
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-7" class="plus">Apakah saya perlu membuat akun untuk berbelanja?<span>&nbsp;</span></a>
                        </div>
                        <div id="collapse-7" class="panel-collapse collapse">
                            <div class="panel-body">
                                Tentu, Anda harus membuat akun terlebih dahulu untuk dapat melihat informasi barang. Selain itu Anda dapat menyimpan informasi pengiriman, melacak pesanan, hingga mendapatkan penawaran eksklusif.
                            </div>
                        </div>
                    </div>
                </div> <!-- end accordion -->
            </div> <!-- end col -->

            <aside class="sidebar col-sm-3">
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

            </aside> <!-- end col -->
        </div>
    </div>
</section> <!-- end faq -->
@endsection