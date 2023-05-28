@extends('admin.layouts.main')
@section('dash')
    الصور
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px; font-weight: 700;">جدول
                                الصور</h5>
                        </div>
                        <div class="col-6" style="position: relative;"><a href="{{ route('admin.banner.create') }}"
                                style="position: absolute; left: 2%" class="btn btn-primary">إضافة صورة جديدة</a></div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @if (count($banners) > 0)
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th> --}}
                                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                        العنوان</th>

                                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2">
                                        الصورة</th>

                                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                        منذ</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                        تعديل</th>
                                    <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">
                                        حذف</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr>
                                        @isset($banner->title)
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" style="margin-right:20px">{{ $banner->title }}</p>
                                        </td>
                                        @else
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0" style="margin-right:20px">لا يوجد عنوان</p>
                                        </td>
                                        @endisset
                                        <td>
                                            <img class="img-thumbnail" style="height: 100px; width: 250px ;" src="{{ asset($banner->image) }}" alt="banner">
                                        </td>

                                        <td class="align-middle text-center">

                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $banner->created_at->diffForHumans() }}</span>
                                        </td>

                                        <td class="align-middle text-center">
                                            <a href="{{ route('admin.banner.edit', $banner->id) }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('admin.banner.destroy', $banner->id) }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Delete user"
                                                onclick="return confirm('هل انت متأكد من حذف الصورة؟')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <div class="alert alert-danger text-center" role="alert">
                                <h2>لا يوجد صور</h2>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
