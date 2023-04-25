<div class="container-fluid mt-5" id="blokNew3" style="background-color: #fff">
    <div class="m-auto" id="NewsXL">


        <div class="row mx-auto align-middle align-content-center align-items-center ">

        </div>

        <div class="row mx-auto align-middle align-content-center align-items-center mt-4">

            @foreach($GridView as $row)

                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
                    <div>
                        <div class="card border-secondary p-0"  class="align-items-center">
                            <a href="{{route('textBlock',$row->id)}}"><img src="{{asset($row->item)}}?w=299&h=168" /></a>

                            <div class="card-body">
                                <h5 class="card-title" style="overflow: hidden; height: 70px">
                                    <span>{{$row->caption}}</span>
                                </h5>
                                <a href="{{route('textBlock',$row->id)}}">
                                    <p class="card-text" style="overflow: hidden; height: 125px">
                                        <span>{{$row->description}}</span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>