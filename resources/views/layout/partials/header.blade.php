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
                    <a class="nav-link hvr-underline-from-center" href="kh_mainPage.html">خابگاه</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-center"  data-toggle="modal" data-target="#exampleModal" href="#">ثبت معامله<span class="pipe-line mr-2 ml-2" style="color: #ffffff">/</span>ورود</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- Modal -->
<div class=" modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="card-title modal-dialog modal-lg" role="document">
        <div class=" modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class=" modal-body  ">
                <div class="container-fluid">
                    <div class="row justify-content-center" style="min-height: 25vh;">
                        <div class="col-md-10">
                            <form action="" method="post" id="form-data">
                                <!--1st-->
                                <div id="first">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 custom-center">
                                            <h6 class="custom-txt font-size13 text-center"><b>ورود به حساب</b></h6>
                                            <div class="justify-content-center thin-underline-style mb-0" style="width: 100%"></div>

                                            <div class="input-group mb-1 mt-2">
                                                <input type="text" class="form-control custom-border-dark"
                                                       placeholder="نام" aria-label="Username"
                                                       aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control custom-border-dark"
                                                       placeholder="رمزعبور" aria-label="Username"
                                                       aria-describedby="basic-addon1">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-md-1 ml-0">
                                                    <button type="submit" class="btn-dark btn-lg btn-block" style="border-radius: unset;width: 100%;padding: 0 0 4px 0">ورود</button>
                                                </div>
                                                <div class="col-md-6 pl-md-1  mr-0">
                                                    <a href="#" class="btn btn-primary btn-lg " id="next-1" style="border-radius: unset; width: 100%;padding: 3px 0 3px 0;">ثبت جدید</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--next2-->
                                <div class="mt-5" id="second">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <span class="fa fa-home d-flex justify-content-center " style="font-size: 50px"></span>
                                            <!---txt-line--->
                                            <p class=" card-title  text-center font-size13 txt-linee mb-2">ثیت نمودن خوابگاه</p>
                                            <div class="card-body p-0 m-0">
                                                <div class="list-group">
                                                    <input type="text" class="form-control mb-1" placeholder="نام خوابگاه">
                                                    <input type="text" class="form-control mb-1" placeholder="آدرس خوابگا">
                                                    <input type="text" class="form-control mb-1" placeholder="شماره تماس">
                                                    <input type="text" class="form-control mb-1" placeholder="ایمل ادرس">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end mt-2 mb-3">
                                                <div class=" col-md-6  pr-1" style="width: 90%">
                                                    <button type="button" class="button-shadow btn btn-lg btn-block btn-primary btn-dark " style="border-radius: unset;" id="prev-2" >قبلی</button>
                                                </div>
                                                <div class=" col-md-6 pl-1" style="width: 90%">
                                                    <button type="submit" class="button-shadow btn btn-lg btn-block btn-primary " style="border-radius: unset" >ثبت </button>
                                                </div>

                                            </div>
                                            <div class="row justify-content-center mt-5">

                                            </div>
                                        </div>
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