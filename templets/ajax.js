import {get_beats}  from '../app/views/ajax_views.js';

var total=0;
var rows_per_page=2;
var total_pages=0;
var url;
var show_all=true;
var total=0;
var pages=1;
var offset=0;
var cur_page=0;
var obj;
var cur_url;
var split;

$(document).ready(function(){
 
if(show_all){ category(pages); show_all=false; }

$("#category_box").change(category);
$("#num_pages").change(select_pages);









/////////////Methods/////

function category(){
  

offset=0;
var list=""; 
var p="";
var ajax = new XMLHttpRequest();
var id=document.getElementById("category_box").value;




///////////Sending/
if(id==0){url="app/ajax_request.php?get_beats=true"+"&offset="+offset+"&max="+rows_per_page; } 
else{ url="app/ajax_request.php?cat_id="+id+"&get_beats=true"+"&offset="+offset+"&max="+rows_per_page;  }
cur_url=url;
ajax.open("GET",cur_url,  true);
ajax.send();
///////////Receiving//

ajax.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){
  // $("#songsListContent").html(this.responseText);
    obj = JSON.parse(this.responseText);
    total = obj[obj.length-1];
    obj.pop();
    $("#total").html(total);
    for(var i=0; i<obj.length; i++){
        list+=get_beats(obj[i].name, obj[i].full_name, obj[i].img_name, obj[i].type, obj[i].category_name);
    }
      $("#songsListContent").html(list);
  
     total_pages=Math.ceil(total/rows_per_page);
     for(var page=1; page<=total_pages; page++){
      p+=`'<option class="option" value="${page}">Page <span>${page}</span></option>'`;
    }      

        
    $("#num_pages").html(p);
   


  }

 }
////////END///
}




function select_pages(){
////////Sending Request//////

var p="";
cur_page = document.getElementById("num_pages").value;
var ajax = new XMLHttpRequest();

if(cur_page=="undefined" || cur_page=="" || cur_page==1){ pages=1;  } 
else{ pages=cur_page;}

offset=(pages-1)*rows_per_page;
split=cur_url.split("&");
split[0]+="&offset="+offset+ "&max="+2;
ajax.open("Get",split[0], true);
ajax.send();

/////////Receiving/////

ajax.onreadystatechange=function(){

  if(this.readyState==4 && this.status==200){
    obj = JSON.parse(this.responseText);
 
    for(var i=0; i<obj.length-1; i++){
        p+=get_beats(obj[i].name, obj[i].full_name, obj[i].img_name, obj[i].type, obj[i].category_name);
    }
      $("#songsListContent").html(p);
      $("#total").html( obj[obj.length-1]);

  }
}




 }





})


