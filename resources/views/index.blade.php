@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>
                    <p class="card-text">
                            Aqui voce cadastra todos os produtos.
                            Nao se esqueça de cadastrar previamente as categorias.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastro do Produto</a>
                </div>
                
            </div>
            
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Categorias</h5>
                    <p class="card-text">
                            Cadastre as Categorias dos seus Produtos
                    </p>
                    <a href="/categorias" class="btn btn-primary">Cadastro de Categoria</a>
                </div>
                
            </div>
            
        </div>
    </div>
</div>

@endsection