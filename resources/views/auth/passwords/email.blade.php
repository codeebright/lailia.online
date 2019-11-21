{{-- @extends('layouts.app') --}}
@extends('layout_front.mainlayout')
@section('content')
  <br>
  <br>
  <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="background-color:#787878;">
          <div class="row">
            {{-- Reset input --}}
            <div class="col-md-6 p-0">


              <div class="col-md-6 offset-md-4">

                <div class="card" style="border:none;">


                    <div class="card-body" style="background-color:#787878;">

                      <h4 class="mt-5 mb-5 text-center">رمز عبور تان را فراموش کرده اید؟</h4>
                        <div class="col-md-12">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                       require autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                      </div>
                    </div>
                </div>
              </div>



            </div>

            {{-- Image --}}
            <div class="col-md-6 p-0">
                <img src="/photo/forgot-img1.jpg" alt="" style="width: 100%; height: ;">
            </div>

          </div>


        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection
