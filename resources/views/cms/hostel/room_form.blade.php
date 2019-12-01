<!--begin::Form-->
<form class="m-form m-form--fit m-form--label-align-right" method="post" action="">
    @csrf

    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10">
            <div class="alert m-alert m-alert--default" role="alert">
                معلومات را بصورت دقیق خانه پوری نماید.
            </div>
        </div>

        <div class="m-form__heading mt-3">
            <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="مشخات اتاق را بصورت دقیق خانه پوری کنید"></i>  مشخصات</h3>
        </div>
        <div class="form-group m-form__group row ">

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="m-form__group-sub">
                    <label class="form-control-label">نمبر اتاق:</label>
                    <select class="form-control m-select2" id="m_select2_2_1" name="room_number">
                        <option value="{{old('room_number', isset($rooms) ? $rooms->room_number: '')}}">{{old('room_number', isset($rooms) ? $rooms->room_number: '')}}</option>
                        <option value="002">002</option>
                        <option value="003">003</option>
                        <option value="004">004</option>
                        <option value="005">005</option>
                        <option value="006">006</option>
                        <option value="007">007</option>
                        <option value="008">008</option>
                        <option value="009">009</option>
                        <option value="010">0010</option>
                        <option value="011">0011</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="m-form__group-sub">
                    <label class="form-control-label">کرایه ماهانه اتاق:</label>
                    <select class="form-control m-select2" id="m_select2_2_2" name="room_rent">
                        <option value="{{old('room_rent', isset($rooms) ? $rooms->room_rent: '')}}">{{old('room_rent', isset($rooms) ? $rooms->room_rent: '')}}</option>
                        <option value="1000">1000</option>
                        <option value="1500">1500</option>
                        <option value="2000">2000</option>
                        <option value="2500">2500</option>
                        <option value="3000">3000</option>
                        <option value="3500">3500</option>
                        <option value="4000">4000</option>
                        <option value="4500">4500</option>
                        <option value="5000">5000</option>
                        <option value="5500">5500</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="m-form__group-sub">

                    <label class="form-control-label">مساحت:</label>
                    <select class="form-control m-select2" id="m_select2_2_3" name="area">
                        <option value="{{old('area', isset($rooms) ? $rooms->area: '')}}">{{old('area', isset($rooms) ? $rooms->area: '')}}</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="form-group m-form__group row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="m-form__group-sub">
                    <label class="form-control-label">گنجایش کلی اتاق:</label>
                    <select class="form-control m-select2" id="m_select2_2_4" name="total_bed">
                        <option value="{{old('total_bed', isset($rooms) ? $rooms->total_bed: '')}}">{{old('total_bed ', isset($rooms) ? $rooms->total_bed: '')}}</option>
                        <option value="2">دو نفر</option>
                        <option value="3">سه نفر</option>
                        <option value="4">چهار نفر</option>
                        <option value="5">پنچ نفر</option>
                        <option value="6">شش نفر</option>
                        <option value="7">هفت نفر</option>
                        <option value="8">هشت نفر</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="m-form__group-sub">
                    <label class="form-control-label">گنجایش فعلی:</label>
                    <select class="form-control m-select2" id="m_select2_2_5" name="empty_bed">
                        <option value="{{old('empty_bed', isset($rooms) ? $rooms->empty_bed: '')}}"> {{old('empty_bed', isset($rooms) ? $rooms->empty_bed: '')}}</option>
                        <option value="2">  دو نفر</option>
                        <option value="3">  سه نفر</option>
                        <option value="4">  چهارنفر</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="m-form__group-sub">
                    <label class="form-control-label">خدامات نان</label>
                    <select class="form-control " name="food_service">
                        <option value="1" {{isset($hostel) && $hostel->food_service == 1 ? 'selected' : ''}}>باخدمات نان</option>
                        <option value="0" {{isset($hostel) && $hostel->food_service == 0 ? 'selected' : ''}}>بدون خدمات نان</option>
                    </select>
                </div>
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

        <div class="m-separator m-separator--dashed m-separator--lg"></div>
        <div class="m-form__heading mt-3">
            <h3 class="m-form__heading-title"> <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="توضیحات مختصر درباه اتاق ارایه کنید"></i> توضیحات درباره اتاق</h3>
        </div>

        <div class="form-group m-form__group row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <textarea class="form-control" type="text" id="m_autosize_2" placeholder="توضیحات مختصر درباره اتاق ( دارای دو پنجره از طرف شرق میباشد)" name="room_description" rows="3" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 72px;">{{old('room_description', isset($rooms) ? $rooms->room_description: '')}}</textarea>
            </div>
        </div>

          <!-- <div class="form-group m-form__group row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="m-dropzone dropzone m-dropzone--success dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-three">
                      <div class="m-dropzone__msg dz-message needsclick">
                          <h3 class="m-dropzone__msg-title">عکس های اتاق را برای بارگذاری در انیجا یکشید  ویا کیلیک کنید.</h3>
                          <span class="m-dropzone__msg-desc">تنها عکس قابل بارگذاری میباشد</span>
                      </div>
                  </div>
              </div>
          </div> -->

        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions pull-left">
                <button type="submit" class="btn btn-primary " >ذخیره</button>
                <button type="reset" class="btn btn-secondary" >لغوه</button>
            </div>
        </div>
    </div>

</form>
<!-- <h3 class="jumbotron"></h3> -->
<div class="col-md-10">
  <form method="post" action="{{url('hostel/photos')}}" enctype="multipart/form-data" class="dropzone m-dropzone   m-dropzone--success dz-clickable" id="dropzone">
      @csrf
      <div class="m-dropzone__msg dz-message needsclick">
          <h3 class="m-dropzone__msg-title">عکس های اتاق را برای بارگذاری در انیجا یکشید  ویا کیلیک کنید.</h3>
          <span class="m-dropzone__msg-desc">تنها عکس قابل بارگذاری میباشد</span>
      </div>
  </form>
</div>

<!-- <script type="text/javascript">

    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file)
            {
                var name = file.upload.file_name;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("hostel/photos/delete") }}',
                    data: {file_name: name},
                    success: function (data){
                        console.log("فایل به موفقیت برطرف شد");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script> -->

<!--end::Form-->
