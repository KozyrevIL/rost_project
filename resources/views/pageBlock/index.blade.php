@extends('layouts.master')


@section('content')
<a href="{{route('admin.pageBlock.create',$page->id)}}" class="btn btn-secondary">Добавить</a>
<h1>Содержание страницы портала <b>{{ $page->name }}</b></h1>
<table class="table caption-top">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">№ п/п</th>
            <th scope="col">Краткое описание</th>
            <th scope="col">Содержание</th>
            <th scope="col">Картинка</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pageBlocks as $pageBlock)
        <tr>
            <td><a name="page_edit" href="{{route('admin.pageBlock.edit',[$page->id,$pageBlock->id])}}">edit</a></td>
            <th scope="row">{{$pageBlock->id}}</th>
            <td>{{$pageBlock->pos}}</td>
            <td>{{$pageBlock->description}}</td>
            <td>{{$pageBlock->page_text}}</td>
            <td>{{$pageBlock->item}}</td>
            <!-- <td><image src="{{asset('storage/'.$pageBlock->item)}}"></image></td> -->
            <td><image src="{{asset($pageBlock->item)}}?w=80&h=80"></image></td> 
            </tr>
        @endforeach
    </tbody>
</table>
@endsection