<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn " data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 text-center">
                <h5 class="text-white mb-4">تواصل معنا</h5>
                <p><i class="fa fa-map-marker-alt me-3 m-1"></i>Egypt, Mansoura</p>
                <p><i class="fa fa-phone-alt me-3 m-1"></i>+20 01141630646</p>
                <p><i class="fa fa-envelope me-3 m-1"></i>info@example.com</p>
                <div class="d-flex pt-2 justify-content-center">
                    <a target="_balnk" class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a target="_balnk" class="btn btn-outline-light btn-social" href="https://www.facebook.com/sigma.doc0"><i class="fab fa-facebook-f"></i></a>
                    <a target="_balnk" class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a target="_balnk" class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a target="_balnk" class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4 text-center">العناوين الرئيسة</h5>
                <a class="btn btn-link" href="{{ route('home') }}">الرئيسية</a>
                <a class="btn btn-link" href="{{ route('about_us') }}">من نحن</a>
                <a class="btn btn-link" href="{{ route('partners') }}">الشركاء</a>
                <a class="btn btn-link" href="{{ route('form') }}">احجز كارتك</a>
                <a class="btn btn-link" href="{{ route('doc') }}">سجل الآن كطبيب</a>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <h5 class="text-white mb-4">يمكنك الوصول الينا</h5>
                <a target="_balnk" class="btn btn-link" href="https://www.facebook.com/sigma.doc0">facebook</a>
                <a target="_balnk" class="btn btn-link" href="">twitter</a>
                <a target="_balnk" class="btn btn-link" href="">instgram</a>
                <a target="_balnk" class="btn btn-link" href="">linkedin</a>
                <a target="_balnk" class="btn btn-link" href="">youtube</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">الاخبار</h5>
                <p>تقنية جديدة وخطة فريدة للتسويق وفكرة تُطبق حصريًا في شركة سيجما !</p>
                <div class="position-relative w-100 mt-3">
                    <form action="{{ route('form.createMail') }}" method="POST">
                        @csrf
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                            placeholder="ادخل بريدك الالكتروني" name="email" style="height: 48px;" required>
                        <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-info fs-4"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; SigmaDoc, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" target="_blank" href="https://sigma-business.com/">SIGMA</a>

                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('home') }}">الرئيسة</a>
                        <a href="{{ route('about_us') }}">من نحن</a>
                        <a href="{{ route('partners') }}">شركائنا</a>
                        <a href="{{ route('form') }}">احجز كارتك</a>
                        <a href="{{ route('doc') }}">سجل الآن كطبيب</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="{{ asset('home/js/main.js') }}"></script>
</body>

</html>
