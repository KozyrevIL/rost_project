@extends('layouts.master')

@section('content')
<div id="MainContent_DivFilter">
    <div class="container-fluid" style="background-color: #fff">

        <div class="row mx-auto align-middle align-content-center align-items-center mt-4">

            @foreach($pageBlocks as $pageBlock)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
                <div>
                    <div class="card text-dark bg-info">
                        <div class="card-body">
                            <h5 class="card-title" style="overflow: hidden; height: 70px">
                                <span>{{$pageBlock->caption}}</span>
                            </h5>
                        </div>
                        <div class="card-footer">
                            <p class="card-text" style="overflow: hidden; height: 20px;">
                                <span>{!!$pageBlock->description!!}</span>
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