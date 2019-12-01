@extends('layouts.master')
@section('title','ویرایش مینو غذایی')
@section('content')

    <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{route('food.update')}}">
        @csrf
        <div class="m-portlet__body">
            <div class="form-group  row">
                <label class="col-form-label col-lg-2 col-sm-12 mt-2">صبح هنگام</label>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_1" id="m_select2_2_1" style="width: 130px">
                       {{selectFoodMenue($food_menu,1,1)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">یک شبنه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_2" id="m_select2_2_2" style="width: 130px">
                      {{selectFoodMenue($food_menu,1,2)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">دو شبنه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_3" id="m_select2_2_3" style="width: 130px">
                        {{selectFoodMenue($food_menu,1,3)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">سه شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_4" id="m_select2_2_4" style="width: 130px">
                        {{selectFoodMenue($food_menu,1,4)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">چهار شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_5" id="m_select2_2_5"style="width: 130px">
                        {{selectFoodMenue($food_menu,1,5)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">پنج شنبه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_6" id="m_select2_2_6" style="width: 130px">
                        {{selectFoodMenue($food_menu,1,6)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <label for="exampleInputEmail1 " class="mb-2 pl-2">جمعه</label>
                    <div></div>
                    <select class="form-control m-select2" name= "1_7" id="m_select2_2_7" style="width: 130px">
                        {{selectFoodMenue($food_menu,1,7)}}
                    </select>
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-lg-2 col-sm-12 ">چاشت</label>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_1" id="m_select2_2_8" style="width: 130px">
                        {{selectFoodMenue($food_menu,2,1)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_2" id="m_select2_2_9" style="width: 130px">
                        {{selectFoodMenue($food_menu,2,2)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_3" id="m_select2_2_10" style="width: 130px">
                        {{selectFoodMenue($food_menu,2,3)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_4" id="m_select2_2_11" style="width: 130px">
                        {{selectFoodMenue($food_menu,2,4)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_5" id="m_select2_2_12"style="width: 130px">
                        {{selectFoodMenue($food_menu,2,5)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_6" id="m_select2_2_13" style="width: 130px">
                        {{selectFoodMenue($food_menu,2,6)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "2_7" id="m_select2_2_14" style="width: 130px">
                        {{selectFoodMenue($food_menu,2,7)}}
                    </select>
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-lg-2 col-sm-12">شام</label>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_1" id="m_select2_2_15" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,1)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_2" id="m_select2_2_16" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,2)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_3" id="m_select2_2_17" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,3)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_4" id="m_select2_2_18" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,4)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_5" id="m_select2_2_19" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,5)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_6" id="m_select2_2_20" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,6)}}
                    </select>
                </div>
                <div class="form-group  pr-1 ">
                    <div></div>
                    <select class="form-control m-select2" name= "3_7" id="m_select2_2_21" style="width: 130px">
                        {{selectFoodMenue($food_menu,3,7)}}
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
        <div class="m-portlet__foot m-portlet__foot--fit mb-5">
            <div class="m-form__actions pull-left">
                <button type="submit" class="btn btn-primary">ذخیره</button>
                <button type="reset" class="btn btn-secondary">لغوه</button>
            </div>
        </div>

        </div>
    </form>

@endsection
