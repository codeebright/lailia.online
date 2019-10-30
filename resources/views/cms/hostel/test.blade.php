@extends('layouts.master')
@section('title','صفحه اصلی')
@section('content')
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
@endsection
