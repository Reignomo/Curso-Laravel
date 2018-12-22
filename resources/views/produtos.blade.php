@extends('layouts.app')
<style>
#containerPrincipal{
    width: 80%;
    margin:auto;
}
.card-produtos{
    width:19%;
    margin-right:1%;
    margin-top:2%;
}
</style>
@section('conteudo')
    @if(isset($produtos))
    <div calss="container" id="containerPrincipal">
        <div class="row">
        @foreach($produtos as $produto)
            <div class="card card-produtos">
                <div class="card-body">
                    <h5 class="card-title" style="text-transform: uppercase;"><center>{{ $produto }}</center></h5>
                    <p class="card-text">Descrição do produto.</p>
                    <p class="card-text"><small class="text-muted">Data de criação da postagem</small></p>
                </div>
            </div>
        @endforeach
            </div>
        </div>
    @endif
@endsection