@extends('admin.master')
@section('dashbord')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <tr>
                            <th>شماره</th>
                            <th>نام نظر دهنده</th>
                            <th>شرح کامنت</th>
                            <th>وضعیت</th>
                            <th>حذف</th>
                            <th>نمایش</th>
                        </tr>
                        @foreach($Comments as $Comment)
                            <tr>
                                <td>{{$Comment->id}}</td>
                                <td>{{$Comment->User->name}}</td>
                                <td>{{$Comment->body}}</td>
                                <td><a class="btn {{$Comment->is_active?'btn-success':'btn-danger'}}" href="{{route('comments.is_active',['Comment'=>$Comment->id])}}">{{$Comment->is_active?'فعال':'غیر فعال'}}</a></td>
                                <form>
                                    @csrf
                                    @method('DELETE')
                                    <td><button type="submit">X</button></td>
                                </form>
                                <td><a style="width: 10px" href="{{route('admin.comment.show',['comment'=>$Comment->id])}}">@</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
