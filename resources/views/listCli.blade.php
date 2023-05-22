@extends('layouts.app')
@section('create')
    <div class="container mt-5 mb-5">
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Nom du Client</th>
                        <th scope="col">Prenom du client</th>
                        <th scope="col">Numéro du client</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr class="text-center">
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->nomCli }}</td>
                            <td>{{ $client->prenomCli }}</td>
                            <td>{{ $client->telCli }}</td>
                            <td><a href="#" class="btn btn-info">Voir</a></td>
                            <td>
                                <form action="{{ route('admin.destroyClient', $client->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br> <br> <br>
    </div>

    {{-- Fin table --}}

@endsection
