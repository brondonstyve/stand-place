

<!-- Debut page -->
<h3 class="card-title">Emploi de temps</h3>

<div class="row">
    <div class="col-lg-12 col-xlg-12 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">semaine 1</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#emploi2" role="tab">semaine 2</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">semaine 3</a>
                </li>
            </ul>
            <!-- emploi1 -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">

@php
$temp0=($resultat[0]->nombre_heure);
$temp1=($resultat[1]->nombre_heure);
$temp2=($resultat[2]->nombre_heure);
$temp3=($resultat[3]->nombre_heure);
$temp4=($resultat[4]->nombre_heure);
$temp5=($resultat[5]->nombre_heure);
$temp6=($resultat[6]->nombre_heure);
$temp7=($resultat[7]->nombre_heure);
$temp8=($resultat[8]->nombre_heure);
$temp9=($resultat[9]->nombre_heure);
@endphp


<div class="card-body">
        <div class="table-responsive m-t-20">
            <table class="table stylish-table">
                    <tr class="btn-info">
                            <th>Horaire </th>
                            <th>7h30-9h30 </th>
                            <th>9h30-11h30 </th>
                            <th>11h30-12h45 </th>
                            <th>12h45-14h45 </th>
                        </tr>

                        <tr>
                            <th>LUNDI </th>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[0]->nom }}</p>{{ $resultat[0]->nom_prof }} <p
                                    class="alert-danger">@if ($temp0==18)  Devoir CC @else {{ $temp0=$temp0 -2 }}h resrantes @endif </p>
                            </td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[1]->nom }}</p>{{ $resultat[1]->nom_prof }} <p
                                    class="alert-danger">{{ $temp1=$temp1 -2 }}h resrantes</p>
                            </td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center ">PAUSE</td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[2]->nom }}</p>{{ $resultat[2]->nom_prof }} <p
                                    class="alert-danger">{{ $temp2=$temp2 -2 }}h resrantes</p>
                            </td>
                        </tr>
                        <tr>
                            <th>MARDI</th>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[3]->nom }}</p>{{ $resultat[3]->nom_prof }} <p
                                    class="alert-danger">{{ $temp3=$temp3 -2 }}h resrantes</p>
                            </td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[4]->nom }}</p>{{ $resultat[4]->nom_prof }} <p
                                    class="alert-danger">{{ $temp4=$temp4 -2 }}h resrantes</p>
                            </td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">PAUSE</td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[5]->nom }}</p>{{ $resultat[5]->nom_prof }} <p
                                    class="alert-danger">{{ $temp5=$temp5 -2 }}h resrantes</p>
                            </td>
                        </tr>
                        <tr>
                            <th>MERCREDI</th>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[6]->nom }}</p>{{ $resultat[6]->nom_prof }}
                                <p class="alert-danger">{{ $temp6=$temp6 -2 }}h resrantes</p>
                            </td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[7]->nom }}</p>{{ $resultat[7]->nom_prof }} <p
                                    class="alert-danger">{{ $temp7=$temp7 -2 }}h resrantes</p>
                            </td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                        </tr>
                        <tr>
                            <th>JEUDI</th>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[8]->nom }}</p>{{ $resultat[8]->nom_prof }} <p
                                    class="alert-danger">{{ $temp8=$temp8 -2 }}h resrantes</p>
                            </td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[9]->nom }}</p>{{ $resultat[9]->nom_prof }} <p
                                    class="alert-danger">{{ $temp9=$temp9 -2 }}h resrantes</p>
                            </td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">PAUSE</td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[0]->nom }}</p>{{ $resultat[0]->nom_prof }} <p
                                    class="alert-danger">{{ $temp0=$temp0 -2 }}h resrantes</p>
                            </td>
                        </tr>
                        <tr>
                            <th>VENDREDI</th>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[1]->nom }}</p>{{ $resultat[1]->nom_prof }} <p
                                    class="alert-danger">{{ $temp1=$temp1 -2 }}h resrantes</p>
                            </td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[2]->nom }}</p>{{ $resultat[2]->nom_prof }} <p
                                    class="alert-danger">{{ $temp2=$temp2 -2 }}h resrantes</p>
                            </td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">PAUSE</td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[3]->nom }}</p>{{ $resultat[3]->nom_prof }} <p
                                    class="alert-danger">{{ $temp3=$temp3 -2 }}h resrantes</p>
                            </td>
                        </tr>
                        <tr>
                            <th>SAMEDI</th>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[4]->nom }}</p>{{ $resultat[4]->nom_prof }} <p
                                    class="alert-danger">{{ $temp4=$temp4 -2 }}h resrantes</p>
                            </td>
                            <td>
                                <p style="text-transform: uppercase;">{{ $resultat[5]->nom }}</p>{{ $resultat[5]->nom_prof }} <p
                                    class="alert-danger">{{ $temp5=$temp5 -2 }}h resrantes</p>
                            </td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                            <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                        </tr>
            </table>
            1
        </div>
    </div>

                    </div>
                </div>
                <!--second emploi-->
                <div class="tab-pane" id="emploi2" role="tabpanel">
                    <div class="card-body">

                            <div class="table-responsive m-t-20">
                                    <table class="table stylish-table">
                                            <tr class="btn-info">
                                                    <th>Horaire </th>
                                                    <th>7h30-9h30 </th>
                                                    <th>9h30-11h30 </th>
                                                    <th>11h30-12h45 </th>
                                                    <th>12h45-14h45 </th>
                                                </tr>

                                                <tr>
                                                    <th>LUNDI </th>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[0]->nom }}</p>{{ $resultat[0]->nom_prof }} <p
                                                            class="alert-danger">@if ($temp0==18)  Devoir CC @else {{ $temp0=$temp0 -2 }}h resrantes @endif </p>
                                                    </td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[1]->nom }}</p>{{ $resultat[1]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp1=$temp1 -2 }}h resrantes</p>
                                                    </td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center ">PAUSE</td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[2]->nom }}</p>{{ $resultat[2]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp2=$temp2 -2 }}h resrantes</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>MARDI</th>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[3]->nom }}</p>{{ $resultat[3]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp3=$temp3 -2 }}h resrantes</p>
                                                    </td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[4]->nom }}</p>{{ $resultat[4]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp4=$temp4 -2 }}h resrantes</p>
                                                    </td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">PAUSE</td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[5]->nom }}</p>{{ $resultat[5]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp5=$temp5 -2 }}h resrantes</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>MERCREDI</th>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[6]->nom }}</p>{{ $resultat[6]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp6=$temp6 -2 }}h resrantes</p>
                                                    </td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[7]->nom }}</p>{{ $resultat[7]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp7=$temp7 -2 }}h resrantes</p>
                                                    </td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                                                </tr>
                                                <tr>
                                                    <th>JEUDI</th>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[8]->nom }}</p>{{ $resultat[8]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp8=$temp8 -2 }}h resrantes</p>
                                                    </td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[9]->nom }}</p>{{ $resultat[9]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp9=$temp9 -2 }}h resrantes</p>
                                                    </td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">PAUSE</td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[0]->nom }}</p>{{ $resultat[0]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp0=$temp0 -2 }}h resrantes</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>VENDREDI</th>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[1]->nom }}</p>{{ $resultat[1]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp1=$temp1 -2 }}h resrantes</p>
                                                    </td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[2]->nom }}</p>{{ $resultat[2]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp2=$temp2 -2 }}h resrantes</p>
                                                    </td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center">PAUSE</td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[3]->nom }}</p>{{ $resultat[3]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp3=$temp3 -2 }}h resrantes</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>SAMEDI</th>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[4]->nom }}</p>{{ $resultat[4]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp4=$temp4 -2 }}h resrantes</p>
                                                    </td>
                                                    <td>
                                                        <p style="text-transform: uppercase;">{{ $resultat[5]->nom }}</p>{{ $resultat[5]->nom_prof }} <p
                                                            class="alert-danger">{{ $temp5=$temp5 -2 }}h resrantes</p>
                                                    </td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                                                    <td style="background-color: gray; color:aliceblue; vertical-align: middle; text-align: center"></td>
                                                </tr>
                                    </table>
                                    2
                                </div>

                    </div>
                </div>

                <!--troisieme emploi-->

                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-body">


                    </div>
                </div>
            </div>

        </div>
    </div>





</div>
</div>



</body>

</html>






