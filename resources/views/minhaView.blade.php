@extends('layouts.app')
@section('conteudo')
    <center><h1>Teste</h1></center>
    @alerta(['tipo' => 'success', 'titulo' =>' Sucesso !'] )
        <strong>Componente Dinamico</strong> Sucesso parça.
    @endalerta
    <!--segundo componente--> 
    @alerta(['tipo' => 'danger', 'titulo' =>'Erro fatal 500'] )
        <strong>Componente Dinamico</strong> Deu um erro bolado se vira.
    @endalerta
@endsection

