@extends('admin.layouts.main')

@section('dash')
    الطلبات
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px; font-weight: 700;">جدول
                                الأطباء</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @if (count($doctors) > 0)
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-secondary font-weight-bolder opacity-7">الإسم
                                        </th>
                                        <th class="text-center text-secondary font-weight-bolder opacity-7">العنوان
                                        </th>
                                        <th class="text-center text-secondary font-weight-bolder opacity-7">اللوجو
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            الرقم</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            الايميل</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            العيادة</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            التخصص</th>
                                        <th
                                            class="text-center text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                            الحالة</th>
                                        <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            حذف</th>
                                        <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            تغيير الحالة</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $doctor->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">{{ $doctor->address }}
                                                </p>
                                            </td>

                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0"><img
                                                        style="height: 80px; width:100px" src="{{ asset($doctor->logo) }}"
                                                        alt="logo"></p>
                                            </td>

                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">{{ $doctor->number }}
                                                </p>
                                            </td>

                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">{{ $doctor->email }}
                                                </p>
                                            </td>

                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">
                                                    {{ $doctor->cl_number }}</p>
                                            </td>

                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">{{ $doctor->field }}
                                                </p>
                                            </td>

                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">{{ $doctor->status }}
                                                </p>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.doctor.destroy', $doctor->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Delete user"
                                                    onclick="return confirm('هل انت متأكد من حذف الطبيب؟')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.doctor.accept', $doctor->id) }}"
                                                    class="text-secondary font-weight-bold text-xs"
                                                    style="margin-left: 20px" data-toggle="tooltip"
                                                    data-original-title="Delete user">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                                <a href="{{ route('admin.doctor.reject', $doctor->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Delete user"
                                                    onclick="return confirm('هل انت متأكد من رفض الطبيب؟')">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger text-center" role="alert">
                                <h2>لا يوجد أطباء</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
