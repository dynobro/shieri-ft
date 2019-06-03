@extends('layouts.app')
@section('title', 'Caja Food Track Autoservice')

@section('content')

<div class="container-fluid" id="seller-app">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Caja FT Autoservice</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link class="nav-link" to="/">Venta <span class="sr-only">(current)</span></router-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mantención
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <router-link class="dropdown-item" to="/">Ingresos</router-link>
                            <router-link class="dropdown-item" to="/">Productos</router-link>
                            <div class="dropdown-divider"></div>
                            <router-link class="dropdown-item" to="/">Cierre Caja</router-link>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>

        <router-view></router-view>
</div>
   
<script src="js/seller-app.js"></script>

@endsection

