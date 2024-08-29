<?php

require_once __DIR__ . '/../models/Product.php';


class ProductController
{

    public function listarProductos($cantidad)
    {
        $productos = Product::obtenerProductosAleatorios($cantidad);
        require '../views/products/list.php';
    }
}
