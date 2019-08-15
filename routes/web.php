<?php


//|Les routes de mon site

Route::get('/contact', 'ContactsController@create')->name('contact_path');

Route::post('/contact.blade.php','ContactsController@store')->name('contacter_path');

Route::get('/A propos', 'PagesController@ouvrirApropos')->name('apropos_path');

Route::get('/evenement', 'PagesController@ouvrirEvenement')->name('evenment_path');

Route::get('/cours de la formation initialle', 'PagesController@ouvrirCoursfc')->name('cour_for_INI_path');

Route::get('/cours de la formation continu', 'PagesController@ouvrirCoursfi')->name('cour_for_cont_path');

Route::get('/cours en ligne', 'PagesController@ouvrirCoursligne')->name('cour_ligne_path');

Route::get('/', 'PagesController@ouvrirIndex')->name('home');

Route::get('profil', 'PagesController@ouvrirConnex')->name('profil_path');

Route::get('/compReg.blade.php', 'controllerCompte@index')->name('compte_path');

Route::post('storeCompte', 'controllerCompte@store')->name('compte_store_path');

Route::post('Matricule', 'controllerCompte@findMatricule')->name('find_matricule_path');

Route::get('signin.blade.php', 'PagesController@signin')->name('signin_path');

Route::get('/compSign.blade.php', 'controllerConnexion@index')->name('sign_in_path');

Route::post('/compSign.blade.php', 'controllerConnexion@show')->name('connex_show');

Route::post('profil', 'controllerCompte@edit')->name('compte_edit_path');

Route::get('/notes.blade.php', 'PagesController@ouvrirNote');

Route::get('/deconnexion.blade.php', 'PagesController@deconnexion')->name('deconnexion_path');

Route::get('/parametre.blade.php', 'PagesController@parametre')->name('parametre_path');

Route::post('/parametre.blade.php', 'controllerCompte@editP')->name('compte_editP_path');

Route::post('/modification_avatar', 'controllerCompte@modifAvatar')->name('avatar_edit_path');

Route::post('/supprimer_avatar', 'controllerCompte@suppAvatar')->name('avatar_supp_path');

Route::get('/blog', 'PagesController@ouvrirBlog')->name('blog_path');

Route::get('vote', 'vote@membreVotes')->name('vote_path');

Route::post('/voteEnvoi', 'vote@voteEnvoi')->name('vote_envoi_path');

Route::get('/emploi.blade.php', 'PagesController@ouvrirEmploi')->name('edt_path');

Route::get('/inbox', 'PagesController@ouvrirInbox')->name('inbox_path');

Route::post('/paiement', 'PaiementController@Paiement')->name('paiement_path');

Route::post('/valider_paiement', 'PaiementController@validerPaiement')->name('valider_paiement_path');

Route::post('/paiement_suite', 'PaiementController@suite_Paiement')->name('suite_paiement_path');

Route::post('/valider_suite_paiement', 'PaiementController@validerSuitePaiement')->name('valider_suite_paiement_path');

Route::get('emploiDeTemps', 'emploiDeTempsController@genererEDT')->name('generer_edt_path');

Route::get('note', 'noteController@afficherNote')->name('note_path');

Route::post('ajouter_les_notes', 'noteController@remplirNotes')->name('remplir_note_path');

Route::post('insertion_de_notes', 'noteController@insererNotes')->name('inserer_note_path');

Route::get('appelct', 'appelctController@afficher')->name('appel_ct_path');

Route::post('appelct_liste', 'appelctController@remplirAbsence')->name('appel_ct_liste_path');

Route::post('inserer_absence', 'appelctController@insererAbsence')->name('inserer_absence_path');

Route::post('liste_absence', 'appelctController@listerAbsence')->name('liste_absence_path');

Route::get('/discipline', 'disciplineController@Discipline')->name('discipline_path');

Route::post('emploiDeTemps', 'emploiDeTempsController@disponibilite')->name('disponibilite_edt_path');

Route::post('RempliremploiDeTemps', 'emploiDeTempsController@remplir')->name('remplir_emploi_path');

Route::post('sauvegarderEDT', 'emploiDeTempsController@sauvegarder')->name('sauvegarder_edt_path');

route::get('evaluation','evaluationController@evaluation')->name('evaluation_path');

route::post('evaluation_Generation_epreuve','evaluationController@generateur')->name('generer_epreuve_path');

route::post('evaluation_Enregistreur_epreuve','evaluationController@enregistrer')->name('enregistrer_epreuve_path');

route::post('Envoi_epreuve','evaluationController@envoyerEpreuve')->name('Envoyer_epreuve_path');

route::get('supprimer_epreuve','evaluationController@supprimerEpreuve')->name('supprimer_epreuve_path');

route::get('evaluer_classe','evaluationController@evaluerClasse')->name('evaluer_classe_path');

route::post('enregistrer_evaluation','evaluationController@enregistrerEvalution')->name('enregistrer_evaluation_path');

route::get('supprimer_evaluation','evaluationController@supprimerEvaluation')->name('supprimer_evaluation_path');

route::get('modofier_evaluation','evaluationController@modifierEvaluation')->name('modifier_evaluation_path');

route::post('modofier_dure_evaluation','evaluationController@modifierDureEvaluation')->name('modifier_evaluation_dure_path');

route::get('/composer','evaluationController@composer')->name('composition_path');

route::post('/modifierRep','evaluationController@modifier')->name('modifier_reponses_path');

//test

route::get('/test','test@afficher')->name('test_afficher_path');

route::post('/inserer','test@inserer')->name('test_inserer_path');

//ens test
Route::post('/composition','evaluationController@composition')->name('compose_path');

Route::get('/Tout supprimer','evaluationController@supprimerToutEvaluation')->name('supprimer_tout_evaluation_path');

Route::get('/Tout supprime','evaluationController@supprimerToutEpreuve')->name('supprimer_tout_epreuve_path');
