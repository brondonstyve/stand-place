<!DOCTYPE html>
<html lang="fr-fr">

<head>
        <title> {{ $etat }}</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/bootstrap1.css" rel="stylesheet">

    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/newsletter.css" type="text/css" media="all">

    <link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="campress-template-css" href="css/template.css" type="text/css" media="all">
    <link rel="stylesheet" id="campress-style-css" href="css/style.css" type="text/css" media="all">

    <script src="js/jquery.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">

<header class="topbar" >
            <nav class="navbar top-navbar navbar-expand-md navbar-light" >
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('profil_path') }}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->

                            <ul class="navbar-nav my-lg-0">
                            <li class="nav-item dropdown">
                                    <img src="images/logo.png" width="150px" class="flag-icon flag-icon-us dark-logo" style="margin-top: -9%">
                                </li>
                            </ul>

                            <img src="" alt="homepage" class="hide">
                            <!-- Light Logo icon -->
                            <img src="" alt="homepage" class="hide">
                        </b>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"></a> </li>


                    </ul>


                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img width="25px" src="images/notif2.png" class="mdi mdi-message">
                                <!-- Si nouveau message -->
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up ">
                                <ul >
                                    <li>
                                        <div class="drop-title btn-sm">Notifications</div>
                                    </li>
                                    <li style="overflow: visible;">
                                        <div class="slimScrollDiv btn-sm" style="position: relative; overflow: visible hidden; width: auto; height: auto;">
                                            <div class="message-center" style="overflow: hidden; width: auto;">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                    <div class="mail-contnet">
                                                        <h5>Event today</h5> <span class="mail-desc">Just a reminder that
                                                        you have event</span> <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="slimScrollBar" style="background: rgb(220, 220, 220) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 192.901px;"></div>
                                            <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown  show" >
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" > <img width="25px" src="images/sms1.png" class="mdi mdi-email">
                                    <!-- si nouveau message -->
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu mailbox dropdown-menu-right scale-up btn-sm" aria-labelledby="2" >
                                    <ul>
                                        <li>
                                            <div class="drop-title">heyy brondon 4 nouveaux messages</div>
                                        </li>
                                        <li style="overflow: visible;">
                                            <div class="slimScrollDiv" style="position: relative; overflow: visible hidden; width: auto; height: 250px;">
                                                <div class="message-center" style="overflow: hidden; width: auto; height: 250px;">
                                                    <!-- Message -->
                                                    <a href="#">
                                                        <div class="user-img"> <img src="images/we.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span>
                                                        </div>
                                                        <div class="mail-contnet">
                                                            <h5>Jaki biyo</h5> <span class="mail-desc">Yo mon petit!</span>
                                                            <span class="time">9:30 AM</span>
                                                        </div>
                                                    </a>
                                                    <!-- Message -->
                                                    <a href="#">
                                                        <div class="user-img"> <img src="images/we.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span>
                                                        </div>
                                                        <div class="mail-contnet">
                                                            <h5>jaki biyo</h5> <span class="mail-desc">connecte toi mon petit cest movais</span> <span class="time">9:10 AM</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="slimScrollBar" style="background: rgb(220, 220, 220) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 183.824px;"></div>
                                                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Voir tout</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/lang.png" width="25px" class="flag-icon flag-icon-us"></a>
                                <div class="dropdown-menu dropdown-menu-right btn-sm">
                                    <a class="dropdown-item" href="#"><img src="images/anglais.png" width="30px" class="flag-icon flag-icon-in"></i> Anglais</a>
                                    <a class="dropdown-item" href="#"><img src="images/france.png" width="30px" class="flag-icon flag-icon-fr"></i> Francais</a>
                                </div>
                            </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                     <div style="margin-top: 8%">
                        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark " href="" data-toggle="dropdown">
                                        <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user" class="profile-pic">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right scale-up" >
                                        <ul class="dropdown-user btn-sm " >
                                            <li style="width: 120%">
                                                <div class="dw-user-box">
                                                    <div class="u-img"><img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user"></div>
                                                    <div class="u-text">
                                                        <h4>{{ $utilisateur->prenom }}</h4>
                                                        <p class="">{{ $utilisateur->email }}</p>
                                                    </div>
                                                </div>
                                            </li>

                                            @if ($utilisateur->type =='enseignant')


                                            <li><a href="{{ route('profil_path') }}"><img src="images/icones/compt.PNG" width="10%" > Mon profil</a></li>
                                            <li><a href="{{ route('note_path') }}"><img src="images/icones/stat.png" width="10%"/>Remplir notes</a></li>
                                            <li><a href="{{ route('appel_ct_path') }}"><img src="images/icones/appel.png" width="10%"/>Appel/cahier de texte</a></li>
                                            <li><a href="{{ route('vote_path') }}"><img src="images/icones/vote.png" width="10%"/> Vote</a></li>
                                            <li><a href="{{ route('blog_etu_path') }}"><img src="images/icones/blog.png" width="10%"/>blog</a></li>
                                            <li><a href="{{ route('generer_edt_path') }}"><img src="images/icones/edt.png" width="10%"/> Emploi de temps</a></li>
                                            <li><a href="{{ route('evaluation_path') }}"><img src="images/icones/evaluation.png" width="10%"/> Evaluation</a></li>
                                            <li><a href="{{ route('message_path') }}"><img src="images/messagerie.png" width="10%" /> Inbox</a></li>

                                            <li role="separator" class="divider"></li>
                                            <li><a href="#"><img src="images/setting.png" width="10%"/> Paramètre</a></li>
                                            <li><a href="deconnexion.blade.php"><img src="images/power.png" width="10%"/>Déconnexion</a></li>

                                            @else
                                                   @if ($utilisateur->type==null)
                                                   <li><a href="{{ route('profil_path') }}"><img src="images/icones/compt.PNG" width="10%" > Mon profil</a></li>
                                                   <li><a href="{{ route('evaluation_path') }}"><img src="images/icones/evaluation.png" width="10%"/> Evaluation</a></li>
                                                   <li><a href="{{ route('note_path') }}"><img src="images/icones/stat.png" width="10%"/> Notes</a></li>
                                                   <li><a href="{{ route('blog_etu_path') }}"><img src="images/icones/blog.png" width="10%"/>Blog</a></li>

                                                   <li><a href="{{ route('vote_path') }}"><img src="images/icones/vote.png" width="10%"/> Vote</a></li>
                                                   <li><a href="{{ route('generer_edt_path') }}"><img src="images/icones/edt.png" width="10%"/> Emploi de temps</a></li>
                                                   <li><a href="{{ route('discipline_path') }}"><img src="images/discipline.png" width="10%"/> Discipline</a></li>
                                                   <li><a href="{{ route('message_path') }}"><img src="images/sms1.png" width="10%" /> Inbox</a></li>
                                                   <li role="separator" class="divider"></li>
                                                   <li><a href="#"><img src="images/setting.png" width="10%"/> Paramètre</a></li>
                                                   <li><a href="deconnexion.blade.php"><img src="images/power.png" width="10%"/>Déconnexion</a></li>
                                                    @else
                                                    @if ($utilisateur->type=='superadmin')
                                                            <li><a href="{{ route('profil_path') }}"><img src="images/icones/compt.PNG" width="10%" > Mon profil</a></li>
                                                            <li><a href="{{ route('accueil_index_path') }}" class="btn-sm btn-success" style="color: black;">Passer en mode Administrateur</a></li>
                                                            <li><a href="{{ route('blog_etu_path') }}"><img src="images/icones/blog.png" width="10%"/>Blog</a></li>
                                                            <li><a href="{{ route('vote_path') }}"><img src="images/icones/vote.png" width="10%"/> Vote</a></li>
                                                            <li><a href="{{ route('message_path') }}"><img src="images/sms1.png" width="10%" /> Inbox</a></li>
                                                            <li role="separator" class="divider"></li>
                                                            <li><a href="#"><img src="images/setting.png" width="10%"/> Paramètre</a></li>
                                                            <li><a href="deconnexion.blade.php"><img src="images/power.png" width="10%"/>Déconnexion</a></li>

                                                    @endif
                                                   @endif
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </div>
                            </ul>
                        </div>
            </nav>
 </header>







        <aside class="left-sidebar">
            <!-- bare de menu-->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
                <div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
                    <!-- fond de profil -->
                    <div class="user-profile" style="background: url( @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif) no-repeat;">
                        <!--image profile  -->

                        <div class="profile-img"> <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user"> </div>
                        <!-- profil-->
                        <div class="profile-text">
                            <a href="#" class=" u-dropdown" data-toggle="dropdown" >{{ $utilisateur->prenom }}</a>
                         </div>
                    </div>



                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="in">
                            <ul aria-expanded="true" class="collapse in">
                                @if ($utilisateur->type=="enseignant")
                                    <li><a href="{{ route('profil_path') }}"><img src="images/icones/compt.png" width="10%"/> Mon profil</a></li>
                                    <li><a href="{{ route('note_path') }}"><img src="images/icones/stat.png" width="10%"/>Remplir notes</a></li>
                                    <li><a href="{{ route('appel_ct_path') }}"><img src="images/icones/blog.png" width="10%"/>Appel/CT</a></li>
                                    <li><a href="{{ route('generer_edt_path') }}"><img src="images/icones/edt.png" width="10%"/> Emploi de temps</a></li>
                                    <li><a href="{{ route('evaluation_path') }}"><img src="images/icones/evaluation.png" width="10%"/> Evaluation</a></li>
                                    <li><a href="{{ route('blog_etu_path') }}"><img src="images/icones/blog.png" width="10%"/>Blog</a></li>
                                    <li><a href="{{ route('vote_path') }}"><img src="images/icones/vote.png" width="10%"/> Vote</a></li>
                                    <li><a href="{{ route('message_path') }}"><img src="images/sms1.png" width="10%"/> Inbox</a></li>

                                    @else
                                         @if ($utilisateur->type==null)
                                         <li><a href="{{ route('profil_path') }}"><img src="images/icones/compt.png" width="10%"/> Mon profil</a></li>
                                         <li><a href="{{ route('evaluation_path') }}"><img src="images/icones/evaluation.png" width="10%" > Evaluation</a></li>
                                         <li><a href="{{ route('note_path') }}"><img src="images/icones/stat.png" width="10%"/> Notes</a></li>
                                         <li><a href="{{ route('generer_edt_path') }}"><img src="images/icones/edt.png" width="10%"/> Emploi de temps</a></li>
                                         <li><a href="{{ route('discipline_path') }}"><img src="images/icones/discipline.png" width="10%"/> Discipline</a></li>
                                         <li><a href="{{ route('message_path') }}"><img src="images/sms1.png" width="10%"/> Inbox</a></li>
                                         <li><a href="{{ route('blog_etu_path') }}"><img src="images/icones/blog.png" width="10%"/> Blog</a></li>
                                         <li><a href="{{ route('vote_path') }}"><img src="images/icones/vote.png" width="10%"/> Vote</a></li>
                                         <li><a href="coursfc.blade.php" ><img src="images/icones/stat.png" width="10%"/> Cours</a> </li>

                                         @else
                                         @if ($utilisateur->type=='superadmin')<li role="separator" class="divider"></li>
                                         <li><a href="{{ route('profil_path') }}"><img src="images/icones/compt.PNG" width="10%" > Mon profil</a></li>
                                         <li><a href="{{ route('blog_etu_path') }}"><img src="images/icones/blog.png" width="10%"/>Blog</a></li>
                                         <li><a href="{{ route('vote_path') }}"><img src="images/icones/vote.png" width="10%"/> Vote</a></li>
                                         <li><a href="{{ route('message_path') }}"><img src="images/sms1.png" width="10%" /> Inbox</a></li>
                                         <li role="separator" class="divider"></li>
                                         <li><a href="#"><img src="images/setting.png" width="10%"/> Paramètre</a></li>
                                         <li><a href="deconnexion.blade.php"><img src="images/power.png" width="10%"/>Déconnexion</a></li>
                                         @endif
                                         @endif
                                    @endif

                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="slimScrollBar" style="background: rgb(220, 220, 220) none repeat scroll 0% 0%; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; left: 1px; height: 284.688px;"></div>
                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; left: 1px;"></div>
            </div>

            <div class="sidebar-footer">
               <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><img src="images/setting.png" class="ti-settings" width="50%"/></a>
               <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><img src="images/gmail.png" class="mdi mdi-gmail" width="50%"/></a>
               <a href="deconnexion.blade.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><img src="images/power.png" class="mdi mdi-power" width="50%"/></a> </div>

        </aside>

