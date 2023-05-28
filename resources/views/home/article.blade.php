@extends('home.layouts.main')

@section('content')
    <!--slider-->

    <div class="container-xx bg-primary page-header">
        <div class="container text-center">
            <div class="row">
                <div class="view text-center">
                    <img src="{{ asset($article->image) }}" class="img-fluid wow animate__backInDown" alt="sample image"
                        style="width: 100%; height: 360px;">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- article -->
    <div class="container-fluid">
        <main>
            <article>
                <div class=" text-center">
                    <div class=" text-dark mb-5">
                        <h3 class="text-center">{{ $article->title }}</h3>
                    </div>
                </div>
            </article>
            <div class="container-fluid">
                <div class="row g-0 bg-light position-relative d-flex ">
                    <div class=" col-lg-7 col-md-12 col-sm-12 p-4 ps-md-0">
                        {!! $article->description !!}
                    </div>
                    <div class="wedgit col-lg-5 col-md-12 col-sm-12 mb-md-0 p-md-4 ">
                        <ul>
                            <h4 class="fw-bold  wow animate__bounce">اخر المقالات</h4>
                            @foreach ($articles as $article)
                                <li class="mb-4">
                                    <a href="{{ route('article', $article->id) }}">
                                        <div class="wedgit-content">
                                            <div class="entry-img ">
                                                <img src="{{ asset($article->image) }}" alt="img">
                                            </div>
                                            <div class="entry-text">{{ $article->title }}</div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                            <h4 class="fw-bold mt-2 ">اخر الاشتراكات</h4>

                            @foreach ($partners as $partner)
                                <li class="mb-4">
                                    <div class="wedgit-content">
                                        <div class="entry-img ">
                                            <img src="{{ asset($partner->image) }}" alt="Doc image">
                                        </div>
                                        <div class="entry-text"> {{ $partner->name }} </div> <br>
                                        <div class="entry-text"> {{ $partner->description }} </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Service End -->
@endsection
