<?php
// Mostrar errores en navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Tamaño del tablero
$filas = 10;
$columnas = 10;

// Barcos y cantidad
$tipos_barcos = [
    ['nombre' => 'fragata', 'longitud' => 1, 'cantidad' => 4],
    ['nombre' => 'submarino', 'longitud' => 2, 'cantidad' => 3],
    ['nombre' => 'destructor', 'longitud' => 3, 'cantidad' => 2],
    ['nombre' => 'portaavions', 'longitud' => 4, 'cantidad' => 1],
];

// Inicializar tablero vacío (0 = agua)
$tablero = [];
for ($i = 1; $i <= $filas; $i++) {
    for ($j = 1; $j <= $columnas; $j++) {
        $tablero[$i][$j] = 0;
    }
}

// Función para comprobar si se puede poner barco
function puedePonerBarco($tablero, $fila, $col, $longitud, $orientacion, $filas, $columnas) {
    if ($orientacion == 'H') {
        if ($col + $longitud - 1 > $columnas) return false;
        for ($c = $col; $c < $col + $longitud; $c++) {
            if ($tablero[$fila][$c] != 0) return false;
        }
    } else { // vertical
        if ($fila + $longitud - 1 > $filas) return false;
        for ($f = $fila; $f < $fila + $longitud; $f++) {
            if ($tablero[$f][$col] != 0) return false;
        }
    }
    return true;
}

// Función para colocar barco
function ponerBarco(&$tablero, $tipo, $longitud, $filas, $columnas) {
    $colocado = false;
    while (!$colocado) {
        $orientacion = rand(0,1) ? 'H' : 'V';
        $fila = rand(1, $filas);
        $col = rand(1, $columnas);
        if (puedePonerBarco($tablero, $fila, $col, $longitud, $orientacion, $filas, $columnas)) {
            if ($orientacion == 'H') {
                for ($c = $col; $c < $col + $longitud; $c++) {
                    $tablero[$fila][$c] = $tipo;
                }
            } else {
                for ($f = $fila; $f < $fila + $longitud; $f++) {
                    $tablero[$f][$col] = $tipo;
                }
            }
            $colocado = true;
        }
    }
}

// Colocar todos los barcos la cantidad que corresponda
foreach ($tipos_barcos as $barco) {
    for ($i = 0; $i < $barco['cantidad']; $i++) {
        ponerBarco($tablero, $barco['nombre'], $barco['longitud'], $filas, $columnas);
    }
}

// Iniciales para mostrar en el tablero
$iniciales = [
    'fragata' => 'F',
    'submarino' => 'S',
    'destructor' => 'D',
    'portaavions' => 'P'
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica PHP</title>
	<style>
	    /* Contenedor principal para centrar */
	    body, html {
	        height: 100%;
	        margin: 0;
	        display: flex;
	        flex-direction: column;
	        justify-content: center; /* centra verticalmente */
	        align-items: center; /* centra horizontalmente */
	        font-family: Arial, sans-serif;
	    }

	    .container {
	        text-align: center;
	    }

	    table, td {
	        border: 1px solid black;
	        border-collapse: collapse;
	        padding: 5px 10px;
	        text-align: center;
	        width: 30px;
	        height: 30px;
	        margin: 0 auto;
	    }

	    .footer{
	        background-color: lightblue;
	        text-align: center;
	        width: 100%;
	        padding: 10px 0;
	        position: fixed;
	        bottom: 0;
	        left: 0;
	        font-weight: bold;
	    }
	</style>

</head>
<body>

<div4>
	<h1>Exercici 5: BATALLA NAVAL </h1>
	<table border="1">
		<?php
		for ($i = 0; $i <= 10; $i++) {
		    echo "<tr>";
		    for ($f = 0; $f <= 10; $f++) {
		        if ($i == 0 && $f == 0) {
		            echo "<td></td>";
		        } elseif ($i == 0 && $f > 0) {
		            echo "<td>$f</td>";
		        } elseif ($f == 0 && $i > 0) {
		            echo "<td>" . chr(64 + $i) . "</td>";
		        } else {
                    $celda = $tablero[$i][$f];
                    if ($celda == 0) {
                        echo "<td></td>"; 6
                    } else {
                        echo "<td style='background-color: lightblue; font-weight: bold;'>" . $iniciales[$celda] . "</td>";
                    }
                }
		    }
		    echo "</tr>";
		}
		?>
	</table>
</div4>

<div class="footer">AWS2-MP07 Desenvolupament web en entorn servidor <br> BATALLA NAVAL</div>

</body>
</html>
