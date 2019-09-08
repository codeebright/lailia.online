@extends('layouts.master')
@section('title','خدمات نان و منیوی غذای')
@section('content')
    <div class="row">
        <div class="col-md-12">
    <div class="m-portlet__head-caption">
        <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

            <h3 class="m-portlet__head-text">مینوی غذای
            </h3>
        </div>
    </div>

    <form class="m-form m-form--fit m-form--label-align-right ">
        <div class="m-portlet__body">
            <div class="form-group m-form__group m--margin-top-10 ">
                <div class="alert m-alert m-alert--default" role="alert">
                  <div class="row ">
                      <div class="col-md-2 ">ایام هفته</div>
                      <div class="col-md-3 "> وقت غذای</div>
                      <div class="col-md-3 ">نوع غذا</div>
                      <div class="col-md-3 ">توضیحات</div>
                      <div class="col-md-1 "> حذف کردن</div>
                  </div>
                </div>
            </div>
            <div id="m_repeater_1">
                <div class="form-group  m-form__group row" id="m_repeater_1">
                    <div data-repeater-list="" class="col-lg-12">
                        <div data-repeater-item="" class="form-group m-form__group row align-items-center">
                            <div class="col-lg-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-envelope"></i>
																			</span>
                                    </div>
                                    <select class="form-control m-input form-control-danger" id="exampleSelect1" name="">
                                        <option>شنبه</option>
                                        <option>یکشبه</option>
                                        <option>دوشنبه</option>
                                        <option>سه شنبه</option>
                                        <option>چهار شنبه</option>
                                        <option>پنچ شنبه</option>
                                        <option>جمعه</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-envelope"></i>
																			</span>
                                    </div>
                                    <select class="form-control m-input form-control-danger" id="exampleSelect1">
                                        <option>صبح</option>
                                        <option>چاشت</option>
                                        <option>صبح</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="input-group">
                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-envelope"></i>
																			</span>
                                    </div>
                                    <select class="form-control m-input form-control-danger" id="exampleSelect1">
                                        <option>ثوپ</option>
                                        <option>شوربا</option>
                                        <option>برنج</option>
                                        <option>قورمه</option>
                                        <option>مکرانی</option>
                                        <option>کچالو</option>
                                        <option>بریانی</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-3">

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
                            <div class="col-md-1">
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
                            <div onclick="reapt_form()" data-repeater-create="" class="btn btn btn-primary m-btn m-btn--icon repeat-btn">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>علاوه</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="m-form__heading mt-5">
            <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="توضیحات مختصر درباره خدامات غذای ارایه کنید"></i> توضیحات عمومی خدمات نان</h3>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <textarea class="form-control" type="text" id="m_autosize_2" name="descrption" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;">مقرارت لیله را راعیت نماید </textarea>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions pull-left">
                <button type="submit" class="btn btn-primary">ذخیره</button>
                <button type="reset" class="btn btn-secondary">لغوه</button>
            </div>
        </div>

    </form>

@endsection
