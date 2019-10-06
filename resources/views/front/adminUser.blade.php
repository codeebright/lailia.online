@extends('layout_front.partials.adminParial.adminHead')

@section('head')
    <body class="container-fluid" dir="rtl">
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="اتاق یا نمبر بیستر را وارید کنید   " />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-comment-more"></i>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown js-dropdown">
                                    <div class="mess__title">
                                        <p>شما دو پیام جدید دارید</p>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                        </div>
                                        <div class="content">
                                            <h6>امان</h6>
                                            <p>سلام علیکم</p>
                                            <span class="time">۳ دقیقه پیش</span>
                                        </div>
                                    </div>
                                    <div class="mess__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                        </div>
                                        <div class="content">
                                            <h6>حسن</h6>
                                            <p>ببپخشید</p>
                                            <span class="time">دیروز</span>
                                        </div>
                                    </div>
                                    <div class="mess__footer">
                                        <a href="#">نمایش تمام مسج ها</a>
                                    </div>
                                </div>
                            </div>
                            <div class="  noti__item js-item-menu">
                                <i class="zmdi zmdi-email"></i>
                                <span class="quantity">1</span>
                                <div class="mess-dropdown email-dropdown js-dropdown">
                                    <div class="email__title">
                                        <p>سه ایمیل حدید دارید</p>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>درخواست تماس نموه است</p>
                                            <span>حسین, سه  دقیقه پیش</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>درخواست تماس نموده است</p>
                                            <span>باقر, دیروز</span>
                                        </div>
                                    </div>
                                    <div class="email__item">
                                        <div class="image img-cir img-40">
                                            <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                        </div>
                                        <div class="content">
                                            <p>درخواست تماس نموده است</p>
                                            <span>علی, April 12,,2018</span>
                                        </div>
                                    </div>
                                    <div class="email__footer">
                                        <a href="#">تمام ایمل را بیبنید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="quantity">3</span>
                                <div class="mess-dropdown notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>سه اگاهی دارید</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>شما یک اییمیل دریافت کردیدی</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-add"></i>
                                        </div>
                                        <div class="content">
                                            <p>حساب شما مسدودد میگردد</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>درخواست یک تماس شده است</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">تمام آگهی را ببنید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-turning-sign"></i>
                                <div class="mess-dropdown notifi-dropdown js-dropdown">
                                    <div class="notifi__title btn btn-block">
                                        <a href="" > خروج</a>
                                    </div>
                                    <!--       <div class="notifi__item">
                                               <div class="bg-c1 img-cir img-40">
                                                   <i class="zmdi zmdi-email-open"></i>
                                               </div>
                                               <div class="content">
                                                   <p>شما یک اییمیل دریافت کردیدی</p>
                                                   <span class="date">April 12, 2018 06:50</span>
                                               </div>
                                           </div>
                                           <div class="notifi__item">
                                               <div class="bg-c2 img-cir img-40">
                                                   <i class="zmdi zmdi-account-add"></i>
                                               </div>
                                               <div class="content">
                                                   <p>حساب شما مسدودد میگردد</p>
                                                   <span class="date">April 12, 2018 06:50</span>
                                               </div>
                                           </div>
                                           <div class="notifi__item">
                                               <div class="bg-c3 img-cir img-40">
                                                   <i class="zmdi zmdi-account-box"></i>
                                               </div>
                                               <div class="content">
                                                   <p>درخواست یک تماس شده است</p>
                                                   <span class="date">April 12, 2018 06:50</span>
                                               </div>
                                           </div>
                                           <div class="notifi__footer">
                                               <a href="#">تمام آگهی را ببنید</a>
                                           </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <!--<div class="account-item clearfix js-item-menu">
                          &lt;!&ndash;  <div class="content">
                                <a class="js-acc-btn" href="#">ali yousufi</a>
                            </div>
                            <div class="image">
                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>&ndash;&gt;

                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">ali yousufi</a>
                                        </h5>
                                        <span class="email">aliyousufi@gmail.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->
    <section >
        <div class="row">
            <!--sidebar section -->
            <div class="col-md-2" style="background-color:#e5e5e5; height: 300px">
                <!-- MENU SIDEBAR-->
                <aside class="menu-sidebar2  d-block">
                    <div class="logo">
                        <a href="#" >
                            <img src="images/icon/۱%20(1).png" alt="Cool Admin"  style="height: 65px">
                        </a>
                    </div>
                    <div class="menu-sidebar2__content js-scrollbar2">
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img src="images/icon/Ramazan.jpg" alt="عکس شخص" />
                            </div>
                            <h4 class="name">رمضان</h4>
                            <a href="#">یوسفی</a>
                        </div >

                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list nav nav-tabs" id="myTab" role="tablist">
                                <li class="active has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-tachometer-alt"></i> داشبورد
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list  nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item ">
                                            <a  class="nav-link " id="home-tab" data-toggle="tab"
                                                href="#home" role="tab" aria-controls="home" aria-selected="true">
                                                <i class="fas fa-tachometer-alt"></i>امار و لیست اتاق ها</a>
                                        </li>
                                        <li class="nav-item">
                                            <a  class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                                <i class="fas fa-tachometer-alt"></i>تنظیمات اتاق</a>
                                        </li>
                                        <!--  <li class="nav-item">
                                              <a  class="nav-link " id="contact-tab" data-toggle="tab"  href="#messages" role="tab" aria-controls="contact" aria-selected="false">
                                                  <i class="fas fa-tachometer-alt"></i></a>
                                          </li>-->
                                        <li class="nav-item">
                                            <a  class="nav-link " id="setting-tab" data-toggle="tab"  href="#settings" role="tab" aria-controls="contact" aria-selected="false">
                                                <i class="fas fa-tachometer-alt"></i>تنظیات خوابگاه</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="nav-item">
                                    <a href="inbox.html">
                                        <i class="fas fa-chart-bar"></i>باکس ورودی</a>
                                    <span class="inbox-num"></span>
                                </li>
                                <!--  <li>
                                      <a href="#">
                                          <i class="fas fa-shopping-basket"></i>eCommerce</a>
                                  </li>-->
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-trophy"></i>امکانات
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="table.html">
                                                <i class="fas fa-table"></i>جدول ها</a>
                                        </li>
                                        <li>
                                            <a href="form.html">
                                                <i class="far fa-check-square"></i>فورم</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-calendar-alt"></i>جانتری</a>
                                        </li>
                                        <li>
                                            <a href="map.html">
                                                <i class="fas fa-map-marker-alt"></i>نقشه</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-copy"></i>صفحات
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="login.html">
                                                <i class="fas fa-sign-in-alt"></i>ورود</a>
                                        </li>
                                        <li>
                                            <a href="register.html">
                                                <i class="fas fa-user"></i>ثبت کردن</a>
                                        </li>
                                        <li>
                                            <a href="forget-pass.html">
                                                <i class="fas fa-unlock-alt"></i>رمز عبور را فراموش کرده ام</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-desktop"></i>المینت های گرافیکی
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </aside>
                <!-- END MENU SIDEBAR-->

            </div>
            <div class="col-md-10 tab-content ml-0 mr-0 pl-0 pr-0" style="height: 100%">
                <!------------------------ BREADCRUMB  show the locaton of the user--------------------->
                <section class="au-breadcrumb m-t-75 ">
                    <div class="section__content section__content--p30">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">

                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">خانه</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">داشبورد</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END BREADCRUMB-->
                <!-----------------------------first tab the statistic and tabel content--------------------------->
                <div class="tab-pane active " id="home" role="tabpanel" style="background-color: #f5f5f5">
                    <!-- STATISTIC-->
                    <section class="statistic">
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" section__content--p30" style="padding-top: 50px">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item">
                                                <h2 class="number">۱۰۰</h2>
                                                <span class="desc">اتاق های پر</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-book"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item">
                                                <h2 class="number">۱۰</h2>
                                                <span class="desc">اتاق خالی</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item">
                                                <h2 class="number">۲۰۰</h2>
                                                <span class="desc">بیستر های پر</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-calendar-note"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="statistic__item">
                                                <h2 class="number">AF۱,۰۸۰,۵۷۶</h2>
                                                <span class="desc">مجموعه درامد ها</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- END STATISTIC-->

                    <!--------------------------------data table----------------------->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 pl-0 pr-0">
                                    <h3 class="title-5 m-b-35 m-t-75-35">جدول اتاق ها</h3>
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">تمام اتاق ها</option>
                                                    <option value="">اتاق های خالی</option>
                                                    <option value="">اتاق های پر</option>
                                                    <option value="">بستر ها</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="time">
                                                    <option selected="selected">اخرین</option>
                                                    <option value="">سه هفته پیش</option>
                                                    <option value="">یک هفته پیش</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <!-- <button class="au-btn-filter">
                                                 <i class="zmdi zmdi-filter-list"></i>filters</button>-->
                                        </div>
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <i class="zmdi zmdi-plus"></i>اذافه کردن اتاق</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>نمبر اتاق</th>
                                                <th>بیستر</th>
                                                <th>توضیحات</th>
                                                <th>گنجایش</th>
                                                <th>حالت</th>
                                                <th>قیمت</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>    <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>    <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>    <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>    <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>    <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>اتاق نمبر ۱</td>
                                                <td>
                                                    <span class="block-email">شش بیستر</span>
                                                </td>
                                                <td class="desc"> دو بستر خالی</td>
                                                <td>دو بستر خالی</td>
                                                <td>
                                                    <span class="status--process">اختیاری</span>
                                                </td>
                                                <td>AF ۶۰۰۰</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!--<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>-->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>








                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!-------------------room configeration part--------------------->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="col-md-12">
                        <div class="row mr-5 ml-5 emp-profile">
                            <div class="col-md-4 pl-3 mb-3">
                                <p class=" card-title  text-center font-size13 txt-linee  mt-5">مشخصات اتاق</p>
                                <form action="#" class="form-group">
                                    <input type="text" class="form-control mt-1" placeholder="نمبر اتاق" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="گنجایش کلی" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="گنجایش فعلی" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="حالت" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="مساحت" value="" required="">
                                </form>
                            </div>
                            <div class="col-md-4 ">
                                <p class=" card-title  text-center font-size13 txt-linee  mt-5">مشخصات اتاق</p>
                                <form action="" class="form-group ">
                                    <input type="text" class="form-control mt-1" placeholder="کرایه فی ما" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="مصارف آب" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="مصارف برق" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="مصارف متفرقه" value="" required="">
                                    <input type="text" class="form-control mt-1" placeholder="مساحت" value="" required="">
                                </form>
                            </div>
                            <div class="col-md-2 ">
                                <form action="" class="form-group">
                                    <p class=" card-title  text-center font-size13 txt-linee  mt-5">اتنتخاب امکانات</p>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2 ">
                                <form action="" class="form-group">
                                    <p class=" card-title  text-center font-size13 txt-linee  mt-5">اتنتخاب امکانات</p>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-collection">
                                        <div class="info-block block-info clearfix">
                                            <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                <label class="btn btn-default  fa fa-truck " style="    margin-right: 0; width: 100%;">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <h5 style="float: right">car</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <div class="row mr-5 ml-5 emp-profile ">

                            <div class="col-sm-12 col-md-12 mt-lg-2 pr-1">
                                <p class=" card-title  text-center font-size13 txt-linee mb-2 mt-2">توضیحات</p>
                                <div class="form-group">
                                    <textarea class="form-control" id="#" rows="6" placeholder="توضیحات درباره خوابگاه شما"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-lg-2 pl-3 pr-0">
                                <p class=" card-title  text-center font-size13 txt-linee mb-2 mt-2">بارگذاری عکس</p>
                                <form action="/file-upload" class="dropzone dz-clickable" id="my-dropzone">

                                    <div class="dz-message d-flex flex-column" >
                                        عکس درا در انیجا بکشید
                                    </div>
                                </form>
                            </div>
                            <button type="button" class="btn btn-primary " style="float: right">لغو کردن</button>
                            <button type="button" class="btn btn-primary " style="float: right">ذخیره</button>
                        </div>
                        <!--room pic galary-->
                        <div class="row mr-5 ml-5 emp-profile">
                            <div class="col-sm-12 col-md-12 mt-lg-2 ">

                                <div id="mdb-lightbox-ui"></div>
                                <div class="mdb-lightbox">
                                    <div class="row">
                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
                                                <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
                                            </a>
                                        </figure>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane" id="messages" role="tabpanel">.3..</div>
                <!--hostel and profiel configeration tab-->
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="container emp-profile">
                        <form method="post">
                            <div class="row justify-content-center">
                                <p class=" card-title  text-center font-size13 txt-linee  mt-5">مشخصات  صاحب لیلیه</p>
                                <div class="col-md-4 pl-5">
                                    <div class="profile-img  mt-1 mb-2 ">
                                        <img src="images/icon/Ramazan.jpg" alt="" style="height: 200px" />
                                        <div class="file btn btn-lg btn-primary">
                                            Change Photo
                                            <input type="file" name="file"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 pr-1">
                                    <form action="#" class="form-group">
                                        <input type="text" class="form-control mt-1 " placeholder="نام" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="تخلص" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="شماره تماس" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="ایمیل ادرس" value="" required="">

                                    </form>
                                </div>
                                <div class="col-md-4 pl-1 pr-5">
                                    <form action="#" class="form-group">
                                        <input type="text" class="form-control mt-1 " placeholder=" ولایت" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="نام کاربری" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="رمز عبور" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="تاید رمز عبور" value="" required="">
                                    </form>
                                </div>
                            </div>
                            <div class="btn btn-primary" style="float: left">ذخیره</div>
                        </form>
                    </div>

                    <div class="container emp-profile">
                        <form method="post">
                            <div class="col-md-12">
                                <div class="row mr-0 ml-0 ">
                                    <div class="col-md-4 pl-3 mb-3 ">
                                        <p class=" card-title  text-center font-size13 txt-linee  mt-5">مشخاصت خوابگاه</p>
                                        <form action="#" class="form-group">
                                            <input type="text" class="form-control mt-1" placeholder="نام" value="" required="">
                                            <input type="text" class="form-control mt-1" placeholder="ادرس" value="" required="">
                                            <input type="text" class="form-control mt-1" placeholder="شماره تماس" value="" required="">
                                            <input type="text" class="form-control mt-1" placeholder="ایمل ادرس" value="" required="">
                                            <input type="text" class="form-control mt-1" placeholder="نوع" value="" required="">
                                        </form>
                                    </div>
                                    <div class="col-md-8 pr-1 ">
                                        <p class=" card-title  text-center font-size13 txt-linee  mt-5">امکانات و خدامات</p>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <form action="#" class="form-group">
                                                    <input type="text" class="form-control mt-1 " placeholder="حمام" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="مرکز گرمی" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="اشپز خانه" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="خدمات کار" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder=" برق بیست جهار ساته" value="" required="">
                                                </form>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <form action="#" class="form-group">
                                                    <input type="text" class="form-control mt-1 " placeholder="حولی" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="کتاب خانه" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="ماشین لباس شوی" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="انترنت" value="" required="">
                                                    <input type="text" class="form-control mt-1 " placeholder="غذای عالی" value="" required="">
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">

                                <p class=" card-title  text-center font-size13 txt-linee mb-2 mt-2">توضیحات</p>
                                <div class="form-group ml-3">
                                    <textarea class="form-control" id="#" rows="6" placeholder="توضیحات درباره خوابگاه شما"></textarea>
                                </div>
                                <div class="btn btn-primary" style="float: left">ذخیره</div>

                            </div>
                        </form>

                    </div>
                    <div class="container emp-profile">
                        <form action="">
                            <p class=" card-title  text-center font-size13 txt-linee  mt-5">مینوی غذایی</p>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <p class=" card-title  text-center font-size13 txt-linee  mt-5">صبح</p>
                                    <form action="#" class="form-group">
                                        <input type="text" class="form-control mt-1 " placeholder="شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="یک شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="دو شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="سه شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" چهار شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" پنح شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" جمعه" value="" required="">
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <p class=" card-title  text-center font-size13 txt-linee  mt-5">چاشت</p>
                                    <form action="#" class="form-group">
                                        <input type="text" class="form-control mt-1 " placeholder="شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="یک شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="دو شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="سه شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" چهار شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" پنح شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" جمعه" value="" required="">
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <p class=" card-title  text-center font-size13 txt-linee  mt-5">شب</p>

                                    <form action="#" class="form-group">
                                        <input type="text" class="form-control mt-1 " placeholder="شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="یک شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="دو شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder="سه شنبه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" چهار شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" پنح شبنه" value="" required="">
                                        <input type="text" class="form-control mt-1 " placeholder=" جمعه" value="" required="">

                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="container emp-profile">
                        <div class="col-sm-12 col-md-12 mt-lg-2 pl-3 pr-0">
                            <p class=" card-title  text-center font-size13 txt-linee mb-2 mt-2">عکس های غذا را انیجا بکشید</p>
                            <form action="/file-upload" class="dropzone dz-clickable" id="my-dropzone">

                                <div class="dz-message d-flex flex-column" >
                                    عکس درا در انیجا بکشید
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Main JS-->
    </body>
@endsection










