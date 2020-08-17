<?php 

 echo' 
                 <div class="custom-card" >
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
                            <a href="javascript:void(0);" class="external" data-audio=\'{"name": "'.$beat_name.'", "artist": "'.$pro_name.'", "album": "", "url": "dist/assets/audio/'.$beat_name.'.mp3", "cover_art_url": "dist/assets/images/cover/'.$img.'.'.$type.'"}\'>
                                <img src="dist/assets/images/cover/'.$img.'.'.$type.'" alt="'.$beat_name.'" class="card-img--radius-lg">
                            </a>
                        </div>
                            
                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>'.$beat_name.'</h6>
                            <p>'.$category.'</p>
                        </a>
                    </div>';



 ?>                   