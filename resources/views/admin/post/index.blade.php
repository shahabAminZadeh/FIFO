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
                            <th>نویسنده پست</th>
                            <th>تصویر</th>
                            <th>نمایش</th>
                            <th>حذف</th>
                            <th>ویرایش</th>
                        </tr>
                        @foreach($Posts as $Post)
                            <tr>
                                <td>{{$Post->id}}</td>
                                <td>{{$Post->title}}</td>
                                <td>{{$Post->writer}}</td>
                                <td><img style="width: 40px" src="{{asset('/uploads/'.$Post->image)}}"></td>
                                <td><a style="width: 10px" href="{{route('admin.Post.show',['Post'=>$Post->id])}}">@</a></td>
                                <form method="post" action="{{route('admin.Post.destroy',['Post'=>$Post->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit">X</button></td>
                                </form>
                                <td><a href="{{route('admin.Post.edit',['Post'=>$Post->id])}}">#</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
