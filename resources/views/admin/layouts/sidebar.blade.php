<body class="g-sidenav-show rtl bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">

                <img src="{{ asset('home/gallery/logo.webp') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold text-white">سيجما دوك</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100" style="height: 100%"
            id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/admins' ? 'active' : '' }}"
                        href="{{ route('admin.admins') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <span class="nav-link-text me-1">المسؤولين</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/users' ? 'active' : '' }}"
                        href="{{ route('admin.users') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="nav-link-text me-1">الأعضاء</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/cities' ? 'active' : '' }}"
                        href="{{ route('admin.cities') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-city"></i>
                        </div>
                        <span class="nav-link-text me-1">المحافظات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/banners' ? 'active' : '' }}"
                        href="{{ route('admin.banners') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-images"></i>
                        </div>
                        <span class="nav-link-text me-1">الصور</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/partners' ? 'active' : '' }}"
                        href="{{ route('admin.partners') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="nav-link-text me-1">الشركاء</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/doctors' ? 'active' : '' }}"
                        href="{{ route('admin.doctors') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <span class="nav-link-text me-1">الأطباء</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/services' ? 'active' : '' }}"
                        href="{{ route('admin.services') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <span class="nav-link-text me-1">خدمات الأطباء</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/requests' ? 'active' : '' }}"
                        href="{{ route('admin.requests') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <span class="nav-link-text me-1">الطلبات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/emails' ? 'active' : '' }}"
                        href="{{ route('admin.emails') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <span class="nav-link-text me-1">الإيميلات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'admin/articles' ? 'active' : '' }}"
                        href="{{ route('admin.articles') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="nav-link-text me-1">المقالات</span>
                    </a>
                </li>
            </ul>
            <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                <div class="mx-3">
                    <a class="btn bg-gradient-primary mt-4 w-100" href="{{ route('logout') }}" type="button"><i
                            class="fas fa-sign-out-alt"></i> تسحيل الخروج</a>
                </div>
            </div>
        </div>
    </aside>
