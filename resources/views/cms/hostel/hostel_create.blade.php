@extends('layouts.master')
@section('title','اضافه نمودن خوابگاه')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts.partials.errors');
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                    <h3 class="m-portlet__head-text">
                        مشخصات خوابگاه
                    </h3>
                </div>
            </div>

            @include('cms.hostel.hostelform')
        </div>
    </div>
@endsection

{{--@include('layouts.partials.m-content')--}}
