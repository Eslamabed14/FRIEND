@extends('home.layouts.main')

@section('content')
    <!--slider-->



    <div class="container-xxl bg-primary hero-header">

        <div class="container">
            @if (session('success'))
                <div class="alert bg-transparent">
                    <h4 style="color: white">{{ session('success') }}</h4>
                </div>
            @endif
            @if (session('alert'))
                <script>
                    window.onload = function() {
                        success();
                    };
                </script>
            @endif
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">تقنية جديدة وخطة فريدة للتسويق وفكرة تُطبق حصريًا في شركة
                        سيجما !</h1>
                    <p class="text-white pb-3 animated zoomIn">سيجما دوك عبارة عن بطاقة
                        تقدر عن طريقها التسويق لعيادتك من خلال كارت يضم مجموعة من أفضل العيادات ومختلف التخصصات ويحق لحامل
                        الكارت أن يتم توفير خصم مميز له على باكدج معينة وعلى هذا فإن عيادتك جزء من هذا الخصم والكارت.</p>
                    <a href="#aboutUs"
                        class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">اعرف اكثر</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('home/img/hero.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->



    <!-- About Start -->
    <div class="container-xxl py-6" id="aboutUs">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('home/img/heyy.webp') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">من نحن</div>
                    <h2 class="mb-4">سيجما دوك</h2>
                    <p class="mb-4">تقنية جديدة وخطة فريدة للتسويق وفكرة تُطبق حصريًا في شركة سيجما !</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>خطة العمل داخل سيجما دوك</h6>
                                <span>سيجما دوك عبارة عن بطاقة
                                    تقدر عن طريقها التسويق لعيادتك من خلال كارت يضم مجموعة من أفضل العيادات ومختلف التخصصات
                                    ويحق لحامل الكارت أن يتم توفير خصم مميز له على باكدج معينة وعلى هذا فإن عيادتك جزء من
                                    هذا الخصم والكارت.</span>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ route('about_us') }}">اعرف اكثر</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">اشترك في خدمة آخر الأخبار</h3>
                    <div class="position-relative w-100 mt-3">
                        <form action="{{ route('form.createMail') }}" method="POST">
                            @csrf
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                placeholder="ادخل بريدك الالكتروني" name="email" style="height: 48px;" required>
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="{{ asset('home/img/newsletter.webp') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">شركائنا</div>
                <h2 class="mb-5">نقدم تقنية وخطة جديدة للتسويق</h2>
            </div>




            <div class="row g-4">
                @foreach ($partners as $partner)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100 p-3">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset($partner->image) }}" alt="" style="height: 200px;">
                            </div>

                            <center>
                                <div class="p-5">
                                    <h5 class="mb-3">{{ $partner->name }}</h5>
                                    <span>{{ $partner->description }}</span>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button onclick="showDis({{ $partner->discount }})" type="button"
                                        class="btn btn-primary">
                                        عرض الخصم</button>
                                </div>
                            </center>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Service End -->
@endsection
