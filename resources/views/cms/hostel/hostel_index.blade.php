@extends('layouts.master')
@section('title','لیست از اتاق ها')
@section('content')
   @push('alert-for-page')
   <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
       <div class="m-alert__icon">
           <i class="flaticon-exclamation m--font-brand"></i>
       </div>
       <div class="m-alert__text">لیست از تمامی اتاق ها اتاق های پر خالی   ( محتوای هر لیست را ورایش کرده میتوانید)</div>
   </div>
   @endpush

   @push('create-button')
       <a href="{{route('room.create')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span>علاوه کردن اتاق جدید</span>
            </span>
       </a>
   @endpush

    <!--begin: Datatable -->
   <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
       <thead>
       <tr>
           <th>نبمر ترتیب</th>
           <th>نمبر اتاق</th>
           <th>اندازه اتاق</th>
           <th>تعداد گنجایش </th>
           <th>کنجایش  فعلی</th>
           <th>کرایه فی ماه</th>
           <th>کرای فی نفر</th>
           <th>حالت</th>
           <th>خدامات نان</th>
           <th>عملیات</th>

       </tr>
       </thead>
       <tbody>

       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       <tr>
           <td>۱</td>
           <td>۰۰۱</td>
           <td> ۵ متر</td>
           <td>۳ شخص</td>
           <td>۲</td>
           <td>۵۰۰۰</td>
           <td>۲۵۰۰</td>
           <td>ضرورت به هم اتاقی</td>
           <td>دالخوا</td>
           <td>


                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                                															<a href="#" class="m-portlet__nav-link m-dropdown__toggle btn btn-secondary m-btn m-btn--icon m-btn--pill">
                                																<i class="la la-ellipsis-h"></i>
                                															</a>
                                                              <div class="m-dropdown__wrapper" style="z-index: 101;">

    																<div class="m-dropdown__inner">
    																	<div class="m-dropdown__body">
    																		<div class="m-dropdown__content">
    																			<ul class="m-nav">
    																				<li class="m-nav__section m-nav__section--first">
    																					<span class="m-nav__section-text">حذف یا ورایش اتاق</span>
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="" class="m-nav__link">
    																						<i class="m-nav__link-icon flaticon-delete"></i>
    																						<span class="m-nav__link-text">حذف</span>
    																					</a>
    																				</li>
                                            <li class="m-nav__item">
                                              <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-edit"></i>
                                                <span class="m-nav__link-text">ورایش</span>
                                              </a>
                                            </li>

    																				<li class="m-nav__separator m-nav__separator--fit">
    																				</li>
    																				<li class="m-nav__item">
    																					<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
    																				</li>
    																			</ul>
    																		</div>
    																	</div>
    																</div>
    															</div>
                                														</div>
           </td>
       </tr>
       </tbody>
   </table>

@endsection

@push('data-table-script')
@endpush
