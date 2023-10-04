<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>مركز مهارات متقدمة للتدريب</title>
        <meta name="description" content="مركز مهارات متقدمة للتدريب">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="#">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/portal/logo.png')}}">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/progressbar_barfiller.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/gijgo.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/animated-headline.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/style.css')}}">

        <!-- CSS AR here -->
        <!--link rel="stylesheet" href="{{ asset('public/portal/assets/css/bootstrap.rtl.min')}}"-->
        <link rel="stylesheet" href="{{ asset('public/portal/assets/css/style_ar.css')}}">

</head>

<body dir="rtl">
        <!-- ? Preloader Start -->
        <div id="preloader-active">
                <div class="preloader d-flex align-items-center justify-content-center">
                        <div class="preloader-inner position-relative">
                                <div class="preloader-circle"></div>
                                <div class="preloader-img pere-text">
                                        <img src="{{ asset('public/portal/logo2.png')}}" alt="">
                                </div>
                        </div>
                </div>
        </div>
        <!-- Preloader Start -->
        <header>
                <!-- Header Start -->
                <div class="header-area header-transparent">
                        <div class="main-header ">
                                <div class="header-bottom  header-sticky">
                                        <div class="container-fluid">
                                                <div class="row align-items-center">
                                                        <!-- Logo -->
                                                        <div class="col-xl-2 col-lg-2">
                                                                <div class="logo">
                                                                        <a href="#">
                                                                                <img src="{{ asset('public/portal/logo2.png')}}" alt="logo" height: 150px;"></a>
                                                                </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-10">
                                                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                                                        <!-- Main-menu -->
                                                                        <div class="main-menu d-none d-lg-block">
                                                                                <nav>
                                                                                        <ul id="navigation">
                                                                                                <li class="active"><a href="#">الرئيسية</a></li>
                                                                                                <li><a href="#">الدورات</a></li>
                                                                                                <li><a href="#">المدربين</a></li>
                                                                                                <!--li><
                                                                                                </li-->
                                                                                                <li><a href="">من نحن</a></li>
                                                                                                <li><a href="">اتصل بنا </a></li>
                                                                                                <!-- Button -->
                                                                                                <li class="button-header margin-left ">
                                                                                                        <a href="{{ URL :: to ('/login')}}" class="btn">انضم الينا </a>
                                                                                                </li>
                                                                                                @if(empty(auth()->user()->name))
                                                                                                @else
                                                                                                <li class="button-header">
                                                                                                       
                                                                                                      <a href="#" class="btn btn3">
                                                                                                        
                                                                                                      {{  auth()->user()->name }}</a>
                                                                                                      
                                                                                                        <ul class="submenu">
                                                                                                                <li><a href="#">الملف الشخصى</a></li>
                                                                                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-power"></i> <span>تسجيل الخروج</span></a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form></li>
                                                                                                                
                                                                                                        </ul>
                                                                                                </li>
                                                                                                @endif
                                                                                        </ul>
                                                                                </nav>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <!-- Mobile Menu -->
                                                        <div class="col-12">
                                                                <div class="mobile_menu d-block d-lg-none"></div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- Header End -->
        </header>


        @yield('content')



        <footer>
                <div class="footer-wrappper footer-bg">
                        <!-- Footer Start-->
                        <div class="footer-area footer-padding">
                                <div class="container">
                                        <div class="row justify-content-between">
                                                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                                                        <div class="single-footer-caption mb-50">
                                                                <div class="single-footer-caption mb-30">
                                                                        <!-- logo -->
                                                                        <div class="footer-logo mb-25">
                                                                                <a href="#"> <img src="{{ asset('public/portal/logo2_footer.png')}}" alt="logo" /></a>
                                                                        </div>
                                                                        <div class="footer-tittle">
                                                                                <div class="footer-pera">
                                                                                        <p>مركز تدريب معتمد ومرخص من المؤسسة العامة للتدريب التقني والمهني نقدم الدورات التدريبية التطويرية في المجال الصحي ومجال الإعلام التي تساهم في تطوير الكوادر البشرية لتكون مؤهله لبيئة العمل.</p>
                                                                                </div>
                                                                        </div>
                                                                        <!-- social -->
                                                                        <div class="footer-social">
                                                                                <a href="https://twitter.com/advancskills1?s=11&t=a_TBstYpLv0wd-ebmSUmOg"><i class="fab fa-twitter"></i></a>
                                                                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                                                                <a href="#"><i class="fab fa-snapchat"></i></a>
                                                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                                                                <a href="#"><i class="fab fa-tiktok"></i></a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                                                        <div class="single-footer-caption mb-50">
                                                                <div class="footer-tittle">
                                                                        <h4>خدماتنا</h4>
                                                                        <ul>
                                                                                <li><a href="#">دورات فى المجال الصحى</a></li>
                                                                                <li><a href="#">دورات فى مجال الاعلام</a></li>
                                                                                <li><a href="#">دورات فى المجالات العامه</a></li>
                                                                             
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                                                        <div class="single-footer-caption mb-50">
                                                                <div class="footer-tittle">
                                                                        <h4>روابط هامة</h4>
                                                                        <ul>
                                                                                <li><a href="#">الشروط والأحكام</a></li>
                                                                                <li><a href="#">السياسات العامة</a></li>
                                                                                <li><a href="#">سياسة الدعم الفنى</a></li>
                                                                                <li><a href="#">الشكاوى والأقتراحات</a></li>

                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                                        <div class="single-footer-caption mb-50">
                                                                <div class="footer-tittle">
                                                                        <h4>روابط الموقع</h4>
                                                                        <ul>
                                                                                <li><a href="#">الدورات</a></li>
                                                                                <li><a href="#">المدربين</a></li>
                                                                                <li><a href="#">من نحن</a></li>
                                                                                <li><a href="#">إتصل بنا</a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- footer-bottom area -->
                        <div class="footer-bottom-area">
                                <div class="container">
                                        <div class="footer-border">
                                                <div class="row d-flex align-items-center">
                                                        <div class="col-xl-12 ">
                                                                <div class="footer-copy-right text-center">
                                                                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                                                                جميع الحقوق محفوظة &copy;<script>
                                                                                        document.write(new Date().getFullYear());
                                                                                </script> | هذا التصميم صنع<i class="fa fa-heart" aria-hidden="true"></i>  <a href="" target="_blank">مركز مهارات متقدمة للتدريب</a>
                                                                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- Footer End-->
                </div>
        </footer>
        <!-- Scroll Up -->
        <div id="back-top">
                <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        <!-- JS here -->
        <script src="{{ asset('public/portal/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('public/portal/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ asset('public/portal/assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('public/portal/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/slick.min.js')}}"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('public/portal/assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/animated.headline.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Date Picker -->
        <script src="{{ asset('public/portal/assets/js/gijgo.min.js')}}"></script>
        <!-- Nice-select, sticky -->
        <script src="{{ asset('public/portal/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/jquery.sticky.js')}}"></script>
        <!-- Progress -->
        <script src="{{ asset('public/portal/assets/js/jquery.barfiller.js')}}"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="{{ asset('public/portal/assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/waypoints.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/hover-direction-snake.min.js')}}"></script>

        <!-- contact js -->
        <script src="{{ asset('public/portal/assets/js/contact.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/jquery.form.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/mail-script.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/jquery.ajaxchimp.min.js')}}"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('public/portal/assets/js/plugins.js')}}"></script>
        <script src="{{ asset('public/portal/assets/js/main.js')}}"></script>

        <script>
                $(document).ready(function() {

                        $('.team-active').slick({
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                        });
                });
        </script>

</body>

</html>