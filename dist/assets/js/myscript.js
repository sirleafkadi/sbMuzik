$(document).ready(function() {
    $('.mdb-select').materialSelect();


 });

    $("#searchInput").keyup(function(){

        

        if(this.value==""){ $("#search").hide("normal"); }
        else{  $("#search").show("normal");  }
      

    });

 
  
    $(document).mouseup(function(e) 
{
    var tag = $("#search");

    // if the target of the click isn't the container nor a descendant of the container
    if (!tag.is(e.target) && tag.has(e.target).length === 0) 
    {
        tag.hide("normal");
    }
});