<!DOCTYPE html>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="js/jQuery.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App css -->
    <link href="css/admin/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/admin/style.css" rel="stylesheet" type="text/css">
    <link href="css/admin/metismenu.css" rel="stylesheet" type="text/css">
    <title>Administration</title>
</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{ route('accueil_index_path') }}" class="logo">
                    <span>
                                    <img src="images/admin/logo.png" alt="" height="55" >
                                </span>
                    <i>
                            <img src="images/admin/logo.png" alt="" height="28">
                        </i>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="images/admin/notif.png" class="fi-briefcase" width="30px">
                            <span class="badge badge-pink noti-icon-badge">44</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- menu-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">55</span>Notifications</h5>
                            </div>

                            <!-- menu-->

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Brondon S. Hey admin c'est comment?<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- tout-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    Voir tout
                                </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- menu-->
                            <div class="dropdown-item noti-title">
                                <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif" alt="user" class="rounded-circle" style="max-width: 100%">
                                <h5 class="text-overflow"><small>bienvenue ! admin</small> </h5>
                            </div>

                            <!-- menu-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- menu-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i> <span>paramètres</span>
                            </a>

                            <!-- menu-->
                            <a href="{{ route('profil_path') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-open"></i> <span>verouiller</span>
                            </a>

                            <!-- menu-->
                            <a href="deconnexion.blade.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-power"></i> <span>Déconnexion</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                                <img src="images/admin/menu-noir.png" class="fi-briefcase" style="max-width: 30%">
                            </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="rechercher..." class="form-control">
                            <a href="">
                                <img src="images/admin/rechercher.png" class="fi-briefcase" style="max-width: 30%">
                            </a>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== debut du menu de bord ========== -->
        <div class="left side-menu">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 554px;">
                <div class="slimscroll-menu" id="remove-scroll" style="overflow: hidden; width: auto; height: 554px;">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="active">
                        <!-- Left Menu Start -->
                        <ul class="metismenu in" id="side-menu">
                            <li class="menu-title">Navigation</li>

                            <li class="">
                                <a href="javascript: void(0);">
                                    <img src="images/admin/stat.png" class="fi-briefcase" style="max-width: 10%">
                                    <span class="badge badge-success pull-right">3</span><span> Statistiques </span>
                                    <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="https://coderthemes.com/adminox/default/icons-materialdesign.html">étudiants</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/icons-materialdesign.html">professeurs</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/icons-materialdesign.html">notes</a></li>

                                </ul>
                            </li>


                            <li class="">
                                <a href="javascript: void(0);">
                                    <img src="images/admin/compt.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Comptes </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('matricule_path') }}">Genérer un matricule</a></li>
                                        <li>
                                                <a href="javascript: void(0);">
                                                    <img src="images/admin/privileges.png" class="fi-briefcase" style="max-width: 10%">
                                                    <span> Gerer les comptes </span><b class="caret"></b>
                                                </a>
                                                <ul class="nav-second-level collapse" aria-expanded="false">
                                                        <li><a href="{{ route('gerer_compte_path') }}">Compte professionel</a></li>

                                                </ul>
                                            </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/filiere.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Filière/Classe </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('afficher_filiere_path') }}">Gérer les Filières</a></li>
                                    <li><a href="{{ route('afficher_classe_path') }}">Gérer les classes</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/etudiant.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Etudiant </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('etudiants_path') }}">Gérer les étudiants</a></li>
                                    <li><a href="{{ route('etudiants_path') }}">Transfert d'étudiant</a></li>
                                </ul>
                            </li>

                            <li id="caisse">
                                <a href="javascript: void(0);">
                                    <img src="images/admin/caisse.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Caisse </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="https://coderthemes.com/adminox/default/chart-morris.html" data-toggle="modal" data-target="#paie-ens">Payer un enseignant</a></li>
                                    <li>
                                        <a href="javascript: void(0);">
                                        <img src="images/admin/caisse.png" class="fi-briefcase" style="max-width: 10%">
                                        <span> Paiement </span> <b class="caret"></b>
                                    </a>
                                        <ul class="nav-second-level collapse" aria-expanded="false">
                                                <li><a href="com/adminox/default/chart-echart.html" data-toggle="modal" data-target="#paiement-ancien">Ancien étudiant</a></li>
                                                <li><a href="com/adminox/default/chart-echart.html" data-toggle="modal" data-target="#paiement-nouveau" id="new-etudiant">Nouvel étudiant</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('solvabilite_path') }}">Solvabilité</a></li>
                                    <li><a href="{{ route('penalite_path') }}">Pénalités</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/chart-echart.html">Moratoires</a></li>
                                    <li><a href="com/adminox/default/chart-echart.html" data-toggle="modal" data-target="#fixer-les-taux" id="new-taux" >Fixer les taux/Dates</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/edt.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Emplois de temps </span><span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('emploi_admin_path') }}">Gérer les EDT</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/evaluation.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Evaluations </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('progrommer_eval_admin_path') }}">Programmer</a></li>
                                    <li><a href="{{ route('progrommer_eval_admin_path') }}">Suspendre</a></li>
                                </ul>
                            </li>

                            <li>
                                    <a href="javascript: void(0);">
                                        <img src="images/admin/evaluation.png" class="fi-briefcase" style="max-width: 10%">
                                        <span> Matiéres </span> <span class="menu-arrow"><b class="caret"></b></span>
                                    </a>
                                    <ul class="nav-second-level collapse" aria-expanded="false">
                                        <li><a href="{{ route('matiere_path') }}">Gérer matiéres</a></li>
                                    </ul>
                                </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/discipline.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Discipline </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('discipline_admin_path') }}">Ajouter un C/D</a></li>
                                    <li><a href="{{ route('voir_conseil_discipline_admin_path') }}">Voir Date / Juger CD</a></li>
                                    <li><a href="{{ route('voir_conseil_discipline_juge_admin_path') }}">Décision des C/D</a></li>
                                    <li><a href="{{ route('discipline_admin_path') }}">Casier Judiciaire</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/vote.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Vote </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="#" data-toggle="modal" data-target="#vote">Lancer un vote</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/page-login.html">Suspendre le vote</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/page-login.html">Réinitialiser le vote</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);">
                                    <img src="images/admin/blog.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Blog </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="{{ route('blog_path') }}">Gérer les sujets</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/contact.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Contact/Adresses </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="https://coderthemes.com/adminox/default/email-inbox.html">Enregistrer les conctacts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/annee.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Année accademique </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="https://coderthemes.com/adminox/default/email-inbox.html">Cloturer une A/A</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/email-inbox.html">Données d'un A/A</a></li>

                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <img src="images/admin/trace.png" class="fi-briefcase" style="max-width: 10%">
                                    <span> Traces </span> <span class="menu-arrow"><b class="caret"></b></span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false">
                                    <li><a href="https://coderthemes.com/adminox/default/email-inbox.html">....</a></li>
                                    <li><a href="https://coderthemes.com/adminox/default/email-inbox.html">.....</a></li>

                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!--  -->
                    <div class="clearfix"></div>

                </div>
            </div>

        </div>
        <!-- fin entete menu bar -->

        <div class="content-page">
                <!-- contenu -->
                <div class="content">
                    <div class="container-fluid">

@include('administration/layout/paiement')

