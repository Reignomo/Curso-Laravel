@extends('layouts.app', ["current" => "home"])

@section('body')
<style>
    #card-jumbotron{
        height:720px;
        position: relative;
    }
    #card-jumbotron #bg{
        position: absolute;
        top:0px;
        left:0px;
        opacity : 0.5 ; 
        background-image:url('/img/bg.jpg');  
        width: 100%;
        height:720px;
        border-radius:1%;
    }
    
    
</style>
<div class="jumbotron" id="card-jumbotron">
<div id="bg">
</div>
<div class="col-12">
    <div class="row" style="margin-bottom:15px;">
        <div  class="card border border-primary">
            <div class="card-body">
                <h5 class="card-title">Home</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>The standard Lorem Ipsum passage, used since the 1500s
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <a href="#!">Saber mais</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de clientes <i class="fas fa-user"></i></h5>
                    <p class="card-text">Aqui você cadastra seus clientes.</p>
                    <a href="/clientes" class="btn btn-primary">Cadastrar produtos</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="card border border-primary">
            <div class="card-body">
                <h5 class="card-title">Cadastro de departamentos <i class="fas fa-briefcase"></i></h5>
                <p class="card-text">Aqui você cadastra o departamento dos seus funcionários.</p>
                <a href="/departamentos" class="btn btn-primary">Cadastrar departamentos</a>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endSection