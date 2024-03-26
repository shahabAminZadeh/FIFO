@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <div class="form-group" >
                    <label for="name">نام محصول</label>
                    <input type="text" value="{{$Product->name}}" name="name" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group">
                    <label>دسته</label>
                    <input  class="form-control" value="{{$Product->Catigory->name}}" readonly>
                </div>
                <div class="form-group" >
                    <label for="body">توضیحات محصول</label>
                    <textarea rows="8" name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{$Product->body}}</textarea>
                </div>
                <div class="form-group" >
                    <label for="price">قیمت محصول</label>
                    <input type="text" name="price" id="price" value="{{$Product->price}}" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="sale_price">قیمت ویژه محصول</label>
                    <input type="text" name="sale_price" id="sale_price" value="{{$Product->sale_price}}" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="image">عکس محصول</label>
                    <img width="100px" src="{{asset('/uploads/'.$Product->image)}}">
                </div>
                <div class="form-group" >
                    <label for="image">وضعیت محصول</label>
                    <input class="form-control" readonly value="{{$Product->is_active?'فعال':'غیرفعال'}}">
                </div>
                <a href="{{route('admin.Products.index')}}">
                <button  class="btn btn-dark">برگشت</button></a>
        </div>

    </div>
</div>
@endsection
