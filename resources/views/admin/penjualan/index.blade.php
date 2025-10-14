@extends('admin.layout.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0">56</h4>
                                <p class="mb-0">Pending Payment</p>
                            </div>
                            <span class="avatar me-sm-6">
                                <span class="avatar-initial bg-label-secondary rounded text-heading">
                                    <i class="ti-26px ti ti-calendar-stats text-heading"></i>
                                </span>
                            </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-6" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0">12,689</h4>
                                <p class="mb-0">Completed</p>
                            </div>
                            <span class="avatar p-2 me-lg-6">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-26px ti ti-checks text-heading"></i></span>
                            </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
                            <div>
                                <h4 class="mb-0">124</h4>
                                <p class="mb-0">Refunded</p>
                            </div>
                            <span class="avatar p-2 me-sm-6">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-26px ti ti-wallet text-heading"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="mb-0">32</h4>
                                <p class="mb-0">Failed</p>
                            </div>
                            <span class="avatar p-2">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-26px ti ti-alert-octagon text-heading"></i></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="card col-md-12">
                <div class="card-header">
                    <h5 class="card-title">Data Produk</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <input type="text" class="form-control" id="search-product" placeholder="Search Product">
                        </div>
                        <div>
                            <a href="/admin/tambah_penjualan" class="btn btn-primary">
                                <i class="ti ti-plus"></i> Tambah Penjualan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-products table">
                        <thead class="border-top">
                            <tr>
                                <th></th>
                                <th>Nama Sales</th>
                                <th>Nama Pembeli</th>
                                <th>Nama Barang</th>
                                <th>Harga Total</th>
                                <th>Tanggal Transaksi</th>
                                <th>Status</th>
                                <th>Cetak Nota</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>John Doe</td>
                                <td>Jane Smith</td>
                                <td>Product A</td>
                                <td>$100</td>
                                <td>2023-10-01</td>
                                <td>
                                    <span class="badge bg-label-success">Completed</span>
                                </td>
                                <td>
                                    <button class="btn btn-text-secondary" id="tooltip-print" title="Cetak Nota">
                                        <i class="ti ti-printer"></i>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-text-warning" id="tooltip-edit" title="Edit data penjualan">
                                        <i class="ti ti-pencil"></i>
                                    </button>
                                    <button class="btn btn-text-danger" id="tooltip-delete" title="Hapus data penjualan">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Repeat for more products -->
                        </tbody>
                    </table>
                </div>
            </div>
</div>
@endsection

@push('scripts')

<script>
const printButton = document.getElementById('tooltip-print');
new bootstrap.Tooltip(printButton);

const editButton = document.getElementById('tooltip-edit');
new bootstrap.Tooltip(editButton);

const deleteButton = document.getElementById('tooltip-delete');
new bootstrap.Tooltip(deleteButton);
</script>
@endpush
