<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>hostel configeration page</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
			    google: {
			        "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			    },
			    active: function() {
			        sessionStorage.fonts = true;
			    }
			});
			</script>
		{{-- <link href="{{asset('public/css/app.css')}}" rel="stylesheet" type="text/css" /> --}}
		<link href="{{asset('assets/vendors/base/vendors.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/demo/demo11/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{asset('assets/demo/demo11/media/img/logo/favicon.ico')}}" />

		<style>
			@font-face {
				font-family: 'persian_font';
				src:url("{{asset('fonts/signweb2.woff')}}");
			}
			body, a, button.btn, table, h3  {
				 font-family: persian_font !important;
			}
		</style>
	</head>
	<body class="m-page--loading-enabled m-page--loading m-content--skin- m-header--fixed m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside--offcanvas-default">



	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">

		<!--[html-partial:include:{"file":"partials\/_header-base.html"}]/-->
		@include('layouts.partials._header-base')
		@include('layouts.partials._topbar-notifications')

				<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			@include('layouts.partials._aside-left')
					<!--[html-partial:include:{"file":"partials\/_aside-left.html"}]/-->

			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				@include('layouts.partials._subheader-default')
						<!--[html-partial:include:{"file":"partials\/_subheader-default.html"}]/-->
@yield('content2')
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






		<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/custome.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/custom/crud/forms/widgets/form-repeater.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/custom/crud/forms/widgets/autosize.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/custom/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/custom/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/custom/crud/datatables/advanced/column-rendering.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo11/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>
		<script>
		$(window).on('load', function() {
			$('body').removeClass('m-page--loading');
		});
		</script>
	</body>
</html>
