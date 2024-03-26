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
            <form method="post" action="{{route('admin.Products.update',['Product'=>$Product->id])}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group" >
                    <label>دسته را انتخا بکنید</label>
                    <select class="form-control"  name="Category_id" id="Category_id">
                        <option value="">انتخاب کنید</option>
                        @foreach($Categories as $Category)
                            <option value="{{$Category->id}}" {{$Category->id==$Product->category_id?'selected':''}}>{{$Category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" >
                    <label for="name">نام محصول</label>
                    <input type="text" name="name" value="{{$Product->name}}" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="body">توضیحات محصول</label>
                    <textarea rows="8" name="body" id="name" class="form-control" style="border: 30px ;background-color:lightskyblue" >{{$Product->body}}</textarea>
                </div>
                <div class="form-group" >
                    <label for="price">قیمت محصول</label>
                    <input type="text" name="price" value="{{$Product->price}}" id="price" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="sale_price">قیمت ویژه محصول</label>
                    <input type="text" name="sale_price" value="{{$Product->sale_price}}" id="sale_price" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group" >
                    <label for="image">عکس محصول</label>
                    <img src="{{asset('uploads/'.$Product->image)}}">
                    <input  name="image" id="image" type="file" class="form-control" style="border: 30px ;background-color:lightskyblue">
                </div>
                <div class="form-group">
                    <label for="is_active">وضعیت</label>
                    <select name="is_active" id="is_active">
                        <option value="1" {{$Product->is_active?'selected':''}}>فعال</option>
                        <option value="0" {{$Product->is_active?'':'selected'}}>غیر فعال</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-default">ویرایش دسته</button>
            </form>
        </div>

    </div>
</div>
@endsection
