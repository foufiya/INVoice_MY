@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Fournisseur Details</h2>
                <p><strong>Name:</strong> {{ $fournisseur->name }}</p>
                <p><strong>Telephone:</strong> {{ $fournisseur->telephone }}</p>
                <p><strong>Email:</strong> {{ $fournisseur->email }}</p>
                <p><strong>Address:</strong> {{ $fournisseur->address }}</p>
                <a href="{{ route('fournisseurs.edit', $fournisseur->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('fournisseurs.destroy', $fournisseur->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Fournisseur?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
