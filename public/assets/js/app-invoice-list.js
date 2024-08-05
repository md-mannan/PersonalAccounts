$(function () {
    var a,
        e = $(".invoice-list-table");
    e.length &&
        (a = e.DataTable({
            ajax: assetsPath + "/json/invoice-list.json",
            columns: [
                { data: "invoice_id" },
                { data: "invoice_id" },
                { data: "invoice_id" },
                { data: "invoice_status" },
                { data: "issued_date" },
                { data: "client_name" },
                { data: "total" },
                { data: "balance" },
                { data: "invoice_status" },
                { data: "action" },
            ],
            columnDefs: [
                {
                    className: "control",
                    responsivePriority: 2,
                    searchable: !1,
                    targets: 0,
                    render: function (a, e, t, n) {
                        return "";
                    },
                },
                {
                    targets: 1,
                    orderable: !1,
                    checkboxes: {
                        selectAllRender:
                            '<input type="checkbox" class="form-check-input">',
                    },
                    render: function () {
                        return '<input type="checkbox" class="dt-checkboxes form-check-input">';
                    },
                    searchable: !1,
                },
                {
                    targets: 2,
                    render: function (a, e, t, n) {
                        return (
                            '<a href="app-invoice-preview.html"><span>#' +
                            t.invoice_id +
                            "</span></a>"
                        );
                    },
                },
                {
                    targets: 3,
                    render: function (a, e, t, n) {
                        var s = t.invoice_status,
                            i = t.due_date;
                        return (
                            "<div class='d-inline-flex' data-bs-toggle='tooltip' data-bs-html='true' title='<span>" +
                            s +
                            '<br> <span class="fw-medium">Balance:</span> ' +
                            t.balance +
                            '<br> <span class="fw-medium">Due Date:</span> ' +
                            i +
                            "</span>'>" +
                            {
                                Sent: '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-secondary"><i class="ri-save-line ri-16px"></i></span></span>',
                                Draft: '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-primary"><i class="ri-mail-line ri-16px"></i></span></span>',
                                "Past Due":
                                    '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-danger"><i class="ri-error-warning-line ri-16px"></i></span></span>',
                                "Partial Payment":
                                    '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-success"><i class="ri-check-line ri-16px"></i></span></span>',
                                Paid: '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-warning"><i class="ri-line-chart-line ri-16px"></i></span></span>',
                                Downloaded:
                                    '<span class="avatar avatar-sm"> <span class="avatar-initial rounded-circle bg-label-info"><i class="ri-arrow-down-line ri-16px"></i></span></span>',
                            }[s] +
                            "</div>"
                        );
                    },
                },
                {
                    targets: 4,
                    responsivePriority: 4,
                    render: function (a, e, t, n) {
                        var s = t.client_name,
                            i = t.service,
                            r = t.avatar_image,
                            l = Math.floor(11 * Math.random()) + 1;
                        return (
                            '<div class="d-flex justify-content-start align-items-center"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3">' +
                            (!0 === r
                                ? '<img src="' +
                                assetsPath +
                                "/img/avatars/" +
                                (l + ".png") +
                                '" alt="Avatar" class="rounded-circle">'
                                : '<span class="avatar-initial rounded-circle bg-label-' +
                                [
                                    "success",
                                    "danger",
                                    "warning",
                                    "info",
                                    "dark",
                                    "primary",
                                    "secondary",
                                ][Math.floor(6 * Math.random())] +
                                '">' +
                                (r = (
                                    ((r =
                                        (s = t.client_name).match(/\b\w/g) ||
                                        []).shift() || "") + (r.pop() || "")
                                ).toUpperCase()) +
                                "</span>") +
                            '</div></div><div class="d-flex flex-column"><a href="pages-profile-user.html" class="text-truncate text-heading"><p class="mb-0 fw-medium">' +
                            s +
                            '</p></a><small class="text-truncate">' +
                            i +
                            "</small></div></div>"
                        );
                    },
                },
                {
                    targets: 5,
                    render: function (a, e, t, n) {
                        return "<span>$" + t.total + "</span>";
                    },
                },
                {
                    targets: 6,
                    render: function (a, e, t, n) {
                        t = new Date(t.due_date);
                        return (
                            '<span class="d-none">' +
                            moment(t).format("YYYYMMDD") +
                            "</span>" +
                            moment(t).format("DD MMM YYYY")
                        );
                    },
                },
                {
                    targets: 7,
                    orderable: !1,
                    render: function (a, e, t, n) {
                        t = t.balance;
                        return 0 === t
                            ? '<span class="badge rounded-pill bg-label-success" text-capitalized> Paid </span>'
                            : '<span class="text-heading">' + t + "</span>";
                    },
                },
                { targets: 8, visible: !1 },
                {
                    targets: -1,
                    title: "Actions",
                    searchable: !1,
                    orderable: !1,
                    render: function (a, e, t, n) {
                        return '<div class="d-flex align-items-center"><a href="javascript:;" data-bs-toggle="tooltip" class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record" data-bs-placement="top" title="Delete Invoice"><i class="ri-delete-bin-7-line ri-20px"></i></a><a href="app-invoice-preview.html" data-bs-toggle="tooltip" class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light rounded-pill"  data-bs-placement="top" title="Preview Invoice"><i class="ri-eye-line ri-20px"></i></a><div class="dropdown"><a href="javascript:;" class="btn btn-icon btn-sm btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i></a><div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a href="app-invoice-edit.html" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Duplicate</a></div></div></div>';
                    },
                },
            ],
            order: [[2, "desc"]],
            dom: '<"row mx-1"<"col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-4 mt-md-0 mt-5"l<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start"B>><"col-12 col-md-6 d-flex align-items-center justify-content-end flex-column flex-md-row pe-3 gap-md-4"f<"invoice_status mb-5 mb-md-0">>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            language: {
                sLengthMenu: "Show _MENU_",
                search: "",
                searchPlaceholder: "Search Invoice",
                paginate: {
                    next: '<i class="ri-arrow-right-s-line"></i>',
                    previous: '<i class="ri-arrow-left-s-line"></i>',
                },
            },
            buttons: [
                {
                    text: '<i class="ri-add-line ri-16px me-md-2 align-baseline"></i><span class="d-md-inline-block d-none">Add Transiction</span>',
                    className: "btn btn-primary waves-effect waves-light",
                    attr: {
                        'data-bs-toggle': 'modal',
                        'data-bs-target': '#addtransiction'
                    },
                    // action: function (a, e, t, n) {
                    //     window.location = "";
                    // },
                },





            ],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (a) {
                            return "Details of " + a.data().full_name;
                        },
                    }),
                    type: "column",
                    renderer: function (a, e, t) {
                        t = $.map(t, function (a, e) {
                            return "" !== a.title
                                ? '<tr data-dt-row="' +
                                a.rowIndex +
                                '" data-dt-column="' +
                                a.columnIndex +
                                '"><td>' +
                                a.title +
                                ":</td> <td>" +
                                a.data +
                                "</td></tr>"
                                : "";
                        }).join("");
                        return (
                            !!t &&
                            $('<table class="table"/><tbody />').append(t)
                        );
                    },
                },
            },
            initComplete: function () {
                this.api()
                    .columns(8)
                    .every(function () {
                        var e = this,
                            t = $(
                                '<select id="UserRole" class="form-select"><option value=""> Select Status </option></select>'
                            )
                                .appendTo(".invoice_status")
                                .on("change", function () {
                                    var a = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );
                                    e.search(
                                        a ? "^" + a + "$" : "",
                                        !0,
                                        !1
                                    ).draw();
                                });
                        e.data()
                            .unique()
                            .sort()
                            .each(function (a, e) {
                                t.append(
                                    '<option value="' +
                                    a +
                                    '" class="text-capitalize">' +
                                    a +
                                    "</option>"
                                );
                            });
                    });
            },
        })),
        e.on("draw.dt", function () {
            [].slice
                .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                .map(function (a) {
                    return new bootstrap.Tooltip(a, {
                        boundary: document.body,
                    });
                });
        }),
        $(".invoice-list-table tbody").on(
            "click",
            ".delete-record",
            function () {
                $(this).closest(
                    $('[data-bs-toggle="tooltip"]').tooltip("hide")
                ),
                    a.row($(this).parents("tr")).remove().draw();
            }
        ),
        setTimeout(() => {
            $(".invoice_status .form-select").addClass("form-select-sm");
        }, 300);
});
