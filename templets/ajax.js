import {get_beats}  from '../app/views/ajax_views.js';


$(document).ready(function(){


  var url; var show_all=true;
  var total=0;
  
///////////change_pages_filter event
// $("#num_pages").change(pignation);
///////////Category_filter event
// $("#category_box").change(category);


if(show_all){ category(); show_all=false; }
$("#category_box").change(category);
// $("#category_box").click( pignation_refresh);


/////////////Methods/////

function category(){


var list=""; 
var ajax = new XMLHttpRequest();
var id=document.getElementById("category_box").value;
var obj;
var total=0;


///////////Sending/
if(id==0){url="app/ajax_request.php?get_beats=true"; } else{ url="app/ajax_request.php?cat_id="+id+"&get_beats=true";  }

ajax.open("GET",url,  true);
ajax.send();
///////////Receiving//

ajax.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){
  // $("#songsListContent").html(this.responseText);
    obj = JSON.parse(this.responseText);
    total = obj[obj.length-1];
    obj.pop();
    
    for(var i=0; i<obj.length; i++){
        list+=get_beats(obj[i].name, obj[i].full_name, obj[i].img_name, obj[i].type, obj[i].category_name);
    }
      $("#songsListContent").html(list);

     
    



  }

 }
////////END///
}















function pignation_refresh(){
////////Sending Request//////
// var total_rows = $("#total_beats").text();
// var page = document.getElementById("num_pages").value;
// ajax = new XMLHttpRequest();
// url="app/ajax_request.php?page="+page+"&"+"num_rows="+total_rows;
// ajax.open("Get",url, true);
// ajax.send();

///////////Receiving/////

// ajax.onreadystatechange=function(){
//   if(this.readyState==4 && this.status==200){
//     $("#songsListContent").html(this.responseText);
//   }
// }

   var total_rows=3;
   var rows_per_page=2;
   total_pages=5;
   for( page=1; page<$total_pages; page++){
          ("#num_pages").html('<option class="option" value="">Page <span></span></option>');
    }      





 }





})


