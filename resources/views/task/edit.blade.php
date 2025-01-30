<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.header')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="col">
            <form action="{{ route('task.update', $task) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- Titulo --}}
                <div class="mb-3">
                    <label for="title" class="form-label">titulo</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{$task->title}}">
                </div>
                {{-- description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$task->description}}</textarea>
                </div>
                {{-- status --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" name="status" id="status" aria-label="">
                        <option value="Pendiente">Pendiente</option>
                        <option value="En progreso">En progreso</option>
                        <option value="Completado">Completado</option>
                    </select>


                </div>
                {{-- due_date --}}
                <div class="mb-3">
                    
                    <label for="title" class="form-label">Fecha limite</label>
                    <input class="form-control" type="date" name="due_date" id="due_date" value="{{$task->due_date}}">
                </div>

                <button class="btn btn-success" type="submit">Agregar</button>
            </form>

        </div>
    </div>

</body>
@include('layouts.footer')

</html>
