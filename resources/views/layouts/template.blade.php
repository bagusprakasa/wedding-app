<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('') }}css/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('') }}css/sweetalert.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.8/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tooltip.js@1.3.1/dist/umd/tooltip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="{{ asset('') }}css/custom.css" />

</head>

<body>
    <div class="container custom">
        <nav class="navbar navbar-expand-lg py-3 navbar-light mt-4">
            <div class="container custom">

                <a class="navbar-brand font-weight-bold" href="#"><img src="{{ asset('') }}picture/icon.png"
                        width="200px" class="mr-2" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}"
                                href="{{ url('/dashboard') }}"><span class="fa fa-home mr-1"></span> Dashboard <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(1) == 'visitor' ? 'active' : '' }}"
                                href="{{ url('visitor') }}"><span class="fa fa-user mr-1"></span>
                                Visitor</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-user"></span> {{ ucwords(auth()->user()->username) }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                {{-- <a class="dropdown-item" href="{{ route('change_password') }}">Ganti Password</a> --}}
                                <a class="dropdown-item logout" href="#">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('dashboard')
        <div class="box-content px-3 py-4 my-4">
            <div class="container cusutom">

                <div class="row row-breadcrumbs align-items-center">
                    <div class="col-md-6">
                        <h5>
                            <a @if (Request::segment(1) != 'dashboard') onclick="window.history.back()" @endif>
                                @if (Request::segment(1) != 'dashboard')
                                    <span class="fa fa-arrow-left mr-3 btn-rgb-primary fa-sm p-2 "></span>
                                @endif </span>
                            </a>
                            {{ ucwords(str_replace('-', ' ', Request::segment(1))) }}
                        </h5>
                        </h5>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6>{{ ucwords(str_replace('-', ' ', Request::segment(1))) }} / {{ $pageTitle }}</h6>
                    </div>
                </div>
                <hr class="mt-4">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('') }}js/sweetalert.min.js"></script>
    <script src="{{ asset('') }}js/select2.full.min.js"></script>

    <script>
        // $(document).ready(function(){
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $(".select2").select2()
        $(".logout").click(function(e) {
            e.preventDefault()
            swal({
                    title: "Apakah anda yakin?",
                    text: 'Anda akan keluar dari aplikasi Wedding Invitation',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dc3545",
                    confirmButtonText: 'Logout',
                    closeOnConfirm: false,
                },
                function() {
                    $("#logout-form").submit()
                }
            );
        })
        // })
        $(".delete").click(function(e) {
            e.preventDefault()
            swal({
                    title: "Apakah anda yakin?",
                    text: 'Anda akan menghapus penugasan',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dc3545",
                    confirmButtonText: 'Yakin',
                    closeOnConfirm: false,
                    cancelButtonText: 'Batal',
                },
                function() {
                    $("#delete-penugasan").submit()
                }
            );
        })
    </script>
    @stack('custom-script')
</body>

</html>
