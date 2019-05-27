<!-- menu flottant    -->


    <div class="table-responsive ">
            <div id="add-paiement" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content col-xs-9">
                    <div class="modal-title">
                        <form action="" method="POST" class="form-horizontal form-material "
                            enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="panel panel-info">
                                    <div class="panel-heading">Informations de l'etudiant</div>
                                    <div class="panel-body">


                                            <div class="form-group">
                                                    <div class="col-md-12"><strong>Niveau</strong></div>
                                                    <div class="col-md-12">
                                                            <select name="Niveau" id="" class="form-control">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-xs-12">
                                                <strong>Nom:</strong>
                                                <input type="text" name="nom" class="form-control" />
                                            </div>
                                            <div class="span1"></div>
                                            <div class="col-md-6 col-xs-12">
                                                <strong>Prenom:</strong>
                                                <input type="text" name="prenom" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="col-md-12"><strong>Sexe</strong></div>
                                                <div class="col-md-12">
                                                        <select name="sexe" id="" class="form-control">
                                                                <option value="masculin">Masculin</option>
                                                                <option value="feminin">Féminin</option>
                                                            </select>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Pays</strong></div>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="pays" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Adresse:</strong></div>
                                            <div class="col-md-12">
                                                <input type="text" name="addresse" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Ville:</strong></div>
                                            <div class="col-md-12">
                                                <input type="text" name="ville" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Numéro de téléphone:</strong></div>
                                            <div class="col-md-12"><input type="text" name="number" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12"><strong>Email:</strong></div>
                                            <div class="col-md-12"><input type="text" name="email" class="form-control" /></div>
                                        </div>

                                        <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <button type="submit" class="bouton btn-success">Envoyer</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>





                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

    </div>


