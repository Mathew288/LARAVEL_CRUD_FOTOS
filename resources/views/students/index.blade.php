<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Estudiantes</h1>

    <ul>
        <li><a href="{{route('student.create')}}">Crear estudiante</a></li>
    </ul>

    @foreach ($students as $s)
        <img src="{{asset('uploads/'.$s->photo)}}" alt="{{$s->name}}" width="100px">
        <p>{{ $s->name }}</p>
        <p>{{ $s->email }}</p>
        <p>{{ $s->photo }}</p>
    @endforeach

</body>

</html>
