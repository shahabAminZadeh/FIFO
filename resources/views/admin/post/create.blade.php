@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 style="margin: 30px">محصولات</h3>
            @foreach($errors->all() as $error)
                <ul>
                    <li class="text-danger">
                        {{$error}}
                    </li>
                </ul>
            @endforeach
            <form method="post" action="{{route('admin.Post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label for="name">نام </label>
                    <input type="text" name="title" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="body">بدنه</label>
                    <textarea rows="8" name="writer" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" ></textarea>
                </div>
                <div class="form-group" >
                    <label for="price">نویسنده </label>
                    <input type="text" name="body" id="price" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="image">عکس محصول</label>
                    <input  name="image" id="image" type="file" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <button type="submit" class="btn btn-default">ثبت محصول</button>
                <button type="reset" class="btn btn-default">انصراف</button>
            </form>
        </div>

    </div>
</div>
@endsection
