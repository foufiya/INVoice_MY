<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <title>Liste des factures</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      
   </head>
<body>
@extends('layouts.sidenavbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Liste des Factures</h2>
                <a href="{{ route('factures.create') }}" class="btn btn-primary mb-3">Create Facture</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>VAT</th>
                            <th>Invoice Number</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($factures as $facture)
                            <tr>
                                <td>{{ $facture->id }}</td>
                                <td>{{ $facture->title }}</td>
                                <td>{{ $facture->date }}</td>
                                <td>{{ $facture->amount }}</td>
                                <td>{{ $facture->vat }}</td>
                                <td>{{ $facture->invoice_number }}</td>
                                <td>{{ $facture->description }}</td>
                                <td>
                                    <a href="{{ route('factures.show', $facture->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                                    <a href="{{ route('factures.edit', $facture->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this facture?')">Delete</button>
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
