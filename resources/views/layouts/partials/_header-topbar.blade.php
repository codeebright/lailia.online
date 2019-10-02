<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
        <div class="m-stack__item m-topbar__nav-wrapper">
            <ul class="m-topbar__nav m-nav m-nav--inline">

                <!--[html-partial:include:{"file":"partials\/_topbar-search-dropdown.html"}]/-->



                <!--[html-partial:include:{"file":"partials\/_topbar-notifications.html"}]/-->
                @include('layouts.partials._topbar-notifications')


                        <!--[html-partial:include:{"file":"partials\/_topbar-quick-actions.html"}]/-->


                        <!--[html-partial:include:{"file":"partials\/_topbar-user-profile.html"}]/-->
                @include('layouts.partials._topbar-user-profile')

                {{--<li id="m_quick_sidebar_toggle" class="m-nav__item m-topbar__quick-sidebar">--}}
                    {{--<a href="#" class="m-nav__link m-dropdown__toggle"> <span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span> </a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
    <!-- END: Topbar -->
