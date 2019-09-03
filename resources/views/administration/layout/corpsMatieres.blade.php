<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="m-t-0 header-title" id="statutclasse"><b>Gerer vos matiéres</b></h4>


            <div class="table-responsive">
                <table class="table table-striped m-b-10 centre" style="cursor: pointer;" id="tableMatiere">
                    <thead>
                        <tr >
                            <th>Numéro</th>
                            <th>Filière</th>
                            <th>Niveau</th>
                            <th>Code de la classe</th>
                            <th>nom classe</th>
                            <th>Manipulations</th>
                        </tr>
                    </thead>
                    <tbody id="mouf">
                        @for ($i =0 ; $i <sizeOf($classe) ; $i++) <tr id="">
                            <td tabindex="1">{{ $classe[$i]->id }}</td>
                            <td tabindex="1">{{ $classe[$i]->nom }}</td>
                            <td tabindex="1">{{ $classe[$i]->niveau }}</td>
                            <td tabindex="1">{{ $classe[$i]->code_classe }}</td>
                            <td tabindex="1">{{ $classe[$i]->code_f.$classe[$i]->niveau.$classe[$i]->code_classe }}</td>
                            <td tabindex="1">
                                <a href="#" id="voir-matiere"
                                    data-id="{{ $classe[$i]->code_f.$classe[$i]->niveau.$classe[$i]->code_classe }}"
                                    data-toggle="modal" data-target="#ajouer-matiere">
                                    <code class="badge badge-info">Ajouter une matière  </code>
                                </a>
                                <a href="#" id="Liste-matiere"
                                    data-id="{{ $classe[$i]->code_f.$classe[$i]->niveau.$classe[$i]->code_classe }}"
                                    data-toggle="modal">
                                    <code class="badge badge-default">voir  </code>
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
                <table class="table table-striped m-b-10 centre" id="into">

                </table>

            </div>
        </div>
    </div>
</div>















<!-- Ajouter une matiere -->
<div id="ajouer-matiere" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- contenu-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajouter une matière</h4>
            </div>
            <form action="{{ route('enregistrer_matiere_path') }}" method="post" id="form-ajout-mat">

                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Classe</label>
                            <input type="text" name="classe_cache" id="classe_cache" class="form-control" disabled>
                            <input type="hidden" name="classe" id="classe" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">matière</label>
                            <input type="text" name="matiere" id="matiere" class="form-control" required>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">professeur</label>
                            <select name="prof" id="prof" class="form-control" required>
                                @for ($i =0 ; $i <sizeOf($prof) ; $i++)
                                  <option value="{{ $prof[$i]->id }}">{{ $prof[$i]->nom }} {{ $prof[$i]->prenom }}</option>
                                @endfor

                                </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">nombre d'heure</label>
                            <select name="nbheure" id="nbheure" class="form-control" required>
                              @for ($i =35 ; $i <=60 ; $i=$i+5)
                                <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                                </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                  <label for="">coéficient</label>
                                  <select name="coef" id="coef" class="form-control" required>
                                        @for ($i =1 ; $i <7 ; $i++)
                                          <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                          </select>
                            </div>
                        </div>


                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id_etud" id="ident">
                    <input type="submit" class="btn btn-success left">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </form>
        </div>

    </div>
</div>






<!-- Ajouter une matiere -->
<div id="modifier-matiere" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- contenu-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modifier une matière</h4>
                </div>
                <form action="{{ route('modifier_matiere_path') }}" method="post" id="form-mod-mat">

                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Classe</label>
                                <input type="text" id="anc-classe"  class="form-control" disabled>
                                <select name="classe" id="classe" class="form-control" required>
                                        @for ($i =0 ; $i <sizeOf($rep) ; $i++)
                                          <option value="{{ $rep[$i]->nom_classe }}"> {{ $rep[$i]->nom_classe }}</option>
                                        @endfor

                                        </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">matière</label>
                                <input type="text" name="matiere" id="matiere" class="form-control" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">professeur</label>
                                <input type="text" id="anc-prof" class="form-control" disabled>
                                <select name="prof" id="prof" class="form-control" required>
                                    @for ($i =0 ; $i <sizeOf($prof) ; $i++)
                                      <option value="{{ $prof[$i]->id }}">{{ $prof[$i]->nom }} {{ $prof[$i]->prenom }}</option>
                                    @endfor

                                    </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">nombre d'heure</label>
                                <input type="text" id="anc-heure" class="form-control" disabled>
                                <select name="nbheure" id="nbheure" class="form-control" required>
                                  @for ($i =35 ; $i <=60 ; $i=$i+5)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                  @endfor
                                    </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                                <div class="form-group">

                                      <label for="">coéficient</label>
                                      <input type="text" id="anc-coef" class="form-control" disabled>
                                      <select name="coef" id="coef" class="form-control" required>
                                            @for ($i =1 ; $i <7 ; $i++)
                                              <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                              </select>
                                </div>
                            </div>


                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <input type="submit" class="btn btn-success left">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
