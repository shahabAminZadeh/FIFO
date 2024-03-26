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
                    <h1>صفحه پرداخت</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">صفجه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="shops-grid.html">فروشگاه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">صفحه پرداخت</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="checkout-section pt-100 pb-70 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-8 pb-30">
                    <div class="checkout-item">
                        <div class="sub-section-title">
                            <h3 class="color-white">پرکردن اطلاعات </h3>
                        </div>
                        <div class="checkout-form">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="name" class="form-control" required placeholder="نام *" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="name" class="form-control" required placeholder="نام خانوادگی*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <select name="country" class="form-control">
                                                    <option value="1">کشور شما*</option>
                                                    <option value="2">ایران</option>
                                                    <option value="3">آمریکا</option>
                                                    <option value="4">آلمان</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="street" class="form-control" placeholder="شهر" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <select name="country" class="form-control">
                                                    <option value="1">تهران*</option>
                                                    <option value="2">همدان</option>
                                                    <option value="3">اهواز</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <select name="country" class="form-control">
                                                    <option value="1">موقعت*</option>
                                                    <option value="2">شمالی</option>
                                                    <option value="3">جنوبی</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="address" class="form-control" required placeholder="آدرس*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="phone" class="form-control" required placeholder="شماره تماس*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control" required placeholder="ایمیل*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group input-group-textarea">
                                                <textarea name="order" class="form-control" rows="5" placeholder="یادداشت*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn full-width">رزرو غذا</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-4 pb-30">
                    <div class="checkout-item">
                        <div class="checkout-details cart-details mb-30">
                            <h3 class="cart-details-title color-white">جدول خرید</h3>
                            <div class="cart-total-box">
                                @foreach(\Cart::getContent() as $Cart)
                                <div class="cart-total-item pt-0">
                                    <h4 class="color-main">{{$Cart->name}}</h4>
                                    <p>{{$Cart->price}}</p>
                                </div>
                                @endforeach
                                @if(session()->has('coupons'))
                                <div class="cart-total-item cart-total-bold">
                                    <h4 class="color-white">مبلغ تخفیف</h4>
                                    <p>{{number_format(session()->get('coupons'.'amount'))}}</p>
                                </div>
                                        <div class="cart-total-item cart-total-bold">
                                            <h4 class="color-white">هزینه تحویل </h4>
                                            <p> تومان 10000</p>
                                        </div>
                                    @endif
                                    <div class="cart-total-item cart-total-bold">
                                        <h4 class="color-white">جمع هزینه</h4>
                                        @if(session()->has('coupons'))
                                        <p>{{number_format(\Cart::getTotal()-session()->get('coupons'.'amount'))+10000}}</p>
                                        @else
                                            <p>{{number_format(\Cart::getTotal()+10000)}}</p>
                                        @endif
                                    </div>
                            </div>
                        </div>
                        <div class="checkout-payment-area">
                            <h3 class="color-white cart-details-title">روش های خرید</h3>
                            <div class="checkout-form">
                                <form method="post" action="{{route('site.Payment')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="cart-check-box">
                                                <input  type="checkbox" value="Zar" name="payment" id="checkout1">
                                                <label for="checkout1">درگاه پرداخت زرین پال</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="cart-check-box">
                                                <input type="checkbox" name="payment" value="pay" id="checkout2">
                                                <label for="checkout2">درکاه پرداخت pay</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkout4">
                                                <label class="custom-control-label" for="checkout4">اینجانب با تمامی قوانین وشرایط سایت موافقم <a href="terms-conditions.html">حریم خصوصی</a> <span class="color-main">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn full-width">رزرو غذا</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
