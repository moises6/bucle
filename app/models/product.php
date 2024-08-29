<?php

class Product
{
    public $nombre;
    public $precio;
    public $imagen;

    public function __construct($nombre, $precio, $imagen)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }

    public static function obtenerNombresSimples()
    {
        return ["Producto 1", "Producto 2", "Producto 3", "Producto 4", "Producto 5"];
    }

    public static function obtenerProductosAleatorios($cantidad)
    {
        $nombres_simples = self::obtenerNombresSimples();
        $productos = [];

        for ($i = 0; $i < $cantidad; $i++) {
            $nombre = $nombres_simples[$i % count($nombres_simples)]; // Reutiliza nombres si la cantidad excede 5
            $precio = rand(10, 50); // Precio aleatorio entre 10 y 50
            $imagen = "producto_" . chr(97 + $i) . ".jpg"; // producto_a.jpg, producto_b.jpg, etc.
            $productos[] = new Product($nombre, $precio, $imagen);
        }

        return $productos;
    }
}
