@extends('layouts.app')
@section('content')
    {{-- Formulaire debut --}}
    <div class="container ">
        <section class="section register  d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <!--Debut titre-->
                        <div class="d-flex justify-content-center py-4">
                            <span class="d-none d-lg-block align-items-center h3"> Ajouter un fastFood</span>
                        </div>
                        <!--Fin titre-->

                        <!---->
                        <div class="card mb-5">
                            <div class="card-body">

                                <div class="container">
                                    <form action="{{ route('admin.addfast') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" class="form-label">Nom du produit</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="nomFast" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Prix du produit</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="prixFast" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" class="form-label">Description du produit</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="descriptionFast" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Quantité</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="qtiteFast" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Categorie</label>
                                                <select class="form-select form-select-lg mb-3" name="category"
                                                    aria-label=".form-select-lg example">
                                                    <option selected>Selectionner une catégorie</option>
                                                    @foreach ($categories as $id => $categorie)
                                                    <option value="{{ $id }}">{{ $categorie }}
                                                    </option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Quantite Panier</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="qtitePanierFast" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="">IMAGE</label>
                                            <div class="input-group input-group-lg mb-3">
                                                <input type="file" class="form-control"aria-label="Sizing example input"
                                                    name="imageFast" aria-describedby="inputGroup-sizing-lg"required>
                                            </div>
                                        </div>

                                        <div class="row row-cols-auto mt-4">
                                            <div class="col">
                                                <input class="btn btn-primary" type="submit"/>
                                            </div>
                                            <div class="col">
                                                <input class="btn btn-warning" value="Annuler" type="reset"/>
                                            </div>

                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
    </div>
    </section>
    </div>
    {{-- Formulaire fin --}}
@endsection
