<ul>
    <?php foreach ($productos as $producto): ?>
        <li>
            <img src="/public/imagenes/<?php echo $producto->imagen; ?>" alt="<?php echo $producto->nombre; ?>" style="width:100px;height:100px;">
            <br>
            <?php
            $precio_final = $producto->precio - ($producto->precio * 0.10);
            echo "{$producto->nombre}: Precio original: \${$producto->precio} - Precio con descuento: \${$precio_final}";
            ?>
        </li>
    <?php endforeach; ?>
</ul>