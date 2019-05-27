<link href="css/paiement/ccs1.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container wrapper">
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <span class="step step_complete"> <a href="#" class="check-bc">Paiement</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">Addresse</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Vérifier vos informations</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>Nom:</strong>
                                    <input type="text" name="nom" class="form-control" value="" />
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Prénom:</strong>
                                    <input type="text" name="prenom" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-6 col-xs-12">
                                        <strong>Niveau:</strong>
                                        <input type="text" disabled class="form-control" value="" />
                                        <input type="hidden" name="niv" value="">
                                    </div>
                                    <div class="span1"></div>
                                    <div class="col-md-6 col-xs-12">
                                        <strong>Sexe:</strong>
                                        <select name="sexe" id="" class="form-control">
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Féminin</option>
                                            </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Adresse:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="adresse" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Ville:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Numéro de téléphone:</strong></div>
                                <div class="col-md-12"><input type="text" name="number" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12"><input type="text" name="email" class="form-control" value="" /></div>
                            </div>

                        </div>
                    </div>

                    <!--REVIEW ORDER END-->
                </div>



                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->

                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                    <div class="panel panel-info">
                            <div class="panel-heading">Que voulez vous payer?</div>
                            <br>
                            <div class="">
                                    <div class="">
                                        <input id="" type="checkbox" class="preinscription"> Pré-inscription
                                        <input type="text" disabled value="" style="float: right; border-radius: 3px;"/>
                                        <input type="hidden" name="pre" value="">
                                    </div>
                                </div>
                                <hr>
                            <div class="">
                                    <div class="">
                                        <input id="" type="checkbox" name="tranche1"> Première tranche
                                        <input type="text" disabled value="" style="float: right; border-radius: 3px;"/>
                                        <input type="hidden" name="t1" value="">
                                    </div>
                            </div>
                            <hr>
                            <div class="">
                                    <div class="">
                                        <input id="" type="checkbox" name="tranche2"> Deuxième tranche
                                        <input type="text" disabled value="" style="float: right; border-radius: 3px;"/>
                                        <input type="hidden" name="t2" value="">
                                    </div>
                                </div>
                                <hr>
                            <div class="">
                                    <div class="">
                                        <input id="" type="checkbox" name="tranche3"> troisième tranche
                                        <input type="text" disabled value="" style="float: right; border-radius: 3px;"/>
                                        <input type="hidden" name="t3" value="">
                                    </div>
                                </div>
                                <hr>
                                <div class="">
                                        <div class="">
                                            <input id="" type="checkbox" name="tranche3"> quatrième tranche
                                            <input type="text" disabled value="" style="float: right; border-radius: 3px;"/>
                                            <input type="hidden" name="t4" value="">
                                        </div>
                                    </div>
                                    <br>
                        <div class="panel-heading">Paiement</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>type de la carte</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">American Express</option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Numéro de la carte de crédit:</strong></div>
                                <div class="col-md-12"><input type="number" class="form-control" name="car_number" value="" required/></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Carte CVV:</strong></div>
                                <div class="col-md-12"><input type="number" class="form-control" value="" required/></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Payer en toute sécurité.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">
                                            <img src="images/pp.png" alt="">
                                            <img src="images/PP.jpg" alt="">
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Placer le paiement</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CREDIT CART PAYMENT END-->
                </div>

                </form>
            </div>
            <div class="row cart-footer">

            </div>
    </div>

