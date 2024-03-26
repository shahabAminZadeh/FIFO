@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <div class="form-group" >
                    <label for="name">نام کپون</label>
                    <input type="text" value="{{$Coupon->name}}" name="name" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group">
                    <label>کد</label>
                    <input  class="form-control" value="{{$Coupon->code}}" readonly>
                </div>
                <div class="form-group" >
                    <label for="body">توضیحات کپون</label>
                    <textarea rows="8" name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{$Coupon->body}}</textarea>
                </div>
                <div class="form-group" >
                    <label for="price">نوع کوپون </label>
                    <input type="text" name="price" id="price" value="{{$Coupon->type}}" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="sale_price">مبلغ کپون</label>
                    <input type="text" name="sale_price" id="sale_price" value="{{$Coupon->amount}}" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
            <div class="form-group" >
                <label for="sale_price">سقف مبلغ کپون درصدی</label>
                <input type="text" name="sale_price" id="sale_price" value="{{$Coupon->max_amount}}" class="form-control" style="border: 30px ;background-color:lightskyblue">
            </div>
            <div class="form-group" >
                <label for="sale_price">درصد کپون</label>
                <input type="text" name="sale_price" id="sale_price" value="{{$Coupon->percent}}" class="form-control" style="border: 30px ;background-color:lightskyblue">
            </div>

            <a href="{{route('admin.Coupons.index')}}">
                <button  class="btn btn-dark">برگشت</button></a>
        </div>

    </div>
</div>
@endsection
