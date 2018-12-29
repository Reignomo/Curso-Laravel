@extends('layouts.layout2')
@section('minha_secao_produtos')
    @if(isset ($palavra))
        <h1>Produtos </h1>
        <p>{{ $palavra }}</p>
    @endif
@endsection