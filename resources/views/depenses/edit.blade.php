@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Expense</h2>
                <form action="{{ route('depenses.update', $depense->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Expense Number:</label>
                        <input type="text" name="numero" class="form-control" value="{{ $depense->numero }}" required>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="date" class="form-control" value="{{ $depense->date }}" required>
                    </div>
                    <div class="form-group">
                        <label>Expense Montant:</label>
                        <input type="text" name="montant" class="form-control" value="{{ $depense->montant }}" required>
                    </div>
                    <div class="form-group">
                        <label>Depense State:</label>
                        <select name="etat" class="form-select" required>
                            <option value="payée">Payée</option>
                            <option value="crédit">Crédit</option>
                            <option value="en cours">En Cours</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Payment Date:</label>
                        <input type="date" name="date_paiement" class="form-control" value="{{ $depense->date_paiement }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control">{{ $depense->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
