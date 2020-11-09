@extends('property.master')
@section('content')
<div class="container my-3">
<h1>Criar imoveis</h1>

<form action="/imoveis/cadastrar" method="post">
    <?= @csrf_field(); ?>
        <div class="form-group">
            <label for="title">Titulo do imovel</label>
            <input  class="form-control" type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Descricao</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="rental_price">Valor de locacao</label>
            <input class="form-control" type="text" name="rental_price" id="rental_price">
        </div>

        <div class="form-group">
            <label for="sale_price">Valor de compra</label>
            <input class="form-control" type="text" name="sale_price" id="sale_price">
        </div>

    <button class="btn btn-primary " type="submit">Gravar Imovel</button>
</form>
</div>
@endsection
