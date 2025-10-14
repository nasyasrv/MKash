@extends('sales.layouts.app')
@section('content')
    <style>
        .shimmer-hover {
            position: relative;
            overflow: hidden;
        }

        .shimmer-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            height: 100%;
            width: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            transform: skewX(-20deg);
            opacity: 0;
            pointer-events: none;
        }

        .shimmer-hover:hover::before {
            animation: shimmer 1.2s ease-in-out 1;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                left: 100%;
                opacity: 0;
            }
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
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
@endsection
