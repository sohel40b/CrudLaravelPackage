<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        My Todo App
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito';
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="{{route('todo.index')}}" style="text-decoration: none;"><span class="navbar-brand mb-0 h1">Todo</span></a>
        <a href="{{route('todo.create')}}"><span class="btn btn-primary">Create Todo</span></a>
    </div>
</nav>

<div class="container">

    <form action="{{ route('todo.store') }}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" name="name">
            @if($errors->has('name'))
                <div class="error text-danger mt-1">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
            @if($errors->has('description'))
                <div class="error text-danger mt-1">{{ $errors->first('description') }}</div>
            @endif
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

</div>

</body>

</html>
