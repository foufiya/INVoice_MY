
<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <title>Liste des fournisseurs</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      
   </head>
<body>
@extends('layouts.sidenavbar')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </br>
            <h2 class="text-center">Liste des Enterprises</h2>
                <a href="{{ route('entreprises.create') }}" class="btn btn-primary mb-3">Create Enterprise</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($entreprises as $entreprise)
                            <tr>
                                <td>{{ $entreprise->id }}</td>
                                <td>{{ $entreprise->name }}</td>
                                <td>{{ $entreprise->telephone }}</td>
                                <td>{{ $entreprise->email }}</td>
                                <td>{{ $entreprise->address }}</td>
                                <td>
                                    <a href="{{ route('entreprises.show', $entreprise->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                                    <a href="{{ route('entreprises.edit', $entreprise->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <form action="{{ route('entreprises.destroy', $entreprise->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this enterprise?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
