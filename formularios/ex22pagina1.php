<?php
$colorSeleccionat = $_POST['color'] ?? 'white';
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8" />
    <title>Selector de Skins</title>
    <style>
        body {
            background-color: <?= $colorSeleccionat ?>;
        }
    </style>
</head>
<body>
    <h1>Tria un color de fons</h1>
    
    <form method="post" action="">
        <label for="color">Selecciona un color:</label>
        <select name="color" id="color">
            <option value="white" <?= $colorSeleccionat === 'white' ? 'selected' : '' ?>>Blanc</option>
            <option value="lightblue" <?= $colorSeleccionat === 'lightblue' ? 'selected' : '' ?>>Blau Clar</option>
            <option value="lightgreen" <?= $colorSeleccionat === 'lightgreen' ? 'selected' : '' ?>>Verd Clar</option>
        </select>
        <button type="submit">Canviar color</button>
    </form>
</body>
</html>
