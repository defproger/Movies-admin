<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <link rel="stylesheet" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" href="./app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" href="./app-assets/css/colors.css">
    <link rel="stylesheet" href="./app-assets/css/components.css">
    <link rel="stylesheet" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" href="./app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" href="./app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" href="./app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" href="./app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" href="./app-assets/css/plugins/extensions/ext-component-toastr.css">
</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<?php
require '../views/components/header.php' ?>

<?php
require '../views/components/menu.php' ?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <section id="movies-section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Movies</h4>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addMovieModal">Add
                                Movie
                            </button>
                        </div>
                        <div class="card-body mt-2">
                            <form class="dt_adv_search" method="POST">
                                <div class="row g-1 mb-md-1">
                                    <div class="col-md-6">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control dt-input" data-column="1"
                                               placeholder="Movie Name" data-column-index="0"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Director:</label>
                                        <input type="text" class="form-control dt-input" data-column="3"
                                               placeholder="Director Name" data-column-index="2"/>
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
                                    <th>Description</th>
                                    <th>Director</th>
                                    <th>Release Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Director</th>
                                    <th>Release Date</th>
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

<div class="modal fade text-start" id="addMovieModal" tabindex="-1" aria-labelledby="addMovieLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addMovieLabel">Add Movie</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addMovieForm">
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="movie-name">Name</label>
                        <input type="text" id="movie-name" class="form-control mb-1" name="name"
                               placeholder="Movie Name" required>
                    </div>
                    <div class="mb-1">
                        <label for="movie-description">Description</label>
                        <textarea id="movie-description" class="form-control mb-1" name="description"
                                  placeholder="Description"></textarea>
                    </div>
                    <div class="mb-1">
                        <label for="movie-director">Director</label>
                        <select id="movie-director" class="form-control select2" name="directorId" required>
                            <option value="">Select Director</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="movie-releaseDate">Release Date</label>
                        <input type="text" id="movie-releaseDate" class="form-control flatpickr mb-1" name="releaseDate"
                               required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Movie</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-start" id="editMovieModal" tabindex="-1" aria-labelledby="editMovieLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editMovieLabel">Edit Movie</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editMovieForm">
                <div class="modal-body">
                    <input type="hidden" id="edit-movie-id" name="movieId">
                    <div class="mb-1">
                        <label for="edit-movie-name">Name</label>
                        <input type="text" id="edit-movie-name" class="form-control mb-1" name="name"
                               placeholder="Movie Name" required>
                    </div>
                    <div class="mb-1">
                        <label for="edit-movie-description">Description</label>
                        <textarea id="edit-movie-description" class="form-control mb-1" name="description"
                                  placeholder="Description"></textarea>
                    </div>
                    <div class="mb-1">
                        <label for="edit-movie-director">Director</label>
                        <select id="edit-movie-director" class="form-control select2 mb-1" name="directorId" required>
                            <option value="">Select Director</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="edit-movie-releaseDate">Release Date</label>
                        <input type="text" id="edit-movie-releaseDate" class="form-control flatpickr mb-1"
                               name="releaseDate" required>
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

<script src="./app-assets/vendors/js/vendors.min.js"></script>
<script src="./app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="./app-assets/vendors/js/extensions/polyfill.min.js"></script>
<script src="./app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="./app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="./app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="./app-assets/js/core/app-menu.js"></script>
<script src="./app-assets/js/core/app.js"></script>

