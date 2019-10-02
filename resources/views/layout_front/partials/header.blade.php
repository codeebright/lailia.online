    <section class="container-fluid header p-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brandd ml-5" href="#"><span class="logo fa fa-home"></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse custom-ml mr-5" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link hvr-underline-from-center" href="#">خانه<span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{route('hostel.list')}}">خابگاه</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" data-toggle="modal" data-target="#exampleModal"
                           href="#">ثبت معامله<span class="pipe-line mr-2 ml-2" style="color: #ffffff">/</span>ورود</a>
                    </li><!-- Example single danger button -->

                </ul>
            </div>
        </nav>
    </section>
    <!-- Modal -->
    <div class="modal fade custom-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: none">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <!--1st-->
                                <div id="first" class="" style="margin-top: 11rem; margin-bottom: 16rem">
                                    <div class="">
                                        <div class="row" style="">

                                            <div class="col-md-12">
                                                <button id="btn-login" type="button"
                                                        class="btn btn-outline-dark btn-lg btn-block">
                                                    ورود به
                                                    حساب
                                                </button>
                                                <button id="btn-register" type="button"
                                                        class="btn btn-outline-dark btn-lg btn-block mt-2">ثبت
                                                    لیلیه
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--next2-->
                                <div id="second" style="height: 33.5rem;">
                                    <div class="card-body">

                                        <div class="col-md-12">
                                            <h5 class="text-center">برای ثبت لیلیه حساب ایجاد نماید.
                                                @if(count($errors) > 0)
                                                    <div class="row">
                                                        <div class="error">
                                                            <ul>
                                                                @foreach($errors->all() as $error)
                                                                    <li>{{$error}}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="" id="error_div">

                                        </div>
                                        <form method="POST" id="login_form" action="{{ route('registration.create') }}">
                                            @csrf
                                            <div class="" style="margin-top: 6rem">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="" type="number"
                                                               class="form-control modal-input" name="phone"
                                                               value="{{ Request::old('phone') }}"
                                                               required placeholder="نمبر موبایل تان را وارید نمایید..."
                                                               autocomplete="email" autofocus>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password"
                                                               class="form-control modal-input" name="password"
                                                               value="{{ Request::old('password') }}"
                                                               required placeholder="پسورد خود را وارید کنید"
                                                               autocomplete="current-password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember"
                                                                   id="remember">

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('مرا به خاطر بسپار') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-2">
                                                        <div class="row d-flex justify-content-center mt-4">
                                                            <div class="col-md-6 d-flex justify-content-center">
                                                                <button type="button" onclick="login('{{ route('hostel.index') }}','login_form','error_div')"
                                                                        class="btn btn-lg btn-outline-dark">{{ __('ورود') }}
                                                                    <span class="fa fa-angle-left ml-5"></span></button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            {{--jor tayar--}}
                                            <div class="d-flex justify-content-center">
                                                <div class="ham text-center">
                                                    <div class="col-md-12">

                                                            <a class="btn btn-link lr-4 pb-0" style="text-decoration: underline !important;" href="">
                                                                رمز عبور تان را فراموش کرده اید؟
                                                            </a>

                                                    </div>
                                                    <div class="col-md-12" style="">
                                                        <a href="#" class="" id="login-register" style="text-decoration: underline !important;">ثبت لیلیه</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--next3-->
                                <div id="third" class="" style="height: 33.5rem;">
                                    <div class="card-body">

                                        <div class="col-md-12">
                                            <h5 class="text-center">برای ثبت لیلیه حساب ایجاد نماید.
                                            @if(count($errors) > 0)
                                                <div class="row">
                                                    <div class="error">
                                                        <ul>
                                                            @foreach($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                            </h5>


                                        </div>
                                        <form method="POST" action="{{ route('registration.store') }}" style="margin-top: 3rem;">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="name" type="text"
                                                           class="form-control modal-input" name="name"
                                                           value="{{ Request::old('name') }}"
                                                           placeholder="نام..." required
                                                           autocomplete="name" autofocus>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="" type="number"
                                                           class="form-control modal-input" name="phone"
                                                           value="{{ Request::old('phone') }}"
                                                           placeholder="000-000-0000"
                                                           required
                                                           autocomplete="email">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="email" type="email"
                                                           class="form-control modal-input" name="email"
                                                           value="{{ Request::old('email') }}"
                                                           placeholder="ایمل خود را وارید کنید..."
                                                           required
                                                           autocomplete="email">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="password" type="password"
                                                           class="form-control modal-input"
                                                           placeholder="رمز عبور" name="password"
                                                           value="{{ Request::old('password') }}"
                                                           required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password"
                                                           class="form-control modal-input"
                                                           name="password_confirm"
                                                           value="{{ Request::old('password_confirm') }}"
                                                           required placeholder="تایید رمز عبور..."
                                                           autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 mt-4 d-flex justify-content-center">
                                                    <button type="submit"
                                                            class="btn btn-lg btn-outline-dark"
                                                    >{{ __('ثبت') }}<span class="fa fa-angle-left ml-5" style="margin-top: 10px;"></span>
                                                    </button>
                                                </div>

                                                <div class="col-md-12 d-flex justify-content-center ham">
                                                    <a href="#" id="register-login" style="text-decoration: underline !important; margin-left: 3rem;">ورود به حساب</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
