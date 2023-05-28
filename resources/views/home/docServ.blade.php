@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">سجل خدماتك معنا</h1>
        </div>
    </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            <h4>{{ session('success') }}</h4>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
            <form action="{{ route('doc.serv.store') }}" method="POST">
                @csrf
                <div class="row g-3 register">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="service" name="service"
                                placeholder="Your service" required>
                            <label class="form-label text-end" for="service">الخدمة</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="Your price" required>
                            <label class="form-label text-end" for="price">السعر</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="discount" name="discount"
                                placeholder="Your discount" required>
                            <label class="form-label text-end" for="discount">نسبة الخصم</label>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex justify-content-center form_Css">
                        <button class="btn btn-info w-50 py-3" type="submit"
                            style="background-color: #00B98E; color:white">تأكيد</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
