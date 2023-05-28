@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">شركائنا</h1>
            <nav aria-label="breadcrumb">
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


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
                                    <button onclick="showDis({{ $partner->discount }})" type="button" class="btn btn-primary">
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
