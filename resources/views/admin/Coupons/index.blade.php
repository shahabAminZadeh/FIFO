@extends('admin.master')
@section('dashbord')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <tr>
                            <th>شماره</th>
                            <th>نام</th>
                            <th>کد</th>
                            <th>نوع</th>
                            <th>تاریخ پایان</th>
                            <th>نمایش</th>
                            <th>حذف</th>
                            <th>ویرایش</th>
                        </tr>
                        @foreach($Coupons as $Coupon)
                            <tr>
                                <td>{{$Coupon->id}}</td>
                                <td>{{$Coupon->name}}</td>
                                <td>{{$Coupon->code}}</td>
                                <td>{{$Coupon->type}}</td>
                              <td>{{$Coupon->expired_at}}</td>
                                <td><a style="width: 10px" href="{{route('admin.Coupons.show',['Coupon'=>$Coupon->id])}}">@</a></td>
                                <form method="post" action="{{route('admin.Coupons.destroy',['Coupon'=>$Coupon->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit">X</button></td>
                                </form>
                                <td><a href="{{route('admin.Coupons.edit',['Coupon'=>$Coupon->id])}}">#</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection





