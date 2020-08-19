
<script src="dist/assets/js/jquery-3.5.1.min.js"></script>
<script src="dist/assets/js/bootstrap.min.js"></script>
<script src="dist/assets/js/vendors.bundle.js"></script>
<script src="dist/assets/js/scripts.bundle.js"></script>
<script src="dist/assets/js/myscript.js"></script>
<script src="dist/assets/js/aos.js"></script>
<script>
  AOS.init();

  $(document).ready(function(){

    $("#category_box").change(category);



  }
  
  );

/////////////

function category(){
var file= require('app/views/beats.php');
  var cat_id = document.getElementById("category_box").value;

var ajax = new XMLHttpRequest();
var url="app/ajax_request.php?cat_id="+cat_id;
ajax.open("Get",url,  true);

ajax.send();

///////////Receiving

ajax.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){

    var data= JSON.parse(this.responseText);



  }

 }

}

</script>
