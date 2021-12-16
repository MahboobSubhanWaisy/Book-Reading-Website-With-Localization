<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Page - BOUM BOOK</title>
    <link rel="apple-touch-icon" href="{{ asset('public/assets/backends') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/backends') }}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backends') }}/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backends') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backends') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backends') }}/app-assets/css/components.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backends') }}/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{ asset('public/assets/backends') }}/app-assets/images/pages/register.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Create Account</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account. </p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input type="text" name="u_name" id="full-name" class="form-control" value="{{ old('u_name') }}" placeholder="Full Name" required>
                                                        <label for="full-name">Full Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text"name="u_lastname"  id="last-name" class="form-control" value="{{ old('u_lastname') }}" placeholder="Last Name" required>
                                                        <label for="last-name">Last Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" name="u_email" value="{{ old('u_email') }}" class="form-control" placeholder="Email" required>
                                                        <label for="inputEmail">Email</label>
                                                        @error('u_email')
                                                                <strong>{{ $message }}</strong>
                                                        @enderror
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="u_password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                        <label for="inputPassword">Password</label>
                                                        @error('u_password')
                                                                <strong>{{ $message }}</strong>
                                                        @enderror
                                                    </div>

                                                    <div class="form-label-group">
                                                        <input type="password" name="u_password_confirmation" autocomplete="new-password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required>
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> I accept the terms & conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <a href="{{route('login')}}" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
</body>
<!-- END: Body-->

</html>