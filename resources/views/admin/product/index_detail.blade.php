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
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-12 g-6">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-12 g-6">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-12 g-6">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-12 g-6">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-12 g-6">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Stok: <br>
                            Harga: <br>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

