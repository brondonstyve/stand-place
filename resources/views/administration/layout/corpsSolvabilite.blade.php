<div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <h4 class="m-t-0 header-title" id="statutclasse"><b>Cliquer sur voir pour consulter les differentes listes</b></h4>


                <div class="table-responsive">
                    <table  class="table table-striped m-b-10 centre" style="cursor: pointer;" id="tableSolvabilite">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Filière</th>
                                <th>Niveau</th>
                                <th>Code de la classe</th>
                                <th>nom classe</th>
                                <th>Manipulations</th>
                            </tr>
                        </thead>
                        <tbody id="">
                            @for ($i =0 ; $i <sizeOf($classe) ; $i++)
                            <tr id="">
                                <td tabindex="1">{{ $classe[$i]->id }}</td>
                                <td tabindex="1" >{{ $classe[$i]->nom }}</td>
                                <td tabindex="1" >{{ $classe[$i]->niveau }}</td>
                                <td tabindex="1">{{ $classe[$i]->code_classe }}</td>
                                <td tabindex="1">{{ $classe[$i]->code_f.$classe[$i]->niveau.$classe[$i]->code_classe }}</td>
                                <td tabindex="1">
                                    <a href="#"  id="voir-solv" data-id="{{ $classe[$i]->code_f.$classe[$i]->niveau.$classe[$i]->code_classe }}" data-toggle="modal" data-target="#etudiant-solvable">
                                            <code class="badge badge-info">Voir  </code>
                                    </a>
                                </td>
                            </tr>
                            <tr id="{{ $classe[$i]->code_f.$classe[$i]->niveau.$classe[$i]->code_classe }}">

                            </tr>
                            @endfor

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <td class="right">{{ $classe->links() }}</td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>



    <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <h4 class="m-t-0 header-title" id="statutclasse"><b>Liste des états de solvabilité</b></h4>


                    <div class="table-responsive" id="res">
                            <table class="table table-striped m-b-10" id="insert-sol">
                                    <thead>
                                            <tr>
                                                <th>Matricule</th>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>classe</th>
                                                <th>Total payé</th>
                                                <th>Reste</th>
                                                <th>statut</th>
                                            </tr>
                                        </thead>
                            </table>

                    </div>
                </div>
            </div>
        </div>
