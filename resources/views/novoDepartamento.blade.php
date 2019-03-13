@extends('layouts.app', ["current" => "departamentos"])
<style>
    #main-content img{
        width:100%;
        border-radius:1%;
    }
</style>
@section('body')
<div class="d-flex justify-content-center" id="main-content">
    <div class="col-md-8 col-xs-12">
        <img src="/img/empresa.png" style="margin-bottom:30px;"></img>
        <div class="card border">
            <div class="card-body">
                <h2 class="card-title">Cadastro de departamento</h2>
                <small id="emailHelp" class="form-text text-muted">Aqui você pode criar novos departamentos, basta escolher o nome e salvar.</small>
                <form action="/departamento/cadastrar" method="post" id="formCadastroDepartamento">
                    @csrf
                    <div class="form-group">
                        <label class="text-secundary" for="nomeDepartamento">Nome</label>
                        <input id="nomeDepartamento" class="form-control" name="nomeDepartamento">
                    </div>
                    <div class="form-group">
                    
                    </div>
                    <button class="btn btn-secundary" type="submit" form="formCadastroDepartamento">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
@endSection

