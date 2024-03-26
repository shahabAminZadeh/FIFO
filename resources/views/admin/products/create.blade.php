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
            <form method="post" action="{{route('admin.Products.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label>دسته را انتخا بکنید</label>
                    <select class="form-control"  name="Category_id" id="Category_id">
                        <option value="">انتخاب کنید</option>
                        @foreach($Categories as $Category)
                        <option value="{{$Category->id}}">{{$Category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" >
                    <label for="name">نام محصول</label>
                    <input type="text" name="name" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="body">توضیحات محصول</label>
                    <textarea rows="8" name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" ></textarea>
                </div>
                <div class="form-group" >
                    <label for="price">قیمت محصول</label>
                    <input type="text" name="price" id="price" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="sale_price">قیمت ویژه محصول</label>
                    <input type="text" name="sale_price" id="sale_price" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="image">عکس محصول</label>
                    <input  name="image" id="image" type="file" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group">
                    <label for="is_active">وضعیت</label>
                    <select name="is_active" id="is_active">
                        <option value="1">فعال</option>
                        <option value="0">غیر فعال</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">ثبت محصول</button>
                <button type="reset" class="btn btn-default">انصراف</button>
            </form>
        </div>

    </div>
</div>
@endsection
