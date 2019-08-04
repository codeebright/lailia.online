@extends('layout.mainlayout')

@section('content')
    <section class="container-fluid mt-4 header1 " id="myHeader" style="background-color:lightgray;height: 75px">
        <section class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="input-group mb-2 mt-3">
                        <input type="text" class="form-control custom-border-left custom-border-dark" placeholder="ادرس اتاق و یا خوابگا را وارید کنید" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button  class="btn btn-outline-secondary search-box-btn btn-lg" type="button">جستجو</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-3 ">

                    <select class="form-control form-control-lg btn mt-3" type="button" style="height: 50px;border-radius: unset" >
                        <option>بر اسساس ارازنترین </option>
                        <option>بر اسساس بهترین</option>
                        <option>بر استاس بشترین بازدید</option>
                    </select>


                </div>
            </div>

        </section>


    </section>

    <section class="container custom-margin ">
        <h5 class="text-center" style="text-shadow:  1px 1px 2px black; color: #1b1e21">مجموعه ما با ۲۰۰۰ خوابگا در سطح کشور</h5>
        <div class="justify-content-center thin-underline-1"></div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/18.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>بانوان</b></p></div>
                            <div class="custom-prices card-text text-left">کرایه /ما ۵۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : برچی ایستاگا نانوای داخل کوجه</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/home1%20(2).jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class=" card-text">آدرس: نارسیده به چهار راهی شهدای روشنای</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 ">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding.jpg" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>تابش</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ماه ۸۰۰۰</div>
                            <div class="row mt-3">
                                <div class=" col-md-12 mb-2 ">
                                    <span class="card-text">آدرس : نارسیده به جهار راهی دهمزنگ</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" col-11 col-sm-6 col-md-6  col-lg-3 px-1 mt-4 small-device-hid">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <img  src="khana%20image/bilding%20(2).png" class="card-img-top card-img custom-card-img-height" alt="">
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>کامل</b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه بر ما ۴۵۰۰</div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                    <span class="card-text">  آدرس : کارته جهار پهلوی پارک ابی کابل</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
<b></b>