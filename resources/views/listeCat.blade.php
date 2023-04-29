@extends('layouts.app')
@section('create')

    <div class="container mt-5 mb-5">
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
                        <td>---------</td>
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
