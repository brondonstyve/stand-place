<!-- Debut page -->
<!-- Row-->
<div class="row">

        <!-- Column -->

        <div class="col-lg-4 col-md-4">
            <div class="card card-inverse card-primary">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="m-r-20 align-self-center">
                            <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                        </div>
                        <div>
                            <a href="#">
                                <h3 class="card-title">Evenement 1</h3>
                                <h6 class="card-subtitle">Titre</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 p-t-10 p-b-20 align-self-center">
                            <div class="usage chartist-chart" style="height:65px">
                                <div class="spark-count" style="height:65px">
                                    <h2 class="font-light text-white">Date et lieu</h2>
                                    <canvas style="display: inline-block; width: 146px; height: 70px; vertical-align: top;"
                                        width="146" height="70"></canvas>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->

        <div class="col-lg-4 col-md-4">
            <div class="card card-inverse card-success">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="m-r-20 align-self-center">
                            <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                        </div>
                        <div>
                            <a href="#">
                                <h3 class="card-title">Evènement 2</h3>
                                <h6 class="card-subtitle">Titre</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 align-self-center">

                        </div>
                        <div class="col-8 p-t-10 p-b-20 text-right">
                            <div class="spark-count" style="height:65px">
                                <h2 class="font-light text-white">Date et lieu</h2>
                                <canvas style="display: inline-block; width: 146px; height: 70px; vertical-align: top;"
                                    width="146" height="70"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-4">
            <div class="card card-size3">
                <img class="" src="images/weatherbg.jpg" alt="Card image cap">
                <div class="card-img-overlay" style="height:110px;">
                    <h3 class="card-title text-white m-b-0 dl">Absence globale </h3>
                    <p class="card-text text-white font-light">Discipline</p>
                </div>
                <div class="card-body weather-small ">
                    <div class="row ">
                        <div class="col-8 b-r align-self-center">
                            <div class="d-flex">
                                <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                                <div class="m-l-20">
                                    <h1 class="font-light text-info m-b-0">75<sup>%</sup></h1>
                                    <small>present au cour</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <h1 class="font-light m-b-0">25<sup>%</sup></h1>
                            <small>absenteiste</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->



