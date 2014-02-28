$(document).ready(function(){
	
      $("div#notes-content").empty();
       $.getJSON('pagination.php?page=1',function(result){
          console.log(result);
          note = result;
          for (var i = note.length - 1; i >= 0; i--) {
            noteid = note[i].id;
            date = note[i].Created_time;
            Label = note[i].Label;
            
            $("div#notes-content").append('<div noteid="'+noteid+'" class="column"><div class="ui segment"><h3 class="ui header">Direction:</h3><div class="ui clearing  divider"></div><div class="content"><p>'+Label+'</p><p>'+date+'</p></div></div></div>');
            
          };
        });

       $("a#next-page").click(function(){
          pagenum = $("a#page-number").text();
          pagenum = (parseInt(pagenum)+1);
          $("a#page-number").empty();
          $("a#page-number").append(pagenum);
          $("div#notes-content").empty();
          $.getJSON('pagination.php?page='+pagenum+'',function(result){
          console.log(result);
          note = result;
          for (var i = note.length - 1; i >= 0; i--) {
            noteid = note[i].id;
            date = note[i].Created_time;
            Label = note[i].Label;
            
            $("div#notes-content").append('<div noteid="'+noteid+'" class="column"><div class="ui segment"><h3 class="ui header">Direction:</h3><div class="ui clearing  divider"></div><div class="content"><p>'+Label+'</p><p>'+date+'</p></div></div></div>');
            
          };
        });

        });

       $("a#before-page").click(function(){
          pagenum = $("a#page-number").text();
          pagenum = (parseInt(pagenum)-1);
          $("a#page-number").empty();
          $("a#page-number").append(pagenum);
          $("div#notes-content").empty();
          $.getJSON('pagination.php?page='+pagenum+'',function(result){
          console.log(result);
          note = result;
          for (var i = note.length - 1; i >= 0; i--) {
            noteid = note[i].id;
            date = note[i].Created_time;
            Label = note[i].Label;
            
            $("div#notes-content").append('<div noteid="'+noteid+'" class="column"><div class="ui segment"><h3 class="ui header">Direction:</h3><div class="ui clearing  divider"></div><div class="content"><p>'+Label+'</p><p>'+date+'</p></div></div></div>');
            
          };
        });

        });
   
});