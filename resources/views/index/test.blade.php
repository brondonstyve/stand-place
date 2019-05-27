<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title> - jsFiddle demo</title>


  <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>



  <style type='text/css'>
  </style>



<script type='text/javascript'>//<![CDATA[
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


</head>
<body>
      <form id="form1" runat="server">
        <input type='file' id="imgInp" />
        <img id="blah" width="50px" height="50px" src="#" alt="your image" />
    </form>

</body>


</html>



<img id="blah" width="50px" height="50px" src="#" alt="your image" />

<div class="form-group">
   <div class="col-md-12 m-b-20">
        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
            <span><i class="ion-upload m-r-5"></i>Importer une autre image</span>
            <input type="file" class="upload" accept="image/*" id="imgInp" name="avatar"/> </div>
    </div>
</div>

            <div  class=" slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="container"> <img class="d-block " src="images/9.jpg" alt="your image"  alt="First slide"></div>
                    </div>
                </div>


            </div>



            <div class="modal-body">
                    <form action="/modification_avatar" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                           <div class="col-md-12 m-b-20">
                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Importer une autre image</span>
                                    <input type="file" class="upload" accept="image/*" name="avatar"> </div>
                            </div>
                        </div>

                                    <div  class=" slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="container"> <img class="d-block " src=""  alt="First slide"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-info waves-effect" value="Enregistrer">
                                    </div>


                </div>
