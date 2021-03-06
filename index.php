<?php require_once('app/view.php'); require_once('templets/init.php'); ?>
<?php
start();
$view = new View();
$_SESSION['view']=$view;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('templets/head.php'); ?>
</head>


<body>

<!-- Begin | Loading [[ Find at scss/framework/base/loader/loader.scss ]] -->
<!-- <div id="loading">
    <div class="loader">
        <div class="eq">
            <span class="eq-bar eq-bar--1"></span>
            <span class="eq-bar eq-bar--2"></span>
            <span class="eq-bar eq-bar--3"></span>
            <span class="eq-bar eq-bar--4"></span>
            <span class="eq-bar eq-bar--5"></span>
            <span class="eq-bar eq-bar--6"></span>
        </div>
        <span class="text">Loading</span>
    </div>
</div> -->

<?php if($view->check_db()==""): ?>
<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <!-- Begin | Sidebar [[ Find at scss/framework/base/sidebar/left/sidebar.scss ]] -->
        <?php require_once('templets/sidebar.php') ?>
    <!-- Begin | Navbar [[ Find at scss/framework/components/navbar/navbar.scss ]] -->
        <?php require_once('templets/nav.php'); ?>
    <!-- Begin | Sidebar Footer -->
        <?php require_once('templets/sidebar_footer.php'); ?>

    </aside>

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Begin | Header [[ Find at scss/framework/base/header/header.scss ]] -->
        <?php require_once('templets/header.php'); ?>
        <!-- End | Header -->

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-home" data-aos="fade-right" data-aos-duration="1000"></div>

        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div data-aos="flip-up" data-aos-duration="700" class="main-container" id="appRoute">

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>New Release</h4>
                            <p>Listen top chart</p>
                           
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>
                <!-- New Release -->
                <div class="carousel-item-5 arrow-pos-3"  >
                    <?php 
                        $view->get_beats('new_release');
                    ?>
                </div>

            </div>
         
         <br>
         <h4>All Beats</h4>
         <hr>


 
<div  class="row"  style=" width:100%; border-radius:25px">
     
<div  class="col-lg-8"  style=" margin:0 auto; display:flex; flex-direction:row; border-radius:25px"> 

<select class="" id="category_box">
    <option class="option" value="" placeholder="Category" disabled> Select Categories</option>
      <option class="option" id="all" value="0" placeholder="Category">All</option>
     <?php $view->get_cat_view(); ?>
 </select>

<select class="option" id="num_pages">
    <option class="option" disabled>Select Pages</option>
        <!-- num of pages -->
</select>

 <select name="" id="sorting">
 <option class="option"  disabled >Sort</option>
 <option class="option"  value="default">default</option>
 <option class="option"  value="order">A-Z</option>
 <option  class="option"  value="2">New release</option>
 <option  class="option"  value="free">Free</option>
 <option  class="option"  value="paid">Paid</option>

 



</select>

</div>

<!-- Getting num of beats-->   
 </div><!--END|| ROW--> 
 
 
<div class="row" style=" height: 0" >

<div  class="section col-lg-12" style=" border-radius: 25px;  background-color:rgba(117,63,220); display:flex; justify-content:space-between; margin:0 auto; color:white " >
<p style="margin: 1% 20%;" >Top Deal</p> <p style="margin: 1% 20%;color:white" >Total: <span  id="total"> </span>  </p>
 </div> 
</div>


<div  class="row" id="beats_parent" style="max-height:70%;  margin: 0 auto;  color:white; background-color:rgba(117,63,220); width:90%; border-radius: 25px  ">                
<div     class="section col-lg-6" style=" margin: 3% auto; ">
    

               <!-- Begin | Tab Content -->
       
             <div style=" font-size: 88%; "  class="tab-content" id="songsListContent">
               <!-- Category_filter -->
                   
            </div><!-- End | Tab -->
</div> <!-- End | Col -->

