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

                </div>
                <div class="header-page-shape-item">
                    <img src="{{asset('site/assets/images/header-shape-1.png')}}" alt="shape">
                </div>
                <div class="header-page-shape-item">
                </div>
            </div>
            <div class="container">
                <div class="header-page-content">
                    <h1>جزییات محصول</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">صفجه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">جزییات محصول</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="product-details-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                    <div class="product-details-item">
                        <div class="product-details-slider">
                            <div class="product-details-for popup-gallery">
                                <div class="product-for-item">
                                    <a href="{{asset('uploads/'.$Product->image)}}"><img src="{{asset('uploads/'.$Product->image)}}" alt="product"></a>
                                </div>
                                <div class="product-for-item">
                                    <a href="{{asset('uploads/'.$Product->image)}}"><img src="{{asset('uploads/'.$Product->image)}}" alt="product"></a>
                                </div>
                                <div class="product-for-item">
                                    <a href="{{asset('uploads/'.$Product->image)}}"><img src="{{asset('uploads/'.$Product->image)}}" alt="product"></a>
                                </div>
                            </div>

                            <div class="product-details-nav">
                                <div class="product-nav-item">
                                    <div class="product-nav-item-inner">
                                        <img src="{{asset('uploads/'.$Product->image)}}" alt="product">
                                    </div>
                                </div>
                                <div class="product-nav-item">
                                    <div class="product-nav-item-inner">
                                        <img src="{{asset('uploads/'.$Product->image)}}" alt="product">
                                    </div>
                                </div>
                                <div class="product-nav-item">
                                    <div class="product-nav-item-inner">
                                        <img src="{{asset('uploads/'.$Product->image)}}" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
                    <div class="product-details-item">
                        <div class="product-details-caption">
                            <div class="product-status product-status-danger mb-20">
                                جدید
                            </div>
                            <h3 class="mb-20 color-white">{{$Product->name}}</h3>
                            <h4 class="mb-20 product-id">{{$Product->id}}</h4>
                            <div class="review-star mb-20">
                                <ul>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-2"></i></li>
                                </ul>
                                <p>)امتیاز{{$Product->name}})</p>
                            </div>
                            <div class="product-details-price mb-20">
                                <h4>قیمت:{{$Product->price}}</h4>
                            </div>
                            <div class="product-details-para mb-20">
                                <p>قیمت ویژه:{{$Product->sale_price}}</p>
                            </div>
                            <div class="product-action-info mb-20">
                                <h4>دسته بندی</h4>

                                <ul class="product-size-list">
                                    <li class="active">{{$Product->Catigory->name}}</li>
                                </ul>
                            </div>
                            <div class="product-action-info mb-20">
                                <div class="d-flex flex-wrap align-items-center
                                    product-quantity">
                                    <button class="btn btn-icon product-quantity-item">
                                        خرید آنلاین
                                        <i class="flaticon-shopping-cart-black-shape"></i>
                                    </button>
                                    <div class="cart-quantity product-quantity-item">
                                        <button class="qu-btn dec">-</button>
                                        <input type="text" class="qu-input" value="1">
                                        <button class="qu-btn inc">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-action-info">
                                <div class="product-add-wishlist">
                                    <a href="#"><i class="flaticon-heart"></i>علاقه مندی ها</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-tab below-border">
                <ul class="product-details-tab-list">
                    <li class="active" data-product-tab-list="1">توضیحات</li>
                    <li data-product-tab-list="2">نطرات <span>{{$Comments->count()}}</span></li>
                </ul>
                <div class="product-tab-information">
                    <div class="product-tab-information-item active" data-product-details-tab="1">
                        <div class="product-description mb-30">
                                    <p>{{$Product->body}}
                                </p>
                            <p>{{$Product->body}}
                                .</p>
                        </div>
                    </div>
                    <div class="product-tab-information-item" data-product-details-tab="2">
                        <div class="product-review-list">
                            @foreach($Comments as $Comment)
                            <div class="testimonial-carousel-item bg-main product-review-item">
                                <p class="carousel-para">{{$Comment->body}}</p>
                                <div class="carousel-info-grid">
                                    <div class="carousel-thumb">
                                        <img src="assets/images/client-1.jpg" alt="client">
                                    </div>
                                    <div class="carousel-info text-end">
                                        <div class="review-star">
                                            <ul class="justify-content-end">
                                                <li class="full-star"><i class="flaticon-star-1"></i></li>
                                                <li class="full-star"><i class="flaticon-star-1"></i></li>
                                                <li class="full-star"><i class="flaticon-star-1"></i></li>
                                                <li class="full-star"><i class="flaticon-star-1"></i></li>
                                                <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                        </div>
                                        <h3 class="carousel-name">{{$Comment->user->name}}</h3>
                                        <h4 class="carousel-designation">مشتری ویژه</h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="product-review-area">
                            <div class="sub-section-title">
                                <h3 class="color-white">اضافه کردن نظر</h3>
                            </div>
                            <form method="post" action="{{route('site.comments.store')}}">
                                @csrf
                                <div class="comment-input-area">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <textarea name="body" class="form-control" id="body" rows="5" placeholder="اضافه کردن نظر*"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox mb-20">
                                                <input type="checkbox" class="custom-control-input" id="review1">
                                                <label  class="custom-control-label" for="review1">یک متن مرتبط در زمینه عنوان مورد نظر را در این بخش می نویسیم تا مفهوم کلیه بخش مورد نظر را به کاربر برسانیم .این بخش برای آگاهی کاربر از بخش مربوطه بسیار مهم است.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <input type="hidden" name="products_id" value="{{$Product->id}}">
                                            <button  type="submit" class="btn full-width">ارسال نظر </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-product mt-50">
                <div class="sub-section-title">
                    <h3 class="color-white">محصولات مشابه</h3>
                </div>
                <div class="receipe-grid receipe-grid-three">
                    @foreach($similarProducts as $similarProduct)
                    <div class="receipe-item receipe-item-black pb-30">
                        <div class="receipe-item-inner">
                            <div class="receipe-image">
                                <img src="{{asset('uploads/'.$similarProduct->image)}}" alt="receipe">
                            </div>
                            <div class="receipe-content">
                                <div class="receipe-info">
                                    <h3><a href="shop-details.html">{{$similarProduct->name}}</a></h3>
                                    <h4>{{$similarProduct->sale_price}}<del>{{$similarProduct->price}}</del></h4>
                                </div>
                                <div class="receipe-cart receipe-cart-main">
                                    <a href="#">
                                        <i class="flaticon-supermarket-basket"></i>
                                        <i class="flaticon-supermarket-basket"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
        <div class="container">
            <div class="subscribe-grid">
                <div class="subscribe-item">
                    <div class="section-title text-center text-lg-start m-0">
                        <h2 class="color-white">عضویت در خبرنامه </h2>
                        <p>با عضویت در خبرنامه از اخبار و مطالب ما با خبر شوید.</p>
                    </div>
                </div>
                <div class="subscribe-item">
                    <div class="subscribe-form">
                        <form class="newsletter-form newsletter-form-white" data-bs-toggle="validator">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" id="emails" class="form-control" placeholder="آدرس ایمیل را وارد کنید*" name="EMAIL" required autocomplete="off">
                                </div>
                                <button class="btn btn-yellow" type="submit">عضویت <i class="flaticon-right-arrow-sketch-1"></i></button>
                            </div>
                            <div id="validator-newsletter" class="form-result color-white"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
