
    <div class="card-body">
<!-- liste des salles de  classes -->
        <h4 class="card-title">Mes salles de classes</h4>
            @for ($i =0 ; $i <sizeOf($classe) ; $i++)
                    <div class="col-lg-3 col-md-3" style="color: black">
                            <div class="card" style="background-color: aliceblue">
                                <div class="card-body" >
                                    <div class="row p-t-10 p-b-10">
                <a class="nav-link " >
                    Classe {{ $i+1 }} : {{ $classe[$i]->classe }}
                    <hr>
                    <span>{{ $classe[$i]->nom }}</span>
                    <form action="{{ route('appel_ct_liste_path') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="classe" value="{{ $classe[$i]->classe }}">
                        <input type="hidden" name="id" value="{{ $classe[$i]->id }}">
                        <input type="submit" value="Liste d'appel/CT"  class="btn" style="background-color: gray">
                    </form>
                </a>
            </div></div></div></div>

                @endfor
       <!-- liste d'appel et cahier de texte -->


        @if (!$ouverture)
        <h4 class="card-title">...</h4>

        @else



                    <form action="" method="post" >
                        <input type="button" value="liste des absences" data-toggle="modal"
                            data-target="#add-absence" class="btn btn-danger">
<hr>
                        <input type="button" value="Mon cahier de texte" data-toggle="modal"
                            data-target="#add-cahier" class="btn btn-danger">
                    </form>

                    <div class="table-responsive" >
                    <form action="{{ route('inserer_absence_path') }}" method="post" class="row" style="width: 150%;padding: 10%">
                        {{ csrf_field() }}
                        <h3 class="card-title">liste d'appel et cahier de texte de la {{ $liste[0]->classe}} </h3>
                        <span>Liste d'appel</span>
                        <table class="table stylish-table table m-0 table-colored-bordered table-bordered-success"   style="background-color: darkgrey">
                            <thead>
                                <tr>
                                    <th style="color: white">Numéro</th>
                                    <th style="color: white">Nom</th>
                                    <th style="color: white">Prenom</th>
                                    <th style="color: white">statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < $listec; $i++)
                                <tr class="">
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $liste[$i]->nom }}</td>
                                    <td>{{ $liste[$i]->prenom }}</td>
                                    <td><input type="checkbox" name="absence{{ $i }}" value="2"></td>
                                    <input type="hidden" size="4" name="id_matiere{{ $i }}" value="{{ $id }}">
                                    <input type="hidden" size="4" name="id_compte{{ $i }}" value="{{ $liste[$i]->id }}">

                                </tr>
                                 @endfor
                            </tbody>
                        </table>
                                    <span>Cahier de texte</span>
                                    <textarea name="libelle" id="" cols="65" rows="3" style="background-color: aliceblue"></textarea>

                        <input type="hidden" name="compteur" value="{{ $listec }}">
                        <input type="submit" value="Soumettre" class="btn" style="background-color: darkgrey;  ">
                    </form>
        @endif
    </div></div>

        @if ($absence)

        <!-- liste des absences -->
        <div class="table-responsive ">
            <div id="add-absence" class="modal fade in " tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content col-xs-18">
                        <div class="modal-title">
                            <table class="table stylish-table">


                                    @if (sizeOf($remplisseur)==0)
                                    <h3 class="card-title">Pas d'absent pour le moment</h3>
                                    @else
                                    <h3 class="card-title">{{ $remplisseur[0]->classe }} --  {{ $remplisseur[0]->nom }} </h3>
                                    <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>abscence au cour</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    @for ($i = 0; $i < sizeOf($remplisseur); $i++) <tr class="">
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $remplisseur[$i]->nomE }}</td>
                                        <td>{{ $remplisseur[$i]->prenom }}</td>
                                        <td>{{ $remplisseur[$i]->abs }}heures</td>

                                        </tr>
                                        @endfor
                                        @endif
                                </tbody>
                            </table>
                            <input type="button" value="Imprimer" class="btn btn-success">
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- liste des taches -->

        <div class="table-responsive ">
                <div id="add-cahier" class="modal fade in " tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" >
                        <div class="modal-content col-xs-18">
                            <div class="modal-title">

                                <table class="table stylish-table">


                                        @if (sizeOf($remplisseurCahier)==0)
                                        <h3 class="card-title">Aucun cour enregistré...</h3>
                                        @else
                                        <h3 class="card-title">{{ $remplisseurCahier[0]->classe }} --  {{ $remplisseurCahier[0]->nom }} </h3>
                                        <thead>
                                                <tr>
                                                    <th>date</th>
                                                    <th>libellé</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        @for ($i = 0; $i < sizeOf($remplisseurCahier); $i++) <tr class="">
                                            <td>{{ $remplisseurCahier[$i]->created_at }}</td>
                                            <td>{{ $remplisseurCahier[$i]->libelle }}</td>

                                            </tr>
                                            @endfor
                                            @endif
                                    </tbody>
                                </table>
                                <input type="button" value="Imprimer" class="btn btn-success">
                            </div>
                        </div>
                    </div>

                </div>

                @endif


            </div>




</div>

</div>