<script>
    $(document).ready(function () {
        $('#movie-director').select2({
            placeholder: 'Select Director',
            allowClear: true,
            dropdownParent: $('#addMovieModal')
        });

        $('#edit-movie-director').select2({
            placeholder: 'Select Director',
            allowClear: true,
            dropdownParent: $('#editMovieModal')
        });

        $('#movie-releaseDate').flatpickr({
            dateFormat: 'Y-m-d'
        });

        var editReleaseDatePicker;

        $('#edit-movie-releaseDate').flatpickr({
            dateFormat: 'Y-m-d',
            onReady: function (selectedDates, dateStr, instance) {
                editReleaseDatePicker = instance;
            }
        });

        var dt_adv_filter_table = $('.dt-advanced-search');
        var directorOptions = '';

        function fetchDirectors() {
            $.ajax({
                url: '/api/directors',
                method: 'GET',
                success: function (response) {
                    directorOptions = '<option value="">Select Director</option>';
                    $.each(response, function (index, director) {
                        directorOptions += '<option value="' + director.directorId + '">' + director.name + '</option>';
                    });
                    $('#movie-director').html(directorOptions).trigger('change');
                    $('#edit-movie-director').html(directorOptions).trigger('change');
                },
                error: function () {
                    toastr.error('Failed to fetch directors', 'Error');
                }
            });
        }

        fetchDirectors();

        if (dt_adv_filter_table.length) {
            var dt_adv_filter = dt_adv_filter_table.DataTable({
                ajax: {
                    url: '/api/movies',
                    dataSrc: ''
                },
                columns: [
                    {data: null},
                    {data: 'name'},
                    {data: 'description'},
                    {data: 'director'},
                    {data: 'releaseDate'},
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
                                '<button class="btn btn-sm btn-primary editMovie" data-id="' + full.movieId + '">Edit</button>' +
                                ' <button class="btn btn-sm btn-danger deleteMovie" data-id="' + full.movieId + '">Delete</button>'
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

        $('input.dt-input').on('keyup', function () {
            filterColumn($(this).attr('data-column'), $(this).val());
        });

        function filterColumn(i, val) {
            if (dt_adv_filter_table.length) {
                if (i == 1 || i == 3) {
                    dt_adv_filter.column(i).search(val, false, true).draw();
                }
            }
        }

        $('#addMovieForm').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: '/api/movies',
                method: 'POST',
                data: formData,
                success: function (response) {
                    toastr.success(response.message, 'Success');
                    $('#addMovieModal').modal('hide');
                    dt_adv_filter.ajax.reload(null, false);
                    $('#addMovieForm')[0].reset();
                },
                error: function (xhr) {
                    var response = xhr.responseJSON;
                    toastr.error(response.error || 'Failed to add movie', 'Error');
                }
            });
        });

        dt_adv_filter_table.on('click', '.editMovie', function () {
            var movieId = $(this).data('id');
            $.ajax({
                url: '/api/movies/' + movieId,
                method: 'GET',
                success: function (movie) {
                    $('#edit-movie-id').val(movie.movieId);
                    $('#edit-movie-name').val(movie.name);
                    $('#edit-movie-description').val(movie.description);

                    $('#edit-movie-director').val(movie.directorId).trigger('change');

                    editReleaseDatePicker.setDate(movie.releaseDate, true);

                    $('#editMovieModal').modal('show');
                },
                error: function () {
                    toastr.error('Failed to fetch movie data', 'Error');
                }
            });
        });

        $('#editMovieForm').on('submit', function (e) {
            e.preventDefault();
            var movieId = $('#edit-movie-id').val();
            var formData = $(this).serialize();

            $.ajax({
                url: '/api/movies/' + movieId,
                method: 'PUT',
                data: formData,
                success: function (response) {
                    toastr.success(response.message, 'Success');
                    $('#editMovieModal').modal('hide');
                    dt_adv_filter.ajax.reload(null, false);
                },
                error: function (xhr) {
                    var response = xhr.responseJSON;
                    toastr.error(response.error || 'Failed to update movie', 'Error');
                }
            });
        });

        dt_adv_filter_table.on('click', '.deleteMovie', function () {
            var movieId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function (result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/movies/' + movieId,
                        method: 'DELETE',
                        success: function (response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Your movie has been deleted.',
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
                                text: 'Failed to delete movie.',
                                customClass: {
                                    confirmButton: 'btn btn-danger'
                                }
                            });
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Cancelled',
                        text: 'Your movie is safe :)',
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