<?php

require_once '../app/controllers/ProductController.php';

$controller = new ProductController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = intval($_POST["cantidad"]);
    ob_start();
    $controller->listarProductos($cantidad);
    $content = ob_get_clean();
    require '../app/views/layout.php';
} else {
    echo '
    <form method="POST">
        <label for="cantidad">Cantidad:</label>
        <select name="cantidad" id="cantidad">';
    for ($i = 1; $i <= 5; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    echo '</select>
        <button type="submit">Mostrar Productos</button>
    </form>';
}
 