<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/jQuery.js"></script>
    <title>test</title>
</head>
<body>
    <table align="center" border="1" style="font-size: 20px">
        <thead>

        </thead>
        <tbody id="tbody">
            @foreach ($collection as $item)
            <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $item->classe }}</td>
                    <td>
                        <a href="">edit</a>
                        <a href="">suprimer</a>
                        <a href="">modifier</a>
                    </td>
            </tr>

            @endforeach

        </tbody>
    </table>


    <table>
        <form action="{{ route('test_inserer_path') }}" method="post" id="form-insert">
            <tr>
                <input type="text" name="nom" id="" size="20px" placeholder="matiere">
                <input type="text" name="classe" id="" size="20px" placeholder="classe">
            </tr>
            <tr>
                <td>
                    <input type="" value="envoyer">
                </td>
            </tr>
        </form>
    </table>










</body>
<script type="text/javascript ">


function decompte(zetime) {
                if (zetime>0) {
                    var minutes = Math.floor(((zetime / 3600) - Math.floor(zetime / 3600)) * 60);
                    var secondes = zetime - ((Math.floor(zetime / 60)) * 60);
                            minutes = ((minutes < 10) ? "0" : "") + minutes;
                            secondes = ((secondes < 10) ? "0" : "") + secondes;
                    document.write("00:" + minutes + ":" + secondes + " restants");
                    var restant = zetime - 1;
                    setTimeout("decompte(" + restant + ")", 1000);
                }
                else {
                            // temps écoulé
                }
            }
    //------------------token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //-----------------add matiere

    $('#form-insert').on('submit',function(e) {
      e.preventDefault();
      var data = $(this).serialize();
      var url  = $(this).attr('action');
      var post = $(this).attr('method');
      $.ajax({
          type : post,
          url  : url,
          data : data,
          dataTy:'json',
          success:function(data){
              var newLine= $('<tr\>');
                newLine.append($("<td\>",{
                    text:data.id
                })).append($("<td\>",{
                    text:data.nom
                })).append($("<td\>",{
                    text:data.classe
                })).append($("<td\>",{
                    html:'<a href="">edit</a> '+
                    '<a href="">suprimer</a> '+
                    '<a href="">modifier</a>'
                }))

                $('#tbody').append(newLine);
          }
      })

    })

    </script>
</html>


