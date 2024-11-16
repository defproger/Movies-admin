<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Movies Admin</title>
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/extensions/ext-component-toastr.css">
</head>

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h4 class="card-title mb-1">Start your journey 🚀</h4>
                            <p class="card-text mb-2">Create an account to get started</p>
                            <form id="registerForm" class="auth-register-form mt-2">
                                <div class="mb-1">
                                    <label for="register-username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="register-username" name="login"
                                           placeholder="johndoe" required autofocus/>
                                </div>
                                <div class="mb-1">
                                    <label for="register-password" class="form-label">Password</label>
                                    <div class="input-group form-password-toggle">
                                        <input type="password" class="form-control" id="register-password"
                                               name="password" placeholder="********" required/>
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Sign up</button>
                            </form>
                            <p class="text-center mt-2">
                                <span>Already have an account?</span>
                                <a href="/login"><span>Sign in instead</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./app-assets/vendors/js/vendors.min.js"></script>
<script src="./app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="./app-assets/js/core/app-menu.js"></script>
<script src="./app-assets/js/core/app.js"></script>

<script>
    $(document).ready(function () {
        $('#registerForm').on('submit', function (e) {
            e.preventDefault()

            const formData = {
                login: $('#register-username').val(),
                password: $('#register-password').val()
            }

            $.ajax({
                url: '/api/register',
                method: 'POST',
                data: formData,
                success: function (response) {
                    toastr.success(response.message, 'Success')
                    if (response.redirect) {
                        setTimeout(() => {
                            window.location.href = response.redirect
                        }, 2000)
                    }
                },
                error: function (err) {
                    const error = err.responseJSON ? err.responseJSON.message : 'An error occurred'
                    toastr.error(error, 'Error')
                }
            })
        })

        if (feather) {
            feather.replace({width: 14, height: 14})
        }
    })
</script>
</body>
</html>