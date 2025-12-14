@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="/product" class="btn btn-secondary mb-3">
                    <i class="ti ti-arrow-left"></i> Kembali ke Daftar Produk
                </a>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h5 class="pb-1 mb-6 mt-6">Semua Tampilan produk</h5>
            </div>
            <div class="d-flex align-items-center gap-2">
                <select class="form-select" id="filter-category">
                    <option value="">Short by</option>
                    <option value="all">Semua Kategori</option>
                    <option value="category1">Terbaru</option>
                    <option value="category2">Terlama</option>
                </select>
                <input type="text" class="form-control" id="search-product" placeholder="Search Product">
            </div>

        </div>

        <div class="row mb-12 g-6">
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-12 g-6">
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="bg-label-primary rounded text-center mb-4 pt-4 shimmer-hover">
                            <img class="img-fluid" src="../../assets_admin/img/illustrations/girl-with-laptop.png"
                                alt="Card girl image" width="140" />
                        </div>
                        <h5 class="mb-2">Nama Produk</h5>
                        <div class="row mb-4 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-brand-unsplash ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Stok</h6>
                                        <small>23</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="ti ti-businessplan ti-28px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">Harga</h6>
                                        <small>Rp.20.000</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
@endsection

