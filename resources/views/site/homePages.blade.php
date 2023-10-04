@extends('layouts.appPortal')
@section('content')


<main>
    <!--? slider Area Start-->
    <section class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s">مركز مهارات متقدمة للتدريب <br> </h1>
                                <p data-animation="fadeInLeft" data-delay="0.4s">مركز تدريب معتمد ومرخص من المؤسسة العامة للتدريب التقني والمهني
                                    نقدم الدورات التدريبية التطويرية في المجال الصحي ومجال الإعلام التي تساهم في تطوير الكوادر البشرية لتكون مؤهله لبيئة العمل.</p>
                                <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">سجل الان </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ? services-area -->
    <div class="services-area">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="{{ asset('public/portal/assets/img/icon/icon1.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>60+ كورس متنوع</h3>
                            <p>كورسات متنوعة فى مختلف المجالات تؤهلك لسوق العمل.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="{{ asset('public/portal/assets/img/icon/icon2.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>باقة من أفضل المدربين</h3>
                            <p>لدينا مجموعة من أفضل الكوادر فى مجال التدريب .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="{{ asset('public/portal/assets/img/icon/icon3.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>إشتراك مدى الحياة</h3>
                            <p>إشتراكك يتضمن دخول مجانى للكورس مدى الحياة .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses area start -->

    <!-- Courses area start -->
    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>دورات مميزة</h2>
                    </div>
                </div>
            </div>
            <div class="courses-actives slick-initialized slick-slider">
                <!-- Single -->
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#">
                                <img src="{{ asset('public/portal/assets/img/gallery/featured1.png')}}" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>User Experience</p>
                            <h3><a href="#">Fundamental of UX for Application design</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <p><span>(4.5)</span> based on 120</p>
                                </div>
                                <div class="price">
                                    <span>$135</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
                <!-- Single -->
                <!-- Single -->
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="{{ asset('public/portal/assets/img/gallery/featured2.png')}}" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>User Experience</p>
                            <h3><a href="#">Fundamental of UX for Application design</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <p><span>(4.5)</span> based on 120</p>
                                </div>
                                <div class="price">
                                    <span>$135</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <!-- Single -->
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="{{ asset('public/portal/assets/img/gallery/featured3.png')}}" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>User Experience</p>
                            <h3><a href="#">Fundamental of UX for Application design</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <p><span>(4.5)</span> based on 120</p>
                                </div>
                                <div class="price">
                                    <span>$135</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
                <!-- Single -->
                <!-- Single -->
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="{{ asset('public/portal/assets/img/gallery/featured2.png')}}" alt=""></a>
                        </div>
                        <div class="properties__caption">
                            <p>User Experience</p>
                            <h3><a href="#">Fundamental of UX for Application design</a></h3>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <p><span>(4.5)</span> based on 120</p>
                                </div>
                                <div class="price">
                                    <span>$135</span>
                                </div>
                            </div>
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>

                    </div>
                </div>
                <!-- Single -->
            </div>
        </div>
    </div>
    <!-- Courses area End -->




    <!--? About Area-1 Start -->
    <section class="about-area1 fix pt-10">
        <div class="support-wrapper align-items-center">
            <div class="left-content1">
                <!--div class="about-icon">
                    <img src="{{ asset('public/portal/assets/img/icon/about.svg')}}" alt="">
                </div-->
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-55">
                    <div class="front-text">
                        <h2 class="">تعلم مهارات جديدة عبر الإنترنت مع كبار المعلمين
</h2>
                        <p>Tتعلم مهارات جديدة تؤهلك لسوق العمل مع أفضل كوادر التدريب والتعليم ..

</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('public/portal/assets/img/icon/right-icon.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>تقنيات فعالة فى التعليم متوافقة مع جميع الفئات العمرية .</p>
                    </div>
                </div>
                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('public/portal/assets/img/icon/right-icon.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>انضم إلى ملايين الأشخاص من جميع أنحاء العالم للتعلم معًا.

</p>
                    </div>
                </div>

                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('public/portal/assets/img/icon/right-icon.svg')}}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>انضم إلى ملايين الأشخاص من جميع أنحاء العالم.التعلم عبر الإنترنت سهل وطبيعي.

</p>
                    </div>
                </div>
            </div>
            <div class="right-content1">
                <!-- img -->
                <div class="right-img">
                    <img src="{{ asset('public/portal/assets/img/gallery/about.png')}}" alt="">

                    <div class="video-icon">
                        <a class="popup-video btn-icon"
                         href="https://www.youtube.com/watch?v=up68UAfH0d0">
                         <i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->


    <!--? Team -->
    <section class="team-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>أفضل المدربين</h2>
                    </div>
                </div>
            </div>
            <div class="team-active slick-initialized slick-slider" dir=""rtl>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('public/portal/assets/img/gallery/team1.png')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Urela</a></h5>
                        <p>The automated process all your website tasks.</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('public/portal/assets/img/gallery/team2.png')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Mr. Uttom</a></h5>
                        <p>The automated process all your website tasks.</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('public/portal/assets/img/gallery/team3.png')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="services.html">Mr. Shakil</a></h5>
                        <p>The automated process all your website tasks.</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('public/portal/assets/img/gallery/team4.png')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="services.html">Mr. Arafat</a></h5>
                        <p>The automated process all your website tasks.</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('public/portal/assets/img/gallery/team3.png')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="services.html">Mr. saiful</a></h5>
                        <p>The automated process all your website tasks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->


    <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img">
                    <img src="{{ asset('public/portal/assets/img/gallery/about2.png')}}" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-20">
                    <div class="front-text">
                        <h2 class="">اتخذ الخطوة التالية نحو أهدافك الشخصية والمهنية معنا.</h2>
                        <p>طور ذاتك عن دريق باقة من أفضل الدورات التدريبية لتضمن تحقيق هدفك بسهولة ويسر.</p>
                        <a href="#" class="btn">سجل الان   </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->




</main>


@endsection