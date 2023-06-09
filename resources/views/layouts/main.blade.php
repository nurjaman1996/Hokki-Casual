<!DOCTYPE html>
<html lang="en" class="bg-cover-6">

<head>
    <meta charset="utf-8" />
    <title>YOUTHLAND | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link rel="icon" href="{{ URL::asset('assets/img/cover/iconhome.png') }}" type="image/x-icon">
    <link href="{{ URL::asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

    <!-- ================== BEGIN page-css ================== -->
    <link href="{{ URL::asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
    <!-- ================== END page-css ================== -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="theme-teal">
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN desktop-toggler -->
            <div class="desktop-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
                    data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- BEGIN desktop-toggler -->

            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
                    data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <a href="/" class="brand-logo">
                    <span class="brand-img">
                        <span class="brand-img-text text-theme">YL</span>
                    </span>
                    <span class="brand-text">YOUTHLAND Apps</span>
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                {{-- <div class="menu-item dropdown">
					<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
						<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
					</a>
				</div> --}}
                {{-- <div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-icon"><i class="bi bi-grid-3x3-gap nav-icon"></i></div>
					</a>
					<div class="dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1">
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="email_inbox.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-white">INBOX</div>
								</a>
							</div>
							<div class="col-4">
								<a href="pos_customer_order.html" target="_blank" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">POS SYSTEM</div>
								</a>
							</div>
							<div class="col-4">
								<a href="calendar.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">CALENDAR</div>
								</a>
							</div>
						</div>
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="helper.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">HELPER</div>
								</a>
							</div>
							<div class="col-4">
								<a href="settings.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-white">SETTINGS</div>
								</a>
							</div>
							<div class="col-4">
								<a href="widgets.html" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-white">WIDGETS</div>
								</a>
							</div>
						</div>
					</div>
				</div> --}}
                {{-- <div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
						<div class="menu-badge bg-theme"></div>
					</a>
					<div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
						<h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
						<div class="dropdown-divider mt-1"></div>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px">
								<i class="bi bi-bag text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">NEW ORDER RECEIVED ($1,299)</div>
								<div class="small">JUST NOW</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-person-circle text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">3 NEW ACCOUNT CREATED</div>
								<div class="small">2 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-gear text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">SETUP COMPLETED</div>
								<div class="small">3 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-grid text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">WIDGET INSTALLATION DONE</div>
								<div class="small">5 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap">
							<div class="fs-20px w-20px">
								<i class="bi bi-credit-card text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-white">PAYMENT METHOD ENABLED</div>
								<div class="small">10 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<hr class="bg-white-transparent-5 mb-0 mt-2" />
						<div class="py-10px mb-n2 text-center">
							<a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
						</div>
					</div>
				</div> --}}
                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            {{-- @if (auth::user()->role === 'SUPER-ADMIN')  --}}
                            <img src="{{ URL::asset('user/male.png') }}" alt="Profile" height="60" />
                            {{-- @else
									@if (auth::user()->img === null)
									<img src="{{ URL::asset('/user/male.png') }}" alt="Profile" height="60" />
							@else
							<img src="/user/{{ auth::user()->img }}" alt="Profile" height="60" />
							@endif
							@endif --}}
                        </div>
                        <div class="menu-text d-sm-block d-none">
                            {{ Auth::user()->name }}
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        <a class="dropdown-item d-flex align-items-center" href="/setting/setting">SETTINGS <i
                                class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">LOGOUT <i
                                    class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- END menu -->

            <!-- BEGIN menu-search -->
            <form class="menu-search" method="POST" name="header_search_form">
                <div class="menu-search-container">
                    <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
                    </div>
                    <div class="menu-search-icon">
                        <a href="#" data-toggle-class="app-header-menu-search-toggled"
                            data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
                    </div>
                </div>
            </form>
            <!-- END menu-search -->
        </div>
        <!-- END #header -->
        @include('partials.navbar')

        <!-- BEGIN mobile-sidebar-backdrop -->
        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
            data-toggle-class="app-sidebar-mobile-toggled"></button>
        <!-- END mobile-sidebar-backdrop -->
        <script src="{{ URL::asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
        @yield('container')

        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
        <!-- BEGIN theme-panel -->
        <div class="app-theme-panel">
            <div class="app-theme-panel-container">
                <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i
                        class="bi bi-sliders"></i></a>
                <div class="app-theme-panel-content">
                    <div class="small fw-bold text-white mb-1">Theme Color</div>
                    <div class="card mb-3">
                        <!-- BEGIN card-body -->
                        <div class="card-body p-2">
                            <!-- BEGIN theme-list -->
                            <div class="app-theme-list">
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-pink" data-theme-class="theme-pink"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-red" data-theme-class="theme-red"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-warning" data-theme-class="theme-warning"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-lime" data-theme-class="theme-lime"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-green" data-theme-class="theme-green"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                                <div class="app-theme-list-item active"><a href="javascript:;"
                                        class="app-theme-list-link bg-teal" data-theme-class=""
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-info" data-theme-class="theme-info"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-primary" data-theme-class="theme-primary"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-purple" data-theme-class="theme-purple"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                                <div class="app-theme-list-item"><a href="javascript:;"
                                        class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200"
                                        data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                            </div>
                            <!-- END theme-list -->
                        </div>
                        <!-- END card-body -->

                        <!-- BEGIN card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <!-- END card-arrow -->
                    </div>

                    <div class="small fw-bold text-white mb-1">Theme Cover</div>
                    <div class="card">
                        <!-- BEGIN card-body -->
                        <div class="card-body p-2">
                            <!-- BEGIN theme-cover -->
                            <div class="app-theme-cover">
                                <div class="app-theme-cover-item active">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url({{ URL::asset('assets/img/cover/cover-thumb-1.jpg') }});"
                                        data-theme-cover-class="" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Default">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url({{ URL::asset('assets/img/cover/cover-thumb-2.jpg') }});"
                                        data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 2">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url({{ URL::asset('assets/img/cover/cover-thumb-3.jpg') }});"
                                        data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 3">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url({{ URL::asset('assets/img/cover/cover-thumb-4.jpg') }});"
                                        data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 4">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url({{ URL::asset('assets/img/cover/cover-thumb-5.jpg') }});"
                                        data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 5">&nbsp;</a>
                                </div>
                                <div class="app-theme-cover-item">
                                    <a href="javascript:;" class="app-theme-cover-link"
                                        style="background-image: url({{ URL::asset('assets/img/cover/cover-thumb-6.jpg') }});"
                                        data-theme-cover-class="bg-cover-6" data-toggle="theme-cover-selector"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body"
                                        data-bs-title="Cover 6">&nbsp;</a>
                                </div>
                            </div>
                            <!-- END theme-cover -->
                        </div>
                        <!-- END card-body -->

                        <!-- BEGIN card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                        <!-- END card-arrow -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END theme-panel -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    {{-- <script src="{{ URL::asset('assets/js/vendor.min.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/app.min.js'); }}"></script> --}}
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    {{-- <script src="{{ URL::asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js'); }}"></script>
	<script src="{{ URL::asset('assets/plugins/jvectormap-content/world-mill.js'); }}"></script>
	<script src="{{ URL::asset('assets/plugins/apexcharts/dist/apexcharts.min.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/demo/dashboard.demo.js'); }}"></script> --}}
    {{-- <script src="{{ URL::asset('../assets/js/demo/ui-modal-notification.demo.js'); }}"></script> --}}
    <!-- ================== END page-js ================== -->

    <script>
        // CSRF for all ajax call
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>
