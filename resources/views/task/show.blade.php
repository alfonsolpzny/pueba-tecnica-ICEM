<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.header')
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">

        <div class="col">
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Status</th>
                        <th scope="col">Fecha limite</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <th>{{ $item->title }}</th>
                            <th>{{ $item->description }}</th>
                            <th>{{ $item->status }}</th>
                            <th>{{ $item->due_date }}</th>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

</body>
@include('layouts.footer')

</html>
