@php
$reponse = array('a','b','c','d');
@endphp

@if ($utilisateur->type==null)

@if ($test)
<div class="card">
        <div class="card-body bg-info">
            @if(sizeOf($evaluation)==0)
            <h4 class="text-white card-title uppercase">Vous n'avez pas d'évaluation pour le moment</h4>
            <h6 class="card-subtitle text-white m-b-0 op-5">étudiez c'est pour bientôt</h6>
            @else
            <h4 class="text-white card-title uppercase">Liste des évaluations en cour</h4>
            <h6 class="card-subtitle text-white m-b-0 op-5">Détails</h6>
            @endif

        </div>
        <div class="card-body">
            <div class="message-box contact-box">

                @for ($i =0 ; $i <sizeOf($evaluation) ; $i++)
                <span class="point">
                        <div class="message-widget contact-widget" style="background-color: antiquewhite"
                        title="cliquer dessus pour voir le l'épreuve">

                        <a href="#" data-toggle="modal">
                            <div class="user-img"> <img src="images/icones/modifier.png" alt="user" class="img-circle">
                                <div class="notify">
                                        <span class="heartbit"></span> <span class="point"></span>
                                    </div>
                            </div>

                            <div class="mail-contnet">
                                <h5 style="text-transform: uppercase">évaluation de {{ $evaluation[$i]->nom }}</h5>
                                <span class="mail-desc"> édité le {{ $evaluation[$i]->created_at }}</span>
                            </div>
                                <span class="btn-sm" style="color:brown">durée::{{ $evaluation[$i]->dure }} min</span>
                            </a>

                    </div>
                    <h2 class="add-ct-btn">
                            <a href="
                            {{ route('composition_path') }}?path_directoriesRender={{ bcrypt($evaluation[$i]->id) }}"title="commencer">

                            <button type="" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">
                                            <img src="images/icones/evaluer.png" alt="commencer" width="50px">
                            </button>
                        </a>
                        </h2>

                </span>
                @endfor


            </div>
        </div>
    </div>

@endif






<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card" style="background-color: aliceblue">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <input type="hidden" name="jbh" id="compteur" value="100000">
                        <h3 class="font-light" id="time"></h3>
                        <h6 class="btn btn-sm btn-danger">CHRONO</h6>
                    </div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20">
                            <img src="images/horloge.png" class="mdi mdi-account-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="card-box">
<iframe src="Fichiers/Gest-Projet-Infor.pdf" frameborder="0" class="table m-0 " width="500" height="500">
    alt: <a href="Fichiers/Gest-Projet-Infor.pdf">Cliquer ici</a>
</iframe>

</div>



<div class="col-md-12">

    <div class="card-box">
        <div class="table-responsive">
            <form action="" method="post">
                {{ csrf_field() }}
                <table class="table m-0 table-colored-bordered table-bordered-success">
                    <thead>
                        <tr>
                            <th style="color: white">Numéro</th>
                            <th style="color: white">Réponse</th>
                            <th style="color: white">Numéro</th>
                            <th style="color: white">Réponse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @for ($i = 0; $i < 20; $i++) <tr class="">
                                <td>{{ $i+1 }}</td>

                                <td><select name="response{{ $i }}" id="">
                                        @for ($rep = 0; $rep < 4; $rep++) <Option>{{ $reponse[$rep] }}
                                            @endfor
                                    </select>
                                </td>
                                @php $i=$i+2 @endphp
                                <td>{{ $i }}</td>
                                @php $i-- @endphp

                                <td><select name="response{{ $i }}" id="">
                                        @for ($rep = 0; $rep < 4; $rep++) <Option>{{ $reponse[$rep] }}
                                            @endfor
                                    </select>
                                </td>

                        </tr>
                        @endfor
                    </tbody>
                    <tr>
                        <td colspan="4" class="centre">
                            <input type="submit" id="button" value="Soumettre" class="btn btn-sm btn-success">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>

</div>

@else

@if ($utilisateur->type=='enseignant')

<!-- creation d'épreuves -->

@if ($createForm)

<!-- liste de mes epreuves -->


