
<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta name="description" content="Fafo">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>Fafo - قالب رستوران و فست فود</title>
    <link rel="icon" href="{{asset('site/assets/images/tab.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href=" {{asset('site/assets/css/bootstrap-reboot.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href=" {{asset('site/assets/css/bootstrap.rtl.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href=" {{asset('site/assets/css/animate.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href=" {{asset('site/assets/css/owl.carousel.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href=" {{asset('site/assets/css/owl.theme.default.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href=" {{asset('site/assets/css/slick.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href=" {{asset('site/assets/css/slick-theme.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href=" {{asset('site/assets/css/jquery-ui.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('site/assets/css/jquery.timepicker.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('site/assets/css/meanmenu.min.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('site/assets/css/magnific-popup.min.css')}}" type="text/css" media="all" />

    <link rel='stylesheet' href='{{asset('site/assets/css/icofont.min.css')}}' type="text/css" media="all" />

    <link rel='stylesheet' href='{{asset('site/assets/css/flaticon.css')}}' type="text/css" media="all" />

    <link rel='stylesheet' href='{{asset('site/assets/css/settings.css')}}' type="text/css" media="all" />
    <link rel='stylesheet' href='{{asset('site/assets/css/layers.css')}}' type="text/css" media="all" />
    <link rel='stylesheet' href='{{asset('site/assets/css/navigation.css')}}' type="text/css" media="all" />

    <link rel='stylesheet' href='{{asset('site/assets/css/jquery-jvectormap-2.0.5.css')}}' type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('site/assets/css/style.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('site/assets/css/responsive.css')}}" type="text/css" media="all" />
    <link href="{{asset('admin/MDB/dist/jquery.md.bootstrap.datetimepicker.style.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('site/assets/css/rtl.css')}}" type="text/css" media="all" /><link href="fonts.css@ver=5.6.2.css"  rel="stylesheet" />

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<div class="preloader bg-main">
    <div class="preloader-wrapper">
        <div class="preloader-grid">
            <div class="preloader-grid-item preloader-grid-item-1"></div>
            <div class="preloader-grid-item preloader-grid-item-2"></div>
            <div class="preloader-grid-item preloader-grid-item-3"></div>
            <div class="preloader-grid-item preloader-grid-item-4"></div>
            <div class="preloader-grid-item preloader-grid-item-5"></div>
            <div class="preloader-grid-item preloader-grid-item-6"></div>
            <div class="preloader-grid-item preloader-grid-item-7"></div>
            <div class="preloader-grid-item preloader-grid-item-8"></div>
            <div class="preloader-grid-item preloader-grid-item-9"></div>
        </div>
    </div>
</div>
@foreach($errors->all() as $error)
    <ul>
        <li class="text-danger">
            {{$error}}
        </li>
    </ul>
@endforeach

<div class="topbar bg-main">
    <div class="container">
        <div class="topbar-inner">
            <div class="topbar-item topbar-padding">
                <ul class="social-list social-list-white">
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                </ul>
            </div>
            <div class="topbar-item">
                <div class="topbar-right d-flex flex-wrap topbar-right justify-content-center justify-content-md-start full-height">
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-clock"></i>
                        جعمه ها تعطیل است
                    </div>
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-placeholder-1"></i>
                        تهران ، میدان ولیعصر ، خیابان ولیعصر
                    </div>
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-smartphone-call"></i>
                        <a href="tel:001-964-565-87652" class="color-white">09121234567</a>
                    </div>
                    <div class="topbar-right-item topbar-padding language-button language-option">
                        <button class="dropdown-toggle color-white lang-compo" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('site/assets/images/uk.png')}}" alt="flag">
                            English
                        </button>
                        <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                            <a class="dropdown-item" href="#">
                                <img src="{{asset('site/assets/images/uk.png')}}" alt="flag">
                                English
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="{{asset('site/assets/images/germany.png')}}" alt="flag">
                                Deutsch
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="{{asset('site/assets/images/china.png')}}" alt="flag">
                                简体中文
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="{{asset('site/assets/images/arab.png')}}" alt="flag">
                                العربيّة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<header>

    <div class="fixed-top">
        <div class="navbar-area navbar-dark">

            <div class="mobile-nav">
                <a href="index.html" class="mobile-brand">
                    <img src="{{asset('site/assets/images/logo.png')}}" alt="logo" class="blue-logo">
                </a>

                <div class="navbar-option d-flex align-items-center">
                    <div class="navbar-option-item navbar-option-dots mobile-hide">
                        <button class="dropdown-toggle" type="button" id="mobileOptionDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-menu-1"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="mobileOptionDropdown">
                            <div class="navbar-option-item navbar-option-cart">
                                <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                <span class="option-badge">4</span>
                            </div>
                            <div class="navbar-option-item navbar-option-order">
                                <a href="shops-grid.html" class="btn">
                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-option-item navbar-option-authentication">
                        <button class="navbar-authentication-button" type="button" id="auth2" data-bs-toggle="dropdown" aria-haspopup="true"><i class="flaticon-add-user"></i></button>
                        <div class="authentication-box dropdown-menu" aria-labelledby="auth2">
                            <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                            <div class="authentication-body">
                                <ul class="authentication-tab">
                                    <li class="authentication-tab-item active" data-authentication-tab="1">ورود</li>
                                    <li class="authentication-tab-item" data-authentication-tab="2">ثبت نام</li>
                                </ul>
                                <div class="authentication-details">
                                    <div class="authentication-details-item active" data-authentication-details="1">
                                        <form>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="نام کاربری" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="کلمه عبور" />
                                                </div>
                                            </div>
                                            <div class="authentication-action mb-20">
                                                <div class="authentication-action-item">
                                                    <a href="forget-password.html">فراموشی رمز؟</a>
                                                </div>
                                                <div class="authentication-action-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="check3">
                                                        <label class="custom-control-label" for="check3">مرا به خاطر بسپار</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="authentication-btn">
                                                <button class="btn full-width btn-border mb-20">ورود</button>
                                                <button class="btn full-width"><i class="icofont-google-plus"></i>ورود با گوگل</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="authentication-details-item" data-authentication-details="2">
                                        <form>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="نام کاربری" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="ایمیل" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="کلمه عبور" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="تکرار دوباره کلمه عبور" />
                                                </div>
                                            </div>
                                            <div class="authentication-action mb-20">
                                                <div class="authentication-action-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="check4">
                                                        <label class="custom-control-label" for="check4">آیا با شرایط  و قوانین سایت موافق هستید ؟ <a href="privacy-policy.html">مشاهده قوانین سایت</a>.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="authentication-btn">
                                                <button class="btn full-width btn-border mb-20">ورود</button>
                                                <button class="btn full-width"><i class="icofont-google-plus"></i>ورود با گوگل</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-option-item navbar-option-search">
                        <button class="dropdown-toggle" type="button" id="search2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-loupe"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="search2">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="جستجو">
                                    <button><i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="navbar-option-item navbar-option-cart mobile-block">
                        <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                        <span class="option-badge">4</span>
                    </div>
                    <div class="navbar-option-item navbar-option-order mobile-block">
                        <a href="shops-grid.html" class="btn">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('site/assets/images/logo.png')}}" alt="logo" class="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('siteHome')}}" class="nav-link dropdown-toggle active">صفجه اصلی</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">صفجه اصلی شماره 1 با اسلایدر</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">صفجه اصلی شماره 2 با اسلایدر</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">صفجه اصلی شماره 3 با اسلایدر</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-1-without-revolution.html" class="nav-link">صفحه اصلی شماره 4 بدون اسلایدر</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2-without-revolution.html" class="nav-link">صفحه اصلی شماره 5 بدون اسلایدر</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3-without-revolution.html" class="nav-link">صفحه اصلی شماره 6 بدون اسلایدر</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('shop')}}" class="nav-link">منو</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">صفحات</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about-us.html" class="nav-link">درباره ما</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faqs.html" class="nav-link">پرسش و پاسخ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="our-history.html" class="nav-link">تاریخچه</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">خدمات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">تیم ما</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="our-team.html" class="nav-link">تیم ما</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="team-details.html" class="nav-link">جزییات تیم</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">رستوران</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="careers.html" class="nav-link">مشاغل</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="deals.html" class="nav-link">معاملات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="reservation.html" class="nav-link">رزرو</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="catering.html" class="nav-link">پذیرایی</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">فروشگاه</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="shops-grid.html" class="nav-link">لیست محصولات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="shop-details.html" class="nav-link">جزییات محصول</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="cart.html" class="nav-link">سبد خرید</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="wishlist.html" class="nav-link">علاقه مندی ها</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="checkout.html" class="nav-link">صفحه پرداخت</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="tracking-order.html" class="nav-link">پیگیری سفارشات</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="my-account.html" class="nav-link">پنل کاربری</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link">نظرات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">صفحات دیگر</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="terms-conditions.html" class="nav-link">حریم خصوصی</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="privacy-policy.html" class="nav-link">مشاهده قوانین سایت</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="search-page.html" class="nav-link">صفحه جستجو</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="forget-password.html" class="nav-link">فراموشی رمز</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">به زودی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">ارور 404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog')}}" class="nav-link dropdown-toggle">وبلاگ</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blogs-grid-without-sidebar.html" class="nav-link">لیست وبلاگ </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blogs-list-with-sidebar.html" class="nav-link">لیست وبلاگ 2 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blogs-3.html" class="nav-link">لیست وبلاگ 3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">جزییات وبلاگ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact-us.html" class="nav-link">تماس با ما</a>
                                </li>
                            </ul>
                        </div>

                        <div class="navbar-option d-flex align-items-center">
                            <div class="navbar-option-item navbar-option-authentication">
                                <button class="navbar-authentication-button"  type="button" id="auth1" data-bs-toggle="dropdown" aria-haspopup="true"><i class="flaticon-add-user"></i></button>
                                <div class="authentication-box dropdown-menu" aria-labelledby="auth1">
                                    <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                                    <div class="authentication-body">
                                        <div class="authentication-tab">
                                            <a  href="{{route('login')}}" class="btn-info" data-authentication-tab="1">ورود</a>
                                            <a href="{{route('register')}}" class="btn-info" data-authentication-tab="2">ثبت نام</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-option-item navbar-option-search">
                                <button class="dropdown-toggle" type="button" id="search1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-loupe"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="search1">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="جستجو">
                                            <button><i class="flaticon-loupe"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="navbar-option-item navbar-option-cart">
                                <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                <span class="option-badge">{{\Cart::getContent()->count()}}</span>
                            </div>
                            <div class="navbar-option-item navbar-option-order">
                                <a href="shops-grid.html" class="btn text-nowrap">
                                    خرید آنلاین <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

