@extends('property.master')
@section('content')
<div class="container my-3">
<h1>Editar imoveis</h1>

<?php
    /** @var TYPE_NAME $properties */
    $property = $properties[0];

?>

<form action="/imoveis/update/<?=$property->id?>" method="post">
    <?= @csrf_field(); ?>
    <?= method_field('PUT'); ?>
    <div class="form-group">
        <label for="title">Titulo do imovel</label>
        <input class="form-control" type="text" name="title" value="<?= $property->title; ?>" id="title">
    </div>
    <div class="form-group">
        <label for="description">Descricao</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"><?= $property->description; ?></textarea>
    </div>
    <div class="form-group">
        <label for="rental_price">Valor de locacao</label>
        <input class="form-control" type="text" name="rental_price" value="<?= $property->rental_price; ?>" id="rental_price">
    </div>
    <div class="form-group">
        <label for="sale_price">Valor de compra</label>
        <input class="form-control" type="text" name="sale_price" value="<?= $property->sale_price; ?>" id="sale_price">
    </div>

    <button class="btn btn-primary" type="submit">Alterar Imovel</button>
</form>
</div>
@endsection
