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
   })

  })
;