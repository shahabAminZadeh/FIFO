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
            <form method="post" action="{{route('admin.Categories.update',['Category'=>$Category->id])}}">
                @method('put')
                @csrf
                <div class="form-group" >
                    <label>درج دسته</label>
                    <input name="name" class="form-control" style="border: 30px ;background-color:lightskyblue" value="{{$Category->name}}">
                </div>
                <button type="submit" class="btn btn-default">ویرایش دسته</button>
            </form>
        </div>

    </div>
</div>
@endsection
