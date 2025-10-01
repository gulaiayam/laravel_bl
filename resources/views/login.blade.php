<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class=""></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/login" class="auth-logo">
                                    <img src="{{asset('admin/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{asset('admin/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Login</b></h4>
                        {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            
                        <div class="p-3">
                            @if ($errors->any())
     <div class="alert alert-danger alert-dismissible fade show border-0 mb-4" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <form class="form-horizontal mt-3" action="{{url('proses_login')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" required="" placeholder="namaemail@domain.com" name="email" value="{{old('email')}}">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" required="" placeholder="Password"  name="password">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                            
                                    <div class="col-12">
                                        {!! NoCaptcha::renderJs() !!}
{!! NoCaptcha::display() !!}
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="form-label ms-1" for="customCheck1">Ingat Saya</label>
                                        </div>
                                    </div>
                                </div>

                                
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Lupa password?</a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('admin/js/app.js')}}"></script>

    </body>
</html>
