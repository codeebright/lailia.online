@extends('layouts.master2')
@section('title','صفحه اصلی')
@section('content2')



    <div class="m-content">
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-brand"></i>
            </div>
            <div class="m-alert__text">لیست از تمامی اتاق ها اتاق های پر خالی   ( محتوای هر لیست را ورایش کرده میتوانید)</div>
        </div>
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            لیست از اتاق ها
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="{{route('room.create')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>علاوه کردن اتاق جدید</span>
												</span>
                            </a>
                        </li>
                        <li class="m-portlet__nav-item"></li>

                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                    <thead>
                    <tr>
                        <th>نمبر اتاق</th>
                        <th>مساحت</th>
                        <th>گنجایش</th>
                        <th>تعدا بستر های خالی</th>
                        <th>حالت</th>
                        <th>نوع</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۲ بیستر خالی ۴ نفر ضرورت</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>۵ متر</td>
                        <td>۳ نفر</td>
                        <td>۳ بستر</td>
                        <td>خالی</td>
                        <td>با خدامات نان</td>
                        <td nowrap>

                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- END EXAMPLE TABLE PORTLET-->
    </div>

@endsection
