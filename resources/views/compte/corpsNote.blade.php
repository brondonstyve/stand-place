
<div >
    <!-- Column -->


@if ($utilisateur->type==null)

@if ($nombre<=0)
<h2 class="card-title">Aucune note n'est disponible pour le moment</h2>
@else
@for ($i =0 ; $i <$nombre ; $i++)
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $note[$i]->nom }}</h2>
            <div class="text-right"> <span class="text-muted">{{ $note[$i]->nom_prof }}</span></div>
            <h5 class="font-light">Travaux Pratiques &nbsp;&nbsp;&nbsp;&nbsp;: <span style="color:@if ($note[$i]->tp<5) red @else @if ($note[$i]->tp<12) blue @else green @endif @endif " >{{  $note[$i]->tp }}/20</span> </h5>
                <h5 class="font-light">Controle continu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span style="color:@if ($note[$i]->CC<5) red @else @if ($note[$i]->CC<12) blue @else green @endif @endif " >{{ $note[$i]->CC }}/20</span> </h5>
                <h5 class="font-light">Session normale &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<span style="color:@if ($note[$i]->SN<5) red @else @if ($note[$i]->SN<12) blue @else green @endif @endif" >{{ $note[$i]->SN }}/20</span></h5>
                     @php
                         $comptNote=0;
                         $comptCoef=0;
                         $final=($note[$i]->CC*30/100)+($note[$i]->SN*70/100)
                     @endphp
                <h5 class="font-light">Note finale &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span style="color:@if ($final<5) red @else @if ($final<12) blue @else green  @endif @endif " >{{ $final }}/20</h5>

            <span class="text-success">{{ ($note[$i]->final/20)*100 }}%  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @if ($final<5) danger @else @if ($final<12) Mauvais travail @else bon travail @endif @endif </span>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($note[$i]->final/20)*100 }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <input type="button" class="btn-danger" value="Révendications">
        </div>
    </div>
</div>
@endfor



<div class="col-lg-12 col-md-6">
  <div class="card">
 <div class="card-body " style="min-width: 100%">
    <h4 class="card-title">Bulletin instantané</h4>
    <h6 class="card-subtitle"><code>notes</code></h6>
    <div class="table-responsive col-lg-10">
        <table class="table " id="tab" >
            <thead>
                <tr>
                    <th>matière</th>
                    <th>note CC(/20)</th>
                    <th>note SN(/20)</th>
                    <th>Note(/20)</th>
                    <th>Coeficient</th>
                    <th>total</th>

                </tr>
            </thead>
            <tbody>
                @for ($i =0 ; $i <$nombre ; $i++)
                <tr>
                        <td>{{ $note[$i]->nom }}</td>
                        <td>{{ $note[$i]->CC }}</td>
                        <td>{{ $note[$i]->SN }}</td>
                        <td>{{ $total=($note[$i]->CC*30/100)+($note[$i]->SN*70/100) }}</td>
                        <td>{{ $note[$i]->coef }}</td>
                        <td>{{ $total*$note[$i]->coef }}</td>
                </tr>
                @php
                 $comptNote=$comptNote+$total*$note[$i]->coef;
                 $comptCoef=$comptCoef+$note[$i]->coef;
                @endphp
                @endfor

                <tr>
                        <td colspan="5" style="text-align: right;">moyenne</td>
                        <td> <span style="color:@if ($comptNote/$comptCoef<12) red @else green @endif " >{{ $comptNote/$comptCoef }}</span> </td>
                </tr>

                <tr>
                        <td colspan="5" style="text-align: right;">décision du conseil des enseignants</td>
                        <td> <span style="color:@if ($comptNote/$comptCoef<12) red @else green @endif " >@if ($comptNote/$comptCoef<12) Echec @else admmis @endif </span> </td>
                </tr>

            </tbody>
        </table>
    </div>
            <input type="button" class="btn btn-sm btn-danger" value="Imprimer" onclick=" $('tab').printElement ">

</div>
</div>

</div>


@endif

@else


@if ($utilisateur->type=="enseignant")

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
                     <span>{{ $classe[$i]->nom }}</span>
                     <form action="{{ route('remplir_note_path') }}" method="post">
                        {{ csrf_field() }}
                         <input type="hidden" name="classe" value="{{ $classe[$i]->classe }}">
                         <input type="hidden" name="id" value="{{ $classe[$i]->id }}">
                            <input type="submit" value="Liste des étudiants" class="btn-sm">
                    </form>
                </a>
        </div></div></div></div>
                @endfor

@if (!$ouverture)
  <h4 class="card-title">...</h4>

@else

       @if (sizeOf($liste)==0)
          <h3 class="card-title">erreur </h3>
       @else
       <div class="card-body" >
            <div style="color: black">
            <div id="visitor" >

                    <div class="table-responsive m-t-20">
                        <form action="{{ route('inserer_note_path') }}" method="post" style="padding: 5%">
                            {{ csrf_field() }}
                                <h3 class="card-title">liste des étudiants de la {{ $liste[0]->classe}} </h3>
                            <table class="table stylish-table" >
                                <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>TD</th>
                                            <th>CC</th>
                                            <th>SN</th>
                                            <th>final</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    @php
                                        $space="";
                                    @endphp
                        @for ($i = 0; $i < $listec; $i++)
                             <tr class="">
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $liste[$i]->nom }}</td>
                                    <td>{{ $liste[$i]->prenom }}</td>
                                    <td><input type="text" size="7" value='@if(sizeOf($remplisseur)==0){{0}}@else @if(sizeOf($remplisseur)>$i){{ $remplisseur[$i]->tp }}@else{{0}}@endif{{ $space }}@endif' disabled></td>
                                    <td><input type="text" name="cc{{ $i }}" size="7" value='@if(sizeOf($remplisseur)==0){{0}}@else @if(sizeOf($remplisseur)>$i){{ $remplisseur[$i]->CC }}@else{{0}}@endif{{ $space }}@endif'></td>
                                    <td><input type="text" name="sn{{ $i }}" size="7" value="@if(sizeOf($remplisseur)==0){{0}}@else @if(sizeOf($remplisseur)>$i){{$remplisseur[$i]->SN}}@else{{0}}@endif{{ $space }}@endif"></td>
                                    <td><input type="text" size="7" value="@if(sizeOf($remplisseur)==0){{0}}@else @if(sizeOf($remplisseur)>$i){{$remplisseur[$i]->final}}@else{{0}}@endif{{ $space }}@endif" disabled></td>
                                    <input type="hidden" size="4" name="id_matiere{{ $i }}" value="{{ $id }}">
                                    <input type="hidden" size="4" name="id_compte{{ $i }}" value="{{ $liste[$i]->id }}">

                                </tr>

                        @endfor


                    </tbody>
                </table>
                <input type="hidden" name="compteur" value="{{ $listec }}">
                <input type="submit" value="Soumettre">
            </form>
            </div>
        </div>
        </div>
       @endif

@endif




@else

@endif
@endif


    <!-- Column -->
</div>
