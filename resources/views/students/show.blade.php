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
        <li><a href="{{route('student.index')}}">Ver estudiantes</a></li>
    </ul>


        <img src="{{asset('uploads/'.$student->photo)}}" alt="{{$student->name}}" width="100px" class="perfil_usuario">
        <h3>{{ $student->name }}</h3>
        <p>{{ $student->email }}</p>
        <p>{{ $student->photo }}</p>

</body>

</html>
