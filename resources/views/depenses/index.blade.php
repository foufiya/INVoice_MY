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
                <h2 class="text-center">Liste des Depenses</h2>
                <a href="{{ route('depenses.create') }}" class="btn btn-primary mb-3">Create Depense</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!--<th>ID</th>-->
                            <th>Numero</th>
                            <th>Date</th>
                            <th>Montant</th>
                            <th>Etat</th>
                            <th>Date de paiement</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($depenses as $depense)
                            <tr>
                                <!--<td>{{ $depense->id }}</td>-->
                                <td>{{ $depense->numero }}</td>
                                <td>{{ $depense->date }}</td>
                                <td>{{ $depense->montant }}</td>
                                <td>{{ $depense->etat }}</td>
                                <!--<td>
                                    <select name="etat" class="form-select">
                                        <option value="payée"  $depense->etat == 'payée' ? 'selected' : '' }}>Payée</option>
                                        <option value="crédit" { $depense->etat == 'crédit' ? 'selected' : '' }}>Crédit</option>
                                        <option value="en cours" {$depense->etat == 'en cours' ? 'selected' : '' }}>En Cours</option>
                                    </select>
                                </td>-->
                                <td>{{ $depense->date_paiement }}</td>
                                <td>{{ $depense->description }}</td>
                                <td>
                                    <a href="{{ route('depenses.show', $depense->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                                    <a href="{{ route('depenses.edit', $depense->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <form action="{{ route('depenses.destroy', $depense->id) }}" method="POST" style="display:inline;">
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
