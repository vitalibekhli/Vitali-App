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
            $("div#notes-content").append('<div noteid="'+noteid+'" class="column"><div id="note-body" class="ui '+color+' segment"><i noteid="'+noteid+'" class="delete-note close icon right"><h3 class="ui header">'+Direction+' '+Label+'</h3></i><div class="ui clearing  divider"></div><div class="content"><p>'+content+'</p><p>'+date+'</p></div></div></div>');
             
          };
        });
      }

function deleteNotes(){
    $('.delete-note').click(function() {
    alert( this.noteid );
  });

}


function mapDOM(element, json) {
    var treeObject = {};
    
    // If string convert to document Node
    if (typeof element === "string") {
        if (window.DOMParser)
        {
              parser = new DOMParser();
              docNode = parser.parseFromString(element,"text/xml");
        }
        else // Microsoft strikes again
        {
              docNode = new ActiveXObject("Microsoft.XMLDOM");
              docNode.async = false;
              docNode.loadXML(element); 
        } 
        element = docNode.firstChild;
    }
    
    //Recursively loop through DOM elements and assign properties to object
    function treeHTML(element, object) {
        object["type"] = element.nodeName;
        var nodeList = element.childNodes;
        if (nodeList != null) {
            if (nodeList.length) {
                object["content"] = [];
                for (var i = 0; i < nodeList.length; i++) {
                    if (nodeList[i].nodeType == 3) {
                        object["content"].push(nodeList[i].nodeValue);
                    } else {
                        object["content"].push({});
                        treeHTML(nodeList[i], object["content"][object["content"].length -1]);
                    }
                }
            }
        }
        if (element.attributes != null) {
            if (element.attributes.length) {
                object["attributes"] = {};
                for (var i = 0; i < element.attributes.length; i++) {
                    object["attributes"][element.attributes[i].nodeName] = element.attributes[i].nodeValue;
                }
            }
        }
    }
    treeHTML(element, treeObject);
    
    return (json) ? JSON.stringify(treeObject) : treeObject;
}


