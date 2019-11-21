<form class="m-form m-form--fit m-form--label-align-right" method="post" action="">
    @csrf
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">
                The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            </div>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">جزییات شخصی</h3>
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">نام وتخلص</label>
            <div class="col-7">
                <input class="form-control m-input" type="text" name="name" value="{{old('name', isset($owner) ? $owner->name: '')}}" placeholder="نام وتخلص تانرا وارید کیند">
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">ایمیل ادرس</label>
            <div class="col-7">
                <input class="form-control m-input" type="email" name="email" value="{{old('email', isset($owner) ? $owner->email: '')}}" placeholder="hamidullah.hamid@gmail.com">
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">شماره تماس.</label>
            <div class="col-7">
                <input class="form-control m-input" type="text" name="phone_number" value="{{old('phone_number', isset($owner) ? $owner->phone_number: '')}}" placeholder="+۹۳۷۳۰۳۱۳۱۰۱">
            </div>
        </div>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">آدرس رسانه ها اجتماعی</h3>
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">Linkedin</label>
            <div class="col-7">
                <input class="form-control m-input" type="text" name="linkedIn" value="" placeholder="www.linkedin.com/hamidullah" >
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">Facebook</label>
            <div class="col-7">
                <input class="form-control m-input" type="text" name="fb" value="" placeholder="www.facebook.com/hamidlullah">
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">Twitter</label>
            <div class="col-7">
                <input class="form-control m-input" type="text" name="twitter" value="" placeholder="www.twitter.com/hamidullah">
            </div>
        </div>
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">Instagram</label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="" placeholder="www.instagram.com/hamidullah">
            </div>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-7">
                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">ذخیره تغیرات</button>&nbsp;&nbsp;
                    <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">لغوه</button>
                </div>
            </div>
        </div>
    </div>
</form>