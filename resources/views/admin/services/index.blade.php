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
                                خدمات الأطباء</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @if (count($services) > 0)
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-secondary font-weight-bolder opacity-7">الخدمة
                                        </th>
                                        <th class="text-center text-secondary font-weight-bolder opacity-7">السعر
                                        </th>
                                        <th class="text-center text-secondary font-weight-bolder opacity-7">قيمة الخصم
                                        </th>
                                        <th class="text-center text-secondary font-weight-bolder opacity-7">الطبيب
                                        </th>
                                        <th class="text-center text-secondary font-weight-bolder opacity-7">منذ
                                        </th>
                                        <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                            حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $service->service }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">{{ $service->price }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">
                                                    {{ $service->discount }} %
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">
                                                    {{ $service->doctor->name }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-center text-xs font-weight-bold mb-0">
                                                    {{ $service->created_at->diffForhumans() }}
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.service.destroy', $service->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Delete user"
                                                    onclick="return confirm('هل انت متأكد من حذف الخدمة')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-danger text-center" role="alert">
                                <h2>لا يوجد خدمات</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
