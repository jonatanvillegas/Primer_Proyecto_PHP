<?php
function obtenerCiudadesYTipos() {
    $json_data = file_get_contents('data-1.json');
    $data = json_decode($json_data, true);
    $ciudades = [];
    $tipos = [];

    foreach ($data as $item) {
        if (!in_array($item['Ciudad'], $ciudades)) {
            $ciudades[] = $item['Ciudad'];
        }
        if (!in_array($item['Tipo'], $tipos)) {
            $tipos[] = $item['Tipo'];
        }
    }

    return ['ciudades' => $ciudades, 'tipos' => $tipos];
}
?>