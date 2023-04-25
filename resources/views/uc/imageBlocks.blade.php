<div class="m-auto">
    <div class="container">
        <div class="row">
            @foreach($GridView as $row)

            <div class="col-3">
                <a href="{{route('textBlock',$row->id)}}" class="highslide">
                    <img title="Click to view full size" alt="Thumbnail image" class="highslide" class="img-responsive img-thumbnail" src="{{asset($row->item)}}?w=243&h=243" style="border-width:0px;" /></a>
                <div class='highslide-caption'></div>
            </div>
            @endforeach
        </div>
    </div>
</div>