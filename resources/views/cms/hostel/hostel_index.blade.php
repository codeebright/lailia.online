@extends('layouts.master')
@section('title','لیست از اتاق ها')
@section('content')
    @push('alert-for-page')
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30"
             role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-brand"></i>
            </div>
            <div class="m-alert__text">لیست از تمامی اتاق ها اتاق های پر خالی ( محتوای هر لیست را ورایش کرده میتوانید)
            </div>
        </div>
    @endpush
    @push('hostel-view')
        <div class="row">
            <div class="col-lg-12">

                <div class="m-portlet">
                    <div class="m-portlet__body m-portlet__body--no-padding">
                        @if($hostels && count($hostels))
                            <div class="m-invoice-2">
                                @foreach($hostels as $hostel)
                                    <div class="m-invoice__wrapper">
                                        <div class="m-invoice__head"
                                             style="background-image: url(../../assets/app/media/img//logos/bg-6.jpg);">
                                            <div class="m-invoice__container m-invoice__container--centered">
                                                <div class="m-invoice__logo">
                                                    <a href="#">
                                                        <h1>{{$hostel->name}}</h1>
                                                    </a>
                                                    <a href="#">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img//products/product6.jpg" alt=""
                                                             style="max-height: 100px ">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img//products/product6.jpg" alt=""
                                                             style="max-height: 100px ">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img//products/product6.jpg" alt=""
                                                             style="max-height: 100px ">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img//products/product6.jpg" alt=""
                                                             style="max-height: 100px ">
                                                    </a>

                                                </div>
                                                <span class="m-invoice__desc">
															<span>{{$hostel->email}}</span>
															<span>{{$hostel->phone}}</span>
														</span>
                                                <div class="m-invoice__items">
                                                    <div class="m-invoice__item">
                                                        @if($hostel->facility)
                                                        <span class="m-invoice__subtitle">امکانات</span>
                                                        @foreach($hostel->facility as $facility)
                                                            <span class="m-invoice__text">{{$facility->facility_name}}</span>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="m-invoice__item">
                                                        <span class="m-invoice__subtitle">مشخصات</span>
                                                        <span class="m-invoice__text">{{$hostel->name}}</span>
                                                        @if($hostel->type = 0)
                                                            <span class="m-invoice__text"> مخصوص بانوان</span>
                                                        @else()
                                                            <span class="m-invoice__text">مخصوص آقایان</span>
                                                        @endif
                                                    </div>
                                                    <div class="m-invoice__item">
                                                        @if($hostel->address)
                                                            <span class="m-invoice__subtitle">آدرس</span>
                                                            <span class="m-invoice__text">{{$hostel->address->province}}<br> ناحیه : {{$hostel->address->state}}</span>
                                                        @endif


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-xs-12"></div>
                                            <div class="col-md-2 col-xs-12">
                                                <a href="{{route('hostel.edit' ,$hostel->id)}}">
                                                    <button type="button"
                                                            class="pull-left btn m-btn--pill m-btn--air btn-secondary m-btn m-btn--custom m-btn--bolder m-btn--uppercase mb-5">
                                                        ورایش
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{route('hostel.delete' ,$hostel->id)}}">
                                                    <button type="button"
                                                            class="pull-left btn m-btn--pill m-btn--air btn-secondary m-btn m-btn--custom m-btn--bolder m-btn--uppercase mb-5">
                                                        حذف
                                                    </button>
                                                </a>
                                            </div>


                                            <div class="col-md-2">

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    @endpush
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
    @push('create-button')
        <a href="{{route('room.create')}}"
           class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span>علاوه کردن اتاق جدید</span>
            </span>
        </a>
    @endpush
    @include('layouts.partials.notification')

    <!--begin: Datatable -->
    @if( $Rooms && count($Rooms) > 0)
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <thead>
            <tr>
                <th>نمبر اتاق</th>
                <th>اندازه اتاق</th>
                <th>تعداد گنجایش</th>
                <th>کنجایش فعلی</th>
                <th>کرایه فی ماه</th>
                {{--<th>کرای فی نفر</th>--}}
                <th>توضیحات</th>
                <th>خدامات نان</th>
                <th>عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($Rooms as $room)
                <tr>
                    <td>{{$room->room_number}}</td>
                    <td>{{$room->area}}</td>
                    <td>{{$room->total_bed}}</td>
                    <td>{{$room->empty_bed}}</td>
                    <td>{{$room->room_rent}}</td>
                    <td>{{$room->room_description}}</td>
                    <td> @if($room->food_service= 1)
                            <span> باخدمات نان</span>
                        @else()
                            <span>بدون خدمات نان</span>
                        @endif</td>
                    <td class="align-content-center">

                            <a href="{{route('room.delete' ,$room->id)}}" class="m-nav__link ml-3">
                                <i class="m-nav__link-icon flaticon-delete"></i>
                            </a>

                            <a href="{{route('room.edit' , $room->id)}}" class="m-nav__link ">
                                <i class="m-nav__link-icon flaticon-edit"></i>
                            </a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
        @endif


@endsection

@push('data-table-script')
@endpush
