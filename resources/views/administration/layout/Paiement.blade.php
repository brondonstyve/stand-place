<!-- ancient paiement -->
<div id="paiement-ancien" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- contenu-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Suite-Paiement.</h4>
            </div>
            <form action="{{ route('suite_paiement_path') }}" method="POST" class="form-horizontal form-material "
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <Span>Matricule de l'étudiant</Span>
                            <input type="text" name="matricule" class="form-control" />
                            {!! $errors->first('matricule',' <p style="color: red;font-family: italic"> :message
                            </p> ') !!}
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Envoyer" class="left btn btn-success">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </form>
        </div>

    </div>
</div>


<!-- ancient paiement -->
<div id="paie-ens" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- contenu-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Entrer le matricule</h4>
                </div>
                <form action="{{ route('payer_ens_path') }}" method="POST" class="form-horizontal form-material "
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <Span>Matricule</Span>
                                <input type="text" name="matricule" class="form-control" />
                                {!! $errors->first('matricule',' <p style="color: red;font-family: italic"> :message
                                </p> ') !!}
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Envoyer" class="left btn btn-success">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>







<!-- nouveau paiement -->
<div id="paiement-nouveau" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- contenu-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nouveau Paiement</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('paiement_path') }}" method="post" class="form-horizontal form-material "
                    id="formulaire">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <div class="">
                            <strong>Filière:</strong>
                            <select name="filiere" class="form-control" id="liste-filier">
                            </select>
                        </div>

                        <div class="">
                            <strong>Niveau:</strong>
                            <select name="niv" id="liste-niveau" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="">
                            <strong>classe:</strong>
                            <select name="classe" class="form-control" id="liste-classe">
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <strong>Nom:</strong>
                            <input type="text" name="nom" class="form-control" required />
                            {!! $errors->first('nom',' <p style="color: red;font-family: italic"> :message
                            </p> ') !!}
                        </div>

                        <div class="">
                            <strong>Prenom:</strong>
                            <input type="text" name="prenom" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=""><strong>Sexe</strong></div>
                        <select name="sexe" id="" class="form-control">
                            <option>Masculin</option>
                            <option>Féminin</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <div class=""><strong>Date de naissance</strong></div>
                            <input type="date" name="naissance" class="form-control" required/>
                        </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Pays</strong></div>
                        <select name="pays" id="" class="form-control">
                            <option >Cameroun</option>
                                                <option >Gabon</option>
                                                <option >Tchad</option>
                                                <option >Algérie</option>
                                                <option >France</option>
                                                <option >Guinée</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12"><strong>Adresse:</strong></div>
                        <input type="text" name="adresse" class="form-control" />
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Ville:</strong></div>
                        <input type="text" name="ville" class="form-control" required />
                        {!! $errors->first('ville',' <p style="color: red;font-family: italic"> :message
                        </p> ') !!}
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Numéro de téléphone:</strong></div>
                        <input type="number" name="number" class="form-control" required />
                        {!! $errors->first('number',' <p style="color: red;font-family: italic">
                            :message</p> ') !!}
                    </div>
                    <div class="form-group">
                        <div class="col-md-12"><strong>Email:</strong></div>
                        <input type="email" name="email" class="form-control" required />
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Envoyer" class="left btn btn-success">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
            </form>
        </div>

    </div>
</div>















<!-- taux de paiement -->
<div id="fixer-les-taux" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- contenu-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Fixer les taux de paiement</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('Fixer_solvabilite_path') }}" method="post" class="form-horizontal form-material "
                    id="formulaire-taux">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <div class="">
                            <strong>Filière:</strong>
                            <select name="filiere" class="form-control" id="liste-filier" required>
                            </select>
                        </div>

                        <div class="">
                            <strong>Niveau:</strong>
                            <select name="niv" id="liste-niveau" class="form-control" required>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-12"><strong>Montant des penalités/semaine:</strong></div>
                            <input type="text" name="penalite" class="form-control" />
                        </div>
                    <div class="form-group ">
                        <div class="">
                            <strong>Nombre de tranche pour le paiement de la pension</strong>
                            <select name="nbtranche" class="form-control" id="liste-tranche" required>
                                @for ($i =1 ; $i <11 ; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <input type="submit" value="Envoyer" class="left btn btn-success">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
            </form>
        </div>

    </div>
</div>




<!-- vote -->
<div id="vote" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- contenu-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Lancer un nouveau vote</h4>
                </div>

                    <form action="{{ route('Lancer_vote_path') }}" method="post" class="form-horizontal form-material "
                        id="formulaire-vote">
                <div class="modal-body" id="corps">
                        {{ csrf_field() }}

                        <div class="form-group " id="interieur">
                            <div class="">
                                <strong>Type du vote:</strong>
                                <select name="type" class="form-control" id="type-vote">
                                    <option value="etudiant">étudiant</option>
                                    <option value="admin">Administration</option>
                                </select>
                            </div>
                          </div>

                          <div class="form-group " id="retirer">
                            <div class="">
                                <strong>nombre de participant:</strong>
                                <select name="vote" class="form-control" id="liste">
                                    @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                          </div>
                </div>



                <div id="2">
                </div>

                <div class="modal-footer">
                    <input type="submit" value="Envoyer" class="left btn btn-success">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>

