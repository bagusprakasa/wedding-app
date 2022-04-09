<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('') }}css/custom.css" />
    <title>Login</title>
    <style>
        body {
            background: #00ADB5;
            min-height: 100vh;
        }

    </style>
</head>

<body>
    <div class="container custom">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="text-center" style="color:white">
                </div>
                <br>
                <div class="card p-5 d-block b-radius-3" style="margin-top:100px">
                    <form method="post" id="login" action="{{ route('login') }}">
                        @csrf
                        <h6 class="text-center">LOGIN SISTEM INFORMASI WEDDING INVITATION</h6>
                        <br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong><span class="fa fa-exclamation-triangle"></span> Gagal login.</strong>
                                {{ session('error') }}
                            </div>
                        @endif
                        <label for=""> Email</label>
                        <div class="input">
                            <span class="fa fa-envelope mr-2"></span>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                placeholder="Masukkan Email">
                        </div>
                        <br>
                        <label for=""> Password</label>
                        <div class="input">
                            <span class="fa fa-lock mr-2"></span>
                            <input type="password" name="password" class="form-control"
                                placeholder="Masukkan Password">
                        </div>
                        <br>
                        <button class="btn btn-primary px-4"> <span class="fa fa-sign-in-alt"></span> Login</button>
                    </form>
                </div>
                <br>
                <p style="color:white" class="text-center">Copyright {{ date('Y') }} BAGUSPRAKASA</p>
            </div>
        </div>
    </div>
</body>

</html>
