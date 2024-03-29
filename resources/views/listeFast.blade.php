@extends('layouts.app')
@section('create')

    <div class="container mt-5 mb-5">
         <!--Debut titre-->
         <div class="d-flex justify-content-center py-4">
            <span class="d-none d-lg-block align-items-center h3"> Liste des fastfoods</span>
        </div>
        <!--Fin titre-->
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Prix</th>
                        <th scope="col">En stock</th>
                        <th scope="col">Dans le panier</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $fastfoods as $fastfood )
                    <tr class="text-center">
                        <td>{{ $fastfood->id }}</td>
                        <td>{{ $fastfood->nomFast }}</td>
                        <td>{{$fastfood->descriptionFast}}</td>
                        <td>{{ $fastfood->category->nomCat }}</td>
                        <td>{{$fastfood->prixFast}}</td>
                        <td>{{$fastfood->qtiteFast}}</td>
                        <td>{{$fastfood->qtitePanierFast}}</td>
                        <td> <img src="{{ asset('uploads/fastImage/'. $fastfood->imageFast) }}" width="60px" height="60px" alt="Image"> </td>
                        <td>
                            <form action="{{ route('admin.destroyFast', $fastfood->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                        <td>---------</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br> <br> <br>
    </div>
    {{-- Fin table --}}

@endsection
