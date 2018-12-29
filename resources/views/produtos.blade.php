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
#qt-anuncios{
    margin-top:1%;
    text-align:right;
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
                    <span class="badge badge-secondary">{{ $loop->iteration }}/{{ $loop->count }}</span>
                    @if ($loop->last)
                        <a href="#"><center><small><p>Ver mais produtos</p></small></center></a>
                    @endif
                </div>
            </div>
        @endforeach
            </div>
            <small><p id="qt-anuncios">Quantidade de anúncios: {{ count($produtos) }}</p></small>
        </div>
    @endif
@endsection