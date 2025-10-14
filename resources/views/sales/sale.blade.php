@extends('sales.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Sales</th>
                            <th>Tanggal Transaksi</th>
                            {{-- <th>Status</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pratama</td>
                            <td>Susan Malik</td>
                            <td>2022-01-01</td>
                            {{-- <td><span class="bg-label-success">Selesai</span></td> --}}
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi Hartono</td>
                            <td>Rian Aditya</td>
                            <td>2022-01-02</td>
                            {{-- <td><span class="bg-label-warning">Pending</span></td> --}}
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Citra Dewi</td>
                            <td>Hendri Saputra</td>
                            <td>2022-01-02</td>
                            {{-- <td><span class="bg-label-danger">Dibatalkan</span></td> --}}
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Citra Dewi</td>
                            <td>Hendri Saputra</td>
                            <td>2022-01-02</td>
                            {{-- <td><span class="bg-label-danger">Dibatalkan</span></td> --}}
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Citra Dewi</td>
                            <td>Hendri Saputra</td>
                            <td>2022-01-02</td>
                            {{-- <td><span class="bg-label-danger">Dibatalkan</span></td> --}}
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add-->
    <div class="mt-4">
        <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalToggleLabel">Penjualan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="invoice-preview-card p-sm-12 p-6">
                        <div class="card-body px-0">
                            <div class="row row-gap-4">
                                <div class="row align-items-center mb-3">
                                    <div class="col-md-3">
                                        <label for="salesperson" class="form-label fw-bold">Nama Pelanggan</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="salesperson"
                                            placeholder="Nama Pelanggan" />
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-md-3">
                                        <label for="salesperson" class="form-label fw-bold">Nama Sales</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="salesperson"
                                            placeholder="Nama Sales" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0 mb-6" />
                        <div class="card-body pt-0 px-0">
                            <form class="source-item">
                                <div class="mb-4" data-repeater-list="group-a">
                                    <div class="repeater-wrapper pt-0 pt-md-32" data-repeater-item>
                                        <div class="d-flex border rounded position-relative pe-0">
                                            <div class="row w-100 p-6">
                                                <div class="col-md-5 col-12 mb-md-0 mb-4">
                                                    <p class="h6 repeater-title">Nama Produk</p>
                                                    <select class="form-select item-details mb-6">
                                                        <option value="App Design">App Design</option>
                                                        <option value="App Customization" selected>Box makan</option>
                                                        <option value="ABC Template">ABC Template</option>
                                                        <option value="App Development">App Development</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-12 mb-md-0 mb-4">
                                                    <p class="h6 repeater-title">Jumlah</p>
                                                    <input type="text" class="form-control invoice-item-qty"
                                                        placeholder="1" min="1" max="50" />
                                                </div>
                                                <div class="col-md-3 col-12 mb-md-0 mb-4">
                                                    <p class="h6 repeater-title">Harga</p>
                                                    <input type="text" class="form-control invoice-item-price mb-5"
                                                        placeholder="Harga 1 produk" min="12" />
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                                <i class="ti ti-x ti-lg cursor-pointer" data-repeater-delete></i>
                                                <div class="dropdown">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-sm btn-primary" data-repeater-create>
                                            <i class="ti ti-plus ti-14px me-1_5"></i>Tambah
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex mb-4">
                            <button type="submit" class="btn btn-primary d-grid w-100 me-4 waves-effect waves-light">
                                Simpan </button>
                            {{-- <a class="btn btn-label-secondary d-grid w-100 me-4" href="{{ url('/print') }}">
                                Print
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="mt-4">
        <div class="modal fade" id="modalEdit" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalToggleLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="invoice-preview-card p-sm-12 p-6">
                        <div class="card-body px-0">
                            <div class="row row-gap-4">
                                <div class="row align-items-center mb-3">
                                    <div class="col-md-3">
                                        <label for="salesperson" class="form-label fw-bold">Nama Pelanggan</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="salesperson"
                                            placeholder="Nama Pelanggan" />
                                    </div>
                                </div>
                                <div class="row align-items-center mb-3">
                                    <div class="col-md-3">
                                        <label for="salesperson" class="form-label fw-bold">Nama Sales</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="salesperson"
                                            placeholder="Nama Sales" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0 mb-6" />
                        <div class="card-body pt-0 px-0">
                            <form class="source-item">
                                <div class="mb-4" data-repeater-list="group-a">
                                    <div class="repeater-wrapper pt-0 pt-md-32" data-repeater-item>
                                        <div class="d-flex border rounded position-relative pe-0">
                                            <div class="row w-100 p-6">
                                                <div class="col-md-5 col-12 mb-md-0 mb-4">
                                                    <p class="h6 repeater-title">Nama Produk</p>
                                                    <select class="form-select item-details mb-6">
                                                        <option value="App Design">App Design</option>
                                                        <option value="App Customization" selected>Box makan</option>
                                                        <option value="ABC Template">ABC Template</option>
                                                        <option value="App Development">App Development</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-12 mb-md-0 mb-4">
                                                    <p class="h6 repeater-title">Jumlah</p>
                                                    <input type="text" class="form-control invoice-item-qty"
                                                        placeholder="1" min="1" max="50" />
                                                </div>
                                                <div class="col-md-3 col-12 mb-md-0 mb-4">
                                                    <p class="h6 repeater-title">Harga</p>
                                                    <input type="text" class="form-control invoice-item-price mb-5"
                                                        placeholder="Harga 1 produk" min="12" />
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                                <i class="ti ti-x ti-lg cursor-pointer" data-repeater-delete></i>
                                                <div class="dropdown">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-sm btn-primary" data-repeater-create>
                                            <i class="ti ti-plus ti-14px me-1_5"></i>Tambah
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex mb-4">
                            <button type="submit" class="btn btn-primary d-grid w-100 me-4 waves-effect waves-light">
                                Simpan </button>
                            {{-- <a class="btn btn-label-secondary d-grid w-100 me-4" href="{{ url('/print') }}">
                                Print
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal detail-->
    <div class="mt-4">
        <div class="modal fade" id="modalView" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalToggleLabel">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="invoice-preview-card p-sm-12 p-6">
                        <div class="card-body invoice-preview-header rounded">
                            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column">
                                <div class="ms-auto">
                                    <h5 class="mb-0">Nama Toko</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-7 col-12">
                                    <h6>Rincian:</h6>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="pe-4">Nama Pelanggan :</td>
                                                <td>Adenia Cinta</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-4">Tanggal Transaksi :</td>
                                                <td>Kamis, 20 juli 2024</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive border border-bottom-0 border-top-0 rounded"
                            style="margin-top: 35px;">
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
                                        <td>1</td>
                                        <td class="text-nowrap text-heading">Vuexy Admin Template</td>
                                        <td class="text-center">290</td>
                                        <td class="text-center">Rp32.000</td>
                                        <td class="text-center">Rp66.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="text-nowrap text-heading">Frest Admin Template</td>
                                        <td class="text-center">290</td>
                                        <td class="text-center">Rp22.000</td>
                                        <td class="text-center">Rp66.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="text-nowrap text-heading">Apex Admin Template</td>
                                        <td class="text-center">290</td>
                                        <td class="text-center">Rp17.000</td>
                                        <td class="text-center">Rp66.000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="text-nowrap text-heading">Robust Admin Template</td>
                                        <td class="text-center">290</td>
                                        <td class="text-center">Rp66.000</td>
                                        <td class="text-center">Rp66.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table m-0 table-borderless">
                                <tbody>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
