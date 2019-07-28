@if ($utilisateur->type=="null")

@php

$jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );

if ($nombre<1){ } else { $date=new DateTime($resultat[0]->periode);
    $passeur=new DateTime($resultat[0]->periode);

    $jourChiffre=$date->format('w');
    switch ($jourChiffre) {
    case 0:
    $date->modify('+ 1 day');
    break;
    case 1:
    $date->modify('+ 7 day');
    break;
    case 2:
    $date->modify('+ 6 day');
    break;
    case 3:
    $date->modify('+ 5 day');
    break;
    case 4:
    $date->modify('+ 4 day');
    break;
    case 5:
    $date->modify('+ 3 day');
    break;
    case 6:
    $date->modify('+ 2 day');
    break;
    }
    switch ($jourChiffre) {
    case 0:
    break;
    case 1:
    $passeur->modify('+ 6 day');
    break;
    case 2:
    $passeur->modify('+ 5 day');
    break;
    case 3:
    $passeur->modify('+ 4 day');
    break;
    case 4:
    $passeur->modify('+ 3 day');
    break;
    case 5:
    $passeur->modify('+ 2 day');
    break;
    case 6:
    $passeur->modify('+ 1 day');
    break;
    }
    }

    @endphp



   @php
   /*
    <div class="">
        <div id="add-con" class="modal fade in" role="dialog" style="">
            <div class="modal-dialog">
                <div class="modal-content col-xs-5">
                    <div class="modal-body ">
                        <ul class="nav nav-tabs profile-tab">
                            @for ($c = $init; $c < 22; $c++) <li class="nav-item"> <a
                                    class="nav-link @if($c==$init) active @endif" data-toggle="tab"
                                    href="{{ '#semaine'.$c }}" role="tab" title=""> @if ($c<10) semaine {{ '0'.$c }}
                                        @else semaine {{ $c }} @endif</a> </li> @endfor </ul> </div> </div> </div>
                                        </div>
                                    </div> <!-- Debut page -->
                                        <h3 style="margin-top: -30px;"> Emploi de temps </h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-xlg-12 col-md-7  ">
                                                <div class="card">
                                                    <!-- Nav tabs -->

                                                    <!-- emploi1 -->

                                                    <div class="tab-content">
                                                        @for ($k = $init; $k < 22; $k++) <div
                                                            class="tab-pane @if($k==$init) active @endif"
                                                            id="semaine{{ $k }}" role="tabpanel">
                                                            @include('compte/layout_emploi')
                                                    </div>
                                                    @endfor



                                                </div>

                                            </div>
                                        </div>
                                        */
                          @endphp

                                        @else

                                        @if ($utilisateur->type=="enseignant")


                                        <h4 class="card-title">Mes jours libres</h4>
                                        <form action="{{ route('disponibilite_edt_path') }}" method="post" class="col-lg-12 col-md-6">
                                            {{ csrf_field() }}
                                            <table class="table stylish-table"   style="background-color: darkgrey">
                                                <thead>
                                                        @php
                                                        $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
                                                        @endphp
                                                    <tr>
                                                        @for ($i =0 ; $i < 6; $i++)
                                                        <th style="color: white">{{ $jour[$i] }}</th>
                                                        @endfor

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr class="">

                                                          <td><input type="checkbox" name="jour1" value="lundi" ></td>
                                                          <td><input type="checkbox" name="jour2" value="mardi" ></td>
                                                          <td><input type="checkbox" name="jour3" value="mercredi" ></td>
                                                          <td><input type="checkbox" name="jour4" value="jeudi" ></td>
                                                          <td><input type="checkbox" name="jour5" value="vendredi" ></td>
                                                          <td><input type="checkbox" name="jour6" value="samedi" ></td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                            <input type="submit" value="Envoyer" class="btn" style="background-color: darkgrey;  ">
                                        </form>

                                        <div class="">

                                                <h4 class="card-title">Mes Jours de cours</h4>

                                                <ul class="nav nav-pills m-t-30 m-b-30" style="margin-top: -10px">
                                                    @for ($i =0 ; $i <sizeOf($remplisseur) ; $i++)
                                                        <a class="nav-link  active centre"> {{ $remplisseur[$i]->jour }}
                                                            <hr>
                                                        </a>
                                                        @endfor
                                                </ul>
                                        </div>

                                        @if (sizeOf($classe)==0)
                                          <h4 class="card-title">Pas encor d'étudiants dans les salles de classes</h4>
                                        @else
                                        <div class="">

                                                <h4 class="card-title">Mes salles de classes</h4>

                                                <ul class="nav nav-pills m-t-30 m-b-30" style="margin-top: -10px">
                                                    @for ($i =0 ; $i <sizeOf($classe) ; $i++)
                                                    <li class="nav-item">
                                                        <a class="nav-link  active centre"> Classe {{ $i+1 }}
                                                            <hr>
                                                            <span>{{ $classe[$i]->classe }}</span>
                                                            <form action="{{ route('remplir_emploi_path') }}" method="post">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="classe" value="{{ $classe[$i]->classe }}">
                                                                <input type="submit" value="Emploi de temps" class="nav-link  active">
                                                            </form>
                                                        </a>

                                                        </li>
                                                        @endfor
                                                </ul>
                                        </div>
                                        @endif

                                        @php
                                        $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
                                        @endphp
                                    @if ($passe)
                                       <div class="table-responsive m-t-20" style="margin-top: -20px;">
                                        <form action="{{ route('sauvegarder_edt_path') }}" method="post">

                                            {{ csrf_field() }}
                                            @if (sizeOf($emploiTemp)<=1)
                                              <h3 class="card-title">Aucune Matiere enregistrer pour cette classe</h3>
                                            @else

                                            <table class="table stylish-table">
                                                    <tr class="btn-info">
                                                        <th>JOUR</th>
                                                        <th>Matiere 1</th>
                                                        <th>Matiere 2</th>
                                                        <th>Matiere 3</th>
                                                    </tr>


                                                        @for ($i = 0; $i < sizeOf($jour); $i++)
                                                        <tr>
                                                             <td>
                                                               {{ $jour[$i] }}
                                                             </td>
                                                             @php
                                                                 $c=0;
                                                             @endphp

                                                              @if ($jour[$i]=='MERCREDI' || $jour[$i]=='SAMEDI')
                                                              <td>
                                                                    <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="">
                                                                        @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                          <option>{{ $emploiTemp[$a]->nom. ' - ' .$emploiTemp[$a]->nom_prof }}
                                                                        @endfor


                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="">
                                                                        @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                          <option>{{ $emploiTemp[$a]->nom. ' - ' .$emploiTemp[$a]->nom_prof }}
                                                                        @endfor

                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="">
                                                                        @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                          <option>
                                                                        @endfor

                                                                    </select>
                                                                </td>
                                                              @else

                                                              <td>
                                                                    <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="">
                                                                        @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                          <option >{{ $emploiTemp[$a]->nom. ' - ' .$emploiTemp[$a]->nom_prof }}
                                                                        @endfor

                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="">
                                                                        @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                          <option>{{ $emploiTemp[$a]->nom. ' - ' .$emploiTemp[$a]->nom_prof }}
                                                                        @endfor

                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="">
                                                                        @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                          <option>{{ $emploiTemp[$a]->nom. ' - ' .$emploiTemp[$a]->nom_prof }}
                                                                        @endfor

                                                                    </select>
                                                                </td>

                                                              @endif

                                                         </tr>
                                                        @endfor

                                                </table>

                                                    <div class="centre">
                                                        <input type="submit" value="Envoyer" class="btn btn-info" >
                                                    </div>
                                            @endif



                                        </form>

                                        </div>
                                    @endif
                                      @else
                                   @endif
                                @endif
                     </div>
                </div>





                </body>

                </html>
