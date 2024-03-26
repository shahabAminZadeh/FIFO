@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <div class="form-group" >
                    <label for="title">نام پست</label>
                    <input type="text" value="{{$Post->title}}" name="title" id="title" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
            <div class="form-group" >
                <label for="name">نویسنده پست</label>
                <input type="text" value="{{$Post->writer}}" name="name" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
            </div>
                <div class="form-group" >
                    <label for="body">توضیحات پست</label>
                    <textarea rows="8" name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{$Post->body}}</textarea>
                </div>
                <div class="form-group" >
                    <label for="image">عکس پست</label>
                    <img width="100px" src="{{asset('/uploads/'.$Post->image)}}">
                </div>
                <a href="{{route('admin.Post.index')}}">
                <button  class="btn btn-dark">برگشت</button></a>
        </div>

    </div>
</div>
@endsection
