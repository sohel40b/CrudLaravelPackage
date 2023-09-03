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
        <a href="{{route('todo.index')}}"><span class="navbar-brand mb-0 h1">Todo</span></a>
        <a href="{{route('todo.create')}}"><span class="btn btn-primary">Create Todo</span></a>
    </div>
</nav>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8 mt-4"><h4>Todo <b>List</b></h4></div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}"</td>
                    <td>
                        <form action="{{ route('todo.destroy',$item->id) }}" method="Post">
                            <a href="{{ route('todo.edit', $item->id) }}" class="edit mr-3" title="delete" data-toggle="tooltip"><button type="button" class="btn btn-success">Edit</button></a>
                            @csrf
                            @method('DELETE')
                            <a class="delete" title="Delete" data-toggle="tooltip"><button type="submit" class="btn btn-danger">Delete</button></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>

</html>
