@extends('layout.home')

@section('title', 'Blog')

@section('content')
<!-- Page Title -->
<section class="page-title text-center bg-img overlay" style="background-image: url(/front/img/page_title/coverpage4.jpg)">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Blog</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">
                        Blog
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Blog Standard -->
<section class="section-wrap blog-standard pb-50">
    <div class="container relative">
        <div class="row">
            
            <!-- content -->
            <div class="col-md-9 post-content mb-50">

                <!-- standard post -->
                <article class="entry-item">
                    <div class="entry-img">
                        <a href="blog-single.html" class="hover-scale">
                            <img src="/front/img/blog/blog1.jpg" alt="">
                        </a>
                    </div>

                    <div class="entry-wrap">
                        <div class="entry">  
                            <h2 class="entry-title">
                                <a href="blog-single.html">Tips Ampuh Merawat Sepatu agar Awet dan Tahan Lama</a>
                            </h2>
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    <i class="fa fa-calendar-o"></i>
                                    29 Agustus, 2024
                                </li>
                                <li class="entry-author">
                                    <i class="fa fa-user"></i>
                                    <a>Admin</a>
                                </li>                                               
                            </ul>
                            <div class="entry-content">
                                <p style="text-align: justify;">Sepatu adalah salah satu barang fashion yang sering digunakan dalam berbagai aktivitas sehari-hari. Namun, seringkali sepatu cepat rusak jika tidak dirawat dengan baik. Untuk menjaga agar sepatu tetap awet dan nyaman dipakai, penting untuk mengetahui cara merawatnya dengan benar. Artikel ini akan membahas beberapa tips yang bisa Anda lakukan untuk merawat sepatu agar tahan lama.</p>
                                <a href="/tips-ampuh-merawat-sepatu-agar-tahan-lama" class="btn btn-lg btn-stroke"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </article> <!-- end standard post -->

                <!-- gallery post -->
                <article class="entry-item">
                    <div class="entry-slider">
                        <div class="flexslider dots-inside" id="flexslider">
                            <ul class="slides clearfix">
                                <li>
                                    <a href="#">
                                        <img src="/front/img/blog/gallery_post_img_1.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/front/img/blog/gallery_post_img_2.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/front/img/blog/gallery_post_img_3.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end slider -->

                    <div class="entry-wrap">
                        <div class="entry">                  
                            <h2 class="entry-title">
                                <a href="blog-single.html">Need a Business Idea? Here are 55.</a>
                            </h2>
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    <i class="fa fa-calendar-o"></i>
                                    19 September, 2016
                                </li>
                                <li class="entry-author">
                                    <i class="fa fa-user"></i>
                                    <a href="#">Admin</a>
                                </li> 
                                <li class="entry-category">
                                    <i class="fa fa-bookmark"></i>
                                    <a href="#">Fashion</a>
                                </li>                                        
                                <li class="entry-comments">
                                    <i class="fa fa-comments"></i>
                                    <a href="blog-single.html">15 Comments</a>
                                </li>             
                            </ul>                                  
                            <div class="entry-content">
                                <p>We possess within us two minds. So far I have written only of the conscious mind. This Theme is the Best theme on ThemeForest. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.</p>
                                <a href="blog-single.html" class="btn btn-lg btn-stroke"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </article> <!-- end gallery post -->

                <!-- standard post -->
                <article class="entry-item">
                    <div class="entry-img">
                        <a href="blog-single.html" class="hover-scale">
                            <img src="/front/img/blog/gallery_post_img_3.jpg" alt="">
                        </a>
                    </div>

                    <div class="entry-wrap">
                        <div class="entry">  
                            <h2 class="entry-title">
                                <a href="blog-single.html">Designing Mobile eCommerce Apps</a>
                            </h2>
                            <ul class="entry-meta">
                                <li class="entry-date">
                                    <i class="fa fa-calendar-o"></i>
                                    19 September, 2016
                                </li>
                                <li class="entry-author">
                                    <i class="fa fa-user"></i>
                                    <a href="#">Admin</a>
                                </li> 
                                <li class="entry-category">
                                    <i class="fa fa-bookmark"></i>
                                    <a href="#">Fashion</a>
                                </li>                                        
                                <li class="entry-comments">
                                    <i class="fa fa-comments"></i>
                                    <a href="blog-single.html">15 Comments</a>
                                </li>             
                            </ul>
                            <div class="entry-content">
                                <p>We possess within us two minds. So far I have written only of the conscious mind. This Theme is the Best theme on ThemeForest. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.</p>
                                <a href="blog-single.html" class="btn btn-lg btn-stroke"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </article> <!-- end standard post -->


                <!-- Pagination -->
                <nav class="pagination">
                    <span class="page-numbers current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                </nav>
            </div> <!-- end col -->
            
            <!-- Sidebar -->
            <aside class="col-md-3 sidebar">       

                <!-- Categories -->
                <div class="widget categories">
                    <h3 class="widget-title heading relative bottom-line full-grey">Categories</h3>
                    <ul class="list-dividers">
                        <li>
                            <a href="#">Women</a>
                        </li>
                        <li>
                            <a href="#">Men</a>
                        </li>
                        <li>
                            <a href="#">Accessories</a>
                        </li>
                        <li>
                            <a href="#">Bags</a>
                        </li>
                        <li>
                            <a href="#">Watches</a>
                        </li>
                    </ul>
                </div>

                <!-- Recent posts -->
                <div class="widget recent-posts">
                    <h3 class="widget-title heading relative bottom-line full-grey">Recent Posts</h3>
                    <div class="entry-list">
                        <ul class="posts-list">
                            <li class="entry-li">
                                <article class="post-small clearfix">
                                    <div class="entry-img">
                                        <a href="blog-single.html">
                                            <img src="/front/img/blog/latest_posts_1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="entry">                          
                                        <h3 class="entry-title"><a href="blog-single.html">6 Ways to Be More Productive</a></h3>
                                        <ul class="entry-meta list-inline">
                                            <li class="entry-date">
                                                <i class="fa fa-calendar-o"></i>
                                                19 Mar, 2016
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="entry-li">
                                <article class="post-small clearfix">
                                    <div class="entry-img">
                                        <a href="blog-single.html">
                                            <img src="/front/img/blog/latest_posts_2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="entry">
                                        <h3 class="entry-title"><a href="blog-single.html">3 Tips to Align Your Startup</a></h3>
                                        <ul class="entry-meta list-inline">
                                            <li class="entry-date">
                                                <i class="fa fa-calendar-o"></i>
                                                16 Mar, 2016
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="entry-li">
                                <article class="post-small clearfix">
                                    <div class="entry-img">
                                        <a href="blog-single.html">
                                            <img src="/front/img/blog/latest_posts_3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="entry">                          
                                        <h3 class="entry-title"><a href="blog-single.html">Make more money blogging with these 6 tips</a></h3>
                                        <ul class="entry-meta list-inline">
                                            <li class="entry-date">
                                                <i class="fa fa-calendar-o"></i>
                                                16 Mar, 2016
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside> <!-- end sidebar -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end blog standard -->
@endsection