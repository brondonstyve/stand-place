<?php

use App\Mail\ContactMessageCreated;
/*
|Les routes de mon site
 */

Route::get('/index.blade.php', 'PagesController@ouvrirIndex');

Route::get('/contact.blade.php',
[
    'as'=>'contact_create',
    'uses'=>'ContactsController@create',
]);

Route::post('/contact.blade.php',
[
    'as'=>'contact_store',
    'uses'=>'ContactsController@store',
]);

route::get('/text',function(){
    return new ContactMessageCreated($nom,$email,$text);
});


Route::get('/Apropos.blade.php', 'PagesController@ouvrirApropos');

Route::get('/evenement.blade.php', 'PagesController@ouvrirEvenement');

Route::get('/coursfc.blade.php', 'PagesController@ouvrirCoursfc');

Route::get('/coursfi.blade.php', 'PagesController@ouvrirCoursfi');

Route::get('/coursligne.blade.php', 'PagesController@ouvrirCoursligne');

Route::get('/', 'PagesController@ouvrirIndex')->name('home');

Route::get('/profil.blade.php', 'PagesController@ouvrirConnex')->name('profil_path');

Route::get('/compReg.blade.php', 'controllerCompte@index')->name('compte_path');

Route::post('storeCompte', 'controllerCompte@store')->name('compte_store_path');

Route::post('Matricule', 'controllerCompte@findMatricule')->name('find_matricule_path');

Route::get('signin.blade.php', 'PagesController@signin')->name('signin_path');


Route::get('/compSign.blade.php', 'controllerConnexion@index')->name('sign_in_path');

Route::post('/compSign.blade.php', 'controllerConnexion@show')->name('connex_show');

Route::post('/profil.blade.php', 'controllerCompte@edit')->name('compte_edit_path');

Route::get('/notes.blade.php', 'PagesController@ouvrirNote');

Route::get('/deconnexion.blade.php', 'PagesController@deconnexion')->name('deconnexion_path');

Route::get('/parametre.blade.php', 'PagesController@parametre')->name('parametre_path');

Route::post('/parametre.blade.php', 'controllerCompte@editP')->name('compte_editP_path');

Route::post('/modification_avatar', 'controllerCompte@modifAvatar')->name('avatar_edit_path');

Route::post('/supprimer_avatar', 'controllerCompte@suppAvatar')->name('avatar_supp_path');

Route::get('/blog.blade.php', 'PagesController@ouvrirBlog');

Route::get('test.blade.php', 'PagesController@test');

Route::get('/vote', 'vote@membreVotes')->name('vote_path');

Route::post('/vote', 'vote@membreVotes')->name('vote_path');

Route::post('/voteEnvoi', 'vote@voteEnvoi')->name('vote_envoi_path');

Route::get('/emploi.blade.php', 'PagesController@ouvrirEmploi')->name('edt_path');

Route::get('/inbox.blade.php', 'PagesController@ouvrirInbox');

Route::get('/gestEmploi.blade.php', 'PagesController@ouvrirGestEmploi');

Route::post('/paiement', 'PaiementController@Paiement')->name('paiement_path');

Route::post('/valider_paiement', 'PaiementController@validerPaiement')->name('valider_paiement_path');

Route::post('/paiement_suite', 'PaiementController@suite_Paiement')->name('suite_paiement_path');

Route::post('/valider_suite_paiement', 'PaiementController@validerSuitePaiement')->name('valider_suite_paiement_path');

Route::get('emploiDeTemps', 'emploiDeTempsController@genererEDT')->name('generer_edt_path');

Route::get('note', 'noteController@afficherNote')->name('note_path');

Route::post('ajouter_les_notes', 'noteController@remplirNotes')->name('remplir_note_path');

Route::post('insertion_de_notes', 'noteController@insererNotes')->name('inserer_note_path');

Route::get('appel/ct', 'appel_ctController@afficher')->name('appel_ct_path');

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
