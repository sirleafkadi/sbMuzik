<!DOCTYPE html>
<html lang="en">
<head>
       
   <script src="jquery-3.3.1.min.js"></script>
 <script src="TimeCircles.js"></script>
<link rel="stylesheet" type="text/css" href="TimeCircles.css" >

</head>
<body>

<!-- Begin | Loading [[ Find at scss/framework/base/loader/loader.scss ]] -->

<?php include '../../../templets/headerbody.php'; ?>

<?php include '../../../templets/language.php'; ?>

                
<div class="main-container" id="appRoute">
      <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
      <div class="section">

      <h4>Playlist</h4>
        <hr>
           
           <div  class="row">

              <div  class="col">
              
              <?php include 'allsongs.php'; ?>

              

              </div>



           </div>  

           


            <div class="heading">
                <div class="d-flex flex-wrap align-items-end">
                     <div class="flex-grow-1">
                        <h4>Top Charts</h4>
                          <p>Listen top chart</p>
                    </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
             </div>
            <!-- END OF Header -->

            <hr>

                          <!-- Top Charts  -->
            <div style="margin: 4% 0 4% 0" class="carousel-item-5 arrow-pos-3">

              <?php include 'topcharts.php'; ?>
           
             

            </div> <!-- Top Charts -->


      </div> <!-- New Release -->

      <h4>New Release</h4>
        <hr>


                    <!-- New Release -->
 <div style="margin: 3% 0 4% 0" class="carousel-item-5 arrow-pos-3">

      <?php include 'newrelease.php'; ?>
   


</div>   <!-- New Release -->







    
</div>      <!-- END OF Main Container -->























<script>
    
    $("#CountDown").TimeCircles();

</script>




<!-- BackDrop -->

<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Scripts -->
<script src="../assets/js/vendors.bundle.js"></script>
<script src="../assets/js/scripts.bundle.js"></script>
</body>
</html>