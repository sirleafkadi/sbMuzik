


export function get_beats(name, pro_name, img, type, category){

return `

<div   data-aos-duration="2000000"  style=" box-shadow: 5px 5px 10px  rgba( 255, 255, 255, .5); margin-top:30px " class="  custom-list">
                           
<div style="padding:15px" class="custom-list--item">
    <div  class="text-white custom-card--inline">
        <div  class="custom-card--inline-img">
        <a  href="javascript:void(0);" class="external " data-audio='{"name": "${name}", "artist": "${pro_name}", "album": "", "url": "dist/assets/audio/${name}.mp3", "cover_art_url": "dist/assets/images/cover/${img}.${type}"}'>
        <img style="margin:0 5px 0 5px  " src="dist/assets/images/cover/${img}.${type}" alt="" class="card-img--radius-sm">
        </a>
        </div>
        <div class="custom-card--inline-desc">
        <a  href="javascript:void(0);" class="external" data-audio='{"name": "${name}", "artist": "${pro_name}", "album": "", "url": "dist/assets/audio/${name}.mp3", "cover_art_url": "dist/assets/images/cover/${img}.${type}"}'>
            <p class="text-truncate text  mb-0">${name}</p>
            <p class="text-truncate text font-sm">${category}</p>
        </a>
          
        </div>
    </div>
        <div class="custom-card--inline-desc" style="margin-right:1px">
            <p class="text-truncate text mb-0">3:30 </p>
            <span class="text-truncate text mb-0">97.0 bpm</span>
        </div>
     
   
    
    <ul class="custom-card--labels d-flex ml-auto">
        <li class=" dropleft">
            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="color:white" class="la la-ellipsis-h"></i>
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
</div>



</div> <hr>`;















}
