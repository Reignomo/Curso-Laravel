@extends('layouts.app', ["current" => "clientes"])
<style>
    .img-card-user{
        width:220px;
        border-radius:50%;
    }
    .centered {
        margin: 0 auto !important;
        float: none !important;
    }
</style>
@section('body')
    <h2>Ultimo cliente cadastrado</h2>
    <p class="text-secondary">Esse foi o ultimo cliente cadastrado.</p>
    <div class="bs-callout bs-callout-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-3 centered">
                    <img alt="Responsive image" class="img-card-user" src="/img/clientes/jadem.png">
                </div>
                <div class="col-xs-12 col-md-6 centered" style="padding-top:15px;">
                    <h4 class="text-primary">Caio Botura</h4>
                    <div class="text-secondary">
                        <p>Idade: 25</p>
                        <p>Departamento: Desenvolvimento</p>
                        <p>Descrição: Lorem ipsom bla bla bla.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2 centered" style="padding-top:15px;">
                    <ul class="list-group list-group-horizontal text-center">
                        <li class="list-group-item list-group-item-primary active">Skills</li>
                        <li class="list-group-item list-group-item-primary">PHP 7 <i class="fab fa-php"></i></li>
                        <li class="list-group-item list-group-item-primary">Laravel 5.6 <i class="fab fa-laravel"></i></li>
                        <li class="list-group-item list-group-item-primary">Bitcoin <i class="fab fa-bitcoin"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endSection

