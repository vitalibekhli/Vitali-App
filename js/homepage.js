$(document)
  .ready(function() {
    $menuItem = $('.menu a.item, .menu .link.item');
    handler = {

      activate: function() {
        if(!$(this).hasClass('dropdown')) {
          $(this)
            .addClass('active')
            .closest('.ui.menu')
            .find('.item')
              .not($(this))
              .removeClass('active')
          ;
        }
      }

    }
    $('.ui.dropdown').dropdown({on: 'hover'});

    $menuItem
    .on('click', handler.activate);
   $("a#notes").click(function(){
      $("a#page-number").empty();
      $("a#page-number").append(1);
      $("div#notes-page").removeClass('hidden');
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
  
  $("div#confirm-add-note").click(function(){
      content = $("textarea#add-note-textarea").val();
      fee = $("input#add-note-fee").val();
      direction = $("input#add-note-direction").val();
      label = $("input#add-note-label").val();

      $.getJSON('notes.php?fee='+fee+'&content='+content+'&direction='+direction+'&label='+label+'',function(result){

      });
    
  });

  $("div#add-notes").click(function(){
      $('.small.modal').modal('show');
  });

  })
;