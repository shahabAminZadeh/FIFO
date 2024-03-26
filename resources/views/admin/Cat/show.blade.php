@extends('admin.master')
@section('dashbord')
<div class="container-fluid bg_white">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form style="margin: 30px">
                <div class="form-group" >
                    <label> دسته</label>
                    <input name="name" class="form-control" readonly value="{{$Category->name}}" style="border: 30px ;background-color:lightskyblue">
                </div>
                <a href="{{route('admin.Categories.index')}}"></a>
                <button type="submit" class="btn btn-default">بازگشت</button>
            </form>
        </div>

    </div>
</div>
@endsection
