<!-- BEGIN: Left Aside --><button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
        <!-- BEGIN: Aside Menu -->
        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                <li class="m-menu__section m-menu__section--first">
                    <h4 class="m-menu__section-text">تنظیمات</h4> <i class="m-menu__section-icon flaticon-more-v2"></i> </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="{{route('hostel.index')}}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-download"></i>
                            <span class="m-menu__link-text">لیلیه و لیست اتاق ها</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="{{route('room.create')}}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-paper-plane"></i>
                            <span class="m-menu__link-text">تنظیمات اتاق</span>
                        </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="{{route('hostel.create')}}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-paper-plane"></i>
                            <span class="m-menu__link-text">تنظیمات خوابگاه</span>
                        </a>
                    </li>
                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                    <a href="{{route('food.index')}}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-paper-plane"></i>
                        <span class="m-menu__link-text">خدمات نان و منوغدا</span>
                    </a>
                </li>


                {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">وارده</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Resources</span></span>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true"><a href="?page=inner" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timesheet</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Payroll</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Contacts</span></a></li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">Finance</span></a></li> --}}
                {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">صادره</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span>  </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">Support</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span>
                                </span>
                                </span>
                                </span>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Reports</span></a></li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Cases</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Pending</span></a></li>
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Urgent</span></a></li>
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Done</span></a></li>
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Archive</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Clients</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Audit</span></a></li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Options</span></a></li> --}}
                {{-- <li class="m-menu__section m-menu__section--first">
                        <h4 class="m-menu__section-text">اسناد</h4> <i class="m-menu__section-icon flaticon-more-v2"></i> </li>
                </li>
                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">صادره</span>      <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span>  </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">Support</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span>
                                </span>
                                </span>
                                </span>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Reports</span></a></li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Cases</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Pending</span></a></li>
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Urgent</span></a></li>
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Done</span></a></li>
                                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Archive</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Clients</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="?page=inner" class="m-menu__link "><span class="m-menu__link-text">Audit</span></a></li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
        <!-- END: Aside Menu -->
    </div>
    <!-- END: Left Aside -->
