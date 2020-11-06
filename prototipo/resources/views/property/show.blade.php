@extends('property.master')
@section('content')

<div class="container my-3">
<h1>Pagina Single</h1>

<?php
if(!empty($properties)){
    foreach ($properties as $property) {
        ?>
            <h2>Titulo do imovel : <?=$property->title ?></h2>

            <p>Descricao : <?=$property->description ?></p>

            <p>Valor de Locacao : R$ <?= number_format($property->rental_price, 2, "," , "."); ?></p>

            <p>Valor de venda : R$ <?= number_format($property->sale_price, 2, "," , "."); ?></p>
        <?php
    }
}
?>
</div>
@endsection
