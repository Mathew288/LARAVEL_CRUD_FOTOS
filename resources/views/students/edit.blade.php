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
        <li><a href="{{ route('student.create') }}">Crear estudiante</a></li>
        <li><a href="{{ route('student.index') }}">Ver estudiantes</a></li>
    </ul>
    <form action="{{route('student.update',$student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="photo">Foto</label>
            <input type="file" name="photo" id="photo" value="">
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ $student->name }}">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $student->email }}">
        </div>

        <div>
            <button>Confirmar</button>
        </div>

    </form>



</body>

</html>
