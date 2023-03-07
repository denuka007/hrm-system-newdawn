<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NewDawn Manager Login</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 fw-bold">HR manager login</span>
        </div>
    </nav>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://img.freepik.com/free-vector/business-team-discussing-ideas-startup_74855-4380.jpg?w=1380&t=st=1677588825~exp=1677589425~hmac=3ea5bb52eea293f3f9ada0a6686be5fe5e41ad11f64db0d541432a0309ba2853"
                        class="img-fluid" alt="Sample image" />
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">


                    <form action="{{route('manager.login')}}" method="post">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">

                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="lead mb-0 me-3 fw-bold">Welcome to NewDawn</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem">
                                Login
                            </button>
                           <!-- <p class="small fw-bold mt-2 pt-1 mb-0">
                                Don't have an account?
                                <a href="#" class="link-danger">Register</a>
                            </p>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (Session::has('error'))
    <script>
        swal("{{ session::get('error') }}");
    </script>
    @endif
</body>

</html>
