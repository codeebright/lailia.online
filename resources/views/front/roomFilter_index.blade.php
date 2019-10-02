@extends('layout_front.mainlayout')

@section('content')
    {{--Room-Filtering--}}
    {{--Filtering & Result--}}
    <section class="container mt-5">
        <div class="row justify-content-center ">
            <div class=" col-12 col-md-12 col-lg-4 mb-2">
                <div class="card card-shadow custom-border-light-1 custom-height-4 ">
                    <div class="card-body ">
                        <!-- card-body -->
                        <div class="row justify-content-center">
                            <!-- top--->
                            <div class=" col-12 col-md-12   mt-lg-2 ">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12">
                                        <div class="thin-underline-2 "><a href="#" class=""><b>اطاق و خوابگاه</b></a>
                                        </div>
                                        <input type="text" class="form-control custom-border-dark text-center"
                                               placeholder="آدرس" aria-label="Recipient's username"
                                               aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-2">
                                    <div class=" col-6 col-md-6 col-lg-6 pr-1 ">
                                        <div class="input-group mb-1">
                                            <input type="number" class="form-control" placeholder="حد اقل کرایه">
                                        </div>
                                        <div class="input-group mb-1">
                                            <input type="number" class="form-control" placeholder="تعداد نفرات ">
                                        </div>
                                        <div class="input-group mb-1">
                                            <input type="text" class="form-control" placeholder="با هم اطاقی">
                                        </div>
                                        <div class="input-group mb-1">
                                            <input type="date" class="form-control" placeholder="تاریخ ورود">
                                        </div>

                                    </div>
                                    <div class=" col-6 col-md-6 col-lg-6 pl-1 ">
                                        <div class="input-group mb-1">
                                            <input type="number" class="form-control" placeholder="حد اکثر کرایه">
                                        </div>
                                        <div class="input-group mb-1">
                                            <input type="number" class="form-control" placeholder="مساحت اطاق">
                                        </div>
                                        <div class="input-group mb-1">
                                            <input type="text" class="form-control" placeholder="بی هم اطاقی">
                                        </div>
                                        <div class="input-group mb-1">
                                            <input type="date" class="form-control" placeholder="تاریخ خروج">
                                        </div>

                                    </div>
                                </div>
                            </div>  <!--End-top-->
                            <!--bottom-->
                            <div class=" col-12 col-md-12   ">
                                <div class="row justify-content-center">
                                    <div class=" col-12 col-md-12">
                                        <p class=" card-title  text-center font-size13 txt-linee mb-2 mt-3 "> تعین
                                            امکانات </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-6 col-md-6 col-lg-6 pr-1">
                                        <div class="input-group chck-border mt-1">
                                            <lable class="fl-left fa fa-bread-slice card-text"> خدمات نان</lable>
                                        </div>
                                        <div class="input-group chck-border mt-1">
                                            <lable class="fl-left fa fa-wifi card-text"> انترنت</lable>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-6 pl-1">
                                        <div class="input-group chck-border mt-1">
                                            <lable class="fl-left fa fa-suitcase card-text"> ماشین لیاس</lable>
                                        </div>
                                        <div class="input-group chck-border mt-1">
                                            <lable class="fl-left fa fa-star card-text"> برق 24 ساعته</lable>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12">
                                        <div class="input-group mb-2 mt-1">
                                            <input type="number" class="form-control text-center"
                                                   placeholder="نام خواب گاه دلخواه">
                                        </div>
                                        <button type="button"
                                                class="btn  btn-block search-box-btn text-center custom-search-width  m-0  "
                                                style="height: 41px">
                                            جستجو
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- first-section-second/big-part -->
            <div class=" col-12 col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-6 px-lg-1 pr-md-1  ">
                        <a class="page-scroll" href="#seemore" id="hamid">
                            <div class="card card-shadow custom-height-1 common-negative-margin-1"
                                 style="border-radius: 0%">
                                <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                     alt="">
                                <div class="car-body">
                                    <div class="card-footer">
                                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا
                                                    س</b>
                                            </p></div>
                                        <div class="custom-prices card-text text-left"> کرایه فی ماه ۶۷۸۹۰۰</div>
                                        <div class="row mt-3">
                                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                                <span class="fa fa-wifi"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-bread-slice"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-landmark"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 px-lg-1 pl-md-1  ">
                        <a href="khabgahDetail.html">
                            <div class="card card-shadow custom-height-1 common-negative-margin-1"
                                 style="border-radius: 0%">
                                <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                     alt="">
                                <div class="car-body">
                                    <div class="card-footer">
                                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا
                                                    س</b>
                                            </p></div>
                                        <div class="custom-prices card-text text-left"> کرایه فی ماه ۶۷۸۹۰۰</div>
                                        <div class="row mt-3">
                                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                                <span class="fa fa-wifi"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-bread-slice"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-landmark"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 col-lg-6 pr-sm-1 px-lg-1 small-device-hid ">
                        <a href="khabgahDetail.html">
                            <div class="card card-shadow custom-height-1 common-negative-margin-1"
                                 style="border-radius: 0%">
                                <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                     alt="">
                                <div class="car-body">
                                    <div class="card-footer">
                                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا
                                                    س</b>
                                            </p></div>
                                        <div class="custom-prices card-text text-left"> کرایه فی ماه ۶۷۸۹۰۰</div>
                                        <div class="row mt-3">
                                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                                <span class="fa fa-wifi"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-bread-slice"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-landmark"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 pl-sm-1 px-lg-1 small-device-hid ">
                        <a href="khabgahDetail.html">
                            <div class="card card-shadow custom-height-1 common-negative-margin-1"
                                 style="border-radius: 0%">
                                <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                     alt="">
                                <div class="car-body">
                                    <div class="card-footer">
                                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا
                                                    س</b>
                                            </p></div>
                                        <div class="custom-prices card-text text-left"> کرایه فی ماه ۶۷۸۹۰۰</div>
                                        <div class="row mt-3">
                                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                                <span class="fa fa-wifi"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-bread-slice"></span>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                                <span class="fa fa-landmark"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
