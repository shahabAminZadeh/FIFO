@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>کپون جدید را ثبت کنید!!!</h1>
            @foreach($errors->all() as $error)
                <ul>
                    <li class="text-danger">
                        {{$error}}
                    </li>
                </ul>
            @endforeach
            <form method="post" action="{{route('admin.Coupons.update',['Coupon'=>$Coupon->id])}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group" >
                    <label for="name">نام </label>
                    <input type="text" name="name" value="{{$Coupon->name}}" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="code">کد</label>
                    <input type="text "  value="{{$Coupon->code}}"  name="code" id="code" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label>نوع تخفیف را انتخاب کنید</label>
                    <select class="form-control"  name="type" id="type">
                        <option value="">انتخاب کنید</option>
                        <option value="amount" {{$Coupon->type?'selected':''}}>مبلغی</option>
                        <option value="percent" {{$Coupon->type?'':'selected'}}>درصدی</option>
                    </select>
                </div>
                <div class="form-group" >
                    <label for="amount">مبلغ</label>
                    <input type="text" value="{{$Coupon->amount}}"  name="amount" id="amount" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="Percent">درصد</label>
                    <input type="text" value="{{$Coupon->percent}}"  name="percent" id="Percent" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="max_amount">سقف مبلغ درصدی</label>
                    <input value="{{$Coupon->max_amount}}"   name="max_amount" id="image" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>

                <div class="form-group" >
                    <label for="body">توضیحات </label>
                    <textarea rows="8"  name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{$Coupon->body}}}</textarea>
                </div>
                <button type="submit" class="btn btn-default">ثبت محصول</button>
            </form>
        </div>
        </div>

    </div>
</div>
@endsection
