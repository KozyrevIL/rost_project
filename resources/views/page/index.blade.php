@extends('layouts.adminMaster')


@section('content')

@if(session('message'))
<div class='alert alert-success'>
    {{ session('message') }}
</div>
@endif

<a href="{{route('admin.page.create')}}" class="btn btn-secondary">Добавить</a>
<table class="table caption-top">
    <caption>Список страниц портала</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pages as $page)
        <tr>
            <td><a name="page_content" href="{{route('admin.pageBlock.index',$page->id)}}">content</a></td>
            <td><a class="btn btn-primary" name="page_edit" href="{{route('admin.page.edit',$page->id)}}">edit</a>
            <form method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Удалить запись на странице?');" formaction="{{route('admin.page.delete',[$page->id])}}">Удалить</button>
                </form>
</td>
            <th scope="row">{{$page->id}}</th>
            <td>{{$page->name}}</td>
            <td>{{$page->text_pages}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection