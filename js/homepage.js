$(document)
  .ready(function() {

    $('div#notes-page').on('click', '.delete-note', function () { 
        initElement = this;
        json = mapDOM(initElement, true);
        json = jQuery.parseJSON(json);
        noteid = json.attributes.noteid;
        
      })

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
      
      getNotes('pagination.php?page=1');
     

        });


       $("a#next-page").click(function(){
          pagenum = $("a#page-number").text();
          pagenum = (parseInt(pagenum)+1);
          $("a#page-number").empty();
          $("a#page-number").append(pagenum);
          $("div#notes-content").empty();
          pagelink = 'pagination.php?page='+pagenum+'';

          getNotes(pagelink);

        });

       $("a#before-page").click(function(){
          pagenum = $("a#page-number").text();
          pagenum = (parseInt(pagenum)-1);
          $("a#page-number").empty();
          $("a#page-number").append(pagenum);
          $("div#notes-content").empty();
          pagelink = 'pagination.php?page='+pagenum+'';

         getNotes(pagelink);


   });
  
  $("div#confirm-add-note").click(function(){
      content = $("textarea#add-note-textarea").val();
      fee = $("input#add-note-fee").val();
      direction = $("input#add-note-direction").val();
      label = $("input#add-note-label").val();

      $.getJSON('notes.php?fee='+fee+'&content='+content+'&direction='+direction+'&label='+label+'',function(result){

      });
       $('a#notes').trigger('click');
    
  });

  $("div#add-notes").click(function(){
      $('.small.modal').modal('show');
  });

  })
;