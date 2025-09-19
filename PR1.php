<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica PHP</title>
	<style>
		.footer{
			background-color: lightblue;
			position: fixed;
		    text-align: center;
		    left: 0;
		    bottom: 0;
    		width:100%;
    		height:3em;
			padding: 20px;    		
		}
		table, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		    padding: 5px 10px;
		    text-align: center;
		}
	</style>
</head>
<body>

<h1>Hola</h1>
<?php
# Mostrar errores en navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Practica PHP 16sept 2025";

?>

<div1>
	<h1>Exercici 1</h1>
	<table>
		<tr>
		<?php
		$N = 3; // las columnas llegan hasta el numero del valor que pongamos
		for ($i = 0; $i <= $N; $i++) {
			echo "<td>$i</td>";
		}
		?>
		</tr>
	</table>
</div1>

<div2>
    <h1>Exercici 2</h1>
    <table border="1">
        <tr>
            <?php
            $N = 7; // número máximo de columnas

            // fila de letras (empieza en 1 para que 1 = A)
            for ($i = 1; $i <= $N+1; $i++) {
                echo "<td>" . chr(64 + $i) . "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            // fila de números (desde 0 hasta N)
            for ($i = 0; $i <= $N; $i++) {
                echo "<td>$i</td>";
            }
            ?>
        </tr>
    </table>
</div2>
<div3>
	<h1>Exercici 3</h1>
    <table border="1">
        <?php
        $N = 6; // número máximo de columnas
        $M = 3; // número máximo de filas

        // numero de filas
        for ($i = 0; $i < $M; $i++) {
            echo "<tr>";
            //numero de columnas
            for ($f = $i; $f < $N+$i; $f++){
                echo "<td>$f</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</div3>
<div4>
	<h1>Exercici 4</h1>
	<table border="1">
		<?php
		$C = 5; // número de columnas (puede cambiarse)
		$F = 5; // número de filas (fijo)

		// Bucle para crear cada fila de la tabla
		for ($i = 0; $i < $F; $i++) {
		    echo "<tr>"; // Comienza una nueva fila de la tabla

		    // Bucle para crear cada columna dentro de la fila actual
		    for ($f = 0; $f < $C; $f++) {

		        // Si estamos en la primera fila (i=0) y primera columna (f=0), dejamos la celda vacía (esquina superior izquierda)
		        if ($i == 0 && $f == 0) {
		            echo "<td></td>";
		        }
		        // Si NO estamos en la primera fila (i ≠ 0) pero sí en la primera columna (f=0), mostramos una letra (A, B, C...) como encabezado de fila
		        elseif ($i != 0 && $f == 0) {
		            echo "<td>" . chr(64 + $i) . "</td>"; 
		        }
		        // Si NO estamos en la primera fila NI en la primera columna, dejamos la celda vacía
		        elseif ($i != 0 && $f != 0) {
		            echo "<td></td>";
		        }
		        // Si estamos en la primera fila (i=0) pero NO en la primera columna, mostramos el número de columna como encabezado
		        else {
		            echo "<td>$f</td>";
		        }
		    }

		    echo "</tr>"; // Cerramos la fila actual
		}
		?>

	</table>
</div4>

<div class="footer">AWS2-MP07 Desenvolupament web en entorn servidor</div>

</body>
</html>
