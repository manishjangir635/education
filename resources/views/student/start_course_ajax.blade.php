<div id="carouselExampleControls" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="ratio ratio-21x9">
                 <iframe src="https://player.vimeo.com/video/{{$lecture->video}}?autoplay=1" style="width: 100%" height="360" frameborder="0" allow="autoplay; fullscreen"  allowfullscreen></iframe>
                </div>
          </div>

        </div>
        <button class="carousel-control-prev pick_lecture" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" lecture_id="{{$prevId}}">
            <i class="bi bi-chevron-left " ></i>
        </button>
        <button class="carousel-control-next pick_lecture" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" lecture_id="{{$nextId}}">
            <i class="bi bi-chevron-right"></i>
        </button>