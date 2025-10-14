@extends('sales.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6">
            <!-- View sales -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-7">
                            <div class="card-body text-nowrap" style="margin-top: -10rem;">
                                <h5 class="card-title mb-0">Selamat Datang John! 🎉</h5>
                                <p class="mb-2">Sales</p>
                                {{-- <h4 class="text-primary mb-1"  >$48.9k</h4> --}}
                                <a href="{{ route('sales.profile') }}" class="btn btn-primary">Lihat Sales</a>
                            </div>
                        </div>
                        <div class="col-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../../assets_admin/img/illustrations/card-advance-sale.png" height="140"
                                    alt="view sales" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- View sales -->

            <!-- Statistics -->
            <div class="col-xl-8 col-md-12">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Statistik Penjualan</h5>
                        {{-- <small class="text-muted">Updated 1 month ago</small> --}}
                    </div>
                    <div class="card-body d-flex align-items-end">
                        <div class="w-100">
                            <div class="row gy-3">
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded bg-label-primary me-4 p-2">
                                            <i class="ti ti-chart-pie-2 ti-lg"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">230</h5>
                                            <small>Jenis Barang</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded bg-label-danger me-4 p-2">
                                            <i class="ti ti-shopping-cart ti-lg"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">100</h5>
                                            <small>Produk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded bg-label-success me-4 p-2">
                                            <i class="ti ti-currency-dollar ti-lg"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">97</h5>
                                            <small>Jumlah penjualan</small>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded bg-label-info me-4 p-2"><i class="ti ti-users ti-lg"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">80</h5>
                                            <small>Presensi</small>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics -->

            <div class="col-xxl-6 col-lg-7" style="width: 100%;">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-1">Traffic Penjualan</h5>
                            <p class="card-subtitle">Total jumlah setor penjualan perhari</p>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-label-primary">January</button>
                            <button type="button" class="btn btn-label-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="shipmentStatisticsChart"></div>
                    </div>
                </div>
            </div>
            <!--/ Shipment statistics -->

            <!-- Reasons for delivery exceptions -->
            {{-- <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Presensi</h5>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
                                id="deliveryExceptions" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="deliveryExceptionsChart"></div>
                    </div>
                </div>
            </div> --}}

            <div class="col-12 order-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Tabel Penjualan</h5>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-desktop table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Setor</th>
                                    <th>Nama Sales</th>
                                    <th>Total Penjualan</th>
                                    <th>Total Setor</th>
                                    {{-- <th>Status</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2022-01-01</td>
                                    <td>Pratama</td>
                                    <td>Rp1.500.000</td>
                                    <td>Rp1.500.000</td>
                                    {{-- <td><span class="bg-label-success">Selesai</span></td> --}}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2022-01-01</td>
                                    <td>Budi</td>
                                    <td>Rp1.500.000</td>
                                    <td>Rp1.000.000</td>
                                    {{-- <td><span class="bg-label-success">Selesai</span></td> --}}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2022-01-01</td>
                                    <td>Cinta</td>
                                    <td>Rp1.500.000</td>
                                    <td>Rp1.500.000</td>
                                    {{-- <td><span class="bg-label-success">Selesai</span></td> --}}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>2022-01-01</td>
                                    <td>Nasya</td>
                                    <td>Rp1.500.000</td>
                                    <td>Rp1.500.000</td>
                                    {{-- <td><span class="bg-label-success">Selesai</span></td> --}}
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Invoice table -->
    </div>
@endsection
