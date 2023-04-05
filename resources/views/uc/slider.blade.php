<div id="carouselSliderControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($GridView as $slider)
        @if ($loop->first) <div class="carousel-item active"> @else <div class="carousel-item"> @endif >
                <a id="{{'HyperLinkImg_'.$loop->index}}" href="#">
                    <img id="{{'ImageItem_'.$loop->index}}" class="img-fluid" src="{{asset($slider->item)}}" />
                </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselSliderControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselSliderControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>