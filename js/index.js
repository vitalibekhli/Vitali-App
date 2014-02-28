$(document).ready(function(){
  function getNotes(link){
          $.getJSON(link,function(result){
          console.log(result);
          note = result;
          for (var i = note.length - 1; i >= 0; i--) {
            noteid = note[i].id;
            date = note[i].Created_time;
            Label = note[i].Label;
            Direction = note[i].Direction;
            if(Direction == 1){
              Direction = '<i class="up icon"></i>';
              color = 'green';
            }
             if(Direction == 2){
              Direction = '<i class="down icon"></i>'
              color = 'red';
            }
             if(Direction == 3){
              Direction = '<i class="right icon"></i>';
              color = 'white';
            }
            content = note[i].Content;
            $("div#notes-content").append('<div noteid="'+noteid+'" class="column"><div id="note-body" class="ui '+color+' segment"><i id="" class="close icon right"><h3 class="ui header">'+Direction+' '+Label+'</h3></i><div class="ui clearing  divider"></div><div class="content"><p>'+content+'</p><p>'+date+'</p></div></div></div>');
             
          };
        });
      }

	
      $("div#notes-content").empty();
        link = 'pagination.php?page=1';
        getNotes(link);
       

       $("a#next-page").click(function(){
          pagenum = $("a#page-number").text();
          pagenum = (parseInt(pagenum)+1);
          $("a#page-number").empty();
          $("a#page-number").append(pagenum);
          $("div#notes-content").empty();
          link = 'pagination.php?page='+pagenum+'';
          getNotes(link);

        });

       $("a#before-page").click(function(){
          pagenum = $("a#page-number").text();
          pagenum = (parseInt(pagenum)-1);
          $("a#page-number").empty();
          $("a#page-number").append(pagenum);
          $("div#notes-content").empty();
          link = 'pagination.php?page='+pagenum+'';
          getNotes(link);

        });
   
});