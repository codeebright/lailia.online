@extends('layouts.master')
@section('title','جدول تنظمیات مینوی غذای')
@section('content')
    @push('food_menue')
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            اوقات غذای روزمره
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin::Section-->
                <div class="m-section">
                    <div class="m-section__content">
                        <table class="table table-striped m-table">
                            <thead>
                            <tr>
                                <th>ایام هفته</th>
                                <th>صبح</th>
                                <th>چاشت</th>
                                <th>شام</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">شنبه</th>
                                <td>چای</td>
                                <td>برنج</td>
                                <td>لوبیا</td>
                            </tr>
                            <tr>
                                <th scope="row">یک شنبه</th>
                                <td>شیر</td>
                                <td>قورمه</td>
                                <td>شورمه</td>
                            </tr>
                            <tr>
                                <th scope="row">دو شنبه</th>
                                <td>تخم</td>
                                <td>کباب</td>
                                <td>قابلی</td>
                            </tr>
                            <tr>
                                <th scope="row">سه شنبه</th>
                                <td>پنیر</td>
                                <td>عدس</td>
                                <td>کچالو</td>
                            </tr>
                            <tr>
                                <th scope="row">چهارشنبه</th>
                                <td>شیر</td>
                                <td>قورمه</td>
                                <td>شورمه</td>
                            </tr>
                            <tr>
                                <th scope="row">پنج شنبه</th>
                                <td>شیر</td>
                                <td>قورمه</td>
                                <td>شورمه</td>
                            </tr>
                            <tr>
                                <th scope="row"><b>جمعه</b></th>
                                <td>شیر</td>
                                <td>قورمه</td>
                                <td>شورمه</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--end::Section-->
            </div>

            <!--end::Form-->
        </div>
    @endpush
    <form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('food.store')}}">
        @csrf
        <div class="m-portlet__body">
            <div class="form-group  row">
                <label class="col-form-label col-lg-2 col-sm-12 mt-2">صبح هنگام</label>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_1" style="width: 130px">
                        <option selected="">صبح</option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">یک شبنه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_2" style="width: 130px">
                        <option selected=""></option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">دو شبنه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_3" style="width: 130px">
                        <option selected="">صبح</option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">سه شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_4" style="width: 130px">
                        <option selected="">صبح</option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">چهار شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_5"style="width: 130px">
                        <option selected="">صبح</option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">پنج شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_6" style="width: 130px">
                        <option selected="">صبح</option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">جمعه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_7" style="width: 130px">
                        <option selected="">صبح</option>
                        <option value="1">تخم با جای</option>
                        <option value="2">پنیر</option>
                        <option value="3">شیر</option>
                    </select>
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-lg-2 col-sm-12 ">چاشت</label>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_8" style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_9" style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_10" style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_11" style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_12"style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_13" style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_14" style="width: 130px">
                        <option selected="">چاشت</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-lg-2 col-sm-12">شام</label>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_15" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_16" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_17" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_18" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_19" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_20" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "name" id="m_select2_2_21" style="width: 130px">
                        <option selected="">شام</option>
                        <option value="1">قابلی</option>
                        <option value="2">کباب</option>
                        <option value="3">شورمه</option>
                        <option value="3">قورمه</option>
                    </select>
                </div>
            </div>
        <div class="m-form__heading mt-5">
            <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="توضیحات مختصر درباره خدامات غذای ارایه کنید"></i> توضیحات عمومی خدمات نان</h3>
        </div>
        <div class="form-group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <textarea class="form-control" type="text" id="m_autosize_2" name="descrption" rows="3" placeholder="قوانین مربوط به غذا را وارید کیند (نان لیلیه اختیاری بوده و دصورت داشتن مهمان باید پرداخت گردد)" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;"></textarea>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions pull-left">
                <button type="submit" class="btn btn-primary">ذخیره</button>
                <button type="reset" class="btn btn-secondary">لغوه</button>
            </div>
        </div>

        </div>

    </form>

@endsection
