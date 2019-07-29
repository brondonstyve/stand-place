@if ($utilisateur->type=="null")

@php

$jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );

if (sizeOf($resultat)<1){ } else { $date=new DateTime($resultat[0]->created_at);
    $passeur=new DateTime($resultat[0]->created_at);

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




    <div class="">
        <div id="add-con" class="modal fade in" role="dialog" style="">
            <div class="modal-dialog">
                <div class="modal-content col-xs-5">
                    <div class="modal-body ">
                        <ul class="nav nav-tabs profile-tab">
                             </ul> </div> </div> </div>
                                        </div>
                                    </div> <!-- M.Debut page -->
                                        <h3 style="margin-top: -30px;"> Emploi de temps </h3>
                                        <div class="row">
                                            <div class="col-lg-8 ">
                                                <div class="card">
                                                    <!-- M.Nav tabs -->

                                                    <!-- M.emploi1 -->

                                                    <div class="tab-content">
                                                            @include('compte/layout_emploi')
                                                    </div>



                                                </div>

                                            </div>


                                            <div class="col-lg-4 col-md-6">
                                                    <div class="card card-size color-md1">
                                                        <div class="card-body">
                                                            <h3 class="card-title">Programme des évaluations</h3>
                                                            <div id="visitor" style="height: 267px; width: 100%; max-height: 290px; position: relative;" class="c3">

                                                                    <div class="table-responsive m-t-20">

                                                                        <table class="table stylish-table">
                                                                                <tbody>
                                                                             <tr class="">

                                                                             </tr>
                                                                                </tbody>
                                                                         </table>

                                                            </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                        </div>




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

                                                          <td><input type="checkbox" name="jour1" value="LUNDI" ></td>
                                                          <td><input type="checkbox" name="jour2" value="MARDI" ></td>
                                                          <td><input type="checkbox" name="jour3" value="MERCREDI" ></td>
                                                          <td><input type="checkbox" name="jour4" value="JEUDI" ></td>
                                                          <td><input type="checkbox" name="jour5" value="VENDREDI" ></td>
                                                          <td><input type="checkbox" name="jour6" value="SAMEDI" ></td>

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
                                                              @for ($v =1 ; $v <3 ; $v++)
                                                              <td>
                                                                <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="" style="width: 250px">
                                                                    @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                      <option> @for($x=0; $x<sizeOf($disponibilite); $x++)
                                                                                  @if(($jour[$i]==$disponibilite[$x]->jour) && ($emploiTemp[$a]->compte==$disponibilite[$x]->compte))

                                                                                         {{ $emploiTemp[$a]->compte.'-'.$emploiTemp[$a]->nom}}


                                                                                  @endif
                                                                               @endfor
                                                                    @endfor

                                                                </select>
                                                            </td>
                                                              @endfor

                                                              @else

                                                             @for ($v =1 ; $v <4 ; $v++)
                                                              <td>
                                                                <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="" style="width: 250px">
                                                                    @for ($a = 0; $a < sizeOf($emploiTemp); $a++)
                                                                      <option>@for($x=0; $x<sizeOf($disponibilite); $x++)
                                                                        @if(($jour[$i]==$disponibilite[$x]->jour) && ($emploiTemp[$a]->compte==$disponibilite[$x]->compte))
                                                                        @if (sizeOf($testeurEmpl)==0)
                                                                        {{ $emploiTemp[$a]->compte.'-'.$emploiTemp[$a]->nom}}
                                                                        @else
                                                                                             {{ $emploiTemp[$a]->compte.'-'.$emploiTemp[$a]->nom}}

                                                                        @endif

                                                                        @else
                                                                        @endif
                                                                     @endfor
                                                                    @endfor

                                                                </select>
                                                            </td>
                                                              @endfor

                                                              @endif

                                                         </tr>
                                                        @endfor

                                                </table>

                                                    <div class="centre">
                                                        <input type="hidden" name="classe" value="{{ $emploiTemp[0]->classe }}">
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
