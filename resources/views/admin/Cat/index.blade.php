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
                            <th>نمایش</th>
                            <th>حذف</th>
                            <th>ویرایش</th>
                        </tr>
                        @foreach($Categories as $Category)
                            <tr>
                                <td>{{$Category->id}}</td>
                                <td>{{$Category->name}}</td>
                                <td><a href="{{route('admin.Categories.show',['Category'=>$Category->id])}}">@</a></td>
                                <form method="post" action="{{route('admin.Categories.destroy',['Category'=>$Category->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit">X</button></td>
                                </form>
                                <td><a href="{{route('admin.Categories.edit',['Category'=>$Category->id])}}">#</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
