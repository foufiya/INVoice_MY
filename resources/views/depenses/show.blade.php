@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Expense Details</h2>
                <p><strong>Expense Number:</strong> {{ $depense->numero }}</p>
                <p><strong>Date:</strong> {{ $depense->date }}</p>
                <p><strong>Montant:</strong> {{ $depense->montant }}</p>
                <p><strong>Expense State:</strong> {{ $depense->etat }}</p>
                <p><strong>Payment Date:</strong> {{ $depense->date_paiement }}</p>
                <p><strong>Description:</strong> {{ $depense->description }}</p>
                <a href="{{ route('depenses.edit', $depense->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('depenses.destroy', $depense->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this expense?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
