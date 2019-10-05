@extends('layouts.master')
@section('title','اضافه نمودن خوابگاه')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
@include('layouts.partials.errors');
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                    <h3 class="m-portlet__head-text">
                        مشخصات خوابگاه
                    </h3>
                </div>
            </div>


            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('hostel.store')}}">
                {{csrf_field()}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group m--margin-top-10">
                        <div class="alert m-alert m-alert--default" role="alert">
                            معلومات را بصورت دقیق خانه پوری نماید.
                        </div>
                    </div>
                    <div class="m-form__heading mt-3">
                        <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="مشخصات خوابگه را بصورت دقیق خانه پوری نماید"></i>  مشخصات</h3>
                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">نام خوابگاه :</label>
                            <input class="form-control m-input" name="name" placeholder="نام خوابگاه را وارید کیند" value="{{old('name')}}">
                            </input>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">شمار تماس:</label>
                            <input class="form-control m-input" name="phone" placeholder="شماره تماس خوبگاه را وارید کنید"  value="{{old('phone')}}">
                            </input>
                        </div>

                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label"> ایمیل ادرس:</label>
                            <input type="text" class="form-control m-input" name="email" placeholder="ایمیل ادرس خوبگاه را وارید کنید"  value="{{old('email')}}">
                        </div>
                        <div class="form-group m-form__group col-md-4">
                            <label class="form-control-label">نوعیت:</label>
                            <select class="form-control m-input" name="type" id="type" >
                                <option value="">یگ گزینه را انتخاب نماید.</option>
                                <option value="1">پسرانه</option>
                                <option value="2">دخترانه</option>
                            </select>
                        </div>

                    </div>


                    <div class="m-form__heading mt-3">
                        <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="آدرس خوابگا را دقیق وارید نماید تا محصلین به راحتی خوابگا را پیدا نماید."></i>  آدرس</h3>
                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">ولایت :</label>
                            <select class="form-control m-input" name="province">
                                <option value="01">هرات</option>
                                <option value="01">قندهار</option>
                                <option value="01">مزار</option>
                                <option value="01">کابل</option>
                            </select>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label"> ناحیه   :</label>
                            <select class="form-control m-input" name="state">
                                <option value="">لیله شما مربوط کدام  ناحیه میگردد</option>
                                <option value="2018">اول</option>
                                <option value="2019">دوم</option>
                                <option value="2020">سوم</option>
                                <option value="2021">چهارم</option>
                                <option value="2022">سیزده</option>
                                <option value="2023">یازده</option>
                                <option value="2024">پنج</option>
                            </select>
                        </div>

                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* سرک:</label>
                            <select class="form-control m-input" name="rood">
                                <option value="">لیلیه شما در کدام سرک موقعیت دارد</option>
                                <option value="2018">شهید مزاری</option>
                                <option value="2019">دارلامان</option>
                                <option value="2020">سرک کارته چهار</option>
                                <option value="2021">سرک پهنتون</option>
                                <option value="2022">سرک خیر خانه</option>
                                <option value="2023">سرک پولی تخنیک</option>
                                <option value="2024">سرک کمپنی</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* ایستگا:</label>
                            <select class="form-control m-input" name="station">
                                <option value="">لیلیه شما مربوط کدام ایستگاهیگردد</option>
                                <option value="2018">شفاخانه</option>
                                <option value="2019">گولای</option>
                                <option value="2020">سر پل</option>
                                <option value="2021">نقاش</option>
                                <option value="2022">نانوایی</option>
                                <option value="2023">پل خشک</option>
                                <option value="2024">مهتاب قلعه</option>
                            </select>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* کوچه:</label>
                            <select class="form-control m-input" name="alley">
                                <option value="">لیله در چندمین کوچه از استگاه موقعیت دارد</option>
                                <option value="2018">اولین</option>
                                <option value="2019">دومین</option>
                                <option value="2020">روبرو</option>
                                <option value="2021">سومین</option>
                                <option value="2022">چهارومین</option>
                                <option value="2023">پنحمین</option>
                                <option value="2024">کنار سرک</option>
                            </select>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* نمبر اپارتمان:</label>
                            <select class="form-control m-input" name="home_number">
                                <option value="">چندمین خانه از کوچه</option>
                                <option value="2018">نمبر ۱</option>
                                <option value="2019">نمبر ۲</option>
                                <option value="2020">نمبر ۳</option>
                                <option value="2021">نمبر ۴</option>
                                <option value="2022">نمبر ۵</option>
                                <option value="2023">نمبر ۶</option>
                                <option value="2024"> نمبر ۷</option>
                            </select>
                        </div>
                    </div>
                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                    <div class="m-form__heading mt-3">
                        <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="آدرس خوابگا را دقیق وارید نماید تا محصلین به راحتی خوابگا را پیدا نماید."></i> امکانات وتجهیزات خوابگاه</h3>
                    </div>
                    <div id="m_repeater_1">
                        <div class="form-group  m-form__group row" id="m_repeater_1">
                            <div data-repeater-list="" class="col-lg-12">
                                <div data-repeater-item="" class="form-group m-form__group row align-items-center">
                                    <div class="col-lg-5">

                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select class="form-control m-input form-control-danger" id="exampleSelect1" name="facility_name">
                                                <option>حمام</option>
                                                <option>انترنت</option>
                                                <option>حولی</option>
                                                <option>کتابخانه</option>
                                                <option>محیط سبز</option>
                                                <option>پرسونل</option>
                                                <option>خدمتکار</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="col-lg-5">

                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input class="form-control m-input form-control-danger" id="exampleSelect1" name="descrption">

                                            </input>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
																<span>
																	<i class="la la-trash-o"></i>
																	<span> حذف</span>
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-form__group form-group row">

                            <div class="col-lg-4">
                                <div class="col ml-3">
                                    <div data-repeater-create="" class="btn btn btn-primary m-btn m-btn--icon ">
																<span>
																	<i class="la la-plus"></i>
																	<span>علاوه</span>
																</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                <div class="m-form__heading mt-3">
                    <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="توضیحات مختصر درباره قوانین ومقرارت لیلیه ارایه کنید"></i> توضیحات درباره خوابگاه</h3>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea class="form-control" placeholder="قوانین ومقرارت لیله را وارید کنید (از اشخاص مبتلا به مواد مخدر معذوریم)" type="text" id="m_autosize_2" name="descrption" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;"></textarea>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="m-dropzone dropzone m-dropzone--success dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-three">
                            <div class="m-dropzone__msg dz-message needsclick">
                                <h3 class="m-dropzone__msg-title">عکس های خوابگاه را برای اپلود دراینجا بکشید ویا کیلیک کیند.</h3>
                                <span class="m-dropzone__msg-desc">تنها عکس قابل بارگذاری میباشد</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions pull-left">
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                        <button type="reset" class="btn btn-secondary">لغوه</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>
    </div>
@endsection

{{--@include('layouts.partials.m-content')--}}
