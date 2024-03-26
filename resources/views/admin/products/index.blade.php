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
                            <th>دسته</th>
                            <th>قیمت</th>
                            <th>قیمت ویژه</th>
                            <th>وضعیت</th>
                            <th>تصویر</th>
                            <th>نمایش</th>
                            <th>حذف</th>
                            <th>ویرایش</th>
                        </tr>
                        @foreach($Products as $Product)
                            <tr>
                                <td>{{$Product->id}}</td>
                                <td>{{$Product->name}}</td>
                                <td>{{$Product->Catigory->name}}</td>
                                <td>{{$Product->price}}</td>
                                <td>{{$Product->sale_price}}</td>
                                <td>{{$Product->is_active?'فعال':'غیرفعال'}}</td>
                                <td><img src="{{asset('/uploads/'.$Product->image)}}"></td>
                                <td><a style="width: 10px" href="{{route('admin.Products.show',['Product'=>$Product->id])}}">@</a></td>
                                <form method="post" action="{{route('admin.Products.destroy',['Product'=>$Product->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit">X</button></td>
                                </form>
                                <td><a href="{{route('admin.Products.edit',['Product'=>$Product->id])}}">#</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
