<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Convid</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('frontend/assets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}"
        media="screen">
</head>

<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="main">
                <div class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}"></a>
                </div>
                <div class="menu_text">
                    <ul>
                        <div class="togle_">
                            <div class="menu_main">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="index.html">Home</a>
                                <a href="protect.html">Protect</a>
                                <a href="about.html">About</a>
                                <a href="doctors.html">Doctors</a>
                                <a href="news.html">News</a>
                            </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="{{ asset('frontend/assets/images/toogle-icon.png') }}"
                                class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="{{ asset('frontend/assets/images/toogle-icon1.png') }}"
                                class="toggle_menu_1"></span>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <h1 class="banner_taital">Get Medical Care early</h1>
                                        <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form.</p>
                                        <div class="more_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img
                                            src="{{ asset('frontend/assets/images/banner-img.png') }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <h1 class="banner_taital">Get Medical Care early</h1>
                                        <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form.</p>
                                        <div class="more_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img
                                            src="{{ asset('frontend/assets/images/banner-img.png') }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <h1 class="banner_taital">Get Medical Care early</h1>
                                        <p class="banner_text">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form.</p>
                                        <div class="more_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img
                                            src="{{ asset('frontend/assets/images/banner-img.png') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- protect section start -->
    <div class="protect_section layout_padding">
        <div class="container">
            <div class="row">

            </div>


            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-computer"></i></div>
                            <h4 class="title"><a href="">Positif</a></h4>
                            <p class="description">{{ $positif }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-image"></i></div>
                            <h4 class="title"><a href="">Sembuh</a></h4>
                            <p class="description">{{ $sembuh }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-tasks-alt"></i></div>
                            <h4 class="title"><a href="">Meninggal</a></h4>
                            <p class="description">{{ $meninggal }}</p>
                        </div>
                    </div>
                </div>

            </div>


            <section id="provinsi" class="provinsi">
            </section>
            <div class="section-title" data-aos="zoom-out">
                <h2>Data Kasus Indonesia</h2>
            </div>
            <div class="row content" data-aos="fade-up">
                <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
                    <table class="table table-bordered table-striped mb-0 " width="100%">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <center>No</center>
                                </th>
                                <th scope="col">
                                    <center>Provinsi</center>
                                </th>
                                <th scope="col">
                                    <center>Jumlah Positif</center>
                                </th>
                                <th scope="col">
                                    <center>Jumlah Sembuh</center>
                                </th>
                                <th scope="col">
                                    <center>Jumlah Meninggal</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($lokal as $data)
                                <tr>
                                    <th scope="row">
                                        <center>{{ $no++ }}</center>
                                    </th>
                                    <td>
                                        <center>{{ $data->nama_provinsi }}</center>
                                    </td>
                                    <td>
                                        <center>{{ number_format($data->positif) }}</center>
                                    </td>
                                    <td>
                                        <center>{{ number_format($data->sembuh) }}</center>
                                    </td>
                                    <td>
                                        <center>{{ number_format($data->meninggal) }}</center>
                                    </td>

                                </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
    </section>

    {{-- <section id="global" class="global">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Data Kasus Dunia</h2>
            </div>

            <div class="row content" data-aos="fade-up">

                <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

                    <table class="table table-bordered table-striped mb-0 " width="100%">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <center>No</center>
                                </th>

                                <th scope="col">
                                    <center>Jumlah Positif</center>
                                </th>
                                <th scope="col">
                                    <center>Jumlah Sembuh</center>
                                </th>
                                <th scope="col">
                                    <center>Jumlah Meninggal</center>
                                </th>
                                <th scope="col">
                                    <center>Negara</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($globall as $data)
                                <tr>
                                    <td> <?php echo $no++; ?></td>
                                    <td> <?php echo $data['attributes']['Country_Region']; ?></td>
                                    <td> <?php echo $data['attributes']['Confirmed']; ?>
                                    </td>
                                    <td><?php echo number_format($data['attributes']['Recovered']); ?></td>
                                    <td><?php echo number_format($data['attributes']['Deaths']); ?></td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        </div> --}}

    <div class="protect_section_2 layout_padding">
        <div class="row">
            <div class="col-md-6">
                <h1 class="hands_text"><a href="#">Wash your <br>hands frequently</a></h1>
                <h1 class="hands_text_2"><a href="#">Maintain social <br>distancing</a></h1>
                <h1 class="hands_text"><a href="#">Avoid touching eyes,<br>nose and mouth</a></h1>
            </div>
            <div class="col-md-6">
                <div class="image_2"><img src="{{ asset('frontend/assets/images/img-2.png') }}"></div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- protect section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_img"><img src="{{ asset('frontend/assets/images/img-1.png') }}"></div>
                </div>
                <div class="col-md-6">
                    <h1 class="about_taital">Coronavirus what it is?</span></h1>
                    <p class="about_text">when looking at its layout. The point of using Lorem Ipsum is that it has
                        a
                        more-or-less normal distribution of letters, as opposed to using</p>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- doctor section start -->
    <div class="doctors_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="taital_main">
                        <div class="taital_left">
                            <div class="play_icon"><img src="{{ asset('frontend/assets/images/play-icon.png') }}">
                            </div>
                        </div>
                        <div class="taital_right">
                            <h1 class="doctor_taital">What doctors say..</h1>
                            <p class="doctor_text">It is a long established fact that a reader will be distracted by
                                the
                                readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is
                                that it has a more-or-less normal distribution of letters, as opposed to using
                                'Content
                                here, content here', making it look</p>
                            <div class="readmore_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- doctor section end -->
    <!-- news section start -->
    <div class="news_section layout_padding">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="news_taital">Latest News</h1>
                        <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it
                            has a
                            more-or-less normal distribution of letters, as opposed to using</p>
                        <div class="news_section_2 layout_padding">
                            <div class="box_main">
                                <div class="image_1"><img src="{{ asset('frontend/assets/images/news-img.png') }}">
                                </div>
                                <h2 class="design_text">Coronavirus is Very dangerous</h2>
                                <p class="lorem_text">It is a long established fact that a reader will be distracted
                                    by
                                    the readable content of a page when looking at its layout. The point of using
                                    Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                    to
                                    using 'Content here, content here', making it look</p>
                                <div class="read_btn"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="news_taital">Latest News</h1>
                        <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it
                            has a
                            more-or-less normal distribution of letters, as opposed to using</p>
                        <div class="news_section_2 layout_padding">
                            <div class="box_main">
                                <div class="image_1"><img src="{{ asset('frontend/assets/images/news-img.png') }}">
                                </div>
                                <h2 class="design_text">Coronavirus is Very dangerous</h2>
                                <p class="lorem_text">It is a long established fact that a reader will be distracted
                                    by
                                    the readable content of a page when looking at its layout. The point of using
                                    Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                    to
                                    using 'Content here, content here', making it look</p>
                                <div class="read_btn"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="news_taital">Latest News</h1>
                        <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it
                            has a
                            more-or-less normal distribution of letters, as opposed to using</p>
                        <div class="news_section_2 layout_padding">
                            <div class="box_main">
                                <div class="image_1"><img src="{{ asset('frontend/assets/images/news-img.png') }}">
                                </div>
                                <h2 class="design_text">Coronavirus is Very dangerous</h2>
                                <p class="lorem_text">It is a long established fact that a reader will be distracted
                                    by
                                    the readable content of a page when looking at its layout. The point of using
                                    Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                    to
                                    using 'Content here, content here', making it look</p>
                                <div class="read_btn"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- news section end -->
    <!-- update section start -->
    <div class="update_section">
        <div class="container">
            <h1 class="update_taital">Get Every Update.... </h1>
            <form action="/action_page.php">
                <div class="form-group">
                    <textarea class="update_mail" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                </div>
                <div class="subscribe_bt"><a href="#">Subscribe Now</a></div>
            </form>
        </div>
    </div>
    <!-- update section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Resources</h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">What we do</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Travel Advice</a></li>
                                <li><a href="#">Protection</a></li>
                                <li><a href="#">Care</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">About</h2>
                        <p class="footer_text">Many desktop publishing packages and web page editors now use Lorem
                            Ipsum
                            as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                            still in their infancy. Various</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Contact Us</h2>
                        <div class="location_text">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span class="padding_15">Location</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                                        <span class="padding_15">Call +01 1234567890</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span class="padding_15">demo@gmail.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">countrys</h2>
                        <div class="map_image"><img src="{{ asset('frontend/assets/images/map-bg.png') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html
                            Templates</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });

    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

    </script>
</body>

</html>
