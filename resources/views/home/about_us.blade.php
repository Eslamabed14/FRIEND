@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-black animated zoomIn mb-3">سيجما دوك</h1>
            <center>
                <img src="{{ asset('home/gallery/black.webp') }}" width="40" height="40" alt="">
            </center>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- About Start -->
    <center>
        <div class="container-xxl py-6 mt-0 pt-0">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('home/img/heyy.webp') }}">
                    </div>
                    <div class="col-lg-6 wow fadeInUp fw-bold" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">من نحن</div>
                        <h2 class="mb-4">سيجما دوك</h2>
                        <p class="mb-4">تقنية جديدة وخطة فريدة للتسويق وفكرة تُطبق حصريًا في شركة سيجما !</p>
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6 class=" fw-bolder">خطة العمل داخل سيجما دوك</h6>
                                    <span>سيجما دوك عبارة عن بطاقة
                                        تقدر عن طريقها التسويق لعيادتك من خلال كارت يضم مجموعة من أفضل العيادات ومختلف
                                        التخصصات ويحق لحامل الكارت أن يتم توفير خصم مميز له على باكدج معينة وعلى هذا فإن
                                        عيادتك جزء من هذا الخصم والكارت.</span>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">اعرف اكثر</a>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <!-- About End -->
@endsection
