@extends('layout_front.mainlayout')

@section('content')

<!doctype html>
<html lang="en">
<head>

    <style>
        .sticky {
            z-index: 55;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            height: 300px;
            margin-bottom: 60px;
        }

        .new-post header,
        .posts header {
            /* margin-bottom: 20px; */
        }

        .posts .post {
            /* padding-right: 10px; */
            /* border-right: 3px solid #888888; */
            /* margin-bottom: -1px;*/
        }

        .info {
            color: #6c757d;
            font-size: 13px;
            margin-right: 5.1rem;
            /* font-style: italic; */
        }

        #call, #image2, #image3, #image4 {
            display: none;
        }

        .txt-line {
            display: flex;
            flex-direction: row;
            text-align: center;
        }

        .txt-line:after {
            content: "";
            flex: 1 1;
            border-bottom: 1px solid #dddddd;
            margin: 6px 16px 5px 10rem;
        }

        .food-line {
            border-bottom: 2px solid #000000;
            width: 60px;
        }

        .rounded-circle {
            border: 5px solid #e8ebee;
        }
        .food, .card{
            border: unset;
        }

    </style>
</head>
<body dir="rtl" style="background-color: #f8f9fa">
<!-- Room-Detail -->
<div class="container">

    <section class="container r-detail mt-5 pb-5">
        <div class="row">
            <div class="col-md-12 col-lg-8 px-2 ">

                <div class="card card-shadow c-radius">
                    <div id="aks">
                        <img id="image1" src="photo/modern.jpg" alt="" style="width: 100%; height: 280px;">
                        <img id="image2" src="photo/benze.jpg" alt="" style="width: 100%; height: 280px;">
                        <img id="image3" src="photo/food.jpg" alt="" style="width: 100%; height: 280px;">
                        <img id="image4" src="photo/afg.png" alt="" style="width: 100%; height: 280px;">
                    </div>
                </div>

                <div class="row">

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

            <!-- Sticky -->
            <div class=" col-12 col-md-10 col-lg-4 sticky">
                <div class="card c-shadow c-radius">
                    <div class="card-body" style="height: 360px">
                        <!-- card-body -->
                        <div class="row">
                            <div class="card-body">
                                <div class="row justify-content-center">

                                    <div class="col-6 text-center mt-5">
                                        <span class="fa fa-hospital" style="font-size: 40px"></span>
                                        <p class="mt-"> لیلیه علی</p>
                                        <h6 class="mt-4"> منتشر کننده</h6>
                                        <h6 class="mt-1">لیلیه علی</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5">

                            <button class="btn btn-outline-dark pl-3 pr-3 pt-2 pb-2">اتاق را پسندیدم</button>
                        </div>
                    </div>  <!-- End-card-body-->
                </div>
            </div>
            <!-- End-sticky -->

            <div class="col-md-8 p-0  pr-4">
                <h5 class="mt-5 mb-2">توضیحات</h5>

                <p class="" style="color: #6c757d">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی
                </p>
            </div>
            <!-- view -->
            <div class="col-md-4 mt-5">
                <h5 class="mb-1">تعداد بازدید کنندگان</h5>
                <h6 class="mb-3">تعداد بازدید 100 نفر</h6>
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <div class="fa fa-star" style="color: #00a69a"></div>
                        <div class="fa fa-star" style="color: #00a69a"></div>
                        <div class="fa fa-star" style="color: #00a69a"></div>
                        <div class="fa fa-star" style="color: #00a69a"></div>
                        <div class="fa fa-star" style="color: #00a69a"></div>
                    </div>
                    <div class="p-1" style="background-color: #00a69a;  font-size: 15px">4.7</div>
                </div>
            </div>
            <!-- End-view -->

            <div class="col-md-8 mt-5 p-0">
                <header class="txt-line mb-4"><span class=""></span><h5>امکانات</h5></header>
                <div class="row posts">

                    <div class="col-md-6">
                        <article class="post">
                            <div class="info">
                                <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <div class="info pl-3">
                            <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                        </div>
                    </div>

                </div>

                <header class="txt-line mb-3"><span class=""></span><h5>مشخصات</h5></header>
                <div class="row posts ">

                    <div class="col-md-6">
                        <article class="post">
                            <div class="info">
                                <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <div class="info pl-3">
                            <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                        </div>
                    </div>

                </div>

                <header class="txt-line mb-3"><span class=""></span><h5>امنیت</h5></header>
                <div class="row posts">


                    <div class="col-md-6">
                        <article class="post">
                            <div class="info">
                                <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                                <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <div class="info pl-3">
                            <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-coffee mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-utensil-spoon mr-5"></span>داری مبل مجهز</div>
                            <div class="mb-1"><span class="fa fa-wifi mr-5"></span>داری مبل مجهز</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<!-- Food menu -->
<section class="container-fluid food pt-5 pb-5" style="background-color: #ffffff">
    <div class="container pb-3">
        <h4 class="text-center">مینوی غذا</h4>
        <div class="d-flex justify-content-center">
            <!--Line-->
            <div class="food-line mt-4"></div>
            <!--End Line-->
        </div>

        <div class="d-flex justify-content-center mt-5" style="color: #6c757d">
            <div class="col-md-6">
                <p class="text-center">
                    غذا های که در این لیلیه سرف میشود.
                    غذا های که در این لیلیه سرف میشود.
                    غذا های که در این لیلیه سرف میشود.
                </p>
            </div>
        </div>
        <!--Image-Menu-->
        <div class="col-md-12 mt-5 ">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 thumb">
                                    <img src="photo/food-5.jpg" class="img-thumbnail rounded-circle" alt="Cinque Terre"
                                         style="height: 85px; width: 85px;">
                                </div>
                                <div class="col-md-7 menu-content">
                                    <h4 class="mt-4"><a href="#">گوشت</a></h4>
                                    <p class="text-muted mt-1">در هفته سه وعده </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 thumb">
                                    <img src="photo/food-5.jpg" class="img-thumbnail rounded-circle" alt="Cinque Terre"
                                         style="height: 85px; width: 85px;">
                                </div>
                                <div class="col-md-7 menu-content">
                                    <h4 class="mt-4"><a href="#">گوشت</a></h4>
                                    <p class="text-muted mt-1">در هفته سه وعده </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 thumb">
                                    <img src="photo/food-5.jpg" class="img-thumbnail rounded-circle" alt="Cinque Terre"
                                         style="height: 85px; width: 85px;">
                                </div>
                                <div class="col-md-7 menu-content">
                                    <h4 class="mt-4"><a href="#">گوشت</a></h4>
                                    <p class="text-muted mt-1">در هفته سه وعده </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Food menu -->

</body>
</html>

@endsection