<div class="row">
    <!-- Column -->

    <div class="col-lg-8 col-md-7 ">

        <div class="card color-md card-size">
            <div class="card-body">

                <div class="row">
                    <div class="d-flex flex-wrap">


                        <div class="ml-auto">
                            <ul class="list-inline">
                                <li>
                                    <a href="" class="text-muted text-success">Annones</a>
                                </li>
                                <li>
                                    <a href="" class="text-muted  text-info">Communiqués</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="background-color: aliceblue">

                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-6">
        <div class="card card-size color-md1">
            <div class="card-body">
                <h3 class="card-title">Résultat du dernier vote</h3>
                <h6 class="text-muted  text-info">Le Vainqueur</h6>
                <div id="visitor" style="height: 267px; width: 100%; max-height: 290px; position: relative;" class="c3">

                        <div class="table-responsive m-t-20">
                            @if (sizeOf($liste)==0)
                            <h3 class="card-title">Aucun resultat disponible pour le moment</h3>
                            @else

                            <table class="table stylish-table">
                                    <tbody>
                                 <tr class="">
                                    <td><span class="round"><img src="images/2.jpg" alt="user" width="50"></span><td>
                                        <h6> {{ $liste[0]->nom_prof }} </h6><small class="text-muted">{{ $liste[0]->nom }}  </small></td>
                                    <td> {{ $liste[0]->vote }} voix <br><div class="progress-bar bg-success" role="progressbar" style="width: {{ $liste[0]->vote }}%; height:25px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> </td>

                                 </tr>
                                    </tbody>
                             </table>

                            @endif

                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card blog-widget card-size1 color-md1">
            <div class="card-body">
                <div class="blog-image"><img src="images/img1.jpg" alt="img" class="img-responsive"></div>
                <h3>Un Sujet Concernant Le Blog</h3>
                <label class="label label-rounded label-success">Technologie</label>
                <p class="m-t-20 m-b-20">
                    blablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                </p>
                <div class="d-flex">
                    <div class="read"><a href="" class="link font-medium">Lire plus</a></div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card card-size2 color-md3">
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <div>
                        <h3 class="card-title">Notre Newsletter</h3>
                        <h6 class="card-subtitle">Vue d'ensemble de la newsletter</h6>
                    </div>
                    <div class="ml-auto align-self-center">
                        <ul class="list-inline m-b-0">
                            <li>
                                <h6 class="text-muted text-info"><a href="">Vue Complète</a>
                                </h6>
                            </li>
                            <li>
                                <h6 class="text-muted text-info"><a href="">m'abonner</a>
                                </h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="campaign ct-charts">


                </div>
                <div class="row text-center">
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h1 class="text-muted text-success">50</h1><small>Total Recu</small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h1 class="text-muted text-success">7</h1><small>Mail lus</small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h1 class="text-muted text-success">3</h1><small>Mail aimés</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <!-- Column -->
        <div class="card">
            <img class="card-img-top" src="images/profile-bg.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img">
                    <nav class="">
                        <ul class="navbar-nav mr-auto mt-md-0 ">

                            <li class="nav-item dropdown mega-dropdown show">
                                <a href="" class="btn carousel-item active" data-toggle="modal"
                                    data-target="#add-contact">
                                    <img src=" @if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif"
                                        alt="user">
                                </a>

                            </li>
                        </ul>

                    </nav>
                </div>

                <div class=" ">
                        <a href=""  class="btn btn-danger centre " data-toggle="modal"  data-target="#valid-supp">Supprimer mon avatar</a>

                    </div>

                <div class="row text-center m-t-5">
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="text-muted text-success">xx</h3><small>Articles</small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="text-muted text-success">23</h3><small>Followers</small>
                    </div>
                    <div class="col-lg-4 col-md-4 m-t-20">
                        <h3 class="text-muted text-success">xx</h3><small>Groupes</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="card">
            <div class="card-body bg-info">
                <h4 class="text-white card-title">Mes Contacts</h4>
                <h6 class="card-subtitle text-white m-b-0 op-5">Liste de mes contacts</h6>
            </div>
            <div class="card-body">
                <div class="message-box contact-box">
                    <h2 class="add-ct-btn"><button type="button"
                            class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button>
                    </h2>
                    <div class="message-widget contact-widget">
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="images/9.jpg" alt="user" class="img-circle">
                                <span class="profile-status online pull-right"></span>
                            </div>
                            <div class="mail-contnet">
                                <h5>Brondon</h5> <span class="mail-desc">Brondonstyve@gmail.com</span>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Activité</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Paramètres</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            <div class="sl-item">


                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="images/1.jpg" alt="user" class="img-circle">
                                </div>
                                <div class="sl-right">
                                    <div> <a href="#" class="link">{{ $utilisateur->prenom }}</a> <span class="sl-date">
                                            en ligne </span>
                                        <div class="m-t-20 row">
                                            <div class="col-md-3 col-xs-12"><img src="images/img1.jpg" alt="user"
                                                    class="img-responsive radius"></div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> Titr du blog si existant </p>
                                                <a href="#" class="btn btn-success">
                                                    lire tout l'article</a>
                                            </div>
                                        </div>
                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)"
                                                class="link m-r-10">2 commentaires</a> <a href="javascript:void(0)"
                                                class="link m-r-10"><i class="fa fa-heart text-danger"></i>
                                                5 j'aime</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="images/9.jpg" alt="user" class="img-circle">
                                </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">{{ $utilisateur->prenom }}</a> <span
                                            class="sl-date">il y'a 5 min</span>
                                        <p class="m-t-10">
                                            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-left"> <img src="images/9.jpg" alt="user" class="img-circle">
                                </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">{{ $utilisateur->prenom }}</a> <span
                                            class="sl-date">il y'a 5 min</span>
                                        <p class="m-t-10">
                                            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 b-r"> <strong>prenom</strong>
                                <p class="text-muted">{{ $utilisateur->prenom }}</p>
                            </div>
                            <div class="col-md-2 col-xs-6 b-r"> <strong>Numéro</strong>
                                <p class="text-muted">{{ $utilisateur->téléphone }}</p>
                            </div>
                            <div class="col-md-5 col-xs-6 b-r"> <strong>Email</strong>
                                <p class="text-muted">{{ $utilisateur->email }}</p>
                            </div>
                            <div class="col-md-2 col-xs-6"> <strong>Vile</strong>
                                <p class="text-muted">{{ $utilisateur->ville }}</p>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-30">
                            je suis blelelelelelelleleleeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
                        </p>
                        <p>
                            blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                        </p>
                        <p>blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                        </p>
                        <h4 class="font-medium m-t-30">Competences</h4>
                        <hr>
                        <h5 class="m-t-30">Bases de données <span class="pull-right">80%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100" style="width:80%; height:6px;">
                            </div>
                        </div>
                        <h5 class="m-t-30">Oracle <span class="pull-right">90%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100" style="width:90%; height:6px;">
                            </div>
                        </div>
                        <h5 class="m-t-30">Java <span class="pull-right">50%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100" style="width:50%; height:6px;">
                            </div>
                        </div>
                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" style="width:70%; height:6px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-body">
                        <form action=" {{ route('compte_edit_path') }} " method="POST"
                            class="form-horizontal form-material">

                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-12">prenom</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $utilisateur->prenom }}" name="prenom"
                                        class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" value="{{ $utilisateur->email }}"
                                        class="form-control form-control-line" name="email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">mot de Passe</label>
                                <div class="col-md-12">
                                    <input type="password" placeholder="************"
                                        class="form-control form-control-line" name="mdp">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">No téléphone</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ $utilisateur->téléphone }}"
                                        class="form-control form-control-line" name="numero">
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Selectioner la ville</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" name="ville">
                                <option selected="selected">{{ $utilisateur->ville }}</option>
                                <option>Yaoundé</option>
                                <option>Bafoussam</option>
                                <option>Douala</option>
                                <option>Garoua</option>
                                <option>Gaoundéré</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-success" value="Modifier son profil">
                            </div>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>


    <div class="table-responsive ">
            <div id="add-contact" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content col-xs-9">
                        <div class="modal-header ">
                        <h4 class="modal-title" id="myModalLabel">Modifier l'avatar du compte</h4>
                    </div>
                    <div class="modal-title">
                        <form action="/modification_avatar" method="POST" class="form-horizontal form-material " enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group" style="text-align: center;">
                                <div class="col-md-12 m-b-20 carousel-inner">
                                    <div class="fileupload bouton btn-danger btn-rounded waves-effect carousel-inner" ><span >Importer l'image</span>
                                        <input type="file" class="upload" id="imgInp" accept="image/*" name="avatar">
                                    </div>
                                </div>
                            </div>

                            <div class=" slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container"><img id="blah" width="460" height="360" src="@if ($utilisateur->photo==null) images/profilDef.jpg @else  /storage/avatars/{{ $utilisateur->photo }}  @endif"
                                                alt="Choissez une image"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="fileupload btn btn-rounded waves-effect waves-light carousel-inner">
                                <input type="submit" class="bouton btn-info" value="Modifier">
                            </div>


                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

    </div>

    <div class="table-responsive ">
            <div id="valid-supp" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content col-xs-12">
                        <div class="modal-header ">
                            <h4 class="modal-title" id="myModalLabel">Voulez vous vraiment supprimer votre profil?</h4>
                        </div>
                        <div class="modal-body ">
                            <form action="{{ route('avatar_supp_path') }}" method="POST" class="form-horizontal form-material "
                                enctype="multipart/form-data">
                                {{ csrf_field() }}



                                <div class="">
                                    <input type="submit" class="btn btn-danger " value="Supprimer">
                                </div>


                        </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>

        </div>






</div>
</div>





</div>
</div>


<script type='text/javascript'>
    //<![CDATA[
$(window).load(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
});//]]>

</script>






</body>

</html>
