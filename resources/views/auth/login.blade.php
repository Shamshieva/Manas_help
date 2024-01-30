

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Datum | CRM Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href={{ asset("admin_files/assets/images/favicon.ico") }}/assets/images/favicon.ico" />

    <link rel="stylesheet" href={{ asset("admin_files/assets/css/backend-plugin.min.css") }}>
    <link rel="stylesheet" href={{ asset("admin_files/assets/css/backend.css?v=1.0.0") }}>  </head>
<body class=" ">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->

<div class="wrapper">
    <section class="login-content">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-5">
                    <div class="card p-3">
                        <div class="card-body">
                            <div class="auth-logo">
                                <img class="img-fluid  rounded-normal  darkmode-logo" alt="logo" src={{ asset("admin_files/assets/images/logo.png")}} >
                                <img class="img-fluid rounded-normal light-logo" alt="logo" src={{ asset("admin_files/assets/images/logo-dark.png")}} >
                            </div>
                            <h3 class="mb-3 font-weight-bold text-center">Sign In</h3>
                            <p class="text-center text-secondary mb-4">Log in to your account to continue</p>
                            <form action="{{ route('auth.login') }}" method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email" class="text-secondary">Email</label>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group">
{{--                                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                                <label for="password" class="text-secondary">Password</label>--}}
{{--                                                <label><a href="auth-recover-pwd.html">Forgot Password?</a></label>--}}
{{--                                            </div>--}}
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-2">Log In</button>
                                <div class="col-lg-12 mt-3">
                                    <p class="mb-0 text-center">Don't have an account? <a href={{ route('auth.register') }}>Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Backend Bundle JavaScript -->
<script src={{ asset("admin_files/assets/js/backend-bundle.min.js")}}></script>
<!-- Chart Custom JavaScript -->
<script src={{ asset("admin_files/assets/js/customizer.js") }}></script>

<script src={{ asset("admin_files/assets/js/sidebar.js") }}></script>

<!-- Flextree Javascript-->
<script src={{ asset("admin_files/assets/js/flex-tree.min.js") }}></script>
<script src={{ asset("admin_files/assets/js/tree.js")}}></script>

<!-- Table Treeview JavaScript -->
<script src={{ asset("admin_files/assets/js/table-treeview.js")}}></script>

<!-- SweetAlert JavaScript -->
<script src={{ asset("admin_files/assets/js/sweetalert.js") }}></script>

<!-- Vectoe Map JavaScript -->
<script src={{ asset("admin_files/assets/js/vector-map-custom.js") }}></script>

<!-- Chart Custom JavaScript -->
<script src={{ asset("admin_files/assets/js/chart-custom.js") }}></script>
<script src={{ asset("admin_files/assets/js/charts/01.js" ) }}></script>
<script src={{ asset("admin_files/assets/js/charts/02.js") }}></script>

<!-- slider JavaScript -->
<script src={{ asset("admin_files/assets/js/slider.js") }}></script>

<!-- Emoji picker -->
{{--<script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>--}}
<script src={{ asset("admin_files/assets/vendor/emoji-picker-element/index.js")}} type="module"></script>


<!-- app JavaScript -->
<script src={{ asset("admin_files/assets/js/app.js")}}></script>  </body>
</html>
