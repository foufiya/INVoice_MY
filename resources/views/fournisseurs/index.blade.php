@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Fournisseurs</h2>
                <a href="{{ route('fournisseurs.create') }}" class="btn btn-primary">Create Fournisseur</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fournisseurs as $fournisseur)
                            <tr>
                                <td>{{ $fournisseur->id }}</td>
                                <td>{{ $fournisseur->name }}</td>
                                <td>{{ $fournisseur->telephone }}</td>
                                <td>{{ $fournisseur->fax }}</td>
                                <td>{{ $fournisseur->email }}</td>
                                <td>{{ $fournisseur->address }}</td>
                                <td>
                                    <a href="{{ route('fournisseurs.show', $fournisseur->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('fournisseurs.edit', $fournisseur->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('fournisseurs.destroy', $fournisseur->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Fournisseur?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
