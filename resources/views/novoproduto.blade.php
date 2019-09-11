@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto"
                       id="nomeProduto" placeholder="Produto">
                <label for="qtdEstoque">Quantidade em Estoque</label>
                <input type="number" class="form-control" name="qtdEstoque"
                       id="qtdEstoque" placeholder="Quantidade em Estoque">
                <label for="precoProd">Preço R$</label>
                <input type="text" class="form-control" name="precoProd"
                       id="precoProd" placeholder="Preço">
                <label for="catProd">Categoria do Produto</label>
                <select class="form-control" id="catProd" name="catProd">
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->nome}}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>       
        </form>
    </div>
</div>

@endsection