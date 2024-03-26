@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 style="margin: 30px">کپون ها</h3>
            @foreach($errors->all() as $error)
                <ul>
                    <li class="text-danger">
                        {{$error}}
                    </li>
                </ul>
            @endforeach
            <form method="post" action="{{route('admin.Coupons.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label for="name">نام </label>
                    <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="code">کد</label>
                    <input type="text " value="{{old('code')}}"  name="code" id="code" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label>نوع تخفیف را انتخاب کنید</label>
                    <select class="form-control"  name="type" id="type">
                        <option value="">انتخاب کنید</option>
                        <option value="percent">تخفیف درصدی</option>
                        <option value="amount">تخفیف مبلغی</option>
                    </select>
                </div>
                <div class="form-group" >
                    <label for="amount">مبلغ</label>
                    <input type="text" value="{{old('amount')}}"  name="amount" id="amount" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="Percent">درصد</label>
                    <input type="text" value="{{old('percent')}}"  name="percent" id="Percent" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="max_amount">سقف مبلغ درصدی</label>
                    <input value="{{old('max_amount')}}"   name="max_amount" id="image" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group">
                    <label class="form-group">تاریخ پایان</label>
                    <div class="input-group">
                        <div class="input-group-prepend order-2">
                            <span class="input-group-text" id="expire_span">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="expired_at" id="expire_input">
                    </div>
                </div>
                <div class="form-group" >
                    <label for="body">توضیحات </label>
                    <textarea rows="8"  name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{old('body')}}</textarea>
                </div>
                <button type="submit" class="btn btn-default">ثبت محصول</button>
            </form>
        </div>

    </div>

</div>
@endsection
@section('script')
<script>
    $('#expire_span').MdPersianDateTimePicker({
        targetTextSelector: '#expire_input',

    });
@endsection
