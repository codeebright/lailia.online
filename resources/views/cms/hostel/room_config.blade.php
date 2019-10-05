@extends('layouts.master')
@section('title','تنظیمات اتاق')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                    <h3 class="m-portlet__head-text">
                        مشخات اتاق
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('room.store')}}">
                {{csrf_field()}}
                <div class="m-portlet__body">
                    <div class="form-group m-form__group m--margin-top-10">
                        <div class="alert m-alert m-alert--default" role="alert">
                            معلومات را بصورت دقیق خانه پوری نماید.
                        </div>
                    </div>

                    <div class="m-form__heading mt-3">
                        <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="مشخات اتاق را بصورت دقیق خانه پوری کنید"></i>  مشخصات</h3>
                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">نمبر اتاق:</label>
                            <input class="form-control m-input" name="room_number" placeholder="نمبر اتاق را وارید کیند">
                            </input>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">مساحت:</label>
                            <input class="form-control m-input" name="area" placeholder="مساحت تقریبی اتاق را وارید کنید">
                            </input>
                        </div>

                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label"> گنجایش کلی:</label>
                            <input type="text" class="form-control m-input" name="capacity" placeholder="اتاق چند نفر گنجایش دارد" value="">
                        </div>

                    </div>
                    <div class="form-group m-form__group row">
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">کنجایش فعلی:</label>
                            <input class="form-control m-input" name="need" placeholder="فعلا چند نفر ضرورت دارد">
                            </input>
                        </div>
                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label">کرای  اتاق:</label>
                            <input class="form-control m-input" name="room_rent" placeholder="اگر اتاق کرای هست کرای فی ماه را وارید کیند">
                            </input>
                        </div>

                        <div class="col-lg-4 m-form__group-sub">
                            <label class="form-control-label"> کرای فی نفر:</label>
                            <input type="text" class="form-control m-input" name="rent_per_person" placeholder="کرای فی نفر در هر ماه را وارید کنید" value="">
                        </div>

                    </div>

                    <div class="m-separator m-separator--dashed m-separator--lg"></div>
                    <div class="m-form__heading mt-3">
                        <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="امکانات اتاق را مشخص کنید."></i> امکانات اتاق </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="m-checkbox-inline">
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="1"> حمام
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="2"> انترنت
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="3"> کتابخانه
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="4"> پگه
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="5"> مرکز گرمی
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="6"> چپرکت
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="7"> الماری
                                <span></span>
                            </label>
                            <label class="m-checkbox">
                                <input type="checkbox" name="facility[]" value="8"> میزو چوکی
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                <div class="m-form__heading mt-3">
                    <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="توضیحات مختصر درباه اتاق ارایه کنید"></i> توضیحات درباره اتاق</h3>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea class="form-control" type="text" id="m_autosize_2" name="descrption" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;">توضیحات مختصر در باره اتاق واید کیند</textarea>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="m-dropzone dropzone m-dropzone--success dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-three">
                            <div class="m-dropzone__msg dz-message needsclick">
                                <h3 class="m-dropzone__msg-title">عکس های اتاق را برای بارگذاری در انیجا یکشید  ویا کیلیک کنید.</h3>
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
