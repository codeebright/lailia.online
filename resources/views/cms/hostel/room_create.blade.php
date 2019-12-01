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
            @include('cms.hostel.room_form')
        </div>

    </div>
@endsection
