


    <div class="m-content">
        <div class="m-portlet" id="m_portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                                         <span class="m-portlet__head-icon">
                                            <i class="flaticon-calendar"></i>
                                        </span>
                        <h3 class="m-portlet__head-text">
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