<div class="card ">
    <div class="card-body bg-info">
        <h4 class="text-white card-title uppercase">Mes épreuves</h4>
        <h6 class="card-subtitle text-white m-b-0 op-5">Liste de mes épreuves</h6>
    </div>
    <div class="card-body">
        <div class="message-box contact-box">
            <h2 class="add-ct-btn">
                <button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark"
                    data-toggle="modal" data-target="#add-contact">
                    +
                </button>
            </h2>

            @for ($i =0 ; $i <sizeOf($epreuve) ; $i++)

            <!--evaluer une classe-->
            <span class="mail-desc" style="display: inline-block;max-width: 20px">
                    <a href="{{ route('evaluer_classe_path') }}?path_directori={{ $epreuve[$i]->id }}">
                        <img src="images/icones/evaluer.png" alt="evaluer" title="évaluer une classe">
                    </a>
                </span>


            <!--envoi-->
                <span class="mail-desc" style="display: inline-block;max-width: 20px">
                    <a data-toggle="modal" data-target="#add-envoi{{ $i }}">
                        <img src="images/icones/share.png" alt="" title="envoyer">
                    </a>
                </span>

                <span class="mail-desc" style="display: inline-block;max-width: 20px">
                                <div class="table-responsive ">
                                        <div id="add-envoi{{ $i }}" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                            style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content col-xs-9">
                                                    <div class="centre uppercase">
                                                    <h4 class="" >Envoyer l'épreuve</h4>
                                                </div>
                                                <div class="modal-title">

                                                    <form action="{{ route('Envoyer_epreuve_path') }}" method="post" class="centre">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="idEpreuve" value="{{ $epreuve[$i]->id }}">
                                                        <input type="hidden" name="nomEpreuve" value="{{ $epreuve[$i]->epreuve }}">
                                                        <table >
                                                            <tr>
                                                                <td>Choisissez un enseignant</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <select name="path_prof">
                                                                        @for ($nb =0 ; $nb <sizeOf($prof) ; $nb++)
                                                                        <option value="{{ $prof[$nb]->id.'-'.$prof[$nb]->nom.' '.$prof[$nb]->prenom }}">
                                                                                {{ $prof[$nb]->nom.' '.$prof[$nb]->prenom }}
                                                                        </option>
                                                                        @endfor
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <input type="submit" value="Envoyer" class="btn btn-success centre">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </a>
                    </span>
            <!--fin envoi-->


           <!-- suppression-->
                <span class="mail-desc" style="display: inline-block;max-width: 20px">
                    <a data-toggle="modal" data-target="#add-sup{{ $i }}">
                        <img src="images/icones/del-red.png" alt="supprimer" title="supprimer">
                    </a>
                </span>

                <span class="mail-desc" style="display: inline-block;max-width: 20px">
                        <a href="">
                                <div class="table-responsive ">
                                        <div id="add-sup{{ $i }}" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                            style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content col-xs-9">
                                                    <div class="modal-header ">
                                                    <h4 class="modal-title" id="myModalLabel">Voulez vous vraiment supprimer ce ficher?</h4>
                                                </div>
                                                <div class="modal-title">

                                                        <div class="form-group" style="text-align: center;">
                                                            <div class="col-md-12 m-b-20 carousel-inner">
                                                                <div class="fileupload bouton btn-danger btn-rounded waves-effect carousel-inner" >
                                                                    <span >
                                                                            <a href="{{ route('supprimer_epreuve_path') }}?path_directori={{ $epreuve[$i]->id }}">Suprimer</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </a>
                    </span>

         <!--fin suppression-->

         <!-- Message liste-->
                <div class="message-widget contact-widget" style="background-color: antiquewhite"
                    title="cliquer dessus pour voir le l'épreuve">

                    <a href="storage\epreuve\{{ $epreuve[$i]->epreuve }}">
                        <div class="user-img"> <img src="images/courrs.png" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                            <h5 style="text-transform: uppercase">épreuves de {{ explode('.',$epreuve[$i]->matiere)[1] }}</h5>
                            <span class="mail-desc">@if($epreuve[$i]->editeur==$utilisateur->nom.' '.$utilisateur->prenom) édité le {{ $epreuve[$i]->created_at }} par moi pour la {{ $epreuve[$i]->classe }}@else édité par M.
                                {{ $epreuve[$i]->editeur }} @endif</span>

                        </div>

                        <span class="btn-sm"
                            style="text-transform: uppercase;color:brown">durée::{{ $epreuve[$i]->dure }} minutes</span>

                    </a>
                </div>

        @endfor

    </div>
    </div>
</div>

<!-- liste de mes evaluations -->

