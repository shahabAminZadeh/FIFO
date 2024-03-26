@extends('site.master')
@section('main_content')

    <div class="header-bg header-bg-page">
        <div class="header-padding position-relative">
            <div class="header-page-shape">
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-1.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-2.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-3.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-1.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-4.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-1.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-3.png')}}" alt="shape">
                </div>
            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>{{$Post->title}}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">صفجه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="blogs-grid-without-sidebar.html">وبلاگ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">جزییات وبلاگ </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="blog-details-image">
                <img src="{{asset('uploads/'.$Post->image)}}" alt="blog">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 pb-30">
                    <article>
                        <div class="blog-details-content blog-details-content-dark">
                            <ul class="blog-entry">
                                <li class="blog-entry-main"><i class="flaticon-calendar-1"></i>{{$Post->created_at}}</li>
                                <li class="blog-entry-main"><i class="flaticon-man-user"></i>{{$Post->writer}}</li>
                            </ul>
                            <h2>                                {{$Post->title}}
                            </h2>
                            <p>
                                {{$Post->body}}

                                .</p>

                        </div>
                    </article>
                    <div class="single-blog-navigation single-blog-navigation-dark">
                        <div class="single-blog-navigation-item">
                            <p><i class="flaticon-left-arrow-1"></i>مطلف قبلی</p>
                            <div class="single-navigation-item-inner">
                                <div class="single-blog-navigation-thumb">
                                    <a href="#">
                                        <img src="assets/images/blog-nav-1.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="single-blog-navigation-content">
                                    <h3><a href="#">{{$Post->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-navigation-item single-blog-navigation-item-right">
                            <p><i class="flaticon-next"></i>خبر بعدی</p>
                            <div class="single-navigation-item-inner">
                                <div class="single-blog-navigation-thumb">
                                    <a href="#">
                                        <img src="assets/images/blog-nav-2.jpg" alt="blog">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-reply mt-30">
                        <div class="sub-section-title">
                            <h3 class="color-white">نظر (02)</h3>
                        </div>
                        <div class="blog-people-comment">

                            <div class="blog-people-comment-item">

                                <div class="blog-people-reply blog-people-comment-main">
                                    <div class="blog-people-comment-thumb">
                                        <img src="assets/images/comment-1.jpg" alt="people">
                                    </div>
                                    <div class="blog-people-comment-content">
                                        <div class="blog-comment-content-header">
                                            <div class="blog-people-comment-info">
                                                <h3 class="blog-post-name color-white">ادمین</h3>
                                                <h4 class="blog-post-date">فروردین 1400</h4>
                                            </div>
                                            <div class="blog-people-reply-action">
                                                <a href="#" class="btn">تکرار</a>
                                            </div>
                                        </div>
                                        <div class="blog-people-comment-para">
                                            <p>یک متن مرتبط در زمینه عنوان مورد نظر را در این بخش می نویسیم تا مفهوم کلیه بخش مورد نظر را به کاربر برسانیم .این بخش برای آگاهی کاربر از بخش مربوطه بسیار مهم است.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-people-reply blog-people-comment-reply">
                                    <div class="blog-people-comment-thumb">
                                        <img src="assets/images/comment-2.jpg" alt="people">
                                    </div>
                                    <div class="blog-people-comment-content">
                                        <div class="blog-comment-content-header">
                                            <div class="blog-people-comment-info">
                                                <h3 class="blog-post-name color-white">ناهید رستمیان</h3>
                                                <h4 class="blog-post-date">فروردین 1400</h4>
                                            </div>
                                            <div class="blog-people-reply-action">
                                                <a href="#" class="btn">پاسخ</a>
                                            </div>
                                        </div>
                                        <div class="blog-people-comment-para">
                                            <p>یک متن مرتبط در زمینه عنوان مورد نظر را در این بخش می نویسیم تا مفهوم کلیه بخش مورد نظر را به کاربر برسانیم .این بخش برای آگاهی کاربر از بخش مربوطه بسیار مهم است.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                        <div class="blog-people-comment">

                            <div class="blog-people-comment-item">

                                <div class="blog-people-reply blog-people-comment-main">
                                    <div class="blog-people-comment-thumb">
                                        <img src="assets/images/comment-1.jpg" alt="people">
                                    </div>
                                    <div class="blog-people-comment-content">
                                        <div class="blog-comment-content-header">
                                            <div class="blog-people-comment-info">
                                                <h3 class="blog-post-name color-white">ادمین</h3>
                                                <h4 class="blog-post-date">فروردین 1400</h4>
                                            </div>
                                            <div class="blog-people-reply-action">
                                                <a href="#" class="btn">تکرار</a>
                                            </div>
                                        </div>
                                        <div class="blog-people-comment-para">
                                            <p>یک متن مرتبط در زمینه عنوان مورد نظر را در این بخش می نویسیم تا مفهوم کلیه بخش مورد نظر را به کاربر برسانیم .این بخش برای آگاهی کاربر از بخش مربوطه بسیار مهم است.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-people-reply blog-people-comment-reply">
                                    <div class="blog-people-comment-thumb">
                                        <img src="assets/images/comment-2.jpg" alt="people">
                                    </div>
                                    <div class="blog-people-comment-content">
                                        <div class="blog-comment-content-header">
                                            <div class="blog-people-comment-info">
                                                <h3 class="blog-post-name color-white">ناهید رستمیان</h3>
                                                <h4 class="blog-post-date">فروردین 1400</h4>
                                            </div>
                                            <div class="blog-people-reply-action">
                                                <a href="#" class="btn">پاسخ</a>
                                            </div>
                                        </div>
                                        <div class="blog-people-comment-para">
                                            <p>یک متن مرتبط در زمینه عنوان مورد نظر را در این بخش می نویسیم تا مفهوم کلیه بخش مورد نظر را به کاربر برسانیم .این بخش برای آگاهی کاربر از بخش مربوطه بسیار مهم است.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="blog-comment-area mt-30">
                        <div class="comment-area">
                            <div class="sub-section-title">
                                <h3 class="color-white">نظر بگذارید</h3>
                            </div>
                            <div class="comment-input-area mt-30">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="نام*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" name="emal" id="emal" class="form-control" placeholder="ایمیل*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="نظر شما *"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox mb-20">
                                                <input type="checkbox" class="custom-control-input" id="post1">
                                                <label class="custom-control-label" for="post1">حریرم خصوصی و قوانین سایت را می پذیرم</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn full-width">ثبت نظرt</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-4 pb-30">
                    <div class="sidebar-item blog-author around-border bg-overlay-2">
                        <div class="blog-author-image">
                            <img src="assets/images/blog-author.png" alt="author">
                        </div>
                        <div class="blog-author-content">
                            <h3 class="color-white">پریسا قانع</h3>
                            <h4>مدیر ازشد</h4>
                            <p>یک متن مرتبط در زمینه عنوان مورد نظر را در این بخش می نویسیم تا مفهوم کلیه بخش مورد نظر را به کاربر برسانیم .این بخش برای آگاهی کاربر از بخش مربوطه بسیار مهم است.

                                .</p>
                        </div>
                    </div>
                    <div class="sidebar-item around-border sidebar-search">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="جستجو">
                                <button><i class="flaticon-loupe"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">دسته بندی</h3>
                        </div>
                        <ul class="sidebar-list">
                            @foreach($Categories as $Category)
                            <li>
                                <a href="#">{{$Category->name}} <span>({{$Category->Products->count()}})</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">آخرین اخبار</h3>
                        </div>
                        <div class="sidebar-recent-post">
                            <div class="sidebar-recent-item">
                                @foreach($news as $new)
                                <div class="sidebar-recent-thumb">
                                    <a href="#"><img src="{{asset('uploads/'.$new->image)}}" alt="blog"></a>
                                </div>
                                <div class="sidebar-recent-content">
                                    <h3><a href="#">{{$new->title}}</a></h3>
                                    <ul class="blog-entry">
                                        <li><i class="flaticon-calendar-1"></i>{{$new->created_at}}</li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-title">
                            <h3 class="color-white">برچسب ها</h3>
                        </div>
                        <ul class="blog-tag-list">
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>
                            <li><a href="#">عنوان برچسب</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
