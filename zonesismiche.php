
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <title>Zone Sismiche provincia di Roma</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="../js/jquery-1.8.3.min.js"></script>
	<script src="../js/jquery-ui.js"></script>
<script>
 $(document).ready(function(){

$(".comune").click(function() {
alert($("#Affile").text());
$.ajax({
type: "POST",
data: ({ comune: $("#Affile").text()}),
url: "xml.php",
error: function() {
                $("#errors").html('Error submiting the form.');
            },
success: function(response){
$("#output").html(response);
}
});
alert('fatto');
});    
 
 $("#selezione").change(function() {
//alert($("#comune").val());
$.ajax({
type: "POST",
data: ({ comune: $("#comune").val()}),
url: "xml.php",
error: function() {
                $("#errors").html('Error submiting the form.');
            },
success: function(response){
$("#output").html(response);
}
});
//alert('fatto');
});

$("#selezione2").change(function() {
//alert($("#classif").val());
$.ajax({
type: "POST",
data: ({ classif: $("#classif").val()}),
url: "class.php",
error: function() {
                $("#errors").html('Error submiting the form.');
            },
success: function(response){
$("#output").html(response);
}
});
//alert('fatto');
});

});
 

</script>


 </head>
 <body>
     <center>
     <div id="wrapper" >
         <div id="header" >
             <div ID="left">
  
          <div ID='selezione'>
      <form>
          Scelta comune:
           <?PHP include 'sel_comuni.php'; ?>  
       </form> </div>
         </div>
        <div ID="right">
  <div ID='selezione2'>
      <form>
         Suddivisione per classificazione sismica:
         <select id="classif" >
             <option value='CategoriaDM1984' >DM1984 
<option value='ZonaSismicaPCM3274_03' >PCM3274_03 
<option value='ZonaSismicaClassificazioneRegionale2003' >ClassificazioneRegionale 2003 
<option value='ZonaSismicaClassificazioneRegionale2006' >ClassificazioneRegionale 2006 
         </select> 
  
      </form> </div>
         </div>
  
  </div>
  
   <div ID='main'>
    <div ID='output'>
  
  </div> 
  </div>         
 
 </div>
  

     </center>
 </body>
 </html>
 