<div class="card">
        <div class="card-body bg-info">
            <h4 class="text-white card-title uppercase">Mes evaluations</h4>
            <h6 class="card-subtitle text-white m-b-0 op-5">Liste de mes évaluations</h6>
        </div>
        <div class="card-body">
            <div class="message-box contact-box">

                @for ($i =0 ; $i <sizeOf($evaluation) ; $i++)

                <div class="message-widget contact-widget" style="background-color: antiquewhite"
                    title="cliquer dessus pour voir le l'épreuve">


                    <!-- Message -->
                    <a href="storage\epreuve\{{ $evaluation[$i]->epreuve }}">
                        <div class="user-img"> <img src="images/abc.png" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                            <h5 style="text-transform: uppercase">évaluation de {{ $evaluation[$i]->nom }} en {{ $evaluation[$i]->class_mat }} pour: {{ $evaluation[$i]->libelle }}</h5>
                            <span class="mail-desc"> En attente de validation par l'administration...</span>

                        </div>

                        <span class="btn-sm"
                            style="text-transform: uppercase;color:brown">durée::{{ $evaluation[$i]->dure }} minutes</span>

                    </a>
                </div>

            <!--voir evaluation-->
                <span class="mail-desc" style="display: inline-block;max-width: 20px">
                            <a href="{{ route('modifier_evaluation_path') }}?path_directrieRetry={{ $evaluation[$i]->id }}">
                                <img src="images/icones/oeil.png" alt="supprimer" title="supprimer">
                            </a>
                        </span>
            <!--Supprimer eva-->
                <span class="mail-desc" style="display: inline-block;max-width: 20px">
                        <a data-toggle="modal" data-target="#add-sup-eva{{ $i }}">
                            <img src="images/icones/del-red.png" alt="supprimer" title="supprimer">
                        </a>
                    </span>

                    <span class="mail-desc" style="display: inline-block;max-width: 20px">
                            <a href="">
                                    <div class="table-responsive ">
                                            <div id="add-sup-eva{{ $i }}" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content col-xs-9">
                                                        <div class="modal-header ">
                                                        <h4 class="modal-title" id="myModalLabel">Voulez vous vraiment supprimer cet évaluation?</h4>
                                                    </div>
                                                    <div class="modal-title">

                                                            <div class="form-group" style="text-align: center;">
                                                                <div class="col-md-12 m-b-20 carousel-inner">
                                                                    <div class="fileupload bouton btn-danger btn-rounded waves-effect carousel-inner" >
                                                                        <span >
                                                                                <a href="{{ route('supprimer_evaluation_path') }}?path_direc={{ $evaluation[$i]->id }}">Suprimer</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </a>
                        </span>



                    @endfor




            </div>
        </div>
    </div>




<!--creation des données d'epreuve-->

<div class="table-responsive ">
    <div id="add-contact" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog" style="min-width: 90%">

            <div class="col-md-12 modal-content" style="background-color: azure;width: 100%">

                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Détails de l'évaluation</b></h4>
                    <div class="table-responsive">
                        <form action="{{ route('generer_epreuve_path') }}" method="post">
                            {{ csrf_field() }}
                            <table class=" " style="font-size: 15px">
                                <thead>
                                    <tr>
                                        <th>Matière</th>
                                        <th>Libellé</th>
                                        <th>durée(Minutes)</th>
                                        <th>nombre de question</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td style="width: 25%">
                                            <select name="matiere" required style="min-width: 100%;text-transform: uppercase">
                                                @for ($i =0 ; $i <sizeOf($classe_mat) ; $i++) <option
                                                    value="{{ $classe_mat[$i]->id.'.'.$classe_mat[$i]->nom.'->'.$classe_mat[$i]->classe }}">
                                                    {{ $classe_mat[$i]->nom.'->'.$classe_mat[$i]->classe }}</option>
                                                    @endfor
                                            </select>
                                        </td>

                                        <td style="width: 25%">
                                            <select name="libelle" id=""
                                                style="min-width: 100%;text-transform: uppercase">
                                                <option value="cc">cc</option>
                                                <option value="sn">sn</option>
                                                <option value="tp">tp</option>
                                            </select>
                                        </td>

                                        <td style="width: 25%">
                                            <select name="dure" id="" style="min-width: 100%">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                                <option value="45">45</option>
                                                <option value="60">60</option>
                                            </select>
                                        </td>
                                        <td style="width: 25%">
                                            <select name="nbre_kuestion" id="" style="min-width: 100%">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="4" align="center" class="btn-sm">
                                            <input type="submit" class=" btn btn-success btn-sm" value="Valider">
                                        </td>
                                    </tr>
                                </thead>

                            </table>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!--creation des données d'epreuve-->


@endif

<!--creation epreuve-->
@if ($createEpreuve)

