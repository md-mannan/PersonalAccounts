@extends('Layout.Master')
@section('page_title', 'User List Page')


@section('content')
    {{-- Welcome Message --}}
    <div class="row g-6 mb-6">
        <div class="col-lg-12 com-md-12 col-sm-12">
            <!-- Invoice List Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row mx-1">
                            <div
                                class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-4 mt-md-0 mt-5">
                                <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                            name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select form-select-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                                <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start">
                                    <div class="dt-buttons btn-group flex-wrap"><button
                                            class="btn btn-secondary btn-primary waves-effect waves-light" tabindex="0"
                                            aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal"
                                            data-bs-target="#addtransiction"><span><i
                                                    class="ri-add-line ri-16px me-md-2 align-baseline"></i><span
                                                    class="d-md-inline-block d-none">Add new User</span></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <table class="invoice-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0"
                            aria-describedby="DataTables_Table_0_info" style="width: 1395px;">
                            <thead>
                                <tr>
                                    <th class="control sorting dtr-hidden" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 0px; display: none;"
                                        aria-label=": activate to sort column ascending"></th>
                                    <th class="control sorting dtr-hidden">User ID</th>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5020</span></a></td>
                                    <td>Mohammad Abdul Mannan</td>
                                    <td>mdmannan580</td>
                                    <td>mdmannan580@gmail.com</td>
                                    <td>+965-50923840</td>
                                    <td>Admin</td>

                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip"
                                                class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record"
                                                data-bs-placement="top" aria-label="Delete Invoice"
                                                data-bs-original-title="Delete Invoice"><i
                                                    class="ri-delete-bin-7-line ri-20px"></i></a><button type="button"
                                                data-bs-toggle="modal"
                                                class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill"
                                                data-bs-target="#viewtransiction"><i
                                                    class="ri-eye-line ri-20px"></i></button>
                                            <button type="button" data-bs-toggle="modal"
                                                class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill"
                                                data-bs-target="#edittransiction"><i
                                                    class="ri-edit-box-line ri-20px"></i></button>


                                        </div>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1"><a href="app-invoice-preview.html"><span>#5021</span></a></td>
                                    <td>Mohammad Abdul Mannan</td>
                                    <td>mdmannan580</td>
                                    <td>mdmannan580@gmail.com</td>
                                    <td>+965-50923840</td>
                                    <td>Admin</td>

                                    <td>
                                        <div class="d-flex align-items-center"><a href="javascript:;"
                                                data-bs-toggle="tooltip"
                                                class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record"
                                                data-bs-placement="top" aria-label="Delete Invoice"
                                                data-bs-original-title="Delete Invoice"><i
                                                    class="ri-delete-bin-7-line ri-20px"></i></a><button type="button"
                                                data-bs-toggle="modal"
                                                class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill"
                                                data-bs-target="#viewtransiction"><i
                                                    class="ri-eye-line ri-20px"></i></button>
                                            <button type="button" data-bs-toggle="modal"
                                                class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill"
                                                data-bs-target="#edittransiction"><i
                                                    class="ri-edit-box-line ri-20px"></i></button>


                                        </div>
                                    </td>
                                </tr>

                            </tbody>


                        </table>
                        <div class="row mx-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                    Showing 1 to 2 of 2 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                                aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                                class="page-link"><i class="ri-arrow-left-s-line"></i></a>
                                        </li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="DataTables_Table_0" role="link" aria-current="page"
                                                data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                            <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                                data-dt-idx="next" tabindex="-1" class="page-link"><i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="width: 1%;"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Welcome Message --}}


@endsection
