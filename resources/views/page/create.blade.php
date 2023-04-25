@extends('layouts.adminMaster')


@section('content')

<div>
    <form action="{{ route('admin.page.store') }}" method="post" >
        @csrf
        <h1>Добавление страницы</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Тематика страниц">
        </div>
        <div class="mb-3">
            <label for="text_pages" class="form-label">Описание</label>
            <textarea class="form-control" id="text_pages" name="text_pages" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>

    </form>
</div>
@endsection