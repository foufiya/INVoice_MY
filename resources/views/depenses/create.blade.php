@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Depense</h2>
                <form action="{{ route('depenses.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Depense Number:</label>
                        <input type="text" name="numero" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Montant:</label>
                        <input type="text" name="montant" class="form-control" required>
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
                        <input type="date" name="date_paiement" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
