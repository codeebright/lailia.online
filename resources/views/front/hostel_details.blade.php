@extends('layout_front.mainlayout')

@section('content')

    <!-- Small-hostel-properties -->
    <section class="container-fluid hostel">
        <!-- right-small-card / description-card -->
        <div class="card small-right-card">

            <div class="card-title text-center">
                <div class="mt-4"></div>
                <i class="fa fa-home mt-4 text-center" style="font-size:45px; "></i>
                <h5 class="mt-3 text-center mb-2"> {{ $hostel->name }} </h5>
                <h6 class="fa fa-phone mb-2"> شماره تماس: {{ $hostel->hostelDetails->phone_number}} </h6>
                <h6 class="fa fa-email mb-2"> ایمیل آدرس: {{ $hostel->hostelDetails->email}} </h6>
                <h6 class="fa fa-facebook mb-2"> فیسبوک ما: {{ $hostel->hostelDetails->fb}} </h6>
            </div>
        </div>
    </section>  <!-- End-small-hostel-properties -->

    <div class="row mt-5">
        <div class="clo-4 offset-5">
            <h4 class="text-center unline"> عکس تمام اطاق های لیلیه {{ $hostel->name }}  </h4>
        </div>
    </div>

    <!-- All hostel images -->
    <section class="container mt-5">
        <div class="row justify-content-center">
            @foreach($hostel->hostelDetails->attachments as $photo)
                <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                    <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                        <img src="/images/{{$photo->file_name}}" class="card-img-top card-img custom-card-img-height"
                             alt="">
                        <div class="car-body">
                            <div class="card-footer">
                                <div class="custom-circle"><p class="custom-circle-text card-text"><b>
                                            @if($hostel->type == 1)
                                                {{ 'ذکور'}}
                                            @else {{ 'اناث' }}
                                            @endif
                                        </b></p></div>
                                <div class="custom-prices card-text text-left"> کرایه فی ماه
                                    : {{ $hostel->hostelDetails->remark }} افغانی
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                              <span class="card-text fa fa-address"> آدرس : {{$hostel->addresses->state }}  {{$hostel->addresses->rood}}
                                  {{$hostel->addresses->station }}  {{$hostel->addresses->alley}}
                              </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Hostel properties and descriptions--}}
    <section class="container mt-4">
        <div class="row mb-3">
            <!-- hostel properties -->
            <div class="col-md-8 mt-4 list-group bg-light">
                <p class="text-center mt-4"> امکانات لیلیه </p>
                <div class="row ml-3 mt-5">
                    <div class="col-md-4">
                        <ul class="custom-li-padding">
                            <li class="" style="list-style-type: none">
                                <spna class="fa fa-shower mr-5"></spna></li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-traffic-light"></span>
                                برق 24 ساعته
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-place-of-worship"></span>
                                محیط آرام
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bread-slice"></span>سه
                                وقت غذا
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bath"></span> تشناب پاک
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-camera"></span>کمره های
                                امنیتی
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="custom-li-padding">
                            <li class="" style="list-style-type: none">
                                <spna class="fa fa-shower mr-5"></spna>
                                حمام گرم
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-traffic-light"></span>
                                برق 24 ساعته
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-place-of-worship"></span>
                                محیط آرام
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bread-slice"></span>سه
                                وقت غذا
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bath"></span> تشناب پاک
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-camera"></span>کمره های
                                امنیتی
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="custom-li-padding">
                            <li class="" style="list-style-type: none">
                                <spna class="fa fa-shower mr-5"></spna>
                                حمام گرم
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-traffic-light"></span>
                                برق 24 ساعته
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-place-of-worship"></span>
                                محیط آرام
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bread-slice"></span>سه
                                وقت غذا
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bath"></span> تشناب پاک
                            </li>
                            <li class="" style="list-style-type: none"><span class="mr-5 fa fa-camera"></span>کمره های
                                امنیتی
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                توضیحات لیلیه
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                قوانین لیلیه
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Hostels Food menu tabs section --}}
    <section class="container">
        <div class="row">
            <div class="col-md-12 nav-padding mb-3 pr-3 text-center">
                <ul class="nav nav-pills bg-light" id="pills-tab" role="tablist">

                    <li class="nav-item mr-5 text-center">
                        <a class="nav-link active ml-5 tab-font" id="pills-home-tab" data-toggle="pill"
                           href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">صبحانه
                        </a>
                    </li>
                    <li class="nav-item mr-5 text-center">
                        <a class="nav-link mr-5 tab-font" id="pills-profile-tab" data-toggle="pill"
                           href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false"> چاشت
                        </a>
                    </li>
                    <li class="nav-item mr-5 text-center">
                        <a class="nav-link tab-font" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                           role="tab" aria-controls="pills-contact" aria-selected="false"> شب
                        </a>
                    </li>
                </ul>

                <div class="tab-content bg-light" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="row ml-3 mt-1 ml-5 align-content-center">
                            <div class="col-md-12">
                                <table class="table table-responsive">

                                    <thead>

                                    <tr>
                                        @foreach($food_menus as $fm)
                                        <th class="pl-5 text-primary">{{$fm->week_days_id}}</th>
                                        {{--<th class="pl-5 text-primary"> یک شنبه</th>--}}
                                        {{--<th class="pl-5 text-primary"> دوشنبه</th>--}}
                                        {{--<th class="pl-5 text-primary"> سه شنبه</th>--}}
                                        {{--<th class="pl-5 text-primary"> چهارشنبه</th>--}}
                                        {{--<th class="pl-5 text-primary"> پنج شنبه</th>--}}
                                        {{--<th class="pl-5 text-primary"> جمعه</th>--}}
                                        @endforeach
                                    </tr>

                                    </thead>
                                    <thead>
                                    <tr>
                                        @foreach($food_menus as $fm)
                                        <td class="pl-5 border">{{$fm->foods()->first()->name}}</td>
                                        {{--<td class="pl-5 border"> تخم مرغ</td>--}}
                                        {{--<td class="pl-5 border"> پنیر</td>--}}
                                        {{--<td class="pl-5 border"> قیماق</td>--}}
                                        {{--<td class="pl-5 border"> نان وچای</td>--}}
                                        {{--<td class="pl-5 border"> شیر</td>--}}
                                        {{--<td class="pl-5 border"> تخم مرغ</td>--}}
                                            @endforeach
                                    </tr>
                                    </thead>

                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row ml-3 mt-1 ml-5 align-content-center">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th class="pl-5 text-primary"> شنبه</th>
                                    <th class="pl-5 text-primary"> یک شنبه</th>
                                    <th class="pl-5 text-primary"> دوشنبه</th>
                                    <th class="pl-5 text-primary"> سه شنبه</th>
                                    <th class="pl-5 text-primary"> چهارشنبه</th>
                                    <th class="pl-5 text-primary"> پنج شنبه</th>
                                    <th class="pl-5 text-primary"> جمعه</th>
                                </tr>
                                </thead>

                                <thead>
                                <tr>
                                    <td class="pl-5 border"> لوبیا</td>
                                    <td class="pl-5 border"> کوفته</td>
                                    <td class="pl-5 border"> سبزی با میوه</td>
                                    <td class="pl-5 border"> منتو</td>
                                    <td class="pl-5 border"> قابلی</td>
                                    <td class="pl-5 border"> مکارونی</td>
                                    <td class="pl-5 border"> گوشت</td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row ml-3 mt-1 ml-5 align-content-center">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th class="pl-5 text-primary"> شنبه</th>
                                    <th class="pl-5 text-primary"> یک شنبه</th>
                                    <th class="pl-5 text-primary"> دوشنبه</th>
                                    <th class="pl-5 text-primary"> سه شنبه</th>
                                    <th class="pl-5 text-primary"> چهارشنبه</th>
                                    <th class="pl-5 text-primary"> پنج شنبه</th>
                                    <th class="pl-5 text-primary"> جمعه</th>
                                </tr>
                                </thead>
                                <thead>
                                <tr>
                                    <td class="pl-5 border"> لوبیا</td>
                                    <td class="pl-5 border"> کوفته</td>
                                    <td class="pl-5 border"> سبزی با میوه</td>
                                    <td class="pl-5 border"> منتو</td>
                                    <td class="pl-5 border"> قابلی</td>
                                    <td class="pl-5 border"> مکارونی</td>
                                    <td class="pl-5 border"> گوشت</td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<b></b>
