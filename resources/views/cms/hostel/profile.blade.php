@extends('layouts.master')
@section('title','صفحه اصلی')
@push('profile')
    <div class="m-content">
        <div class="row">

            @if($owners && count($owners))
                <div class="col-xl-3 col-lg-4">
                    @foreach($owners as $owner)
                        <div class="m-portlet   ">
                            <div class="m-portlet__body">
                                <div class="m-card-profile">
                                    <div class="m-card-profile__title m--hide">
                                        Your Profile
                                    </div>
                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper">
                                            <img src="assets/app/media/img/users/user4.jpg" alt="عکس پروفایل شما">
                                        </div>
                                    </div>
                                    <div class="m-card-profile__details">
                                        <span class="m-card-profile__name">{{$owner->name}}</span>
                                        <a href="" class="m-card-profile__email m-link">{{$owner->email}}</a>
                                    </div>
                                    <div class="m-card-profile__details">

                                        <span class="m-card-profile__email m-link">{{$owner->phone_number}}</span>
                                    </div>
                                </div>
                                <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                    <li class="m-nav__section m--hide">
                                        <span class="m-nav__section-text">بخش</span>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="{{route('Owner.create')}}" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                            <span class="m-nav__link-title">
														<span class="m-nav__link-wrap">
															<span class="m-nav__link-text">ایجاد جدید</span>
															<span class="m-nav__link-badge"><span
                                                                        class="m-badge m-badge--success">۲</span></span>
														</span>
													</span>
                                        </a>
                                    </li>

                                    <li class="m-nav__item">
                                        <a href="{{route('Owner.edit', $owner->id)}}" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                            <span class="m-nav__link-title">
														<span class="m-nav__link-wrap">
															<span class="m-nav__link-text">ورایش</span>
															<span class="m-nav__link-badge"><span
                                                                        class="m-badge m-badge--success">۲</span></span>
														</span>
													</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
@endpush

