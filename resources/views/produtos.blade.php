@extends('layouts.app')
@section('conteudo')
    @if(isset($produtos))
        @foreach($produtos as $produto)
        <h1>{{ $produto }}</h1>
        @endforeach
    @endif
@endsection