<div class="card">
        <div class="card-body bg-info">
            <h4 class="text-white card-title">Fiche d'évaluation</h4>
        </div>
        <div class="card-body">
            <div class="message-box contact-box">
                <h2 class="add-ct-btn">
                    <a href="{{ route('evaluation_path') }}">
                    <button type="" class="btn btn-circle btn-lg btn-danger waves-effect waves-dark">
                        X
                    </button>
                </a>
                </h2>
<div class="col-md-12" style="background-color: azure;">

    <div class="card-box">
        <div class="table-responsive">
            <form action="{{ route('enregistrer_epreuve_path') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table class="table m-0 table-colored-bordered table-bordered-success " style="font-size: 15px">
                    <thead>
                        <tr>
                            <th colspan="4" class="centre"> Epreuve de {{ $matiere_classe[0] }} de la
                                {{ $matiere_classe[1] }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4">
                                <div class="col-md-13 m-b-20 carousel-inner">
                                    <div class="fileupload bouton  btn-rounded waves-effect carousel-inner"
                                        style="background-color:  #5fb8ee;"><span
                                            style="font-size: 20px;text-transform: uppercase">AJOUTER UN
                                            FICHIER</span>
                                        <input type="file" id="imgInp" accept="image/jpg,image/jpeg,application/pdf"
                                            name="fichier" class=" btn-sm " style="width: 100%" required>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <td colspan="4">
                            <div class="col-md-13 m-b-20 carousel-inner">
                                <div class="fileupload bouton  btn-rounded waves-effect carousel-inner"
                                    style="background-color:  #5fb8ee;"><span
                                        style="font-size: 20px;text-transform: uppercase">Inserer les
                                        reponses</span>

                                </div>
                            </div>
                        </td>
                        </tr>

                        @for ($i = 0; $i < $nbre_k; $i++) <tr class="">
                            <td class="centre">{{ $i+1 }}</td>

                            <td class="centre">
                                <select name="kcm{{ $i }}" id="">
                                    @for ($rep = 0; $rep < 4; $rep++) <Option value="{{ $reponse[$rep] }}">
                                        {{ $reponse[$rep] }} </option>
                                        @endfor
                                </select>
                            </td>
                            @php $i=$i+2 @endphp
                            <td class="centre">{{ $i }}</td>
                            @php $i-- @endphp

                            <td class="centre">
                                <select name="kcm{{ $i }}" id="">
                                    @for ($rep = 0; $rep < 4; $rep++) <Option value="{{ $reponse[$rep] }}">
                                        {{ $reponse[$rep] }} </option>
                                        @endfor
                                </select>
                            </td>

                            </tr>
                            @endfor

                            <tr>
                                <td colspan="4">
                                    <div class="col-md-13 m-b-20 carousel-inner">
                                        <div class="fileupload bouton  btn-rounded waves-effect carousel-inner"
                                            style="background-color:  #5fb8ee;text-transform: uppercase"><span
                                                style="font-size: 20px">confirmation du lbellé et la durée</span>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <th style="text-transform: uppercase;float: right">libellé</th>
                                <td style="width: 25%">
                                    <select name="libelle" id="" style="min-width: 100%;text-transform: uppercase">
                                        <option value="{{ $libelle }}">{{ $libelle }}</option>
                                        <option value="cc">cc</option>
                                        <option value="sn">sn</option>
                                        <option value="tp">tp</option>
                                    </select>
                                </td>
                                <th style="text-transform: uppercase;float: right">Durée</th>
                                <td style="width: 25%">
                                    <select name="dure" id="" style="min-width: 100%">
                                        <option value="{{ $dure }}">{{ $dure }}</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                        <option value="60">60</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>

                                <th style="text-transform: uppercase;float: right">classe</th>
                                <td style="width: 25%">{{ $matiere_classe[1] }}</td>
                                <th style="text-transform: uppercase;float: right">matière</th>
                                <td style="width: 25%">{{ $matiere_classe[0] }}</td>
                            </tr>
                    </tbody>


                    <thead>

                        <tr>
                            <td colspan="4" align="center">
                                <input type="hidden" name="classe" value="{{ $matiere_classe[1] }}">
                                <input type="hidden" name="matiere" value="{{ $matiere_classe[0] }}">
                                <input type="hidden" name="nbre" value="{{ $nbre_k }}">
                                <input type="submit" class="btn btn-success" value="Valider"
                                    style="font-size: 15px;"></span>

                            </td>
                        </tr>
                    </thead>

                </table>

            </form>
        </div>
    </div>

</div>
</div></div></div>

@endif

@else

@endif
@endif
