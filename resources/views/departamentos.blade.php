@extends('layouts.app', ["current" =>"departamentos"])
<style>
    #main-row{
        margin:0px;
        width:100%;
        padding:10% 15px 15px;
    }
</style>
@section('body')
<script>
    var departamentoSelecionado = 0;
</script>
    <div class="card border" style="height:700px;">
        <div class="row" id="main-row">
            <div class="col-xs-12 col-md-4">
            <div class="list-group">
            @foreach($departamentos as $departamento)
                <a href="#" class="list-group-item list-group-item-action list-group-item-primary" value={{ $departamento->id }}>{{ $departamento->nome }}</a>
            @endforeach
            </div>
            </div>
            <div class="col-xs-12 col-md-8">
                <div class="card border" style="height:450px;">
                    <div class="card-body">
                        <h2 class="card-title">Atualizar departamento</h2>
                        <form action="/departamento/update/" method="POST">
                            @csrf
                            <div class="form-group">
                                <label form="nomeDepartamento">Nome departamento</label>
                                <input class="form-control" type="text" id="nomeDepartamento" name="nomeDepartamento" disabled="true">
                            </div>
                            <div class="form-group">
                                <label form="novoNomeDepartamento">Novo nome departamento</label>
                                <input class="form-control" type="text" id="novoNomeDepartamento" name="novoNomeDepartamento" disabled="true">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkdEditar">
                                <label class="form-check-label" for="checkdEditar">Editar departamento</label>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button class="btn btn-secondary" style="margin-right:5px;">Cancelar</button>
                                <button class="btn btn-primary" id="btnCacelar" type="submit">Salvar</button>
                            </div>
                            <small class="text-secondary">Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a consulta aos diversos militantes é uma das consequências das diretrizes de desenvolvimento para o futuro.</small>
                        </form>
                    </div>
                </dvi>
            </div>
        </div>
    </div>
<script>
$("#checkdEditar").click(function(){
    if($("#checkdEditar").is(":checked") == true)
    {
        $("#novoNomeDepartamento").prop("disabled", false);
    }
    else{
        $("#novoNomeDepartamento").prop("disabled", true);
    }
});

$(".list-group-item").click(function(){
    $("#nomeDepartamento").val($(this).text());
    var departamentoSelecionado = document.queryselector(this.id); 
});
</script>
@endSection


