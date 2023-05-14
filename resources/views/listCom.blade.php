@extends('layouts.app')
@section('create')
    <div class="container mt-5 mb-5">
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Client</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Article</th>
                        <th scope="col">Dans le panier</th>
                        <th scope="col">Prix U</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $commande)
                        <tr class="text-center">
                            <td>{{ $commande->id }}</td>
                            <td>{{ $commande->client }}</td>
                            <td>{{ $commande->prenom }}</td>
                            <td>{{ $commande->article }}</td>
                            <td>{{ $commande->dansLePanier }}</td>
                            <td>{{ $commande->prixU }}</td>
                            <td><a href="#" class="btn btn-info">Voir</a></td>
                            <td>
                                <form action="{{ route('admin.destroyCommande', $commande->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                            <td>
                                @if ($commande->etatCommande)
                                    {{-- <button type="button" class="btn btn-success" onclick="{{route('admin.updateState', $commande->id)}}" >
                                        Vrai</button> --}}
                                    <form action="{{ route('admin.updateState', $commande->id) }}" method="POST">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <button type="submit" class="btn btn-success">Valider</button>
                                    </form>
                                @else
                                    {{-- <button type="button" class="btn btn-danger"
                                        onclick="{{ route('admin.updateState', $commande->id) }}">
                                        Faux</button> --}}
                                    <form action="{{ route('admin.updateState', $commande->id) }}" method="POST">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <button type="submit" class="btn btn-secondary">En attente</button>
                                    </form>
                                @endif
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
