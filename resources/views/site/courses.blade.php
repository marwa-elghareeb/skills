@extends('layouts.appPortal')
@section('content')

 <!--? slider Area Start-->
 <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">الدورات </h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">الرئيسيه</a></li>
                                            <li class="breadcrumb-item"><a href="#">الدورات</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->

<!-- Courses area start -->
<div class="courses-area section-padding40 fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <h2></h2>
                </div>
            </div>
        </div>
        <div class="row">

            @if(count($allData) > 0)
            <div class="col-lg-4">
                @foreach($allData as $data)
                <div class="properties properties2 mb-30">
                    <div class="properties__card">
                        <div class="properties__img overlay1">

                            <a href="#">
                                @if($data->image == '')
                                <img src="{{ URL ::to ('public/portal/logo.png')}}" alt="">
                                @else
                                <img src="{{ URL ::to ('public/upload/'.$data->image)}}" alt="">
                                @endif

                            </a>
                        </div>
                        <div class="properties__caption">

                            <h3><a href="#">{{ $data->name_ar}}</a></h3>
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
                @endforeach

            </div>
            @else
            <div class="alert alert-info">

                لا توجد بيانات فى الوقت الحالى !
            </div>
           
            @endif


        </div>
        <!--div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mt-40">
                    <a href="#" class="border-btn">Load More</a>
                </div>
            </div>
        </div-->
    </div>
</div>
<!-- Courses area End -->



@endsection