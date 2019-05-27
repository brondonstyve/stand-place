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

Route::post('findMatricule', 'controllerCompte@findMatricule')->name('find_matricule_path');

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

Route::get('/vote.blade.php', 'PagesController@ouvrirVote');

Route::get('/emploi.blade.php', 'PagesController@ouvrirEmploi');

Route::get('/discipline.blade.php', 'PagesController@ouvrirDiscipline');

Route::get('/inbox.blade.php', 'PagesController@ouvrirInbox');

Route::get('/gestEmploi.blade.php', 'PagesController@ouvrirGestEmploi');

Route::get('/paiement', 'PaiementController@validerPaiement')->name('paiement_path');


