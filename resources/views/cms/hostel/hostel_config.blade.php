@extends('layouts.master')
@section('title','اضافه نمودن خوابگاه')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

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
             {{--       <div class="row">
                        <div class="col-md-4">
                            <div class="form-group m-form__group">
                                <label>نام خوابگاه</label>
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" name="name" placeholder="نام خوابگاه">
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-map-marker"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label>شماره تماس</label>
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" name="phone" placeholder="شماره تماس">
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-map-marker"></i></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group m-form__group">
                                <label>ایمل آدرس</label>
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" name="email" placeholder="ایمیل ادرس">
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-map-marker"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label class="form-control-label">نوعیت:</label>
                                <select class="form-control m-input" name="type">
                                    <option value="">یگ گزینه را انتخاب نماید.</option>
                                    <option value="1">پسرانه</option>
                                    <option value="2">دخترانه</option>
                                </select>
                            </div>
                        </div>
                        <div class="com-md-4"></div>
                    </div>--}}
                    <div class="m-form__heading mt-3">
                        <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="مشخصات خوابگه را بصورت دقیق خانه پوری نماید"></i>  مشخصات</h3>
                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">نام خوابگاه :</label>
                            <input class="form-control m-input" name="name" placeholder="نام خوابگاه را وارید کیند">
                            </input>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">شمار تماس:</label>
                            <input class="form-control m-input" name="phone" placeholder="شماره تماس خوبگاه را وارید کنید">
                            </input>
                        </div>

                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label"> ایمیل ادرس:</label>
                            <input type="text" class="form-control m-input" name="email" placeholder="ایمیل ادرس خوبگاه را وارید کنید" value="">
                        </div>
                        <div class="form-group m-form__group col-md-4">
                            <label class="form-control-label">نوعیت:</label>
                            <select class="form-control m-input" name="type">
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
                                <option value="01">01</option>
                            </select>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label"> ناحیه   :</label>
                            <select class="form-control m-input" name="state">
                                <option value="">یگ گزینه را انتخاب نماید.</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>

                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* سرک:</label>
                            <input type="text" class="form-control m-input" name="street" placeholder="" value="">
                        </div>

                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* ایستگا:</label>
                            <input type="text" class="form-control m-input" name="alley" placeholder="" value="">
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">* کوچه:</label>
                            <input type="text" class="form-control m-input" name="sstation" placeholder="" value="">
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
																			<span class="input-group-text">
																				<i class="la la-envelope"></i>
																			</span>
                                            </div>
                                            <select class="form-control m-input form-control-danger" id="exampleSelect1" name="">
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
																			<span class="input-group-text">
																				<i class="la la-envelope"></i>
																			</span>
                                            </div>
                                            <input class="form-control m-input form-control-danger" id="exampleSelect1">

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
                        <textarea class="form-control" type="text" id="m_autosize_2" name="descrption" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;">مقرارت لیله را راعیت نماید </textarea>
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