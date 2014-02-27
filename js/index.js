$(document).ready(function(){
	
      $("div#notes-content").empty();
       $.getJSON('pagination.php?start=0&end=2',function(result){
          console.log(result);
          for (var i = result.length - 1; i >= 0; i--) {
            noteid = result[i].id;
            date = result[i].Created_time;
            Label = result[i].Label;
            
            $("div#notes-content").append('<div noteid="'+noteid+'" class="column"><div class="ui segment"><h3 class="ui header">Direction:</h3><div class="ui clearing  divider"></div><div class="content"><p>'+Label+'</p><p>'+date+'</p></div></div></div>');
          
          };
        });
   
});