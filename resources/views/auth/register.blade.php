@extends('site.master')
@section('main_content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 m-2" >
            <div class="text-dark justify-content-center">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
                <form method="post" action="{{route('register')}}" style="margin: 100px">
                    @csrf
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input name="name" type="text" class="form-control text-dark" placeholder="نام کاربری" />
                        </div>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input name="email" type="email" class="form-control text-dark" placeholder="ایمیل" />
                        </div>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input name="password" type="password" class="form-control text-dark" placeholder="کلمه عبور" />
                        </div>
                    </div>
                    <div class="form-group mb-20">
                        <div class="input-group">
                            <input name="password_confirmation" type="password" class="form-control text-dark" placeholder="تکرار دوباره کلمه عبور" />
                        </div>
                    </div>
                    <div class="authentication-action mb-20">
                        <div class="authentication-action-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input text-dark" id="check4">
                                <label class="custom-control-label" for="check4">آیا با شرایط  و قوانین سایت موافق هستید ؟ <a href="privacy-policy.html">مشاهده قوانین سایت</a>.</label>
                            </div>
                        </div>
                    </div>
                    <div class="authentication-btn">
                        <button name="register" class="btn full-width btn-border mb-20">ورود</button>
                        <button class="btn full-width"><i class="icofont-google-plus text-dark"></i>ورود با گوگل</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

@endsection
