@extends('layout.mainlayout')

@section('content')

        <!-- Small-hostel-properties -->
<section class="container-fluid hostel">
    <!-- right-small-card / description-card -->
    <div class="card small-right-card">
        <div class="card-img-top text-center">
            <img src="image/khana_image_dmd/icons8-home-address-96.png" alt="" style="border-radius: 50%;">
        </div>
        <div class="card-title text-center">

            <i class="fa fa-home mt-4 text-center" style="font-size:45px; "></i>

            <h5 class="mt-3 text-center"> لیلیه نرگس  </h5>
            <div class="mt-4">
                adkfjadkfjalkdfjalkdfjalkdfjaslkds
                adkfjadkfjalkdfjalkdfjalkdfjaslkds
                adkfjadkfjalkdfjalkdfjalkdfjaslkds
            </div>
            <div class="dis">
                <p class="text-danger mb-1"><i class="fa fa-address-book">  آدرس :‌ تانک تیل دولتی  </i></p>
                <p class="text-danger mb-1"><i class="fa fa-mail-bulk">  تانک تیل دولتی  </i> : ایمیل آدرس  </p>
                <p class="text-danger mb-1"><i class="fa fa-phone">  شماره تماس   </i> :‌ 0730313101 </p>
            </div>
        </div>

    </div>
</section>  <!-- End-small-hostel-properties -->

<div class="row mt-5">
    <div class="clo-4 offset-5">
        <h4 class="text-center unline"> تمام عکس های لیلیه نرگس </h4>
    </div>
</div>

<!-- All hostel images -->
<section class="container mt-5">
    <div class="row mt-5">
        {{--@foreach($file as $photo)--}}
        {{--@if($photo->image >= 4)--}}
        {{--<div class="col-md-3" style="border-radius: 0%;">--}}
        {{--<a href="{{route('khDetails')}}"><img src="/images/{{ $photo->image }}"--}}
        {{--alt="" class="card-img-top pr-0 mt-2 img-thumbnail" width="400" height="230"></a>--}}
        {{--<div class="car-body">--}}
        {{--<div class="card-footer">--}}
        {{--@if($photo->gender == 1)--}}
        {{--{{ 'اطاق خالی' }}--}}
        {{--@elseif($photo->gender == 0)--}}
        {{--{{ 'بستر خالی' }}--}}
        {{--@endif <br>--}}
        {{--کرایه :‌  {{ $photo->price }}  افغانی--}}
        {{--<br>--}}
        {{--نام لیلیه :‌ {{ $photo->name }}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div> <br>--}}
        {{--@endif--}}
        {{--@endforeach--}}
        <div class="col-md-3" style="border-radius: 0%;">
            <img src="photo/1.jpg"
                 alt="" class="card-img-top pr-0 mt-2 img-thumbnail" width="400" height="230">
            <div class="car-body">
                <div class="card-footer">
                    <h5> کرایه : 1200 </h5>
                    <h5> نوع :  اطاق خالی </h5>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="border-radius: 0%;">
            <img src="photo/cenvir.jpg"
                 alt="" class="card-img-top pr-0 mt-2 img-thumbnail" width="400" height="230">
            <div class="car-body">
                <div class="card-footer">
                    <h5> کرایه : 1200 </h5>
                    <h5> نوع :  اطاق خالی </h5>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="border-radius: 0%;">
            <img src="photo/download.jpg"
                 alt="" class="card-img-top pr-0 mt-2 img-thumbnail" width="400" height="230">
            <div class="car-body">
                <div class="card-footer">
                    <h5> کرایه : 1200 </h5>
                    <h5> نوع :  اطاق خالی </h5>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="border-radius: 0%;">
            <img src="photo/library.jpg"
                 alt="" class="card-img-top pr-0 mt-2 img-thumbnail" width="400" height="230">
            <div class="car-body">
                <div class="card-footer">
                    <h5> کرایه : 1200 </h5>
                    <h5> نوع :  اطاق خالی </h5>
                </div>
            </div>
        </div>
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
                        <li class="" style="list-style-type: none"><spna class="fa fa-shower mr-5"></spna> حمام گرم</li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-traffic-light"></span> برق 24 ساعته</li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-place-of-worship"></span> محیط آرام </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bread-slice"></span>سه وقت غذا </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bath"></span> تشناب پاک </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-camera"></span>کمره های امنیتی</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="custom-li-padding">
                        <li class="" style="list-style-type: none"><spna class="fa fa-shower mr-5"></spna> حمام گرم</li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-traffic-light"></span> برق 24 ساعته</li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-place-of-worship"></span> محیط آرام </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bread-slice"></span>سه وقت غذا </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bath"></span> تشناب پاک </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-camera"></span>کمره های امنیتی</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="custom-li-padding">
                        <li class="" style="list-style-type: none"><spna class="fa fa-shower mr-5"></spna> حمام گرم</li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-traffic-light"></span> برق 24 ساعته</li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-place-of-worship"></span> محیط آرام </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bread-slice"></span>سه وقت غذا </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-bath"></span> تشناب پاک </li>
                        <li class="" style="list-style-type: none"><span class="mr-5 fa fa-camera"></span>کمره های امنیتی</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            توضیحات لیلیه
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                        است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            قوانین لیلیه
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                        است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.

                    </div>
                </div>
            </div>

            {{--<ul>--}}
            {{--<li class="list-group-item text-center text-success"> تمام قوانین لیلیه </li>--}}
            {{--</ul>--}}
            {{--<ul>--}}
            {{--<li class="list-group-item">--}}
            {{--<p class="justify-content-center">--}}
            {{--ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.--}}
            {{--چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
            {{--و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.--}}
            {{--</p>--}}
            {{--</li>--}}
            {{--</ul>--}}
        </div>
    </div>
</section>
@endsection
<b></b>
