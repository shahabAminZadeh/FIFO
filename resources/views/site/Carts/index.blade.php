
@extends('site.master')
@section('main_content')


    <section class="cart-section pt-100 pb-70 bg-black">
        <form method="post" action="{{route('Cart.update')}}" class="container">
            @csrf
            @method('put')
            <div class="cart-table cart-table-dark">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>نام محصول</th>
                        <th>شناسه</th>
                        <th>قیمت تکی</th>
                        <th>تعدا</th>
                        <th>مجموع هزینه </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\Cart::getContent() as $Cart)
                    <tr>
                        <td class="cancel"><a href="{{route('Cart.remove',['Id'=>$Cart->id])}}"><i class='flaticon-cancel'></i></a></td>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="{{asset('/uploads/'.$Cart->associatedModel->image)}}" alt="product">
                                </div>
                            </div>
                        </td>
                        <td class="td-product-name">{{$Cart->name}}</td>
                        <td>{{$Cart->Id}}</td>
                        <td>{{$Cart->price}}</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" name="quantity[{{$Cart->id}}]" value="{{$Cart->quantity}}">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td class="td-total-price">{{$Cart->price * $Cart->quantity}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-between align-items-center mt-30">
                <div class="col-sm-12 col-md-7 col-lg-5">
                    <div class="cart-coupon cart-info-item">
                        <form method="post" action="{{route('Coupon.check')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="code" class="form-control" placeholder="کد تخفیف را وارد کنید ">
                                <button type="submit" class="btn">افزودن کد تخفیف</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="margin-top: 50px" class="col-sm-6 col-md-2 col-lg-3">
                    <div class="cart-update cart-info-item">
                        <button type="submit" href="#" class="btn full-width">
                            بروزرسانی کارت
                        </button>
                    </div>
                </div>
                <div style="margin-top: 50px" class="col-sm-6 col-md-2 col-lg-3">
                    <div class="cart-update cart-info-item">
                        <a type="submit" href="{{route('Cart.Clear')}}" class="btn full-width">
                            خالی کردن سبد
                        </a>
                    </div>
                </div>
            </div>

        </form>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-6 pb-30 offset-lg-3 offset-md-2">
                    <div class="cart-details mt-20">
                        <h3 class="cart-details-title color-white">مجموع هزینه ها</h3>
                        <div class="cart-total-box">
                            <div class="cart-total-item cart-total-bold">
                                <h4 class="color-white">مجموع</h4>
                                <p>{{number_format(\Cart::getTotal())}}</p>
                            </div>
                            <div class="cart-total-item cart-total-bold">
                                <h4 class="color-white">مبلغ کپون</h4>
                                <p>{{number_format(session()->get('coupons'.'amount'))}}</p>
                            </div>
                            <div class="cart-total-item">
                                <h4>حمل و نقل</h4>
                                <p>10 هزار</p>
                            </div>

                            <div class="cart-total-item cart-total-bold">
                                <h4 class="color-white">مجموع</h4>
                                <p>{{number_format(\Cart::getTotal()-session()->get('coupons'.'amount')+10000)}}</p>
                            </div>
                        </div>
                        <a href="{{route('CheckOut')}}" class="btn">ورود به صفحه پرداخت</a>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
