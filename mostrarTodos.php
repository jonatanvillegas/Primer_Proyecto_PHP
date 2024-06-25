<?php
function mostrarTodos()
{
    $json_data = file_get_contents('data-1.json');
    $data = json_decode($json_data, true);

    foreach ($data as $item) {
        echo '<div class="card">';
        echo '<div class="card-image">';
        echo '<img src="../img/home.jpg">';
        echo '</div>';
        echo '<div class="card-content">';
        echo '<span class="card-title">' . htmlspecialchars($item['Tipo']) . '</span>';
        echo '<p>Dirección: ' . htmlspecialchars($item['Direccion']) . '</p>';
        echo '<p>Ciudad: ' . htmlspecialchars($item['Ciudad']) . '</p>';
        echo '<p>Teléfono: ' . htmlspecialchars($item['Telefono']) . '</p>';
        echo '<p>Código Postal: ' . htmlspecialchars($item['Codigo_Postal']) . '</p>';
        echo '<p>Precio: ' . htmlspecialchars($item['Precio']) . '</p>';
        echo '</div>';
        echo '</div>';
    }
}
