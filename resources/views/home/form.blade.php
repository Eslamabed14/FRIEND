@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3"> احجز كارتك</h1>
        </div>
    </div>
    </div>
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-5">احجز كارتك</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">

                    <form action="{{ route('form.create') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form_Css">
                                    <label for="name" class="col-md-12">الاسم الاول</label>
                                    <input type="text" name="first_name" class="" id="name" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_Css">
                                    <label for="Lname" class="col-md-12">الاسم الثاني</label>
                                    <input type="text" name="last_name" class="" id="Lname">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_Css">
                                    <label for="number" class="col-md-12">رقم الهاتف</label>
                                    <input type="tel" name="mobile" class="" id="number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form_Css">
                                    <label for="address" class="col-md-12">العنوان</label>
                                    <input type="text" name="address" class="" id="address">
                                </div>
                            </div>
                            <div class="col-12 mt-2 d-flex justify-content-center form_Css">
                                <button class="btn btn-info w-50 py-3" type="submit" style="background-color: #00B98E; color:white">ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
