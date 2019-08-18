//------------------token
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//-----------------add matiere

$('#filiere').on('submit', function(e) {

    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    var post = $(this).attr('method');
    $.ajax({
        type: post,
        url: url,
        data: data,
        dataTy: 'json',
        success: function(data) {
            if (data == 'Cette filière existe déjà') {
                alert(data);
            } else {

                var tr = $('<tr/>', {
                    id: data.id
                });
                tr.append($('<td/>', {
                    text: data.id
                })).append($('<td/>', {
                    text: data.nom
                })).append($('<td/>', {
                    text: data.code
                })).append($('<td/>', {
                    text: data.niveau
                })).append($('<td/>', {
                    html: '<a href="#"  id="mod" data-id="' + data.id + '" data-toggle="modal" data-target="#modifier-filiere"><code class="badge badge-error" >Modifier</code></a>  ' +
                        '<a href="#"  id="supp" data-id="' + data.id + '"><code class="badge badge-danger" >Supprimer</code></a>  ' +
                        '<a href="#"  id="voir" data-id="' + data.id + '"><code class="badge badge-info" data-toggle="modal" data-target="#voir-filiere">voir</code></a>  '
                }))

                $('#filiere').hide('500');
                $('#tableFiliere #nouveau').append(tr);
                $('#nbreFiliere').val(parseInt($('#nbreFiliere').val()) + 1);
                $('#filiere').show('200');
            }
        }
    })

})


//suppression de filiere;

$(document).on('click', '#supp', function(e) {
    var id = $(this).data('id');
    var s = confirm('vouler vous vraiment supprimer cette filière??');
    var route = "/Supprimer/Filiere";
    if (s) {
        $.post(route, { id: id }, function(data) {
            $('#tableFiliere #' + id).remove();
            $('#nbreFiliere').val($('#nbreFiliere').val() - 1);
        })
    }
})


//chargement avant Modification

$(document).on('click', '#mod', function(e) {
    var id = $(this).data('id');
    $.post('/Chercheur/filiere', { id: id }, function(data) {
        $('#modifier-filiere #nom').val(data.nom);
        $('#modifier-filiere #code').val(data.code);
        $('#modifier-filiere #niveau').val(data.niveau);
        $('#modifier-filiere #ident').val(data.id);
    })
})

//mise a jour de filiere

$('#form-mod-fil').on('submit', function(e) {
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    $.post(url, data, function(data) {
        $('#form-mod-fil').trigger('reset');

        var tr = $('<tr/>', {
            id: data.id
        });
        tr.append($('<td/>', {
            text: data.id
        })).append($('<td/>', {
            text: data.nom
        })).append($('<td/>', {
            text: data.code
        })).append($('<td/>', {
            text: data.niveau
        })).append($('<td/>', {
            html: '<a href="#"  id="mod" data-id="' + data.id + '" data-toggle="modal" data-target="#modifier-filiere"><code class="badge badge-error" >Modifier</code></a>  ' +
                '<a href="#"  id="supp" data-id="' + data.id + '"><code class="badge badge-danger" >Supprimer</code></a>  ' +
                '<a href="#"  id="voir" data-id="' + data.id + '"><code class="badge badge-info" data-toggle="modal" data-target="#voir-filiere">voir</code></a>  '
        }))
        $('#tableFiliere tr#' + data.id).replaceWith(tr);
    });
})

//voir filiere

$(document).on('click', '#voir', function(e) {
    var url = '/voir/Filiere';
    var id = $(this).data('id');
    var element = '';
    $.post(url, { id: id }, function(data) {
        if (data.length == 0) {
            $('#voir-fil #num').val('Aucune classe');
            $('#voir-fil #nom').val('Aucune classe');
            $('#voir-fil #code').val('Aucune classe');
            $('#voir-fil #nbre').val('Aucune classe');
            $('#voir-fil #clas').val('Aucune classe');
        } else {
            for (var index = 0; index < data.length; index++) {
                element = element + data[index].code + data[index].niveau + data[index].code_classe + ' ; ';
            }
            $('#voir-fil #num').val('NUMERO  :  ' + data[0].id);
            $('#voir-fil #nom').val('LIBELLE  :  ' + data[0].nom);
            $('#voir-fil #code').val('CODE  :  ' + data[0].code);
            $('#voir-fil #nbre').val('Nombre de classe :  ' + data.length);
            $('#voir-fil #clas').val('Liste de classe :  ' + element);
        }

    })
})




