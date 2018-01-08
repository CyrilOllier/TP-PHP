<?php
//index.php
?>
<article>
<!DOCTYPE html>
<html>
 <head>
  <title>Importer des données XML dans une table Mysql avec Ajax PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>
 <body>
  <br />
  <div class="container">
   <div class="row">
    <h2 align="center">Importer des données XML dans une table Mysql avec Ajax PHP</h2>
    <br />
    <div class="col-md-9" style="margin:0 auto; float:none;">
     <span id="message"></span>
     <form method="post" id="import_form" enctype="multipart/form-data">
      <div class="form-group">
       <label>Selectionner le fichier XML </label>
       <input type="file" name="file" id="file" />
      </div>
      <br />
      <div class="form-group">
       <input type="submit" name="submit" id="submit" class="btn btn-info" value="Importer" />
      </div>
     </form>
	 <br /><h2><u>IMPORTANT</u></h2>
	 <p><i>Pensé a modifier le fichier import.php avec vos données.<br />ligne 15 à 30 pour la requete SQL<br />et de 40 a 50 pour la création de l'array.<br /> Il y a aussi plusieurs page import.php qui sont adapté a different type d'import:<blockquote> xml simple 1 table<br />xml pour 2 table<br />xml pour 2 table plus une de jointure. </i>
    </div>
   </div>
  </div>
 </body>
</html>
</article>
<script>
$(document).ready(function(){
 $('#import_form').on('submit', function(event){
  event.preventDefault();

  $.ajax({
   url:"import3.php",
   method:"POST",
   data: new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   beforeSend:function(){
    $('#submit').attr('disabled','disabled'),
    $('#submit').val('Importing...');
   },
   success:function(data)
   {
    $('#message').html(data);
    $('#import_form')[0].reset();
    $('#submit').attr('disabled', false);
    $('#submit').val('Import');
   }
  })

  setInterval(function(){
   $('#message').html('');
  }, 5000);

 });
});
</script>
