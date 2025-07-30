@extends('interface.sales.layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Header -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-6">
                    <div class="user-profile-header-banner">
                        <img src="../../assets_admin/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-5">
                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                            <img src="../../assets_admin/img/avatars/1.png" alt="user image"
                                class="d-block h-auto ms-0 ms-sm-6 rounded user-profile-img" />
                        </div>
                        <div class="flex-grow-1 mt-3 mt-lg-5">
                            <div
                                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                                <div class="user-profile-info">
                                    <h4 class="mb-2 mt-lg-6">John Doe</h4>
                                    <div>JPG, SVG atau PNG diperbolehkan. Ukuran maksimal 500 mb</div>
                                </div>
                                <div class="button-wrapper" style="margin-bottom: 0.9rem;">
                                    <label for="upload" class="btn btn-primary mb-1" tabindex="0">
                                        <span class="d-none d-sm-block">Unggah foto baru</span>
                                        <i class="ti ti-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-label-secondary account-image-reset mb-1">
                                        <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Atur ulang</span>
                                    </button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Header -->

                <!-- Navbar pills -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-align-top">
                            <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-2 gap-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="javascript:void(0);"><i
                                            class="ti-sm ti ti-user-check me-1_5"></i> Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Navbar pills -->

                <!-- User Profile Content -->
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <!-- About User -->
                        <div class="card mb-6" style="min-height: 314px;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <small class="card-text text-uppercase text-muted small">Tentang Anda</small>
                                <ul class="list-unstyled my-8 py-1">
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="ti ti-user ti-lg"></i><span class="fw-medium mx-2">Nama Panggilan:</span>
                                        <span>John Doe</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="ti ti-user ti-lg"></i><span class="fw-medium mx-2">Nama Lengkap:</span>
                                        <span>John Doe</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="ti ti-user ti-lg"></i><span class="fw-medium mx-2">Username:</span>
                                        <span>John Doe</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="ti ti-user ti-lg"></i><span class="fw-medium mx-2">Email:</span>
                                        <span>John Doe</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--/ About User -->
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="card card-action mb-6">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">
                                    <i class="ti ti-chart-bar ti-lg text-body me-4"></i>Activity Timeline
                                </h5>
                            </div>
                            <div class="card-body pt-3">
                                <form id="formAccountSettings" method="GET" onsubmit="return false">
                                    <div class="row">
                                        <div class="mb-4 col-md-6">
                                            <label for="firstName" class="form-label">Nama Panggilan</label>
                                            <input class="form-control" type="text" id="firstName" name="firstName"
                                                value="" placeholder="Nama Panggilan" autofocus />
                                        </div>
                                        <div class="mb-4 col-md-6">
                                            <label for="lastName" class="form-label">Nama Lengkap</label>
                                            <input class="form-control" type="text" name="lastName" id="lastName"
                                                value="" placeholder="Nama Lengkap" />
                                        </div>
                                        <div class="mb-4 col-md-12">
                                            <label for="background" class="form-label">Unggah Background</label>
                                            <input class="form-control" type="file" id="background" name="background"
                                                value="" placeholder="Unggah Background Baru" />
                                        </div>

                                    </div>
                                    <div class="mt-2 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-3">Simpan</button>
                                        <button type="reset" class="btn btn-label-secondary">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-12 col-md-12">
                        <div class="card card-action mb-6">

                            <div class="card-body pt-3">
                                <h5 class="card-header">Hapus Akun</h5>
                                <div class="card-body">
                                    <div class="mb-6 col-12 mb-0">
                                        <div class="alert alert-warning">
                                            <h5 class="alert-heading mb-1">Apakah Anda yakin ingin menghapus akun Anda?
                                            </h5>
                                            <p class="mb-0">Setelah Anda menghapus akun, Anda tidak dapat kembali.
                                                Pastikan Anda
                                                yakin.
                                            </p>
                                        </div>
                                    </div>
                                    <form id="formAccountDeactivation" onsubmit="return false">
                                        <div class="form-check my-8">
                                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                                id="accountActivation" />
                                            <label class="form-check-label" for="accountActivation">Saya mengonfirmasi
                                                penonaktifan
                                                akun saya</label>
                                        </div>
                                        <button type="submit" class="btn btn-danger deactivate-account" disabled>
                                            Nonaktifkan Akun
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/ User Profile Content -->
            </div>
        </div>
    </div>
@endsection
