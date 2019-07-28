@if ($nombre==0)
<h1 class="centre">Vous n'êtes pas encore programmé</h1>
@else


<div class="card-body">
        <a class="register col-lg-12 modal-content fileupload bouton b1 btn-rounded waves-effect carousel-inner" class="btn-info" href="" data-toggle="modal" data-target="#add-con"
        style="font-size: 15px;color: #002b46">
        <span style="float: left;"> Semaine {{ $k }}</span> DU
        @php
        echo '<span style="color:red">'.$date->format('d-m-Y').'</span> Au ';
        $date->modify('+ 6 day');
        echo '<span style="color:red">'.$date->format('d-m-Y').'</span>';
        echo '<span style="float: right; color:black">Derouler<b class="caret"></b></span> ';
        $date->modify('+ 1 day');
        @endphp
    </a>
    <div class="table-responsive m-t-20" style="margin-top: -20px;">
        <table class="table stylish-table">
            <tr class="btn-info">
                <th>HORAIRES</th>
                <th>7h30-9h30 </th>
                <th>9h30-11h30</th>
                <th>11h30-12h45</th>
                <th>12h45-14h45</th>
            </tr>

            @for ($i=0; $i <6 ; $i++) @php $compteur=$i-7 ; @endphp
            <tr>
            <th style="vertical-align: middle;">
                {{ $jour[$i] }} {!! '<br>'. $passeur->modify('+ 1 day')->format('d-m-Y') !!}
            </th>

                @if ($k>$nombre-1 || $k<0) {{ $k=0}} @endif @if ($jour[$i]=='MERCREDI' || $jour[$i]=='SAMEDI' )
                <td>
                    <!--test sur les cours terminés-->
                    @if ($resultat[$k]->nombre_heure < 0) <p class="alert-danger">{!! '<p
                            style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>
                        <p class="alert-danger"> Cour terminé' !!} @else
                            <!--affichages de cours non terminés-->
                            {!! '<p style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>' .
                            $resultat[$k]->nom_prof. '<br>' !!}
                            <p class="alert-danger">
                                @if ($resultat[$k]->nombre_heure==18) Devoir CC
                                @else
                                {{ $resultat[$k]->nombre_heure }}h resrantes
                                @endif
                            </p>

                    @endif
                </td>
                            @php $resultat[$k]->nombre_heure-=2; $k=$k+1 @endphp @if ($k>$nombre-1) {{ $k=0}} @endif

                            <td>
                                <!--test sur les cours terminés-->
                                @if ($resultat[$k]->nombre_heure < 0) <p class="alert-danger">{!! '<p
                                        style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>
                                    <p class="alert-danger"> Cour terminé' !!} @else
                                        <!--affichages de cours non terminés-->
                                        {!! '<p style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>'.
                                        $resultat[$k]->nom_prof. '<br>' !!}
                                        <p class="alert-danger">@if ($resultat[$k]->nombre_heure==18) Devoir CC @else
                                            {{ $resultat[$k]->nombre_heure }}h resrantes @endif </p>
                                        @endif
                            </td>
                            @php $resultat[$k]->nombre_heure-=2; $k=$k+1 @endphp @if ($k>$nombre-1) {{ $k=0}} @endif

                            <td
                                style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">
                            </td>

                            <td
                                style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">
                            </td>

                            @else

                            <td>
                                <!--test sur les cours terminés-->
                                @if ($resultat[$k]->nombre_heure < 0) <p class="alert-danger">{!! '<p
                                        style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>
                                    <p class="alert-danger"> Cour terminé' !!} @else
                                        <!--affichages de cours non terminés-->
                                        {!! '<p style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>' .
                                        $resultat[$k]->nom_prof. '<br>' !!}
                                        <p class="alert-danger">@if ($resultat[$k]->nombre_heure==18) Devoir CC @else
                                            {{ $resultat[$k]->nombre_heure }}h resrantes @endif </p>
                                        @endif
                            </td>
                            @php $resultat[$k]->nombre_heure-=2 ; $k=$k+1 @endphp @if ($k>$nombre-1) {{ $k=0}} @endif

                            <td>
                                <!--test sur les cours terminés-->
                                @if ($resultat[$k]->nombre_heure < 0) <p class="alert-danger">{!! '<p
                                        style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>
                                    <p class="alert-danger"> Cour terminé' !!} @else
                                        <!--affichages de cours non terminés-->
                                        {!! '<p style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>'.
                                        $resultat[$k]->nom_prof. '<br>' !!}
                                        <p class="alert-danger">@if ($resultat[$k]->nombre_heure==18) Devoir CC @else
                                            {{ $resultat[$k]->nombre_heure }}h resrantes @endif </p>
                                        @endif
                            </td>
                            @php $resultat[$k]->nombre_heure-=2; $k=$k+1 @endphp @if ($k>$nombre-1) {{ $k=0}} @endif

                            <td
                                style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center ">
                                PAUSE </td>

                            <td>
                                <!--test sur les cours terminés-->
                                @if ($resultat[$k]->nombre_heure < 0) <p class="alert-danger">{!! '<p
                                        style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>
                                    <p class="alert-danger"> Cour terminé' !!} @else
                                        <!--affichages de cours non terminés-->
                                        {!! '<p style="text-transform: uppercase;">'. $resultat[$k]->nom.'</p>' .
                                        $resultat[$k]->nom_prof. '<br>' !!}
                                        <p class="alert-danger">@if ($resultat[$k]->nombre_heure==18) Devoir CC @else
                                            {{ $resultat[$k]->nombre_heure }}h resrantes @endif </p>
                                        @endif
                            </td>
                            @php $resultat[$k]->nombre_heure-=2; $k=$k+1 @endphp @if ($k>$nombre-1) {{ $k=0}} @endif
                            @endif
                            </tr>

                            @endfor
                            @php
                            $passeur->modify('+ 1 day');

                            @endphp

        </table>
    </div>
</div>
@endif