//Classe

//Ajouter une classe

$('#classe').on('submit', function(e) {
    e.preventDefault();
    var post = $(this).attr('method');
    var url = $(this).attr('action');
    var data = $(this).serialize();
    $.ajax({
        data: data,
        type: post,
        url: url,
        dataTy: 'json',
        success: function(data) {

            if (data == 'Cette classe existe déjà') {
                alert(data);
            } else {
                var tr = $('<tr/>', {
                    id: data.id
                });
                tr.append($('<td/>', {
                    text: data.id
                })).append($('<td/>', {
                    text: data.nom
                })).append($('<td/>', {
                    text: data.niveau
                })).append($('<td/>', {
                    text: data.code_classe
                })).append($('<td/>', {
                    text: data.code_f + data.niveau + data.code_classe
                })).append($('<td/>', {
                    html: '<a href="#"  id="mod-classe" data-id="' + data.id + '" data-toggle="modal" data-target="#modifier-classe"><code class="badge badge-error" >Fusionner</code></a>  ' +
                        '<a href="#"  id="supp-classe" data-id="' + data.id + '"><code class="badge badge-danger" >Supprimer</code></a>  ' +
                        '<a href="#"  id="voir-classe" data-id="' + data.id + '"><code class="badge badge-info" >voir</code></a>  '
                }))
                $('#nouveau').append(tr);
                $('#nbreclasse').val((parseInt($('#nbreclasse').val()) + 1));

            }

        }
    })
})

//suppression de classe
$(document).on('click', '#supp-classe', function(e) {
    var id = $(this).data('id');
    var url = '/Supprimer/classe';
    var supp = confirm('la suppression de cette filiere entrenera la suppression de toute les classes qu\'elle contient!!')
    if (supp) {
        $.post(url, { id: id }, function(data) {
            $('#nbreclasse').val((parseInt($('#nbreclasse').val()) - 1));
            $('#tableclasse #' + id).remove();
        })
    }
})

//Entame de modification des classes

//chercheur

$(document).on('click', '#mod-classe', function(e) {
    var id = $(this).data('id');
    var url = '/Chercheur/classe';
    $.post(url, { id: id }, function(data) {
        $('#form-mod-classe #lib').val(data.filiere);
        $('#form-mod-classe #code').val(data.code);
        $('#form-mod-classe #nb').val(data.nbrePlace);
        $('#form-mod-classe #desc').val(data.description);
        $('#form-mod-classe #ident').val(data.id);

    })
})

//mis a jour

$('#form-mod-classe').on('submit', function(e) {
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    $.post(url, data, function(data) {
        $('#form-mod-classe').trigger('reset');

        var tr = $('<tr/>', {
            id: data.id
        });
        tr.append($('<td/>', {
            text: data.id_classe
        })).append($('<td/>', {
            text: data.filiere
        })).append($('<td/>', {
            text: data.code
        })).append($('<td/>', {
            text: data.nbPlace
        })).append($('<td/>', {
            text: data.description
        })).append($('<td/>', {
            text: data.filiere + data.code
        })).append($('<td/>', {
            html: '<a href="#"  id="mod-classe" data-id="' + data.id_classe + '" data-toggle="modal" data-target="#modifier-classe"><code class="badge badge-error" >Modifier</code></a>  ' +
                '<a href="#"  id="supp-classe" data-id="' + data.id_classe + '"><code class="badge badge-danger" >Supprimer</code></a>  ' +
                '<a href="#"  id="voir-classe" data-id="' + data.id_classe + '"><code class="badge badge-info" >voir</code></a>  '
        }))
        console.log(data);

        $('#tableclasse tr#' + data.id_classe).replaceWith(tr);


    })

})