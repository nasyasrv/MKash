@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Product List Table -->
        <div class="row gap-6">
            <div class="card col-md-8">
                <div class="card-header">
                    <h5 class="card-title">Data Produk</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <input type="text" class="form-control" id="search-product" placeholder="Search Product">
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#tambahProduk">
                                Tambah Produk
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-products table">
                        <thead class="border-top">
                            <tr>
                                <th></th>
                                <th>picture</th>
                                <th>product</th>
                                <th>stock</th>
                                <th>price</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <img src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="product image"
                                        class="rounded" width="50" />
                                </td>
                                <td>Product 1</td>
                                <td>In Stock</td>
                                <td>$100.00</td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <!-- Repeat for more products -->
                            <tr>
                                <td></td>
                                <td>
                                    <img src="{{ asset('assets_admin/img/elements/13.jpg') }}" alt="product image"
                                        class="rounded" width="50" />
                                </td>
                                <td>Product 2</td>
                                <td>Out of Stock</td>
                                <td>$150.00</td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card col-md-3">
                <div class="card-datatable table-responsive">
                    <table class="datatables-products table">
                        <thead class="border-top">
                            <tr>
                                <th>DataSatuan</th>
                                <th>
                                    <button type="button" class="btn btn-text-primary" data-bs-toggle="modal"
                                        data-bs-target="#tambahSatuan" id="tooltip-tambah" title="Tambah Satuan Baru">
                                        <i class="ti ti-plus"></i>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>pcs</td>
                                <td>
                                    <button class="btn btn-text-danger" id="tooltip-hapus" title="Hapus Satuan">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h5 class="pb-1 mb-6 mt-6">Tampilan produk</h5>
            </div>
            <div>
                <a class="btn btn-primary" href="/product/all/preview">Lihat Semua Preview Produk</a>
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

        <div class="modal fade" id="tambahProduk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="tambahProdukLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahProdukLabel">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="productName"
                                    placeholder="Masukkan nama produk">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="productPrice" class="form-label">Harga Produk</label>
                                    <input type="number" class="form-control" id="productPrice"
                                        placeholder="Masukkan harga produk">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="productStock" class="form-label">Stok Produk</label>
                                    <input type="number" class="form-control" id="productStock"
                                        placeholder="Masukkan stok produk">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label for="productStock" class="form-label">Satuan</label>
                                    <select class="form-select" id="productUnit">
                                        <option value="pcs">Pcs</option>
                                        <option value="kg">Kg</option>
                                        <option value="liter">Liter</option>
                                        <option value="box">Box</option>
                                        <option value="pack">Pack</option>
                                        <option value="dus">Dus</option>
                                        <option value="tambah_baru">Tambah Satuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" id="productImage">
                            </div>

                            <img id="preview" src="#" alt="preview image" class="img-thumbnail mb-3"
                                style="display: none; width: 100%;">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahSatuan" tabindex="-1" aria-labelledby="tambahSatuanLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahSatuanLabel">Tambah Satuan Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Masukkan satuan baru" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('productImage').addEventListener('change', function(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        });
    </script>
    <script>
        document.getElementById('productUnit').addEventListener('change', function() {
            if (this.value === 'tambah_baru') {
                // Reset ke default agar tidak "terpilih" terus
                this.value = '';

                // Tampilkan modal
                const tambahSatuanModal = new bootstrap.Modal(document.getElementById('tambahSatuan'));
                tambahSatuanModal.show();
            }
        });
    </script>

    <script>
        const tambahBtn = document.getElementById('tooltip-tambah');
        new bootstrap.Tooltip(tambahBtn);
        const hapusBtn = document.getElementById('tooltip-hapus');
        new bootstrap.Tooltip(hapusBtn);
    </script>
@endpush
