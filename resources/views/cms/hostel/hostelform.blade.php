<!--begin::Form-->
{{--@if(isset($hostel))--}}
<form class="m-form m-form--fit m-form--label-align-rightx" method="post" action="" enctype="multipart/form-data">
    {{--@else--}}
    @csrf
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10">
            <div class="alert m-alert m-alert--default" role="alert">
                معلومات را بصورت دقیق خانه پوری نماید.
            </div>
        </div>
        <div class="m-form__heading mt-3">
            <h3 class="m-form__heading-title"><i data-toggle="m-tooltip" data-width="auto"
                                                 class="m-form__heading-help-icon flaticon-info" title=""
                                                 data-original-title="مشخصات خوابگه را بصورت دقیق خانه پوری نماید"></i>
                مشخصات</h3>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">نام خوابگاه :</label>
                <input class="form-control m-input" name="name" placeholder="نام خوابگاه را وارید کیند"
                       value="{{old('name', isset($hostel) ? $hostel->name: '')}}">
                </input>
            </div>
            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">شمار تماس:</label>
                <input class="form-control m-input" name="phone"
                       placeholder="شماره تماس خوبگاه را وارید کنید"
                       value="{{old('phone', isset($hostel) ? $hostel->phone: '')}}">
                </input>
            </div>

            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label"> ایمیل ادرس:</label>
                <input type="text" class="form-control m-input" name="email"
                       placeholder="ایمیل ادرس خوبگاه را وارید کنید"
                       value="{{old('email', isset($hostel) ? $hostel->email: '')}}">
            </div>
            <div class="form-group m-form__group col-md-4">
                <label class="form-control-label">نوعیت:</label>
                <select class="form-control m-input" name="type" id="type">
                    <option value="1" {{isset($hostel) && $hostel->type == 1 ? 'selected' : ''}}>مخصوص آقایان</option>
                    <option value="0" {{isset($hostel) && $hostel->type == 0 ? 'selected' : ''}}>مخصوص بانوان</option>
                </select>
            </div>
        </div>
        <div class="m-form__heading mt-3">
            <h3 class="m-form__heading-title"><i data-toggle="m-tooltip" data-width="auto"
                                                 class="m-form__heading-help-icon flaticon-info" title=""
                                                 data-original-title="آدرس خوابگا را دقیق وارید نماید تا محصلین به راحتی خوابگا را پیدا نماید."></i>
                آدرس</h3>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">ولایت :</label>
                <select class="form-control m-select2" id="m_select2_2_1" name="province">
                    <option value="{{old('province', isset($hostel->address) ? $hostel->address->province: '')}}">{{old('province', isset($hostel->address) ? $hostel->address->province: '')}}</option>
                    <option value="قندهار">قندهار</option>
                    <option value="مزار">مزار</option>
                    <option value="کابل">کابل</option>
                </select>
            </div>

            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label"> ناحیه :</label>
                <select class="form-control m-select2" id="m_select2_2_2" name="state">
                    <option value="{{old('state', isset($hostel->address) ? $hostel->address->state: '')}}">{{old('state', isset($hostel->address) ? $hostel->address->state: '')}}</option>
                    <option value="ناحیه اول">اول</option>
                    <option value="دوم">دوم</option>
                    <option value="سوم">سوم</option>
                    <option value="چهارم">چهارم</option>
                    <option value="سیزده هم">سیزده</option>
                    <option value="یازده هم">یازده</option>
                    <option value="پنجم">پنج</option>
                </select>
            </div>

            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">* سرک:</label>
                <select class="form-control m-select2" id="m_select2_2_8" name="rood">
                    <option value="{{old('rood', isset($hostel->address) ? $hostel->address->rood: '')}}">{{old('province', isset($hostel->address) ? $hostel->address->rood: '')}}</option>
                    <option value="شهید مزاری">شهید مزاری</option>
                    <option value="دارلامان">دارلامان</option>
                    <option value="کارته چهار">سرک کارته چهار</option>
                    <option value="پهنتون">سرک پهنتون</option>
                    <option value="خیرخانه">سرک خیر خانه</option>
                    <option value="پولی تخنیک">سرک پولی تخنیک</option>
                    <option value="کمپنی">سرک کمپنی</option>
                </select>
            </div>

        </div>
        <div class="form-group m-form__group row">
            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">* ایستگا:</label>
                <select class="form-control m-select2" id="m_select2_2_4" name="station">
                    <option value="{{old('station', isset($hostel->address) ? $hostel->address->station: '')}}">{{old('station', isset($hostel->address) ? $hostel->address->station: '')}}</option>
                    <option value="شفاخانه">شفاخانه</option>
                    <option value="گولای">گولای</option>
                    <option value="سرپل">سر پل</option>
                    <option value="نقاش">نقاش</option>
                    <option value="نانوای">نانوایی</option>
                    <option value="پل خشک">پل خشک</option>
                    <option value="مهتاب قلعه">مهتاب قلعه</option>
                </select>
            </div>
            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">* کوچه:</label>
                <select class="form-control m-select2" id="m_select2_2_5" name="alley">
                    <option value="{{old('alley', isset($hostel->address) ? $hostel->address->alley: '')}}">{{old('alley', isset($hostel->address) ? $hostel->address->alley: '')}}</option>
                    <option value="اولین">اولین</option>
                    <option value="دومین">دومین</option>
                    <option value="روبرو">روبرو</option>
                    <option value="عقب">سومین</option>
                    <option value="سومین">چهارومین</option>
                    <option value="چهارومین">پنحمین</option>
                    <option value="پنجمین">کنار سرک</option>
                </select>
            </div>
            <div class="col-lg-4 m-form__group-sub">
                <label class="form-control-label">* نمبر اپارتمان:</label>
                <select class="form-control m-select2" id="m_select2_2_7" name="home_number">
                    <option value="{{old('home_number', isset($hostel->address) ? $hostel->address->home_number: '')}}">{{old('home_number', isset($hostel->address) ? $hostel->address->home_number: '')}}</option>
                    <option value="یک">نمبر ۱</option>
                    <option value="دوم">نمبر ۲</option>
                    <option value="سوم">نمبر ۳</option>
                    <option value="چهارم">نمبر ۴</option>
                    <option value="پنجم">نمبر ۵</option>
                    <option value="ششم">نمبر ۶</option>
                    <option value="هفتم"> نمبر ۷</option>
                </select>
            </div>
        </div>
        <div class="m-separator m-separator--dashed m-separator--lg"></div>
        <div class="m-form__heading mt-3">
            <h3 class="m-form__heading-title"><i data-toggle="m-tooltip" data-width="auto"
                                                 class="m-form__heading-help-icon flaticon-info" title=""
                                                 data-original-title="آدرس خوابگا را دقیق وارید نماید تا محصلین به راحتی خوابگا را پیدا نماید."></i>
                امکانات وتجهیزات خوابگاه</h3>
        </div>
        <!-- <div id="m_repeater_1">
            <div class="form-group  m-form__group row" id="m_repeater_1">
                <div data-repeater-list="" class="col-lg-12">
                    <div data-repeater-item="" class="form-group m-form__group row align-items-center">
                        <div class="col-lg-5">

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select class="form-control m-input form-control-danger" id="exampleSelect1" name="facility_name[]">
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
        </div> -->
        <div class="form-group m-form__group row">
            <label class=" col-lg-12 col-sm-12 " style="">امکانات ترا انتخاب کیند</label>
            <div class="col-md-12 col-sm-12">


                <select class="form-control m-select2" id="m_select2_2_3" name="facility_name[]"
                        multiple="multiple">
                    <optgroup label="امکانات لیله را انتخاب کنید">
                      {{--  @foreach($hostel->facility as $id => $facility_id)
                            <option value="{{ $facility_id }}"> {{ $facility }} </option>
                        @endforeach--}}
                        <option value=" انترنت"> انترنت رایگان</option>
                        <option value="کتابخانه">کتابخانه</option>
                        <option value="حوض">حوض</option>
                        <option value="محیط سبز">محیط سبز</option>

                    </optgroup>
                </select>


            </div>
        </div>
    </div>
    <div class="m-separator m-separator--dashed m-separator--lg"></div>
    <div class="m-form__heading mt-3">
        <h3 class="m-form__heading-title"><i data-toggle="m-tooltip" data-width="auto"
                                             class="m-form__heading-help-icon flaticon-info" title=""
                                             data-original-title="توضیحات مختصر درباره قوانین ومقرارت لیلیه ارایه کنید"></i>
            توضیحات درباره خوابگاه</h3>
    </div>

    <div class="form-group m-form__group row">
        <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea class="form-control"
                                  placeholder="قوانین ومقرارت لیله را وارید کنید (از اشخاص مبتلا به مواد مخدر معذوریم)"
                                  type="text" id="m_autosize_2" name="description" rows="3"
                                  style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;">
                            {{old('description', isset($hostel) ? $hostel->description: '')}}

                        </textarea>
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="m-dropzone dropzone m-dropzone--success dz-clickable form-Controller" action="{{url('hostel/photos')}}" id="m-dropzone-three" name="file">
                <div class="m-dropzone__msg dz-message needsclick">
                    <h3 class="m-dropzone__msg-title">عکس های خوابگاه را برای اپلود دراینجا بکشید ویا کیلیک
                        کیند.</h3>
                    <span class="m-dropzone__msg-desc">تنها عکس قابل بارگذاری میباشد</span>
                </div>
            </div>
        </div>
    </div>

    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions pull-left">
            <button type="submit" class="btn btn-primary" name="submit">ذخیره</button>
            <button type="reset" class="btn btn-secondary">لغوه</button>
        </div>
    </div>
</form>

<!--end::Form-->