<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php


    $shopping_cart = 19;
    $tipo = "periferico";
    $shipping_price = 0;

    if ($tipo == "cable" && $shopping_cart < 20) {
        echo "no se puede enviar";
    } elseif ($shopping_cart < 20) {
        $shipping_price = 4.99;
        echo "Los gastos de envío son: " . $shipping_price . "€";
    } elseif ($shopping_cart >= 20 && $shopping_cart <= 50) {
        $shipping_price = 4.99;
        echo "Los gastos de envío son: " . $shipping_price . "€";
    } elseif ($shopping_cart > 50 && $shopping_cart <= 150) {
        echo "los portes son gratis";
    } else{
        echo "código de descuento para la siguiente compra: GIMBERNAT_20_%";
    }
    ?>
</p>
</body>
</html>
