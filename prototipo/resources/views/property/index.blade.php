@extends('property.master')
@section('content')
    <div class="container my-3">


    <h1>Listagem de imoveis</h1>



    <?php

    if(!empty($properties)){

        echo "<table class='table table-striped table-hover'>";
        echo "<thead class='bg-primary text-white'>
                <td>Titulo</td>
                <td>Valor de Locacao</td>
                <td>Valor de Compra</td>
                <td>Ações</td>
              </thead>";
        foreach ($properties as $property){

            $linkReadMode = '/imoveis/' . $property->name;
            $linkEditItem = '/imoveis/editar/' . $property->name;
            $linkRemoveItem = '/imoveis/remover/' . $property->name;

            echo "<tr>
                    <td>{$property->title}</td>
                    <td>R$ " . number_format($property->rental_price, 2 , ',','.') . "</td>
                    <td>R$ " . number_format($property->sale_price, 2 , ',','.') . "</td>
                    <td><a href='{$linkReadMode}'>Ver mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Remover</a> </td>
                  </tr>";
        }
        echo "</table>";

    }
    ?>
    </div>
@endsection
