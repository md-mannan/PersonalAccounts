<div class="modal fade" id="edittransiction" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
                <div class="text-center mb-6">
                    <h4 class="mb-2">Add Transiction</h4>
                    <h5 class="">Transiction ID <strong class="border p-1 alert-secondary rounded">#2201</strong>
                    </h5>
                </div>
                <form id="editUserForm" class="row g-5 fv-plugins-bootstrap5 fv-plugins-framework"
                    onsubmit="return false" novalidate="novalidate">

                    {{-- Transiction Date --}}
                    <div class="col-md-6 col-12 mb-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control flatpickr-input active" placeholder="YYYY-MM-DD"
                                id="update_transiction_date" readonly="readonly">
                            <label for="update_transiction_date">Transiction Date</label>
                        </div>
                    </div>
                    {{-- Transiction Date --}}
                    {{-- Transiction Type --}}
                    <div class="col-md-6 mb-6" data-select2-id="1">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="1">
                            <div class="position-relative" data-select2-id="1"><select name="update_transiction_type"
                                    id="update_transiction_type"
                                    class="select2 form-select form-select-lg select2-hidden-accessible"
                                    data-allow-clear="true" data-select2-id="transiction_type" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="AK" data-select2-id="2">Income</option>
                                    <option value="HI" data-select2-id="53">Expences</option>
                                    <option value="CA" data-select2-id="54">Remitance</option>
                                    <option value="NV" data-select2-id="55">Payable</option>
                                    <option value="NV" data-select2-id="55">Recivable</option>

                                </select></div>
                            <label for="update_transiction_type">Transiction Type</label>
                        </div>
                    </div>
                    {{-- Transiction Type --}}
                    {{-- Send By --}}

                    <div class="col-md-6 mb-6" data-select2-id="106">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="105">
                            <div class="position-relative" data-select2-id="104"><select name="update_send_by"
                                    id="update_send_by"
                                    class="select2 form-select form-select-lg select2-hidden-accessible"
                                    data-allow-clear="true" data-select2-id="update_send_by" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="AK" data-select2-id="2">Bodiuzzaman</option>
                                    <option value="HI" data-select2-id="53">Monir</option>
                                    <option value="CA" data-select2-id="54">Kamruzzaman</option>
                                    <option value="NV" data-select2-id="55">Jaman</option>
                                    <option value="NV" data-select2-id="55">Mannan</option>

                                </select></div>
                            <label for="update_send_by">Send By</label>
                        </div>
                    </div>



                    {{-- Send By --}}
                    {{-- Source --}}

                    <div class="col-md-6 mb-6" data-select2-id="106">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="105">
                            <div class="position-relative" data-select2-id="104">
                                <input type="text" class="form-control" placeholder="Mannan Salary"
                                    name="update_money_source">
                            </div>
                            <label for="update_money_source">Money Source</label>
                        </div>
                    </div>



                    {{-- Source --}}
                    {{-- Send Excange --}}
                    <div class="col-12 col-md-6 mb-6" data-select2-id="6">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="5">
                            <div class="position-relative" data-select2-id="4">
                                <select id="update_exchange_name" class="select2 form-select select2-hidden-accessible"
                                    data-allow-clear="true" data-select2-id="update_exchange_name" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="" data-select2-id="2" selected>Al Mulla</option>
                                    <option value="AL" data-select2-id="15">National</option>
                                    <option value="AK" data-select2-id="16">Al Ansari</option>
                                    <option value="AK" data-select2-id="16">Al Muzaini</option>
                                </select>

                            </div>
                            <label for="update_exchange_name">Excange Name</label>
                        </div>
                    </div>
                    {{-- Send Excange --}}
                    {{-- Attachment --}}

                    <div class="col-md-6 mb-6" data-select2-id="">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="">
                            <div class="position-relative" data-select2-id="104">
                                <input type="file" class="form-control" placeholder="Mannan Salary"
                                    name="attachment">
                            </div>
                            <label for="recipent">Attachment</label>
                        </div>
                    </div>




                    {{-- Attachment --}}
                    {{-- Foraign Currency --}}
                    <div class="col-12 col-md-6 mb-6" data-select2-id="6">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="36">
                            <div class="position-relative" data-select2-id="35"><select id="foraign_currency"
                                    class="select2 form-select select2-hidden-accessible"
                                    data-select2-id="foraign_currency" tabindex="-1" aria-hidden="true">
                                    <option value="usd" selected="" data-select2-id="6">USD</option>
                                    <option value="euro" data-select2-id="38">BDT</option>
                                    <option value="pound" data-select2-id="39">Pound</option>
                                    <option value="kwd" data-select2-id="40">KWD</option>
                                </select></div>
                            <label for="foraign_currency">Foraign Currency</label>
                        </div>
                    </div>
                    {{-- Foraign Currency --}}
                    {{-- Local Currency --}}
                    <div class="col-12 col-md-6 mb-6" data-select2-id="6">
                        <div class="form-floating form-floating-outline form-floating-select2" data-select2-id="36">
                            <div class="position-relative" data-select2-id="35">
                                <select id="local_currency" class="select2 form-select select2-hidden-accessible"
                                    data-select2-id="local_currency" tabindex="-1" aria-hidden="true"
                                    name="local_currency">
                                    <option value="usd" selected="" data-select2-id="6">USD</option>
                                    <option value="euro" data-select2-id="38" selected>BDT</option>
                                    <option value="pound" data-select2-id="39">Pound</option>
                                    <option value="bitcoin" data-select2-id="40">Bitcoin</option>
                                </select>
                            </div>
                            <label for="local_currency">Local Currency</label>
                        </div>
                    </div>
                    {{-- Local Currency --}}
                    {{-- Foraign Amount --}}
                    <div class="col-12 col-md-6 mb-6">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">KWD</span>
                            <div class="form-floating form-floating-outline">
                                <input type="text" name="foraign_amount" class="form-control" placeholder="499"
                                    aria-label="Amount (to the nearest dollar)">
                                <label>Amount</label>
                            </div>
                            <span class="input-group-text">380 BDT</span>
                        </div>
                    </div>
                    {{-- Foraign Amount --}}
                    {{-- Local Amount --}}
                    <div class="col-12 col-md-6 mb-6">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">BDT</span>
                            <div class="form-floating form-floating-outline">
                                <input type="number" name="foraign_amount" class="form-control" placeholder="499"
                                    aria-label="Amount (to the nearest dollar)">
                                <label>Local Amount</label>
                            </div>

                        </div>
                    </div>
                    {{-- Local Amount --}}

                    {{-- Note  --}}
                    <div class="col-12 col-md-12 mb-12">
                        <div class="form-floating form-floating-outline mb-6">
                            <textarea class="form-control h-px-100" id="note" placeholder="Description here..."></textarea>
                            <label for="exampleFormControlTextarea1">Sender Note</label>
                        </div>
                    </div>
                    {{-- Note  --}}







                    <div class="col-12 text-center d-flex flex-wrap justify-content-center gap-4 row-gap-4">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
</div>
