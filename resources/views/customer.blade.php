@extends('layouts.app')
@section('title', 'Food Track Autoservice')

@section('content')

<div class="container" id="customer-app">
    <div class="pos-f-t" style="margin-bottom:20px;">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-info p-4">
                    <router-link class="btn btn-secondary" to="/">Carta</router-link>
                    <router-link class="btn btn-warning" to="/my-order">Mi Pedido</router-link>
                    
                </div>
            </div>
            <nav class="navbar navbar-dark bg-info">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    
                </button>
                <span class="navbar-brand mb-0 h1">@yield('title')</span>
            </nav>
        </div>

        <router-view></router-view>
</div>
   
<script src="js/customer-app.js"></script>

@endsection

