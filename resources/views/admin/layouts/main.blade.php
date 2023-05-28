@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">

    @include('admin.layouts.navbar')

    <div class="container-fluid py-4">

        @include('admin.layouts.alerts')

        @yield('content')

        @include('admin.layouts.smallFooter')

    </div>

</main>

@include('admin.layouts.settings')

@include('admin.layouts.bigFooter')
