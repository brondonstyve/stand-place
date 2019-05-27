<!DOCTYPE html>
<html lang="fr-fr">

<head>
        <title> {{ $etat }}</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap1.css" rel="stylesheet">

    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/newsletter.css" type="text/css" media="all">
    <link rel="stylesheet" id="rs-plugin-settings-css" href="css/settings.css" type="text/css" media="all">

    <link rel="stylesheet" id="woocommerce-layout-css" href="css/woocommerce-layout.css" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="css/woocommerce_002.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="campress-template-css" href="css/template.css" type="text/css" media="all">
    <link rel="stylesheet" id="campress-style-css" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="kc-general-css" href="css/kingcomposer.css" type="text/css" media="all">

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>

</head>

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">

        <header class="topbar is_stuck" style="position: fixed; top: 0px; width: 1349px; height: 90px; background-color: #002b46; ">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">



                <div class="left-topbar clearfix pull-left">
                    <ul class="social list-unstyled list-inline bo-sicolor">
                        <li>
                            <a href="#">
                                    <img src="/images/fb.png" class="couleur">
                                </a>

                                <a href="#">
                                        <img src="/images/goo.png" class="couleur">

                                    </a>

                                    <a href="#">
                                            <img src="/images/in.png" class="couleur">
                                        </a>

                                        <a href="#">
                                                <img src="/images/tw.png" class="couleur">
                                            </a>
                        </li>

                        <li> <span style="color:aliceblue;">contact@iaicameroun.com</span>
                        <li> <span style="color:aliceblue;">Tél. (237) 242 72 99 58</span>

                    </ul>

                </div>


                <div class= " navbar-collapse" >

                    <ul class="navbar-nav mr-auto mt-md-0"> </ul>
                    <ul class="navbar-nav my-lg-0">

                            <!-- Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown">
                                    <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user" class="profile-pic">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user"></div>
                                                <div class="u-text">
                                                    <h4>{{ $utilisateur->prenom }}</h4>
                                                    <p class="">{{ $utilisateur->email }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="profil.blade.php"><img src="images/profil.PNG" width="10%" > Mon profil</a></li>
                                        <li><a href="notes.blade.php"><img src="images/note.png" width="10%"/> Notes</a></li>
                                        <li><a href="blog.blade.php"><img src="images/blog.png" width="10%"/>Blog</a></li>

                                        <li><a href="vote.blade.php"><img src="images/vote.png" width="10%"/> Vote</a></li>
                                        <li><a href="emploi.blade.php"><img src="images/emploi.png" width="10%"/> Emploi de temps</a></li>
                                        <li><a href="discipline.blade.php"><img src="images/discipline.png" width="10%"/> Discipline</a></li>
                                        <li><a href="inbox.blade.php"><img src="images/messagerie.png" width="10%" /> Inbox</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><img src="images/setting.png" width="10%"/> Paramètre</a></li>
                                        <li><a href="deconnexion.blade.php"><img src="images/power.png" width="10%"/>Déconnexion</a></li>
                                    </ul>
                                </div>
                            </li>
                    </ul>
                </div>
            </nav>
        </header>
        <br>

        </aside>


        <aside class="left-sidebar">
            <!-- bare de menu-->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
                <div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
                    <!-- fond de profil -->
                    <br>
                    <div class="user-profile" style="background: url( @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif) no-repeat;">
                        <!--image profile  -->

                        <div class="profile-img"> <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user"> </div>
                        <!-- profil-->
                        <div class="profile-text">
                            <a href="#" class=" u-dropdown" data-toggle="dropdown" >{{ $utilisateur->prenom }}</a>
                         </div>
                    </div>



                    <nav class="sidebar-nav active">
                        <ul id="sidebarnav" class="in">
                                <ul aria-expanded="true" class="collapse in">

                                        <li ><a href="profil.blade.php"><img src="images/profil.png" width="20%"/> Mon profil</a></li>
                                        <li><a href="notes.blade.php"><img src="images/note.png" width="20%"/> Notes</a></li>
                                        <li><a href="blog.blade.php"><img src="images/blog.png" width="20%"/>Blog</a></li>

                                        <li><a href="vote.blade.php"><img src="images/vote.png" width="20%"/> Vote</a></li>
                                        <li><a href="emploi.blade.php"><img src="images/emploi.png" width="20%"/> Emploi de temps</a></li>
                                        <li><a href="discipline.blade.php"><img src="images/discipline.png" width="20%"/> Discipline</a></li>
                                        <li><a href="inbox.blade.php"><img src="images/messagerie.png" width="20%"/> Inbox</a></li>

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

        <div class="page-wrapper" style="min-height: 583px;">


            <div class="container-fluid">


                <div class="row page-titles">

                    <div class="col-md-5  align-self-center">
                        <h3 class="text-themecolor">Tableau de bord</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> Compte  </a> </li>
                            <li class="">{{ $etat }}</li>
                        </ol>
                    </div>


                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">

                                    <div class="chart-text m-r-10">
                                            <h4 class="m-b-0"><small>CLASSE</small></h4>
                                            <h6 class="m-t-0 text-info" style="text-transform: uppercase; font-size: 15px;">{{ $utilisateur->classe }}</h6>
                                        </div>

                                        <div class="spark-chart">
                                                <div id="monthchart"><canvas style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"
                                                        width="60" height="35"></canvas></div>
                                            </div>

                                <div class="chart-text m-r-10">
                                    <h4 class="m-b-0"><small>HEURES D'ABSENCES</small></h4>
                                    <h6 class="m-t-0 text-info">xxxx</h6>
                                </div>
                                <div class="spark-chart">
                                    <div id="monthchart"><canvas style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"
                                            width="60" height="35"></canvas></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h4 class="m-b-0"><small>DISCIPLINE</small></h4>
                                    <h6 class="m-t-0 text-primary"> xxxx</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
