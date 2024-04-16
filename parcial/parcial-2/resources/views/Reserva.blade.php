@extends('layouts.app')

@section('title', 'Inicio - Parcial')

@section('content')
    
    @include('layouts.navbar')



<div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Reserva</h2>
        <form action="procesar_reserva.php" method="post">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="fecha">Fecha de reserva:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="hora">Hora de reserva:</label>
            <input type="time" id="hora" name="hora" required>

            <label for="personas">Número de personas:</label>
            <input type="number" id="personas" name="personas" min="1" required>

            <label for="tipo">Tipo de habitación/servicio:</label>
            <select id="tipo" name="tipo" required>
                <option value="habitacion">Habitación</option>
                <option value="servicio">Servicio</option>
            </select>

            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>

            <input type="submit" value="Enviar reserva" class="btn">
        </form>
    </div>

   
















</body>





</html>

</div>

@endsection
