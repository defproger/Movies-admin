<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta charset="UTF-8">
    <title>Directors</title>
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" href="./app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" href="./app-assets/css/colors.css">
    <link rel="stylesheet" href="./app-assets/css/components.css">
    <link rel="stylesheet" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" href="./app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" href="./app-assets/css/themes/semi-dark-layout.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="./app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" href="./app-assets/css/plugins/extensions/ext-component-toastr.css">
</head>
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static dark-layout" data-open="click"
      data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">

<?php
require '../views/components/header.php';
require '../views/components/menu.php';
?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <section id="directors-section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Directors</h4>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addDirectorModal">Add Director</button>
                        </div>
                        <div class="card-body mt-2">
                            <form class="dt_adv_search" method="POST">
                                <div class="row g-1 mb-md-1">
                                    <div class="col-md-6">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control dt-input" data-column="1"
                                               placeholder="Director Name" data-column-index="0"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-datatable">
                            <table class="dt-advanced-search table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Add Director Modal -->
<div class="modal fade text-start" id="addDirectorModal" tabindex="-1" aria-labelledby="addDirectorLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addDirectorLabel">Add Director</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addDirectorForm">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="director-name">Name</label>
                        <input type="text" id="director-name" class="form-control mb-1" name="name"
                               placeholder="Director Name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Director</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Director Modal -->
<div class="modal fade text-start" id="editDirectorModal" tabindex="-1" aria-labelledby="editDirectorLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editDirectorLabel">Edit Director</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editDirectorForm">
                <div class="modal-body">
                    <input type="hidden" id="edit-director-id" name="directorId">
                    <div class="mb-1">
                        <label for="edit-director-name">Name</label>
                        <input type="text" id="edit-director-name" class="form-control mb-1" name="name"
                               placeholder="Director Name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- Vendor JS -->
<script src="./app-assets/vendors/js/vendors.min.js"></script>
<script src="./app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="./app-assets/vendors/js/extensions/polyfill.min.js"></script>
<script src="./app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<!-- Theme JS -->
<script src="./app-assets/js/core/app-menu.js"></script>
<script src="./app-assets/js/core/app.js"></script>

<script>
    $(document).ready(function () {
        var dt_adv_filter_table = $('.dt-advanced-search');

        if (dt_adv_filter_table.length) {
            var dt_adv_filter = dt_adv_filter_table.DataTable({
                ajax: {
                    url: '/api/directors',
                    dataSrc: ''
                },
                columns: [
                    {data: null},
                    {data: 'name'},
                    {data: null}
                ],
                columnDefs: [
                    {
                        className: 'control',
                        orderable: false,
                        targets: 0
                    },
                    {
                        targets: -1,
                        title: 'Actions',
                        orderable: false,
                        render: function (data, type, full) {
                            return (
                                '<button class="btn btn-sm btn-primary editDirector" data-id="' + full.directorId + '">Edit</button>' +
                                ' <button class="btn btn-sm btn-danger deleteDirector" data-id="' + full.directorId + '">Delete</button>'
                            );
                        }
                    }
                ],
                orderCellsTop: true,
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function (row) {
                                var data = row.data();
                                return 'Details of ' + data['name'];
                            }
                        }),
                        type: 'column',
                        renderer: function (api, rowIdx, columns) {
                            var data = $.map(columns, function (col) {
                                return col.title !== ''
                                    ? '<tr><td>' + col.title + ':</td><td>' + col.data + '</td></tr>'
                                    : '';
                            }).join('');
                            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                        }
                    }
                },
                language: {
                    paginate: {
                        previous: '&nbsp;',
                        next: '&nbsp;'
                    }
                }
            });
        }

        // Advanced Search
        $('input.dt-input').on('keyup change', function () {
            filterColumn($(this).attr('data-column'), $(this).val());
        });

        function filterColumn(i, val) {
            if (dt_adv_filter_table.length) {
                dt_adv_filter.column(i).search(val, false, true).draw();
            }
        }

        // Add Director
        $('#addDirectorForm').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: '/api/directors',
                method: 'POST',
                data: formData,
                success: function (response) {
                    toastr.success(response.message, 'Success');
                    $('#addDirectorModal').modal('hide');
                    dt_adv_filter.ajax.reload(null, false);
                    $('#addDirectorForm')[0].reset();
                },
                error: function (xhr) {
                    var response = xhr.responseJSON;
                    toastr.error(response.error || 'Failed to add director', 'Error');
                }
            });
        });

        // Edit Director
        dt_adv_filter_table.on('click', '.editDirector', function () {
            var directorId = $(this).data('id');
            $.ajax({
                url: '/api/directors/' + directorId,
                method: 'GET',
                success: function (director) {
                    $('#edit-director-id').val(director.directorId);
                    $('#edit-director-name').val(director.name);

                    $('#editDirectorModal').modal('show');
                },
                error: function () {
                    toastr.error('Failed to fetch director data', 'Error');
                }
            });
        });

        $('#editDirectorForm').on('submit', function (e) {
            e.preventDefault();
            var directorId = $('#edit-director-id').val();
            var formData = $(this).serialize();

            $.ajax({
                url: '/api/directors/' + directorId,
                method: 'PUT',
                data: formData,
                success: function (response) {
                    toastr.success(response.message, 'Success');
                    $('#editDirectorModal').modal('hide');
                    dt_adv_filter.ajax.reload(null, false);
                },
                error: function (xhr) {
                    var response = xhr.responseJSON;
                    toastr.error(response.error || 'Failed to update director', 'Error');
                }
            });
        });

        // Delete Director
        dt_adv_filter_table.on('click', '.deleteDirector', function () {
            var directorId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete!',
                cancelButtonText: 'No, cancel!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function (result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/directors/' + directorId,
                        method: 'DELETE',
                        success: function (response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Director has been deleted.',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            });
                            dt_adv_filter.ajax.reload(null, false);
                        },
                        error: function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Failed to delete director.',
                                customClass: {
                                    confirmButton: 'btn btn-danger'
                                }
                            });
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Cancelled',
                        text: 'Director is safe :)',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                }
            });
        });
    });

    $(window).on('load', function () {
        if (feather) {
            feather.replace({width: 14, height: 14});
        }
    });
</script>
</body>
</html>