@extends('layouts.app')

@section('title', 'Inicio - Parcial')

@section('content')
    
    @include('layouts.navbar')

    <div>
    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
   
</head>

<body>
    <form action="#" method="post">
        <h2>¡¡Contáctate con nosotros!!</h2>
        <p>¿Cómo podemos ayudarles?<span aria-hidden="true">*</span></p>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Número de teléfono</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="phone">Comentarios</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button type="submit">Enviar mensaje</button>
    </form>
</body>

</html>
    </div>


@endsection
