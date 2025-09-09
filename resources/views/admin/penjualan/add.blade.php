@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row invoice-add">
            <!-- Invoice Add-->
            <div class="col-12 mb-lg-0 mb-6">
                <form>
                    <div class="card invoice-preview-card p-sm-12 p-6">
                        <div class="card-body invoice-preview-header rounded">
                            <div class="d-flex flex-wrap flex-column flex-sm-row justify-content-between text-heading">
                                <div class="mb-md-0 mb-6">
                                    <div class="d-flex svg-illustration mb-6 gap-2 align-items-center">
                                        <div class="app-brand-logo demo">
                                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                                    fill="#7367F0" />
                                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                                    fill="#161616" />
                                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                                    fill="#161616" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                                    fill="#7367F0" />
                                            </svg>
                                        </div>
                                        <span class="app-brand-text fw-bold fs-4 ms-50"> Vuexy </span>
                                    </div>
                                    <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                                    <p class="mb-2">San Diego County, CA 91905, USA</p>
                                    <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                </div>
                                <div class="col-md-5 col-8 pe-0 ps-0 ps-md-2">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-end">
                                            <span class="fw-normal">Date Issued:</span>
                                        </dt>
                                        <dd class="col-sm-7">
                                            <input type="text" class="form-control invoice-date"
                                                placeholder="YYYY-MM-DD" />
                                        </dd>
                                        <dt class="col-sm-5 d-md-flex align-items-center justify-content-end">
                                            <span class="fw-normal">Due Date:</span>
                                        </dt>
                                        <dd class="col-sm-7 mb-0">
                                            <input type="text" class="form-control due-date" placeholder="YYYY-MM-DD" />
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0 mb-6" />
                        <div class="card-body pt-0 px-0 ">
                            <div class="row mb-6 gap-5 ms-5">
                                <div class="row col-md-6 col-12">
                                    <p class="h6">Nama Klien </p>
                                    <input type="text" class="form-control" name="client" placeholder="Client Name" />
                                </div>
                                <div class="row col-md-6 col-12">
                                    <p class="h6">Status Pembayaran </p>
                                    <select class="form-select">
                                        <option value="Paid" selected>Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Partially Paid">Partially Paid</option>
                                        <option value="Draft">Draft</option>
                                        <option value="Cancelled">Cancelled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4" data-repeater-list="group-a">
                                <div class="repeater-wrapper pt-0 pt-md-9" data-repeater-item>
                                    <div class="d-flex border rounded position-relative pe-0">
                                        <div class="row w-100 p-6">
                                            <div class="col-md-6 col-12 mb-md-0 mb-4">
                                                <p class="h6 repeater-title">Nama Item</p>
                                                <select class="form-select item-details mb-6">
                                                    <option value="App Design">App Design</option>
                                                    <option value="App Customization" selected>App Customization</option>
                                                    <option value="ABC Template">ABC Template</option>
                                                    <option value="App Development">App Development</option>
                                                </select>
                                                <textarea class="form-control" rows="2" placeholder="Customization & Bug Fixes"></textarea>
                                            </div>
                                            <div class="col-md-3 col-12 mb-md-0 mb-4">
                                                <p class="h6 repeater-title">Harga /Barang</p>
                                                <input type="text" class="form-control invoice-item-price mb-5"
                                                    placeholder="24" min="12" />
                                                <div class="text-heading">
                                                    <div class="mb-1">Discount:</div>
                                                    <span class="discount me-2">0%</span>
                                                    <span class="tax-1 me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Tax 1">0%</span>
                                                    <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Tax 2">0%</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12 mb-md-0 mb-4">
                                                <p class="h6 repeater-title">Qty</p>
                                                <input type="text" class="form-control invoice-item-qty" placeholder="1"
                                                    min="1" max="50" />
                                            </div>
                                            <div class="col-md-1 col-12 pe-0 mt-md-2">
                                                <p class="h6 repeater-title">Price</p>
                                                <p class="mb-0 text-heading">$24.00</p>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                            <i class="ti ti-x ti-lg cursor-pointer" data-repeater-delete></i>
                                            <div class="dropdown">
                                                <i class="ti ti-settings ti-lg cursor-pointer more-options-dropdown"
                                                    role="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside" aria-expanded="false">
                                                </i>
                                                <div class="dropdown-menu dropdown-menu-end w-px-300 p-4"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="discountInput"
                                                                class="form-label">Discount(%)</label>
                                                            <input type="number" class="form-control" id="discountInput"
                                                                min="0" max="100" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="taxInput1" class="form-label">Tax 1</label>
                                                            <select name="tax-1-input" id="taxInput1"
                                                                class="form-select tax-select">
                                                                <option value="0%" selected>0%</option>
                                                                <option value="1%">1%</option>
                                                                <option value="10%">10%</option>
                                                                <option value="18%">18%</option>
                                                                <option value="40%">40%</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="taxInput2" class="form-label">Tax 2</label>
                                                            <select name="tax-2-input" id="taxInput2"
                                                                class="form-select tax-select">
                                                                <option value="0%" selected>0%</option>
                                                                <option value="1%">1%</option>
                                                                <option value="10%">10%</option>
                                                                <option value="18%">18%</option>
                                                                <option value="40%">40%</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider my-4"></div>
                                                    <button type="button"
                                                        class="btn btn-label-primary btn-apply-changes">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-primary" data-repeater-create>
                                        <i class="ti ti-plus ti-14px me-1_5"></i>Add Item
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body px-0">
                            <div class="row row-gap-4">
                                <div class="col-md-6 mb-md-0 mb-4">
                                    <div class="d-flex align-items-center mb-4">
                                        <label for="salesperson" class="me-2 fw-medium text-heading">Salesperson:</label>
                                        <input type="text" class="form-control" id="salesperson"
                                            placeholder="Edward Crowley" />
                                    </div>
                                    <input type="text" class="form-control" id="invoiceMsg"
                                        placeholder="Thanks for your business" />
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="invoice-calculations">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Subtotal:</span>
                                            <span class="fw-medium text-heading">$1800</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Discount:</span>
                                            <span class="fw-medium text-heading">$28</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="w-px-100">Tax:</span>
                                            <span class="fw-medium text-heading">21%</span>
                                        </div>
                                        <hr />
                                        <div class="d-flex justify-content-between">
                                            <span class="w-px-100">Total:</span>
                                            <span class="fw-medium text-heading">$1690</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body px-0">
                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <label for="note" class="text-heading mb-1 fw-medium">Note:</label>
                                        <textarea class="form-control" rows="2" id="note" placeholder="Invoice note">
        It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Invoice Add-->
        </div>

        <!-- Offcanvas -->
    </div>
@endsection
