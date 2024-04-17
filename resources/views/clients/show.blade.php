@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Client Details</h2>
                <p><strong>Name:</strong> {{ $client->name }}</p>
                <p><strong>Telephone:</strong> {{ $client->telephone }}</p>
                <p><strong>Email:</strong> {{ $client->email }}</p>
                <p><strong>Address:</strong> {{ $client->address }}</p>
                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Client?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
