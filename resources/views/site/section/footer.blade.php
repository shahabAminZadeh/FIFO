<footer class="bg-overlay-1 bg-black">
    <div class="footer-upper pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 order-2 order-lg-1">
                    <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">
                            <h3>صفحات ما</h3>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap desk-pad-right-30">
                            <ul class="footer-details footer-list">
                                <li><a href="about-us.html">درباره ما</a></li>
                                <li><a href="blogs-grid-without-sidebar.html">وبلاگ</a></li>
                                <li><a href="faqs.html">پرسش و پاسخ</a></li>
                                <li><a href="reservation.html">رزرو</a></li>
                                <li><a href="contact-us.html">تماس با ما</a></li>
                                <li><a href="cart.html">سبد خرید</a></li>
                            </ul>
                            <ul class="footer-details footer-list">
                                <li><a href="our-team.html">تیم ما</a></li>
                                <li><a href="wishlist.html">علاقه مندی ها</a></li>
                                <li><a href="privacy-policy.html">مشاهده قوانین سایت</a></li>
                                <li><a href="terms-conditions.html">حریم خصوصی</a></li>
                                <li><a href="services.html">خدمات</a></li>
                                <li><a href="my-account.html">پنل کاربری</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 order-1 order-lg-2">
                    <div class="footer-content-item text-start text-lg-center">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{asset('site/assets/images/logo.png')}}" alt="logo"></a>
                        </div>
                        <ul class="footer-details footer-address">
                            <li>تهران ، میدان ولیعصر ، خیابان ولیعصر</li>
                            <li><span>شماره رزرو</span><a href="tel:001-964-565-87652">09121234567</a></li>
                            <li><span>آدرس ایمیل:</span><a href="/cdn-cgi/l/email-protection#08606d646467486e696e67266b6765"><span class="__cf_email__" data-cfemail="c5ada0a9a9aa85a3a4a3aaeba6aaa8">[email&#160;protected]</span></a></li>
                        </ul>
                        <div class="footer-follow">
                            <p>مارا پیگیری کنید</p>
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 order-3">
                    <div class="footer-content-list footer-content-item desk-pad-left-30">
                        <div class="footer-content-title">
                            <h3>ساعات کاری</h3>
                        </div>
                        <ul class="footer-details footer-time">
                            <li>شنبه: <span>08:00 - 23.00</span></li>
                            <li>یک شنبه: <span>08:00 - 23.00</span></li>
                            <li>دوشنبه: <span>08:00 - 21.00</span></li>
                            <li>سه شنبه: <span>09:00 - 23.00</span></li>
                            <li>چهارشنبه: <span>08:00 - 23.00</span></li>
                            <li>پنج شنبه: <span>08:00 - 23.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="footer-lower-item">
                    <div class="footer-copyright-text footer-copyright-text-red">
                        <p>ترجمه سایت توسط محسن قانع ، تنها سایت مجاز برای فروش سایت راست چین می باشد</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="cart-modal-wrapper">
    <div class="cart-modal modal-item">
        <div class="cart-modal-header">
            <h3 class="color-white">لیست خرید</h3>
            <div class="cart-modal-close">
                <i class="flaticon-cancel"></i>
            </div>
        </div>
        <div class="cart-modal-body">
            <h2 class="color-white">خرید های من</h2>
            @foreach(\Cart::getContent() as $Cart)
            <div class="cart-modal-product">

                <div class="cart-modal-thumb">
                    <a href="shop-details.html">
                        <img src="{{asset('/uploads/'.$Cart->associatedModel->image)}}" alt="product">
                    </a>
                </div>
                <div class="cart-modal-content">
                    <h4><a href="shop-details.html">{{$Cart->name}}</a></h4>
                    <div class="cart-modal-action">
                        <div class="cart-modal-action-item">
                            <div class="cart-modal-quantity">
                                <p>1</p>
                                <p>x</p>
                                <p class="cart-quantity-price">{{$Cart->price}}</p>
                            </div>
                        </div>
                        <div class="cart-modal-action-item">
                            <div class="cart-modal-delete">
                                <a href="#"><i class="flaticon-line-chart:before"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-modal-total">
                <p>جمع کل</p>
                <h3>{{\Cart::getTotal()}}</h3>
            </div>
            @endforeach
            <div class="cart-modal-button">
                <a href="{{route('CheckOut')}}" class="btn full-width">ورود به صفحه پرداخت</a>
                <a href="{{route('site.Cart')}}" class="btn btn-yellow full-width">مشاهده سبد خرید</a>
            </div>


        </div>
    </div>
</div>

<div class="scroll-top" id="scrolltop">
    <div class="scroll-top-inner">
        <span><i class="flaticon-up-arrow"></i></span>
    </div>
</div>


<script data-cfasync="false" src="{{asset('site//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('site/assets/js/bootstrap.bundle.min.j')}}s"></script>

<script src="{{asset('site/assets/js/jquery-ui.js')}}"></script>

<script src="{{asset('site/assets/js/jquery.timepicker.min.js')}}"></script>

<script src="{{asset('site/assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('site/assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('site/assets/js/slick.min.js')}}"></script>

<script src="{{asset('site/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery.themepunch.tools.min.js')}}"></script>

<script src="{{asset('site/assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('site/assets/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="{{asset('site/assets/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
<script src="{{asset('site/assets/js/jquery-jvectormap-world-mill.js')}}"></script>

<script src="{{asset('site/assets/js/wow.min.js')}}"></script>

<script src="{{asset('site/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('site/assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('site/assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('site/assets/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('admin/MDB//dist/jquery.md.bootstrap.datetimepicker.js')}}"></script>

<script src="{{asset('site/assets/js/script.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>
