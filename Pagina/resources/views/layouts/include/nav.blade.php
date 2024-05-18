@php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
@endphp
<div>
    @if (Session::get('message'))
    <div class="alert alert-danger text-center" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif
    @if (Session::get('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
</div>

<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="/">
            Grupo 3
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                </a>
                <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="w-100 pt-1 mb-5 text-right">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="get" class="modal-content modal-body border-0 p-0">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                                <button type="submit" class="input-group-text bg-success text-light">
                                    <i class="fa fa-fw fa-search text-white"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                @if (Auth::check())
                @switch(auth::user()->id_perfil_usuario)
                @case(1)
                <div>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="shopCreate">Agregar Producto</a>
                            <a class="dropdown-item" href="#">Cosas de Admin 2</a>
                            <a class="dropdown-item" href="#">Cosas de Admin 3</a>
                        </div>
                    </div>
                </div>
                @break
                @case(2)
                <div>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cliente
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="#">Cosas de Cliente 1</a>
                            <a class="dropdown-item" href="#">Cosas de Cliente 2</a>
                            <a class="dropdown-item" href="#">Cosas de Cliente 3</a>
                        </div>
                    </div>
                </div>
                @break
                @default
                @endswitch

                @php
                $id_usuario=(Auth::user()->id_usuario);
                $user=User::find($id_usuario);
                @endphp

                @else
                @endif

                @guest
                <div>
                    <a class="btn btn-success" style="color: white;" href="/login">Login</a>
                    <a class="btn btn-success" style="color: white;" href="/register">Register</a>
                </div>
                @else
                <div>
                    <a class="btn btn-success" style="color: white;" href="#">{{$user->login_usuario}}</a>
                    <a class="btn btn-success" style="color: white;" href="{{ route('logout')}}">Logout</a>
                </div>
                @endguest

            </div>
        </div>

    </div>
</nav>