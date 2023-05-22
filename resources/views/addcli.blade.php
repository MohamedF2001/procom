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
                            <span class="d-none d-lg-block align-items-center h3"> Nouveau Client</span>
                        </div>
                        <!--Fin titre-->

                        <!---->
                        <div class="card mb-5">
                            <div class="card-body">

                                <div class="container">
                                    <form action="{{ route('admin.addcli') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" class="form-label">Nom du client</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="nomCli" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Prénom du client</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="prenomCli" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" class="form-label">Numéro</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text" class="form-control"aria-label="Sizing example input"
                                                        name="telCli" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
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
