@extends('layout.mainlayout')

@section('content')

        <!---->
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
                                    <div class="thin-underline-2 "><a href="#" class=""><b>اطاق و خوابگاه</b></a></div>
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
                <div class="col-md-6 col-lg-6 px-lg-1 pr-md-1">
                    <a href="#section1">
                        <div class="card card-shadow custom-height-1 common-negative-margin-1"
                             style="border-radius: 0%">
                            <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                 alt="">
                            <div class="car-body">
                                <div class="card-footer">
                                    <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b>
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

                <div id="" class="col-md-6 col-lg-6 px-lg-1 pl-md-1  ">
                    <a href="#section1">
                        <div class="card card-shadow custom-height-1 common-negative-margin-1"
                             style="border-radius: 0%">
                            <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                 alt="">
                            <div class="car-body">
                                <div class="card-footer">
                                    <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا س</b>
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
                    <a href="#section1">
                        <div class="card card-shadow custom-height-1 common-negative-margin-1"
                             style="border-radius: 0%">
                            <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                 alt="">
                            <div class="car-body">
                                <div class="card-footer">
                                    <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا س</b>
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
                    <a href="#section1">
                        <div class="card card-shadow custom-height-1 common-negative-margin-1"
                             style="border-radius: 0%">
                            <img src="khana%20image/door2.PNG" class="card-img-top card-img custom-card-img-height"
                                 alt="">
                            <div class="car-body">
                                <div class="card-footer">
                                    <div class="custom-circle"><p class="custom-circle-text card-text"><b>الزهزا س</b>
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

<!---->

<!--khabgah-detil-->
<section id="section1" class="container mt-2">
    <div class="row">
        <!--aks-->
        <div class="col-md-12 col-lg-8 px-2">
            <div class="card card-shadow custom-border-light-1 custom-height-4">
                <div id="aks">
                    <img id="image1" src="khana%20image/ss1.jpg" alt="" style="width: 100%; height: 280px;">
                    <img id="image2" src="khana%20image/khana (2).jpg" alt="" style="width: 100%; height: 280px;">
                    <img id="image3" src="khana%20image/khana (3).jpg" alt="" style="width: 100%; height: 280px;">
                    <img id="image4" src="khana%20image/khana (4).jpg" alt="" style="width: 100%; height: 280px;">

                    <!---->
                    <div class="row justify-content-center">
                        <div class=" col-12 col-md-3 px-1 "><img id="img1" src="khana%20image/ss1.jpg" alt=""
                                                                 class="card-img "
                                                                 style="max-height: 80px; margin:  1px">
                        </div>
                        <div class=" col-12 col-md-3 px-1 "><img id="img2" src="khana%20image/khana (2).jpg" alt=""
                                                                 class="card-img "
                                                                 style="max-height: 80px; margin:  1px">
                        </div>
                        <div class=" col-12 col-md-3 px-1 "><img id="img3" src="khana%20image/khana (3).jpg" alt=""
                                                                 class="card-img "
                                                                 style="max-height: 80px; margin:  1px">
                        </div>
                        <div class=" col-12 col-md-3 px-1 "><img id="img4" src="khana%20image/khana (4).jpg" alt=""
                                                                 class="card-img "
                                                                 style="max-height: 80px; margin:  1px">
                        </div>
                    </div>
                    <!---->
                </div>
                <!--اصل کار-->
                <div class="card-footer p-5 " style="background-color: white">
                    <!---->
                    <h4 class="mt-3 mb-3" style="text-align: right">
                        <i class=""></i> امکانات
                    </h4>
                    <div class="row ">
                        <div class="col-md-6">

                            <!---->
                            <ul class="list-group">
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> پل سرخ</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> کارته چهار</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> شهرک حاجی نبی</span>
                                </li>
                            </ul>
                            <!---->
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> پل سرخ</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> کارته چهار</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> شهرک حاجی نبی</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!---->
                    <hr class="mt-4">
                    <h4 class="mt-3 mb-3" style="text-align: right">
                        <i class=""></i> مشخصات
                    </h4>
                    <div class="row">
                        <div class="col-md-6">

                            <!---->
                            <ul class="list-group">
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> پل سرخ</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> کارته چهار</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> شهرک حاجی نبی</span>
                                </li>
                            </ul>
                            <!---->
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> پل سرخ</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> کارته چهار</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> شهرک حاجی نبی</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="mt-4">

                    <h4 class="mt-3 mb-3" style="text-align: right">
                        <i class=""></i> امنیت
                    </h4>
                    <div class="row">
                        <div class="col-md-6">

                            <!---->
                            <ul class="list-group">
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> پل سرخ</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> کارته چهار</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> شهرک حاجی نبی</span>
                                </li>
                            </ul>
                            <!---->
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> پل سرخ</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> کارته چهار</span>
                                </li>
                                <li class="list-group fa fa-home text-left  mt-1">
                                    <span style="margin: 11px;font-size: 12px"> شهرک حاجی نبی</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <h4 class="pb-3" style="text-align: right">قوانین</h4>
                    <p>خانه های کرایی اتاق های کرایی لیله های کرایی باشه میخریم
                        خانای کونه اتاقای کونه لیلیای کونه باشه می خریم
                        کو نظری کو کو نظری کو آهنای کونه چایبرای کونه باشه میخریم کو نظری کو
                        گل بحای گل دارم
                        خانه های کرایی اتاق های کرایی لیله های کرایی باشه میخریم
                        خانای کونه اتاقای کونه لیلیای کونه باشه می خریم
                        کو نظری کو کو نظری کو آهنای کونه چایبرای کونه باشه میخریم کو نظری کو
                        گل بحای گل دارم
                    </p>

                    <hr class="mt-4">
                    <h4 class="pb-3" style="text-align: right">قوانین</h4>
                    <p>خانه های کرایی اتاق های کرایی لیله های کرایی باشه میخریم
                        خانای کونه اتاقای کونه لیلیای کونه باشه می خریم
                        کو نظری کو کو نظری کو آهنای کونه چایبرای کونه باشه میخریم کو نظری کو
                        گل بحای گل دارمخانه های کرایی اتاق های کرایی لیله های کرایی باشه میخریم
                        خانای کونه اتاقای کونه لیلیای کونه باشه می خریم
                        کو نظری کو کو نظری کو آهنای کونه چایبرای کونه باشه میخریم کو نظری کو
                        گل بحای گل دارم
                    </p>
                </div>
                <!--ختم اصل کار-->
            </div>
        </div>
        <!--fix-->
        <div class=" col-12 col-md-10 col-lg-4 p-2">
            <div class="card  card-shadow custom-height-5">
                <div class="card-body ">
                    <!-- card-body -->
                    <div class="row">
                        <!-- top--->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 mt-2">
                            <div class="card  mb-2">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-6 ">
                                            <img src="image/ramazan.jpg" alt="" class="card-img-top"
                                                 style="width: 80px; height: 80px; border-radius: 50px">
                                            <p class="text-center mt-2">حاجی رمضان</p>
                                            <p class="text-center ">۰۷۹۴۷۹۹۴۶۲</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End-top-->

                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <ul class="list-group">
                                <li class="list-group-item  mt-1">
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                </li>
                                <li class="list-group-item  mt-1">
                                    <p style="text-align: right">تعداد خانه های جدید 152464</p>
                                </li>
                            </ul>
                        </div><!--End-bottom-->

                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-primary">اتاق را پسندیدم</button>
                    </div>
                </div>  <!-- End-card-body-->
            </div>
        </div>
    </div>
</section>
<!--Owl-carousel-->
<section class="container mt-5">
    <h5 class="text-center" style="text-shadow:  1px 1px 2px black; color: #1b1e21">مینوی غذای</h5>
    <div class="justify-content-center thin-underline-1"></div>
    <div class="owl-carousel owl-theme" dir="ltr">

        <div class="item">
            <div class="img-thumbnail"><img class="img-size" src="image/owl%20(2).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail"><img class="img-size" src="image/owl%20(3).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(4).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(5).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(6).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(1).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(2).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(3).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(4).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(5).jpg" alt=""></div>
        </div>
        <div class="item">
            <div class="img-thumbnail "><img class="img-size" src="image/owl%20(6).jpg" alt=""></div>
        </div>

    </div>
</section>
<!--thumbnil-->
<section class="container mt-4">
    <h5 class="text-center" style="text-shadow:  1px 1px 2px black; color: #1b1e21">بهترین خانه ها در شهر</h5>
    <div class="justify-content-center thin-underline-1"></div>
    <div class="row justify-content-center">
        <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
            <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                <img src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                <div class="car-body">
                    <div class="card-footer">
                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>فروشی</b></p></div>
                        <div class="custom-prices card-text text-left"> قیمت ۶۷۸۹۰۰</div>
                        <div class="row mt-3">
                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                <span class="fa fa-bed "> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-warehouse"> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-bath"> ۳</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
            <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                <img src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                <div class="car-body">
                    <div class="card-footer">
                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>فروشی</b></p></div>
                        <div class="custom-prices card-text text-left"> قیمت ۶۷۸۹۰۰</div>
                        <div class="row mt-3">
                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                <span class="fa fa-bed "> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-warehouse"> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-bath"> ۳</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
            <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                <img src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                <div class="car-body">
                    <div class="card-footer">
                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>فروشی</b></p></div>
                        <div class="custom-prices card-text text-left"> قیمت ۶۷۸۹۰۰</div>
                        <div class="row mt-3">
                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                <span class="fa fa-bed "> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-warehouse"> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-bath"> ۳</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
            <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                <img src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                <div class="car-body">
                    <div class="card-footer">
                        <div class="custom-circle"><p class="custom-circle-text card-text"><b>فروشی</b></p></div>
                        <div class="custom-prices card-text text-left"> قیمت ۶۷۸۹۰۰</div>
                        <div class="row mt-3">
                            <div class="col-4 col-sm-4 col-md-4 mb-2 ">
                                <span class="fa fa-bed "> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-warehouse"> ۳</span>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 mb-2">
                                <span class="fa fa-bath"> ۳</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
<!---->
@endsection
<b></b>