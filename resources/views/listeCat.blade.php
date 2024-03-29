@extends('layouts.app')
@section('create')

    <div class="container mt-5 mb-5">
         <!--Debut titre-->
         <div class="d-flex justify-content-center py-4">
            <span class="d-none d-lg-block align-items-center h3"> Liste des catégories</span>
        </div>
        <!--Fin titre-->
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">N°</th>
                        <th scope="col">Noms</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie )
                    <tr class="text-center">
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nomCat }}</td>
                        <td>{{ $categorie->descriptionCat }}</td>
                        <td> <img src="{{ asset('uploads/catImage/'. $categorie->imageCat) }}" width="60px" height="60px" alt="Image"> </td>
                        <td>
                            <form action="{{ route('admin.destroyCat', $categorie->id) }}" method="POST">
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
