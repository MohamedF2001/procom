@extends('layouts.tete')
@section('content')
    {{-- Formulaire debut --}}
    <div class="container ">
        <section class="section register  d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <!--Debut titre-->
                        <div class="d-flex justify-content-center py-4">
                            <span class="d-none d-lg-block align-items-center h3"> Nouveau Cluster</span>
                        </div>
                        <!--Fin titre-->

                        <!---->
                        <div class="card mb-5">
                            <div class="card-body">

                                <div class="container">
                                    <form action="" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="" class="form-label">Filière</label>
                                                <select class="form-select form-select-lg mb-3" name="filiere"
                                                    aria-label=".form-select-lg example " required>
                                                    <option selected>Selectionner une filiere</option>
                                                    {{-- @foreach ($filieres as $id => $filiere)
                                                        <option value="{{ $id }}">{{ $filiere }}
                                                        </option>
                                                    @endforeach --}}

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row row-cols-2">
                                            <div class="col">
                                                <label for="" class="form-label">Departement</label>
                                                <select id="departement" class="form-select form-select-lg mb-3"
                                                    name="departement" aria-label=".form-select-lg example">
                                                    <option selected>Selectionner une departement</option>
                                                    {{-- @foreach ($departements as $departement)
                                                        <option value="{{ $departement->id }}">{{ $departement->nom }}
                                                        </option>
                                                    @endforeach --}}


                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Commune</label>
                                                <select id="commune" class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="commune">
                                                    <option selected>Selectionner une commune</option>
                                                    {{-- @foreach ($communes as $commune)
                                                        <option value="{{ $commune->id }}">{{ $commune->nom }}
                                                        </option>
                                                    @endforeach --}}

                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Arrondissement</label>
                                                <select class="form-select form-select-lg mb-3" name="arrondissement"
                                                    aria-label=".form-select-lg example">
                                                    <option selected>Selectionner un arrondissement</option>
                                                   {{--  @foreach ($arrondissements as $arrondissement)
                                                        <option value="{{ $arrondissement->id }}">
                                                            {{ $arrondissement->nom }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Village</label>
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="village">
                                                    <option selected>Selectionner un village</option>
                                                    {{-- @foreach ($villages as $village)
                                                        <option value="{{ $village->id }}">{{ $village->nom }}
                                                        </option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="">Nom cluster</label>
                                            <div class="input-group input-group-lg mb-3">
                                                <input type="text" class="form-control"aria-label="Sizing example input"
                                                    name="cluster" aria-describedby="inputGroup-sizing-lg"required>
                                            </div>
                                        </div>

                                        <div class="row row-cols-auto mt-4">
                                            <div class="col">
                                                <input class="btn btn-primary" type="submit"></input>
                                            </div>
                                            <div class="col">
                                                <input class="btn btn-warning" value="Annuler" type="reset"></input>
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
@push('js')
    <script>
        $(document).ready(function() {
            console.log("document loded");
            // filtre des communes par departements
            $('#departement').change(function() {
                var departement_id = $(this).val();
                console.log(departement_id);
                $.ajax({
                    type: "get",
                    url: "{{ url('get/commune') }}/" + departement_id,
                    success: function(data) {
                        console.log(data);
                        $('#commune').empty();
                        $('#commune').append('<option>Selectionner une commune</option>');
                        if (data) {
                            $.each(data, function(key, value) {
                                $('#commune').append(
                                    $("<option/>",{
                                        value:key,
                                        text:value
                                    }));
                            })
                        }
                    }
                });
            })
        });
    </script>
@endpush

