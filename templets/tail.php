<script src="dist/assets/js/jquery-3.5.1.min.js"></script>
<script src="dist/assets/js/bootstrap.min.js"></script>
<script src="dist/assets/js/vendors.bundle.js"></script>
<script src="dist/assets/js/scripts.bundle.js"></script>
<script src="dist/assets/js/myscript.js"></script>
<script src="dist/assets/js/aos.js"></script>
<script>
  AOS.init();
var refresh_ready=false;


$(document).ready(function(){
  var url; var show_all=true;
///////////change_pages_filter event
// $("#num_pages").change(pignation);
///////////Category_filter event
// $("#category_box").change(category);


if(show_all){ category(); show_all=false; }
$("#category_box").change(category);
// $("#category_box").click( pignation_refresh);


//////END////
});











/////////////Methods/////

function category(){
var ajax = new XMLHttpRequest();
var total=0;
var all=true;
id=document.getElementById("category_box").value;

///////////Sending/
if(id==0){url="app/ajax_request.php"; all=true;} else{ url="app/ajax_request.php?cat_id="+id; all=false; }
ajax.open("GET",url,  true);
ajax.send();
///////////Receiving//
ajax.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){
  $("#songsListContent").html(this.responseText);
 
   pignation(all);
  ///Setting refresh variable 

  }

 }
////////END///
}

////////////Making Pignation
function pignation(all){
var total=0;
  // if(all=true){total=$_SESSION['all_rows'];}
  var test=document.getElementById("num_pages");
////////Sending Request//////
// var total_rows = $("#songsListContent").children().length;

// var page = document.getElementById("num_pages").value;
// ajax = new XMLHttpRequest();
// url="app/ajax_request.php?page="+page+"&"+"num_rows="+total_rows;
// ajax.open("Get",url, true);
// ajax.send();
var rows_per_page =2;
///////////Receiving/////
var list="";


var total_pages=Math.ceil(6/rows_per_page);
for(var page=1; page<=total_pages; page++){
 list+=`"<option class="option" value="${page}">Page <span>${page}</span></option>"`;
  // test.innerHTML+=`"<option class="option" value="${page}">Page <span>${page}</span></option>"`;
  
}   

$("#num_pages").html(list);

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







</script>
