<?php
$total = $_POST['total'];

if($total > 100){
    $descuento = $total * 0.10;
    $final = $total - $descuento;

    echo "Total con descuento: $" . $final;
}else{
    echo "No tiene descuento";
}
?>