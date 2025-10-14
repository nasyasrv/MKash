<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets_admin/" data-template="vertical-menu-template"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - eCommerce | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets_admin/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets_admin/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="../../assets_admin/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets_admin/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="../../assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/@form-validation/form-validation.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet"
        href="../../assets_admin/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/css/pages/page-profile.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/sweetalert2/sweetalert2.css" />

        <!-- Row Group CSS -->
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    <!-- Form Validation -->
    <link rel="stylesheet" href="../../assets_admin/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets_admin/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/css/pages/app-invoice.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/css/pages/app-logistics-dashboard.css" />
    <link rel="stylesheet" href="../../assets_admin/vendor/css/pages/app-calendar.css" />

    <!-- Helpers -->
    <script src="../../assets_admin/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets_admin/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets_admin/js/config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('styles')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('sales.layouts.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('sales.layouts.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')

                    <!-- Layout container -->

                    <!-- Footer -->
                    @include('sales.layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets_admin/vendor/js/core.js -->

    <script src="../../assets_admin/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets_admin/vendor/libs/popper/popper.js"></script>
    <script src="../../assets_admin/vendor/js/bootstrap.js"></script>
    <script src="../../assets_admin/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets_admin/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets_admin/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets_admin/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets_admin/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets_admin/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets_admin/vendor/libs/swiper/swiper.js"></script>

    <script src="../../assets_admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets_admin/vendor/libs/select2/select2.js"></script>

    <script src="../../assets_admin/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets_admin/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets_admin/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets_admin/vendor/libs/jquery-repeater/jquery-repeater.js"></script>

    <script src="../../assets_admin/vendor/libs/fullcalendar/fullcalendar.js"></script>
    <script src="../../assets_admin/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets_admin/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets_admin/vendor/libs/@form-validation/auto-focus.js"></script>
    <script src="../../assets_admin/vendor/libs/moment/moment.js"></script>


    <!-- Main JS -->
    <script src="../../assets_admin/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets_admin/js/dashboards-analytics.js"></script>
    <script src="../../assets_admin/js/app-ecommerce-dashboard.js"></script>
    <script src="../../assets_admin/js/app-ecommerce-product-list.js"></script>
    <script src="../../assets_admin/js/offcanvas-add-payment.js"></script>

    <script src="../../assets_admin/js/offcanvas-send-invoice.js"></script>
    <script src="../../assets_admin/js/app-invoice-add.js"></script>
    <script src="../../assets_admin/js/app-logistics-dashboard.js"></script>
    <script src="../../assets_admin/js/app-calendar-events.js"></script>

    <script src="../../assets_admin/js/app-calendar.js"></script>
    <script src="../../assets_admin/js/pages-profile.js"></script>
    <script src="../../assets_admin/js/pages-account-settings-account.js"></script>

    <script src="../../assets_admin/js/app-user-list.js"></script>
    <script src="../../assets_admin/js/ui-modals.js"></script>


</body>

</html>
