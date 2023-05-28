@extends('home.layouts.main')

@section('content')
    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3"> سجل معنا!</h1>
        </div>
    </div>
    </div>
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-5">سجل معنا كطبيب</div>
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
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="{{ route('doc.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 register">
                            <div class="col-md-12 text-center">
                                <span>
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs52V0RgowICixp-aw2w-Cz-pMIAPZz0NzUA&usqp=CAU"
                                        width="80" height="80" class="rounded-circle" />
                                </span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" required>
                                    <label class="form-label text-end" for="name">الاسم</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="field" name="field"
                                            placeholder="Your field" required>
                                        <label class="form-label text-end" for="field">التخصص</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="email" required>
                                    <label class="form-label" for="email">البريد الالكتروني</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="password" required>
                                    <label class="form-label" for="password">الرقم السري</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                        placeholder="password_confirmation" required>
                                    <label class="form-label" for="password_confirmation">تأكيد الرقم السري</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="address" required>
                                    <label class="form-label" for="address">العنوان</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="logo" name="logo"
                                        placeholder="logo" required>
                                    <label class="form-label" for="logo">اللوجو</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="number" id="number" name="number" class="form-control"
                                        placeholder="number" required>
                                    <label class="form-label" for="number">رقم الطبيب</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="number" id="cl_number" name="cl_number" class="form-control"
                                        placeholder="num" required>
                                    <label class="form-label" for="cl_number">رقم العيادة</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" id="facebook" name="facebook" class="form-control"
                                        placeholder="facebook">
                                    <label class="form-label" for="facebook">الفيسبوك</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" id="instagram" name="instagram" class="form-control"
                                        placeholder="instagram">
                                    <label class="form-label" for="instagram">الانستاجرام</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 d-flex justify-content-center form_Css">
                            <button class="btn btn-info w-50 py-3" type="submit"
                                style="background-color: #00B98E; color:white">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
