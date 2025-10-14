<!doctype html>

<html lang="en" class="light-style layout-wide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets_admin/" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Invoice (Print version) - Pages | Vuexy - Bootstrap Admin Template</title>

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

    <!-- Page CSS -->

    <link rel="stylesheet" href="../../assets_admin/vendor/css/pages/app-invoice-print.css" />

    <!-- Helpers -->
    <script src="../../assets_admin/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets_admin/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets_admin/js/config.js"></script>
</head>

<body onload="window.print()">
    <!-- Content -->
    <div class="invoice-print p-12">
        <div class="d-flex justify-content-between flex-row">
            <div>
                <h5 class="mb-6">NAMA TOKO</h5>
            </div>
            <div class="ms-auto">
                <div class="mb-1 text-end">
                    <span>Tanggal Transaksi:</span>
                    <span>April 25, 2021</span>
                </div>
            </div>
        </div>

        <hr class="mb-6" />

        <div class="row d-flex justify-content-between mb-6">
            {{-- <div class="col-sm-6 w-50">
                <h6>Invoice To:</h6>
                <p class="mb-1">Thomas shelby</p>
                <p class="mb-1">Shelby Company Limited</p>
                <p class="mb-1">Small Heath, B10 0HF, UK</p>
                <p class="mb-1">718-986-6062</p>
                <p class="mb-0">peakyFBlinders@gmail.com</p>
            </div> --}}
            <div class="col-sm-6 w-50">
                <h6>Rincian :</h6>
                <table>
                    <tbody>
                        <tr>
                            <td class="pe-4">Nama Pelanggan : </td>
                            <td>Adenia Cinta</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-responsive border border-bottom-0 border-top-0 rounded" style="margin-top: 35px;">
            <table class="table table-bordered m-0">
                <thead>
                    <tr>
                        <th class="text-nowrap">No</th>
                        <th class="text-nowrap">Item</th>
                        <th class="text-nowrap text-center">Jumlah Item</th>
                        <th class="text-nowrap text-center">Harga Per Item</th>
                        <th class="text-nowrap text-center">Total Per Item</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-nowrap text-heading">Vuexy Admin</td>
                        <td class="text-center">290</td>
                        <td class="text-center">Rp32.000</td>
                        <td class="text-center">Rp66.000</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-nowrap text-heading">Vuexy Admin</td>
                        <td class="text-center">290</td>
                        <td class="text-center">Rp32.000</td>
                        <td class="text-center">Rp66.000</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-nowrap text-heading">Vuexy Admin</td>
                        <td class="text-center">290</td>
                        <td class="text-center">Rp32.000</td>
                        <td class="text-center">Rp66.000</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-nowrap text-heading">Vuexy Admin</td>
                        <td class="text-center">290</td>
                        <td class="text-center">Rp32.000</td>
                        <td class="text-center">Rp66.000</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-nowrap text-heading">Vuexy Admin</td>
                        <td class="text-center">290</td>
                        <td class="text-center">Rp32.000</td>
                        <td class="text-center">Rp66.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table m-0 table-borderless">
                <tbody>
                    <tr>
                    <tr>
                        <td class="align-top pe-6 ps-0 py-6">
                            <p class="mb-1">
                                <span class="me-2 h6">Sales :</span>
                                <span>Alfie Solomons</span>
                            </p>
                        </td>
                        <td class="px-0 py-6 w-px-100">
                            <p class="mb-0 pt-2">TOTAL :</p>
                        </td>
                        <td class="text-end px-0 py-6 w-px-100 fw-medium text-heading">
                            <p class="fw-bold mb-0 pt-2">Rp5.900.000</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr class="mt-0 mb-6" />
        <div class="row">
            <div class="col-12">
                <span class="fw-medium">Catatan:</span>
                <span>Terimakasih telah berkunjung. Barang yang sudah dibeli tidak dapat ditukar atau
                    dikembalikan</span>
            </div>
        </div>
    </div>

    <!-- / Content -->

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

    <!-- Main JS -->
    <script src="../../assets_admin/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets_admin/js/app-invoice-print.js"></script>

    <script>
        window.onload = function() {
            window.print();
            setTimeout(() => {
                window.close();
            }, 1000);
        }
    </script>
</body>

</html>
