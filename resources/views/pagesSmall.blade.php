@extends('layouts.master')

@section('content')
<div id="MainContent_DivFilter">
    <div class="container-fluid" id="blokNew3" style="background-color: #fff">
        <div class="row mx-auto align-middle align-content-center align-items-center mt-3">
            {{$pageBlocks->links() }}
        </div>
        <div class="row mx-auto align-middle align-content-center align-items-center mt-4">


            @foreach($pageBlocks as $pageBlock)

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
                <div id="item_block">
                    <div class="card border-secondary p-0">
                        <a href="{{route('textBlock',$pageBlock->id) }}"><img src="{{asset($pageBlock->item)}}?w=299&h=168" /></a>

                        <div class="card-body">
                            <h5 class="card-title" style="overflow: hidden; height: 70px">
                                <span>{{$pageBlock->caption}}</span>
                            </h5>
                            <a href="{{route('textBlock',$pageBlock->id) }}">
                                <p class="card-text" style="overflow: hidden; height: 125px">
                                    <span>{{$pageBlock->description}}</span>
                            </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection