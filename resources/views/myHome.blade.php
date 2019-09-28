<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>room filtering</title>
    <!---bootstrap-css-link-------------------->
    <link rel="stylesheet" href="bootstraprtl/css/bootstrap.css">
    <link rel="stylesheet" href="bootstraprtl/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstraprtl/css/fonts.css">
    <link rel="stylesheet" href="bootstraprtl/css/custom.css">
    <style>
        .new-post header,
        .posts header {
            margin-bottom: 20px;
        }

        .posts .post {
            padding-right: 10px;
            border-right: 3px solid #aaaab1;
            /*margin-bottom: -1px;*/
        }

        .info {
            color: red;
            font-style: italic;
        }

        #call, #image2, #image3, #image4, #seemore {
            display: none;
        }

        /**/
        .txt-line {
            display: flex;
            flex-direction: row;
            text-align: center;
        }

        .txt-line:after {
            content: "";
            flex: 1 1;
            border-bottom: 1px solid #dddddd;
            margin: 6px 16px 5px 16px;
        }
        .food-img{
            height: 100px;
        }
    </style>
</head>
<body dir="rtl">
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
                    <a class="nav-link hvr-underline-from-center" href="mainPage.html">صفحه اصلی <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="khared.html">خرید</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="khared.html">کرایه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="#">خابگاه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="rahnomaee2.html">رهنمای معاملات</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center" href="#">ثبت معامله<span class="pipe-line mr-2 ml-2"
                                                                                           style="color: #ffffff">/</span>ورود</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
@if(isset($details))
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
              @foreach($details as $hostel)
                @foreach($hostel->addreeses->hostelDetails->attachments as $photo)
                <div class="col-md-6 col-lg-6 px-lg-1 pr-md-1  ">
                    <a href="#seemore" id="hamid">
                        <div class="card card-shadow custom-height-1 common-negative-margin-1"
                             style="border-radius: 0%">
                            <img src="/images/{{ $photo->file_name}}" class="card-img-top card-img custom-card-img-height"
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
                @endforeach
                @endforeach
                <div class="col-md-6 col-lg-6 px-lg-1 pl-md-1  ">
                    <a href="khabgahDetail.html">
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
                    <a href="khabgahDetail.html">
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
                    <a href="khabgahDetail.html">
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
@endif
<!-- End-first-part -->
<!--see more-->
<section id="seemore" class="container mt-5 ">
    <div class="row">
        <div class="col-md-12 col-lg-8 px-2 ">

            <div class="card card-shadow custom-border-light-1 custom-height-4">
                <div id="aks">
                    <img id="image1" src="photo/download.jpg" alt="" style="width: 100%; height: 280px;">
                    <img id="image2" src="photo/benze.jpg" alt="" style="width: 100%; height: 280px;">
                    <img id="image3" src="photo/food.jpg" alt="" style="width: 100%; height: 280px;">
                    <img id="image4" src="photo/afg.png" alt="" style="width: 100%; height: 280px;">
                </div>
            </div>

            <!--<div class="card-footer" style="background-color: white">-->
            <!--شروع کارر-->
            <div class="row">
                <div class="col-md-6 mt-3" style="background-color: #f1f1f1;">
                    <div class="row">
                        <div class="col-2 col-md-3">
                            <span class="fa fa-home" style="font-size: 70px"></span>
                        </div>
                        <div class="col-10 col-md-9">
                            <div class="col-ml-3 md-ml-2 mt-4">
                                <h5>مــربوط خوابگـاه تابیش سـحر</h5>
                                <p class="mt-1">جــزعیات بیشتر این خوابگاه...</p>
                            </div>
                        </div>


                        <!--<span class="fa fa-home" style="color: red; font-size: 30px;"></span>-->

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="row justify-content-center"
                             style="margin: -9px -69px -9px -69px; background-color: #f1f1f1">

                            <div class=" col-12 col-md-3 px-1 "><img id="img1" src="photo/afg.jpg" alt=""
                                                                     class="card-img "
                                                                     style="max-height: 80px; margin:  1px">
                            </div>
                            <div class=" col-12 col-md-3 px-1 "><img id="img2" src="photo/benze.jpg" alt=""
                                                                     class="card-img "
                                                                     style="max-height: 80px; margin:  1px">
                            </div>

                            <div class=" col-12 col-md-3 px-1 "><img id="img3" src="photo/food.jpg" alt=""
                                                                     class="card-img "
                                                                     style="max-height: 80px; margin:  1px">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-12 col-md-10 col-lg-4 p-2">
            <div class="card  card-shadow custom-height-5">
                <div class="card-body" style="height: 25.1rem;">
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

                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-primary">اتاق را پسندیدم</button>
                    </div>
                </div>  <!-- End-card-body-->
            </div>
        </div>

    </div>

    <!--end see more-->
    <div class="mt-5">
        <div class="row">
            <div class="col-md-8 p-0">
                <h5 class="mb-2">توضیحات</h5>
                <p class="mb-2"><b>بهترین اتاق ها را در لیلیه نرگس داشته باشید</b></p>
                <p>لوریم تتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتت
                    من با رباب بی علی اصغر کجا روم من با رباب بی علی اصغر کجا روم
                    سسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسس
                    من با رباب بی علی اصغر کجا روم من با رباب بی علی اصغر کجا روم من با رباب بی علی اصغر کجا روممن با رباب بی علی اصغر کجا روم
                    سسسسسسسسسسسس
                    نننننننننننننننننننننننننننننننننننننننننننننننننننننننننننننتتتتتتئئنئننمئ خمئ نئمنئمئ ئ
                    ئئئئئئئئئایپسوم
                </p>
            </div>
            <div class="col-md-4">

                <h5 class="mb-3">تعداد بازدید کنندگان</h5>
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <div class="fa fa-star" style="color: yellow"></div>
                        <div class="fa fa-star" style="color: yellow"></div>
                        <div class="fa fa-star" style="color: yellow"></div>
                        <div class="fa fa-star" style="color: yellow"></div>
                        <div class="fa fa-star" style="color: yellow"></div>
                    </div>
                    <div class="p-1" style="background-color: yellow;  font-size: 15px">4.7</div>
                </div>
            </div>
        </div>

        <!---->
        <div class="col-md-8 mt-5 p-0">
            <header class="txt-line mb-3"><span class="fa fa-dice-one mr-5"></span><h5>امکانات</h5></header>
            <div class="row posts">

                <div class="col-md-6">
                    <article class="post">
                        <ul class="info">
                            <div><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-book-open mr-5"></span>داری مبل مجهز</div>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6">
                    <ul class="info">
                        <div><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-book-open mr-5"></span>داری مبل مجهز</div>
                    </ul>
                </div>

            </div>

            <header class="txt-line mb-3"><span class="fa fa-dice-two mr-5"></span><h5>مشخصات</h5></header>
            <div class="row posts ">

                <div class="col-md-6">
                    <article class="post">
                        <ul class="info">
                            <div><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-book-open mr-5"></span>داری مبل مجهز</div>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6">
                    <ul class="info">
                        <div><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-book-open mr-5"></span>داری مبل مجهز</div>
                    </ul>
                </div>

            </div>

            <header class="txt-line mb-3"><span class="fa fa-circle mr-5"></span><h5>امنیت</h5></header>
            <div class="row posts">

                <div class="col-md-6">
                    <article class="post">
                        <ul class="info">
                            <div><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                            <div><span class="fa fa-book-open mr-5"></span>داری مبل مجهز</div>
                        </ul>
                    </article>
                </div>

                <div class="col-md-6">
                    <ul class="info">
                        <div><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                        <div><span class="fa fa-book-open mr-5"></span>داری مبل مجهز</div>
                    </ul>
                </div>

            </div>
            <!--food-->
            <header class="txt-line mb-2"><span class="fa fa-dice-two mr-5"></span><h5>مینوی غذا</h5></header>

            <div class="row justify-content-center">
                <div class=" col-12 col-sm-6 col-md-6  col-lg-2 px-1  mt-4 small-device-hid ">
                    <div class="card " style="border-radius: 0%">
                        <img src="khana%20image/18.jpg" class="card-img-top card-img food-img" alt="">
                    </div>
                </div>

                <div class=" col-11 col-sm-6 col-md-6  col-lg-2 px-1 mt-4 ">
                    <div class="card " style="border-radius: 0%">
                        <img src="khana%20image/home1%20(2).jpg" class="card-img-top card-img food-img" alt="">
                    </div>
                </div>

                <div class=" col-11 col-sm-6 col-md-6  col-lg-2 px-1 mt-4 ">
                    <div class="card " style="border-radius: 0%">
                        <img src="khana%20image/bilding.jpg" class="card-img-top card-img food-img" alt="">
                    </div>
                </div>

                <div class=" col-11 col-sm-6 col-md-6  col-lg-2 px-1 mt-4 small-device-hid">
                    <div class="card " style="border-radius: 0%">
                        <img src="khana%20image/bilding%20(2).png" class="card-img-top card-img food-img" alt="">
                    </div>
                </div>

                <div class=" col-11 col-sm-6 col-md-6  col-lg-2 px-1 mt-4 small-device-hid">
                    <div class="card " style="border-radius: 0%">
                        <img src="khana%20image/bilding%20(2).png" class="card-img-top card-img food-img" alt="">
                    </div>
                </div>

                <div class=" col-11 col-sm-6 col-md-6  col-lg-2 px-1 mt-4 small-device-hid">
                    <div class="card " style="border-radius: 0%">
                        <img src="khana%20image/bilding%20(2).png" class="card-img-top card-img food-img" alt="">
                    </div>
                </div>

            </div>


            <!---->
        </div>
        <!---->

    </div>
</section>

<!-------bootstrap-js-link----------->
<script src="bootstraprtl/js/jquery-3.3.1.slim.min.js"></script>
<script src="bootstraprtl/js/bootstrap.js"></script>
<script src="bootstraprtl/js/fontawesome.js"></script>
<script src="bootstraprtl/js/proper.js"></script>

<script>
    $(document).ready(function () {
        $("#select-home-btn").click(function () {
            $("#call").show();
            $("#select-home").hide();
        });
    });
    //    image select

    $(document).ready(function () {
        $("#img1").click(function () {
            $("#image1").show();
            $("#image2, #image3,#image4").hide();
        });
        $("#img2").click(function () {
            $("#image2").show();
            $("#image1, #image3, #image4").hide();
        });

        $("#img3").click(function () {
            $("#image3").show();
            $("#image1, #image2, #image4").hide();
        });

        $("#img4").click(function () {
            $("#image4").show();
            $("#image1, #image2, #image3").hide();
        });

        $("#hamid").click(function () {
            $("#seemore").show();
        });
    });
</script>
</body>
</html>