<div class="table-responsive">
        <div id="add-matricule" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content col-xs-6">
                                <div class="modal-header">
                                    <h4 class="modal-title centre" id="myModalLabel">Votre Matricule</h4>
                                </div>
                                <div class="modal-body ">
                    <form action="{{ route('find_matricule_path') }}" method="POST" class="form-horizontal form-material " enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                       <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name='matricule' required="" placeholder="Matricule">
                                {{ $errors->first('Matricule',':message') }}
                            </div>
                        </div>
                        <div class="centre">
                                <input type="submit" class="btn btn-info">
                        </div>

                                </div>
                            </div>
                  </form>
                            </div>
                        </div>
                    </div>



                <!--add con -->
                    <div class="table-responsive">
                            <div id="add-con" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content col-xs-10">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title centre" id="myModalLabel">Votre Matricule</h4>
                                                    </div>
                                                    <div class="modal-body ">
                                        <form action="{{ route('connex_show') }}" method="POST" class="form-horizontal form-material " enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="email" name='email' placeholder="Email" required>
                                                    {{ $errors->first('email',':message') }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input class="form-control" type="password" name='mdp' required="" placeholder="Mot de passe">
                                                        {{ $errors->first('mdp',':message') }}
                                                    </div>
                                                </div>

                                            <div class="centre">
                                                    <input type="submit" class="btn btn-info"></div>

                                                    </div>
                                                </div>
                                      </form>
                                                </div>
                                            </div>
                                        </div>


<div  id="fond-2" class="header-mobile hidden-lg hidden-md clearfix">



                    <div class="active-mobile pull-right">

                            <div class="pull-right accept-account ">
                                    <div class="login-topbar">
                                        <a class="login btn btn-sm btn-reverse couleur" href=""  data-toggle="modal" data-target="#add-matricule" title="Login"><img src="/images/comte.png" class="mn-icon-47"> Créer Compte</a>
                                        <a class="register btn btn-sm btn-reverse couleur" href="" data-toggle="modal" data-target="#add-con" title="Sign Up"><img src="/images/connexion.png" class="mn-icon-47"> connexion</a>
                                        <a data-toggle="offcanvas" class="fa fa-bars"  title="Sign Up"><button  type="button"><img src="/images/menu.PNG" ></button></a>
                                    </div>


                                </div>

                    </div>





        <div class="left-topbar clearfix pull-left">
                <aside id="apus_socials_widget-2" class="widget widget_apus_socials_widget">
        <ul class="social list-unstyled list-inline bo-sicolor">
            <li>
                <a href="#">
                    <img src="/images/fb.png" class="couleur">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/images/in.png" class="couleur">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/images/goo.png" class="couleur">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/images/tw.png" class="couleur">
                </a>
            </li>
            <li class="couleur">
                            contact@iaicameroun.com
            </li>

            <li class="couleur">
                            Tél. (237) 242 72 99 58
            </li>


        </ul>
    </aside>
</div>


</div>
<div id="wrapper-container" class="wrapper-container" >
        <div id="apus-mobile-menu" class="apus-offcanvas hidden-lg hidden-md" >
            <div class="apus-offcanvas-body">
                <div class="apus-search-form">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" placeholder="Search" name="s" class="apus-search form-control">
                            <span class="input-group-btn"><div class="heading-right pull-right hidden-sm hidden-xs">
                                        <div class="pull-right header-setting">
                                            <div class="apus-search pull-right">
                                                <button type="button" class="button-show-search button-setting"><img src="images/recherche.PNG" class="couleur"></button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <input type="hidden" name="post_type" value="edr_course" class="post_type">
                        </form>
                    </div>

                    <h3 class="input" style="color:green"><i class="fa fa-cog" aria-hidden="true"></i> Menu</h3>
                    <hr>
                    <nav class="navbar navbar-offcanvas navbar-static" role="navigation" >
                        <div  >
                            <ul id="main-mobile-menu" class="nav navbar-nav">

                                <ul class="sub-menu">
                                        <li class="dropdown active menu-item-69 aligned-"><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Cours <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li class="menu-item-69 aligned-"><a href="coursfc.blade.php">Cours de la FC</a></li>
                                                <hr>
                                                <li class="menu-item-390 aligned-"><a href="coursfi.blade.php">Cours de la FI</a></li>
                                                <hr>
                                                <li class="menu-item-351 aligned-"><a href="coursligne.blade.php">Cours en ligne</a></li>
                                            </ul>
                                        </li>
                                </ul>
                                <hr>
                                <ul class="sub-menu" >
                                    <li id="menu-item-318" class="menu-item-318"><a href="evenement.blade.php" style="font-weight: bold; color:black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:17px;">évènement <hr></a></li>
                                    <li id="menu-item-205" class="menu-item-205"><a href="#" style="font-weight: bold; color:black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:17px;">Blog <hr></a></li>
                                    <li id="menu-item-234" class="menu-item-234"><a href="marche.blade.php" style="font-weight: bold; color:black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:17px;">marché<hr></a></li>
                                    <li id="menu-item-125" class="menu-item-125"><a href="Apropos.blade.php" style="font-weight: bold; color:black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:17px;">A propos <hr></a></li>
                                    <li id="menu-item-134" class="menu-item-134"><a href="contact.blade.php" style="font-weight: bold; color:black; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:17px;">Contact <hr></a></li>


                                </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="apus-header-mobile" class="header-mobile hidden-lg hidden-md clearfix">
                <div class="container">
                    <div class="row">


                    </div>
                </div>
            </div>
        </div>


        <!-- logo et menu flottant   -->
        <div id="apus-header-mobile" class="header-mobile hidden-lg hidden-md clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="logo logo-theme">
                                <a href="index.blade.php">
                                    <img src="/images/logo.png" alt="IAI">
                                </a>
                            </div>

                </div>
            </div>
            </div>
            </div>
        </div>



            <!--                  Reseaux sociaux               -->
            <div id="wrapper-container" class="wrapper-container">

                <div id="searchverlay"></div>
                <header id="apus-header" class="site-header apus-header header-v1 hidden-sm hidden-xs" role="banner">
                    <div id="apus-topbar" class="apus-topbar">
                        <div class="container">
                            <div class="left-topbar clearfix pull-left">
                                <aside id="apus_socials_widget-2" class="widget widget_apus_socials_widget">
                                    <ul class="social list-unstyled list-inline bo-sicolor">
                                        <li>
                                            <a href="#">
                                                <img src="/images/fb.png" class="couleur">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/images/in.png" class="couleur">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/images/goo.png" class="couleur">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/images/tw.png" class="couleur">
                                            </a>
                                        </li>
                                    </ul>
                                </aside>
                                <!--                  Contact                -->
                                <aside id="text-2" class="widget widget_text">
                                    <div class="textwidget">
                                        <div class="contact-topbar btn-sm">
                                            <span >contact@iaicameroun.com</span>
                            <span>Tél. (237) 242 72 99 58</span>
                        </div>
                </div>
                </aside>
            </div>
            <!--                 connexion et compte                -->
            <div class="pull-right accept-account">
                <div class="login-topbar">
                        <a class="login btn btn-sm btn-reverse" href=""  data-toggle="modal" data-target="#add-matricule" title="Login"><img src="/images/comte.png" class="mn-icon-47">Créer Compte</a>
                    <a class="register btn btn-sm btn-reverse" href=""  data-toggle="modal" data-target="#add-con" title="Sign Up"><img src="/images/connexion.png" class="mn-icon-47"> connexion</a>
                </div>
            </div>

        </div>


    </div>
    <!--                  logo               -->

    <div class="headertop main-sticky-header-wrapper" style="height: 120px;">
        <div class="header-main clearfix main-sticky-header">
            <div class="container">
                <div class="header-inner">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo-in-theme text-center">
                                <div class="logo logo-theme">
                                    <a href="index.blade.php">
                                        <img src="/images/logo.png" alt="IAIStandPace">
                                    </a>
                                </div>
                            </div>
                        </div>



                        <!--                  recherche               -->

                        <!--                 menu              -->
                        <div class="main-menu  pull-right ">


                            <nav data-duration="400" class="hidden-xs hidden-sm apus-megamenu slide animate navbar" role="navigation">
                                <div class="collapse navbar-collapse">
                                    <ul id="primary-menu" class="nav navbar-nav megamenu">
                                        <li class="dropdown menu-item-64 aligned-"><a href="index.blade.php" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Accueil </a></li>
                                        <li class="dropdown  menu-item-69 aligned-"><a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Cours <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li class=" menu-item-389 aligned-"><a href="coursfc.blade.php">Cours de la FC</a></li>
                                                <li class="menu-item-390 aligned-"><a href="coursfi.blade.php">Cours de la FI</a></li>
                                                <li class="menu-item-351 aligned-"><a href="coursligne.blade.php">Cours en ligne</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-318 aligned-left"><a href="evenement.blade.php">évènements</a></li>
                                        <li class="menu-item-205 aligned-left"><a href="blog.blade.php">Blog</a></li>
                                        <li class="menu-item-234 aligned-left">
                                            <a href="marche.blade.php" data-toggle="modal" data-target="#add-paiement">Paiement</a>
                                        </li>
                                        <li class="menu-item-125 aligned-left"><a href="Apropos.blade.php">A propos</a></li>
                                        <li class="menu-item-134 aligned-left"><a href="contact.blade.php">Contact</a></li>
                                        </li>
                                    </ul>
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--                 formulaire de recherche-->
    </div>



