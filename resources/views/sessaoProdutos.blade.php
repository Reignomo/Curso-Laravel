@extends('layouts.layout2')
@section('minha_secao_produtos')
    @if(isset ($palavra))
        <h1>Produtos </h1>
        <p>{{ $palavra }}</p>
    @else
        <h1>Nada foi digitado<h1>
    @endif
@endsection