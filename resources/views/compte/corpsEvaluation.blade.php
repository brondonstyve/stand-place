@php
$reponse = array('a','b','c','');
@endphp

@if ($utilisateur->type==null)

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

    <object data="Fichiers/Gest-Projet-Infor.pdf" type="application/pdf" class="table m-0 " width="500" height="500">
        alt: <a href="Fichiers/Gest-Projet-Infor.pdf">testpdf</a>
    </object>

</div>



<div class="col-md-6">

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
                </table>
                <input type="submit" id="button" value="Soumettre" class="btn btn-sm btn-success">
            </form>
        </div>
    </div>

</div>

@else
@if ($utilisateur->type=='enseignant')

<!--creation des données d'epreuve-->
@if ($createForm)
<div class="col-md-10" style="background-color: azure">

    <div class="card-box">
        <h4 class="m-t-0 header-title"><b>Détails de l'évaluation</b></h4>
        <div class="table-responsive">
            <form action="{{ route('generer_epreuve_path') }}" method="post">
                {{ csrf_field() }}
                <table class="table m-0 table-colored-bordered table-bordered-success " style="font-size: 15px">
                    <thead>
                        <tr>
                            <th>Matière</th>
                            <th>Libellé</th>
                            <th>durée(Min)</th>
                            <th>question</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td style="width: 25%">
                                <select name="matiere" id="" style="min-width: 100%;text-transform: uppercase">
                                    @for ($i =0 ; $i <sizeOf($classe_mat) ; $i++) <option
                                        value="{{ $classe_mat[$i]->nom.'->'.$classe_mat[$i]->classe }}">
                                        {{ $classe_mat[$i]->nom.'->'.$classe_mat[$i]->classe }}</option>
                                        @endfor
                                </select>
                            </td>

                            <td style="width: 25%">
                                <select name="libelle" id="" style="min-width: 100%;text-transform: uppercase">
                                    <option value="cc">cc</option>
                                    <option value="sn">sn</option>
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
                                <input type="submit" class=" " value="Valider">
                            </td>
                        </tr>
                    </thead>

                </table>

            </form>
        </div>
    </div>

</div>
@endif

<!--creation epreuve-->
@if ($createEpreuve)
<div class="col-md-10" style="background-color: azure">

    <div class="card-box">
        <h4 class="m-t-0 header-title"><b>Fiche d'évaluation</b></h4>
        <div class="table-responsive">
            <form action="{{ route('enregistrer_epreuve_path') }}" method="post">
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
                                        <input type="file" id="imgInp" accept="image/*,application/pdf" name="avatar">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
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

                        <tr>
                            @for ($i = 0; $i < $nbre_k; $i++) <tr class="">
                                <td class="centre">{{ $i+1 }}</td>

                                <td class="centre"><select name="response{{ $i }}" id="">
                                        @for ($rep = 0; $rep < 4; $rep++) <Option>{{ $reponse[$rep] }}
                                            @endfor
                                    </select>
                                </td>
                                @php $i=$i+2 @endphp
                                <td class="centre">{{ $i }}</td>
                                @php $i-- @endphp

                                <td class="centre"><select name="response{{ $i }}" id="">
                                        @for ($rep = 0; $rep < 4; $rep++) <Option>{{ $reponse[$rep] }}
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
                                      <input type="submit" class="btn btn-success" value="Valider" style="font-size: 15px;"></span>

                                    </td>
                                </tr>
                    </thead>

                </table>

            </form>
        </div>
    </div>

</div>

@endif

@else

@endif
@endif