<br><br><br>
        <div class="page-wrapper" style="min-height: 583px;">


            <div class="container-fluid">


                <div class="row page-titles" style=" min-width: 100%;">

                    <div class="col-md-5  align-self-center">
                        <h3 class="text-themecolor">Tableau de bord </h3>
                        <ol class="breadcrumb btn-sm">
                            <li class="breadcrumb-item"><a href="#"> Compte  </a> </li>
                            <li class="">{{ $etat }}</li>
                        </ol>
                    </div>


                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">

                                @if ($utilisateur->type=="enseignant")



                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                                @if ($utilisateur->droit=='admin')
                                                <li><a href="{{ route('accueil_index_path') }}" class="badge badge-success"> Administrer</a></li>
                                                @endif
                                    </div>
                                @else
                                     @if ($utilisateur->type==null)
                                     <div class="d-flex m-r-20 m-l-10 hidden-md-down">

                                            <div class="chart-text m-r-10">
                                                    <h4 class="m-b-0"><small>CLASSE</small></h4>
                                                    <h6 class="m-t-0 text-info btn-sm" style="text-transform: uppercase; font-size: 15px;">{{ $utilisateur->classe }}</h6>
                                                </div>

                                                <div class="spark-chart">
                                                        <div id="monthchart"><canvas style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"
                                                                width="60" height="35"></canvas></div>
                                                    </div>

                                        @if ($etat=="Discipline")
                                        <div class="chart-text m-r-10">
                                            <h4 class="m-b-0"><small>HEURES D'ABSENCES</small></h4>
                                            <h6 class="m-t-0 text-info btn-sm">{{ $remplisseur }} @if($remplisseur==0) heure @else heures @endif </h6>
                                        </div>
                                        <div class="spark-chart">
                                            <div id="monthchart"><canvas style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"
                                                    width="60" height="35"></canvas></div>
                                        </div>

                                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                            <div class="chart-text m-r-10">
                                                <h4 class="m-b-0 "><small>DISCIPLINE</small></h4>
                                                <h6 class="m-t-0 text-primary btn-sm"> @if($remplisseur<=10) bonne @else @if($remplisseur<=30) Attention @else Mauvaise @endif @endif</h6>
                                            </div>
                                        </div>
                                      @endif
                                    </div>
                                     @else
                                     @if ($utilisateur->type=='superadmin')
                                     <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                            <div class="chart-text m-r-10">
                                                    <h4 class="btn-sm btn-success" style="font-size: 20px;text-transform: uppercase">
                                                        <small>
                                                           <a href="{{ route('accueil_index_path') }}" >Passer en mode Administrateur</a>
                                                        </small>
                                                </h4>
                                            </div>
                                        </div>
                                     @endif
                                     @endif
                                @endif



                        </div>
                    </div>
                </div>

