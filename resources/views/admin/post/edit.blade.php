@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>دسته جدید را ثبت کنید!!!</h1>
            @foreach($errors->all() as $error)
                <ul>
                    <li class="text-danger">
                        {{$error}}
                    </li>
                </ul>
            @endforeach
            <form method="post" action="{{route('admin.Post.update',['Post'=>$Post->id])}}" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group" >
                    <label for="title">نام پست</label>
                    <input type="text" name="title" value="{{$Post->title}}" id="title" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="writer">قیمت پست</label>
                    <input type="text" name="writer" value="{{$Post->writer}}" id="writer" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="body">توضیحات پست</label>
                    <textarea rows="8" name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{$Post->body}}</textarea>
                </div>
                <div class="form-group" >
                    <label for="image">عکس پست</label>
                    <img style="width: 25px" src="{{asset('uploads/'.$Post->image)}}">
                    <input  name="image" id="image" type="file" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <button type="submit" class="btn btn-default">ویرایش پست</button>
            </form>
        </div>
    </div>
</div>
@endsection
