@extends('layouts.master')
@section('title','ورایش حساب شخصی')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

            @include('layouts.partials.errors');
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>

                </div>
            </div>
            @include('cms.hostel.owner_form')
        </div>
    </div>
@endsection