</div> <!-- End | Row -->
                              
         
                    

                       
                       
          

                
        
























      

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>New Releases</h4>
                            <p>Listen recently release music</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "dist/assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Featured Artists</h4>
                            <p>Select you best to listen</p>
                        </div>
                        <a href="artists.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/1.jpg" alt="Arebica Luna" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Arebica Luna</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/2.jpg" alt="Gerrina Linda" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Gerrina Linda</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/3.jpg" alt="Zunira Willy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Zunira Willy</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/4.jpg" alt="Johnny Marro" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Johnny Marro</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/5.jpg" alt="Jina Moore" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Jina Moore</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/6.jpg" alt="Rasomi Pelina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Rasomi Pelina</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/9.jpg" alt="Lenisa Gory" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Lenisa Gory</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="../assets/images/cover/large/10.jpg" alt="Nutty Nina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0">Nutty Nina</h6>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Your Playlist</h4>
                            <p>You best to listen</p>
                        </div>
                        <a href="playlist.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-4 arrow-pos-1">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/1.jpg" alt="DJ Remix" class="card-img--radius-lg">
                                <span class="bg-blur">DJ Remix</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/2.jpg" alt="Rock Band" class="card-img--radius-lg">
                                <span class="bg-blur">Rock Band</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/3.jpg" alt="Solo Special" class="card-img--radius-lg">
                                <span class="bg-blur">Solo Special</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/4.jpg" alt="Romantic" class="card-img--radius-lg">
                                <span class="bg-blur">Romantic</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/5.jpg" alt="GYM" class="card-img--radius-lg">
                                <span class="bg-blur">GYM</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/6.jpg" alt="Retro Special" class="card-img--radius-lg">
                                <span class="bg-blur">Retro Special</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Retro Classic</h4>
                            <p>Old is gold</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Radio</h4>
                            <p>Listen live now</p>
                        </div>
                        <a href="stations.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/1.jpg" alt="International" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">International</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/2.jpg" alt="Network" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Network</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/3.jpg" alt="Alpha Gamma" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Alpha Gamma</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/4.jpg" alt="Leanne Hutton" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Leanne Hutton</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/5.jpg" alt="K S N F" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">K S N F</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/6.jpg" alt="Clay Gandy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Clay Gandy</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/9.jpg" alt="Get Reehl" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Get Reehl</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/cover/large/10.jpg" alt="Morning one" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Morning one</h6>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Genres</h4>
                            <p>Select you genre</p>
                        </div>
                        <a href="genres.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-1">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/1.jpg" alt="Remix Songs" class="card-img--radius-md">
                                <span class="bg-blur">Remix Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/2.jpg" alt="Rock Songs" class="card-img--radius-md">
                                <span class="bg-blur">Rock Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/3.jpg" alt="Sufi Songs" class="card-img--radius-md">
                                <span class="bg-blur">Sufi Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/4.jpg" alt="Romantic Songs" class="card-img--radius-md">
                                <span class="bg-blur">Romantic Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/5.jpg" alt="Sports Songs" class="card-img--radius-md">
                                <span class="bg-blur">Sports Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="../assets/images/background/horizontal/6.jpg" alt="Old Songs" class="card-img--radius-lg">
                                <span class="bg-blur">Old Songs</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

        </div>
        <!-- End | Main Container -->

        <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
        <footer id="footer" class="bg-img">
            <div class="footer-content">
                <a href="#" class="email">info@listenapp.com</a>
                <div class="platform-btn-inline">
                    <a href="#" class="btn btn-dark btn-air platform-btn">
                        <i class="ion-logo-android"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">Android</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-danger btn-air platform-btn">
                        <i class="ion-logo-apple"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End | Footer -->

        <!-- Begin | Audio Player [[ Find at scss/framework/base/audio-player/audio-player.scss ]] -->
        <div id="audioPlayer" class="player-primary">

            <!-- Begin | Audio Player Progress -->
            <div id="progress-container">
                <input type="range" class="amplitude-song-slider">
                <progress class="audio-progress audio-progress--played amplitude-song-played-progress"></progress>
                <progress class="audio-progress audio-progress--buffered amplitude-buffered-progress" value="0"></progress>
            </div>
            <!-- End | Audio Player Progress -->

            <!-- Begin | Audio -->
            <div class="audio">
                <div class="song-image"><img data-amplitude-song-info="cover_art_url" src="../assets/images/cover/small/1.jpg" alt=""></div>
                <div class="song-info pl-3">
                    <span class="song-name d-inline-block text-truncate" data-amplitude-song-info="name"></span>
                    <span class="song-artists d-block text-muted" data-amplitude-song-info="artist"></span>
                </div>
            </div>
            <!-- End | Audio -->

            <!-- Begin | Audio Controls -->
            <div class="audio-controls">
                <div class="audio-controls--left d-flex mr-auto">
                    <button class="btn btn-icon-only amplitude-repeat"><i class="ion-md-sync"></i></button>
                </div>
                <div class="audio-controls--main d-flex">
                    <button class="btn btn-icon-only amplitude-prev"><i class="ion-md-skip-backward"></i></button>
                    <button class="btn btn-air btn-pill btn-default btn-icon-only amplitude-play-pause">
                        <i class="ion-md-play"></i>
                        <i class="ion-md-pause"></i>
                    </button>
                    <button class="btn btn-icon-only amplitude-next"><i class="ion-md-skip-forward"></i></button>
                </div>
                <div class="audio-controls--right d-flex ml-auto">
                    <button class="btn btn-icon-only amplitude-shuffle amplitude-shuffle-off"><i class="ion-md-shuffle"></i></button>
                </div>
            </div>
            <!-- End | Audio Controls -->

            <!-- Begin | Audio Info -->
            <div class="audio-info d-flex align-items-center pr-4">
                    <span class="mr-4">
                        <span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span> /
                        <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                    </span>
                <div class="audio-volume dropdown">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ion-md-volume-low"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right volume-dropdown-menu">
                        <input type="range" class="amplitude-volume-slider" value="100">
                    </div>
                </div>

                <div class="dropleft">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-heart-o"></i> <span>Favorite</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-plus"></i> <span>Add to Playlist</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-download"></i> <span>Download</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-share-alt"></i> <span>Share</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="song-details.html" class="dropdown-link">
                                <i class="la la-info-circle"></i>
                                <span>Song Info</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-icon-only" id="playList"><i class="ion-md-musical-note"></i></button>
            </div>
            <!-- End | Audio Info -->

        </div>
        <!-- End | Audio Player -->

    </main>
    <!-- End | Page Wrapper -->

    <!-- Begin | Right Sidebar [[ Find at scss/framework/base/sidebar/right/sidebar.scss ]] -->
    <aside id="rightSidebar">
        <div class="right-sidebar-header">Listen Special</div>
        <div class="right-sidebar-body" data-scrollable="true">
            <ul class="list-group list-group-flush">
                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">I Love You Mummy</p>
                            <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Shack your butty</p>
                            <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Do it your way(Female)</p>
                            <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Say yes</p>
                            <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Where is your letter</p>
                            <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Hey not me</p>
                            <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Deep inside</p>
                            <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->
            </ul>
        </div>
    </aside>
    <!-- End | Right Sidebar -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Language Modal -->
