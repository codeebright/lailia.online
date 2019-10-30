<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

        <!--[html-partial:include:{"file":"partials\/_header-base.html"}]/-->
        @include('layouts.partials._header-base')

        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            @include('layouts.partials._aside-left')
            <!--[html-partial:include:{"file":"partials\/_aside-left.html"}]/-->

            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                @include('layouts.partials._subheader-default')
                <!--[html-partial:include:{"file":"partials\/_subheader-default.html"}]/-->
                <div class="m-content">
                    @stack('alert-for-page')
                    @stack('hostel-view')
                    @stack('food_menue')
                    @stack('profile')
                <div class="m-portlet" id="m_portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                         <span class="m-portlet__head-icon">
                                            <i class="flaticon-calendar"></i>
                                        </span>
                                <h3 class="m-portlet__head-text">
                                    @yield('title')
                                </h3>
                            </div>
                        </div>

                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    @stack('create-button')
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="m-portlet__body">

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end:: Body -->


        @include('layouts.partials._footer-default')
        <!--[html-partial:include:{"file":"partials\/_footer-default.html"}]/-->

    </div>
    <!-- end:: Page -->
    @include('layouts.partials._layout-quick-sidebar')

    @include('layouts.partials._layout-scroll-top')

    {{-- @include('layouts.partials._layout-tooltips') --}}

    <!--[html-partial:include:{"file":"partials\/_layout-quick-sidebar.html"}]/-->



    <!--[html-partial:include:{"file":"partials\/_layout-scroll-top.html"}]/-->



    <!--[html-partial:include:{"file":"partials\/_layout-tooltips.html"}]/-->
