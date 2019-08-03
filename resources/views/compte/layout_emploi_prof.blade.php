@if (sizeOf($resultatprof)==0)
<h1 class="centre">Vous n'êtes pas encore programmé</h1>
@else


<div class="card-body">
        <a href="#" class="register col-lg-12 modal-content fileupload bouton b1 btn-rounded waves-effect carousel-inner" class="btn-info" href=""
        style="font-size: 15px;color: #002b46">Mon Emploi de temps
    </a>
    <br>
    <div class="table-responsive " style="margin-top: -20px;">
        <table class="btn btn-sm " style="font-size: 15px;color: black;text-align: left; ">
            <tr class="btn-info">
                <th>HORAIRES</th>
                <th>7h30-9h30 </th>
                <th>9h30-11h30</th>
                <th>11h30-12h45</th>
                <th>12h45-14h45</th>
            </tr>
            @php
            $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
            @endphp


            @for ($j =0 ; $j <sizeOf($jour) ; $j++)
            <tr>
                    <td>{{ $jour[$j] }}</td>
                    <td>
                        @for ($i =0 ; $i <sizeOf($resultatprof) ; $i++)

                              @if ($resultatprof[$i]->tranche==1 && $resultatprof[$i]->jour==$jour[$j])
                                    {{ $resultatprof[$i]->matiere }} <br> <p class="register btn btn-sm btn-reverse">{{ $resultatprof[$i]->classe }}</p>
                              @endif

                        @endfor
                    </td>

                    <td>
                        @for ($i =0 ; $i <sizeOf($resultatprof) ; $i++)

                              @if ($resultatprof[$i]->tranche==2 && $resultatprof[$i]->jour==$jour[$j])
                                    {{ $resultatprof[$i]->matiere }}
                                    <br>
                                    <p class="register btn btn-sm btn-reverse" >{{ $resultatprof[$i]->classe }}</p>
                              @endif

                        @endfor
                    </td>

                        <td style="background-color: gray"> PAUSE</td>

                    <td>
                        @for ($i =0 ; $i <sizeOf($resultatprof) ; $i++)

                              @if ($resultatprof[$i]->tranche==3 && $resultatprof[$i]->jour==$jour[$j])
                                    {{ $resultatprof[$i]->matiere }} <br> <p class="register btn btn-sm btn-reverse">{{ $resultatprof[$i]->classe }}</p>
                              @endif

                        @endfor
                    </td>
              </tr>
            @endfor



        </table>
    </div>
</div>
@endif