<div class="modal fade" id="lang" tabindex="-1" role="dialog" aria-labelledby="langTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-1" id="langTitle">Language</h5>
                    <p class="text-muted">Please select the language(s) of the music you listen to.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group row">
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch1" checked>
                            <label class="custom-control-label" for="ch1">Hindi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch2">
                            <label class="custom-control-label" for="ch2">Punjabi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch3">
                            <label class="custom-control-label" for="ch3">Tamil</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch4">
                            <label class="custom-control-label" for="ch4">Bengali</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch5">
                            <label class="custom-control-label" for="ch5">Kannada</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch6">
                            <label class="custom-control-label" for="ch6">Gujarati</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch7">
                            <label class="custom-control-label" for="ch7">Urdu</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch8">
                            <label class="custom-control-label" for="ch8">Rajasthani</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch9" checked>
                            <label class="custom-control-label" for="ch9">English</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch10">
                            <label class="custom-control-label" for="ch10">Telugu</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch11">
                            <label class="custom-control-label" for="ch11">Bhojpuri</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch12">
                            <label class="custom-control-label" for="ch12">Malayalam</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch13">
                            <label class="custom-control-label" for="ch13">Marathi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch14">
                            <label class="custom-control-label" for="ch14">Haryanvi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch15">
                            <label class="custom-control-label" for="ch15">Assamese</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch16">
                            <label class="custom-control-label" for="ch16">Odia</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer text-center d-block">
                <button type="button" class="btn btn-primary btn-pill" id="langApply">Apply</button>
            </div>
        </div>
    </div>
</div>
<!-- End | Language Modal -->

<!-- Back Drop -->
<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Including Script tags    -->
<?php require_once('templets/tail.php') ?>
<!-- <script src="templets/tail.php" type="module"></script> -->

<?php else: ?>
 <?php $msg = $view->check_db(); 
    echo $msg;
 ?>
<?php endif; ?>


















</body>
</html>