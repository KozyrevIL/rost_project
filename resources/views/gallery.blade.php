@extends('layouts.master')

@section('content')
<div id="MainContent_DivFilter">
    <div class="container-fluid" id="blokNew3" style="background-color: #fff">
        <div class="row mx-auto align-middle align-content-center align-items-center mt-3">
            {{$pageBlocks->links() }}
        </div>

        <div class="m-auto pb-5 pt-5">
            <div class="container-fluid">
                <div class="row pb-3">
                    @foreach($pageBlocks as $pageBlock)

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2" style="overflow:hidden; height:225px;">
                        <a href="{{asset($pageBlock->item)}}" class="highslide" onclick="return hs.expand(this);">
                            <img title="Click to view full size" alt="Thumbnail image" class="highslide" class="img-responsive img-thumbnail  img-fluid" 
                            src="{{asset($pageBlock->item)}}?w=300&h=200" style="border-width:0px;" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endsection
    </div>
</div>