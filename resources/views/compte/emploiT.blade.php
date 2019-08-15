@php
$jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
@endphp

@if ($utilisateur->type==null)


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
                                        <!--Jours libres-->
                                        @if($test)
                                        <div class="card-box">
                                            <div class="table-responsive">

                                                <form action="{{ route('disponibilite_edt_path') }}" method="post" class="col-lg-12 col-md-6">
                                                    {{ csrf_field() }}
                                                    <table class=""   style="background-color: azure">
                                                            <div class="col-md-6">
                                                                    <div class="card-box">
                                                                        <h4 class="m-t-0 header-title uppercase"><b>Mes jours de cours</b></h4>
                                                                        <p class="text-muted font-14 m-b-20">
                                                                             <code>mettre a jour sa disponibilité</code>
                                                                        </p>

                                                                        <div class="table-responsive">
                                                                            <table class="table m-0 table-colored-full table-full-inverse table-hover btn-sm" style="color: white">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>Jour</th>
                                                                                    <th>Tranche 1</th>
                                                                                    <th>Tranche 2</th>
                                                                                    <th>Tranche 3</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @for ($dispo =0 ; $dispo <sizeOf($jour) ; $dispo++)

                                                                                    @if ($jour[$dispo]=='MERCREDI' || $jour[$dispo]=='SAMEDI')
                                                                                    <tr>
                                                                                            <th scope="row">{{ $jour[$dispo] }}</th>
                                                                                            @for ($check =1 ; $check <3 ; $check++)
                                                                                              <td>
                                                                                                 <input type="hidden" name="nom_jour{{ $dispo }}" value="{{ $jour[$dispo] }}">
                                                                                                 <input type="checkbox" name="{{ $jour[$dispo].'tranche'.$check }}" value="{{ $check }}"
                                                                                                 @for ($checked=0 ;  $checked<sizeOf($jour_dispo) ; $checked++)
                                                                                                   @if($jour[$dispo]==$jour_dispo[$checked]->jour && $check==$jour_dispo[$checked]->tranche) checked @else @endif
                                                                                                 @endfor
                                                                                                 >{{ $check }}
                                                                                                 <!--Notificateur-->
                                                                                                 @for ($c=0 ;  $c<sizeOf($jour_dispo) ; $c++)
                                                                                                 @if($jour[$dispo]==$jour_dispo[$c]->jour && $check==$jour_dispo[$c]->tranche)
                                                                                                 <span class="notif"> <span class="heartbit"></span> <span class="point"></span> </span>
                                                                                                 @else @endif
                                                                                               @endfor

                                                                                              </td>
                                                                                            @endfor
                                                                                        </tr>
                                                                                    @else
                                                                                    <tr>
                                                                                            <th scope="row">{{ $jour[$dispo] }}</th>
                                                                                            @for ($check =1 ; $check <4 ; $check++)
                                                                                              <td>
                                                                                                 <input type="hidden" name="nom_jour{{ $dispo }}" value="{{ $jour[$dispo] }}">
                                                                                                 <input type="checkbox" name="{{ $jour[$dispo].'tranche'.$check }}" value="{{ $check }}"
                                                                                                 @for ($checked=0 ;  $checked<sizeOf($jour_dispo) ; $checked++)
                                                                                                   @if($jour[$dispo]==$jour_dispo[$checked]->jour && $check==$jour_dispo[$checked]->tranche) checked  @else @endif
                                                                                                 @endfor
                                                                                                 >{{ $check }}
                                                                                                 <!--Notificateur-->
                                                                                                 @for ($c=0 ;  $c<sizeOf($jour_dispo) ; $c++)
                                                                                                   @if($jour[$dispo]==$jour_dispo[$c]->jour && $check==$jour_dispo[$c]->tranche)
                                                                                                   <span class="notif"> <span class="heartbit"></span> <span class="point"></span> </span>
                                                                                                   @else @endif
                                                                                                 @endfor


                                                                                              </td>
                                                                                            @endfor
                                                                                        </tr>
                                                                                    @endif

                                                                                    @endfor
                                                                                </tbody>
                                                                                <tr>
                                                                                    <td colspan="4" align="center">
                                                                                            <input type="button" value="Envoyer" class="btn btn-info" onclick="cache()">
                                                                                            <input type="submit" value="confirmer" class="btn btn-info" id="confirmeur">
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                </form>




                                        @endif

                                        <br>
                                <h3 style="margin-top: -30px;"> </h3>

                                            <div class="col-lg-8 ">
                                                <div class="card">

                                                    <!-- M.emploi1 -->

                                                    <div class="tab-content">
                                                            @include('compte/layout_emploi_prof')
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




                                        @if (sizeOf($classe)==0)
                                          <h4 class="card-title">Pas encor d'étudiants dans les salles de classes</h4>
                                        @else
                                        <div class="card-body">

                                            <h4 class="card-title">Mes salles de classes</h4>

                                                    @for ($i =0 ; $i <sizeOf($classe) ; $i++)
                                                    <div class="col-lg-3 col-md-6" style="color: black">
                                                            <div class="card" style="background-color: aliceblue">
                                                                <div class="card-body" >
                                                                    <div class="row p-t-10 p-b-10">
                                                    <a class="nav-link  active btn-sm">
                                                         Classe {{ $i+1 }} : {{ $classe[$i]->classe }}
                                                         <hr>
                                                         <span>{{ $classe[$i]->classe }}</span>
                                                            <form action="{{ route('remplir_emploi_path') }}" method="post">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="classe" value="{{ $classe[$i]->classe }}">
                                                                <input type="submit" value="Emploi de temps" class="nav-link  active">
                                                            </form>
                                                    </a>
                                            </div></div></div></div>
                                            @endfor





















                                        @endif

                                        @php
                                        $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
                                        @endphp
                                    @if ($passe)
                                       <div class="table-responsive m-t-20" style="margin-top: -20px;">
                                         <form action="{{ route('sauvegarder_edt_path') }}" method="post">

                                            {{ csrf_field() }}
                                            @if (sizeOf($matiere)<=0)
                                              <h3 class="card-title">Aucune Matiere enregistrer pour cette classe</h3>
                                            @else
                                        <!-- si aucun enseignant dispo-->
                                            @if(sizeOf($disponibilite)==0)

                                            <h3 class="card-title">Aucun enseignant disponible</h3>
                                            @else
                                        <!-- si non-->
                                          <div style="max-width: 90%;display: inline-block; padding: 10%;margin: 0%">

                                                <h3 class="card-title"> Programmer la {{ $matiere[0]->classe }}</h3>
                                                <table class="table m-0 table-colored-full table-full-inverse table-hover">
                                                        <thead class="btn-info">
                                                            <th>JOUR</th>
                                                            <th>Matiere 1</th>
                                                            <th>Matiere 2</th>
                                                            <th>Matiere 3</th>
                                                        </thead>


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
                                                                         <option value=""></option>
                                                                          <!--liste des matieres de la classe choisie-->
                                                                            @for ($a=0; $a<sizeOf($matiere); $a++)
                                                                                 @for($x=0; $x<sizeOf($disponibilite); $x++)
                                                                                 <!--affichage en fonction des disponiblites des enseignants-->
                                                                                 @if(($jour[$i]==$disponibilite[$x]->jour) && ($matiere[$a]->compte==$disponibilite[$x]->compte))
                                                                                      @if (sizeOf($testeurEmpl)<=0)
                                                                                      <!--disponibilités des tranches-->
                                                                                        @if($v==$disponibilite[$x]->tranche)
                                                                                         <option value="{{ $disponibilite[$x]->tranche.'.'.$disponibilite[$x]->id.'.'.$matiere[$a]->compte.'.'.$matiere[$a]->nom}}" >{{ $matiere[$a]->nom}}
                                                                                        @endif
                                                                                      @else
                                                                                      @for ($u = 0; $u < sizeOf($testeurEmpl); $u++)

                                                                                      <!--test de disponibilité--jour -->
                                                                                       @if($testeurEmpl[$u]->jour==$disponibilite[$x]->jour)
                                                                                       <!--test de disponibilité--compte -->
                                                                                                @if($testeurEmpl[$u]->compte==$disponibilite[$x]->compte)
                                                                                                <!--test de disponibilité--tranche horaire-->
                                                                                                @if($v==$disponibilite[$x]->tranche)
                                                                                                     @if($testeurEmpl[$u]->tranche==$v)
                                                                                                           <option disabled style="color: red" value="{{ $disponibilite[$x]->tranche.'.'.$disponibilite[$x]->id.'.'.$matiere[$a]->compte.'.'.$matiere[$a]->nom}}">{{ $matiere[$a]->nom}}
                                                                                                           @php $test=true; $testeur=$matiere[$a]->compte.'.'.$matiere[$a]->nom;  @endphp
                                                                                                       @else
                                                                                                           @php $test=false; @endphp
                                                                                                      @endif
                                                                                                @endif
                                                                                                  @else
                                                                                                      @php $test=false;  @endphp

                                                                                                @endif
                                                                                       @endif

                                                                                       @endfor
                                                                                     @if($v==$disponibilite[$x]->tranche)
                                                                                       @if ($test==false && $testeur!=$matiere[$a]->compte.'.'.$matiere[$a]->nom )
                                                                                          <option value="{{ $disponibilite[$x]->tranche.'.'.$disponibilite[$x]->id.'.'.$matiere[$a]->compte.'.'.$matiere[$a]->nom}}">{{ $matiere[$a]->nom}}
                                                                                          @php $testeur=''; @endphp
                                                                                       @endif
                                                                                      @endif

                                                                                      @endif
                                                                                 @endif
                                                                                 @endfor
                                                                            @endfor
                                                                     </select>
                                                                  </td>
                                                                @endfor
                                                                  @else
                                                                  @if ($jour[$i]=='LUNDI' || $jour[$i]=='MARDI' || $jour[$i]=='JEUDI' || $jour[$i]=='VENDREDI')

                                                                      @for ($v =1 ; $v <4 ; $v++)
                                                                        <td>
                                                                           <select name="{{ $jour[$i] }}matiere{{ $c++ }}" id="" style="width: 250px">
                                                                               <option value=""></option>
                                                                                <!--liste des matieres de la classe choisie-->
                                                                                  @for ($a=0; $a<sizeOf($matiere); $a++)
                                                                                       @for($x=0; $x<sizeOf($disponibilite); $x++)
                                                                                       <!--affichage en fonction des disponiblites des enseignants-->
                                                                                       @if(($jour[$i]==$disponibilite[$x]->jour) && ($matiere[$a]->compte==$disponibilite[$x]->compte))
                                                                                            @if (sizeOf($testeurEmpl)<=0)
                                                                                            <!--disponibilités des tranches-->
                                                                                              @if($v==$disponibilite[$x]->tranche)
                                                                                               <option value="{{ $disponibilite[$x]->tranche.'.'.$disponibilite[$x]->id.'.'.$matiere[$a]->compte.'.'.$matiere[$a]->nom}}" >{{ $matiere[$a]->nom}}
                                                                                              @endif
                                                                                            @else
                                                                                            @for ($u = 0; $u < sizeOf($testeurEmpl); $u++)

                                                                                            <!--test de disponibilité--jour -->
                                                                                             @if($testeurEmpl[$u]->jour==$disponibilite[$x]->jour)
                                                                                             <!--test de disponibilité--compte -->
                                                                                                      @if($testeurEmpl[$u]->compte==$disponibilite[$x]->compte)
                                                                                                      <!--test de disponibilité--tranche horaire-->
                                                                                                      @if($v==$disponibilite[$x]->tranche)
                                                                                                           @if($testeurEmpl[$u]->tranche==$v)
                                                                                                                 <option disabled style="color: red" value="{{ $disponibilite[$x]->tranche.'.'.$disponibilite[$x]->id.'.'.$matiere[$a]->compte.'.'.$matiere[$a]->nom}}">{{ $matiere[$a]->nom}}
                                                                                                                 @php $test=true; $testeur=$matiere[$a]->compte.'.'.$matiere[$a]->nom;  @endphp
                                                                                                             @else
                                                                                                                 @php $test=false; @endphp
                                                                                                            @endif
                                                                                                      @endif
                                                                                                        @else
                                                                                                            @php $test=false;  @endphp

                                                                                                      @endif
                                                                                             @endif

                                                                                             @endfor
                                                                                             @if($v==$disponibilite[$x]->tranche)
                                                                                             @if ($test==false && $testeur!=$matiere[$a]->compte.'.'.$matiere[$a]->nom )
                                                                                                <option value="{{ $disponibilite[$x]->tranche.'.'.$disponibilite[$x]->id.'.'.$matiere[$a]->compte.'.'.$matiere[$a]->nom}}">{{ $matiere[$a]->nom}}
                                                                                             @php $testeur=''; @endphp
                                                                                            @endif
                                                                                            @endif

                                                                                            @endif
                                                                                       @endif
                                                                                       @endfor
                                                                                  @endfor
                                                                           </select>
                                                                        </td>
                                                                      @endfor

                                                                  @endif
                                                                  @endif

                                                             </tr>
                                                            @endfor
                                                            <tr>
                                                                <td colspan="4">
                                                                        <div class="centre">
                                                                                <input type="hidden" name="classe" value="{{ $matiere[0]->classe }}">
                                                                                <input type="submit" value="Confirmer" class="btn btn-info" >
                                                                            </div>
                                                                </td>
                                                            </tr>

                                                    </table>
                                        </div>
                                             @endif
                                            @endif



                                        </form>

                                    </div>
                                    @endif
                                      @else
                                   @endif
                                @endif
                </div>
            </div>
        </div>





                </body>

                </html>

