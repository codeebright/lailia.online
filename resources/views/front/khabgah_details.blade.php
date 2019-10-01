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
                <h6 class="mb-2 text-left"> شماره تماس: {{ $hostel->hostelDetails->phone_number}} </h6>
                <h6 class="mb-2 text-left"> ایمیل آدرس: {{ $hostel->hostelDetails->email}} </h6>
                <h6 class="mb-2 text-left"> فیسبوک ما: {{ $hostel->hostelDetails->fb}} </h6>
                <h6 class="text-left">
                    آدرس : {{$hostel->addresses->state }}  {{$hostel->addresses->rood}}
                    {{$hostel->addresses->station }}  {{$hostel->addresses->alley}}
                </h6>
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
                <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid" id="load_more">
                    <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                        <img src="/assets-/app/media/img/blog/hostels-img/{{$photo->file_name}}"
                             class="card-img-top card-img custom-card-img-height"
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
                            </div>
                        </div>
                    </div>
                </div>
                {{--{{ $hostel->attachments(2)->link() }}--}}
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
                                <spna class="fa fa-shower mr-5"></spna>
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

            <div class="col-md-4 pr-0 mt-4" id="accordion">
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
                <div class="row ml-3 mt-1 align-content-center">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-responsive">
                            <p class="mb-2 font-weight-bold">مینوی غذایی</p>
                            <thead class="black white-text">
                            <tr>
                                <th CLASS="border-bottom-0 border-top-0"></th>
                                <th scope="col">شنبه</th>
                                <th scope="col">یک شنبه</th>
                                <th scope="col">دوشنبه</th>
                                <th scope="col">سه شنبه</th>
                                <th scope="col">چهار شنبه</th>
                                <th scope="col">پنچ شنبه</th>
                                <th scope="col">جمعه</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="border-top-0">صبحانه</th>
                                <td class="border">تخم مرغ</td>
                                <td class="border">پنیر</td>
                                <td class="border">قیماق</td>
                                <td class="border">نان وچای</td>
                                <td class="border">شیر</td>
                                <td class="border">کرایی</td>
                                <td class="border">تخم مرغ</td>
                            </tr>
                            <tr>
                                <th class="border-top-0">چاشت</th>
                                <td class="border">گوشت</td>
                                <td class="border">برنچ</td>
                                <td class="border">سبزی</td>
                                <td class="border">لوبیا</td>
                                <td class="border">مکارونی</td>
                                <td class="border">قابلی</td>
                                <td class="border">کچالو</td>
                            </tr>
                            <tr>
                                <th class="border-top-0">شب</th>
                                <td class="border">گوشت</td>
                                <td class="border">برنچ</td>
                                <td class="border">سبزی</td>
                                <td class="border">لوبیا</td>
                                <td class="border">مکارونی</td>
                                <td class="border">قابلی</td>
                                <td class="border">کچالو</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<b></b>
