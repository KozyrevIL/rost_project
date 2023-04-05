@extends('layouts.master')


@section('content')
<form action="{{route('admin.page.update',$page->id)}}" method="post">
  @csrf
  @method('patch')
  <h1>Изменение данных страницы</h1>
  <div class="mb-3">
    <label for="name" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" readonly="true" value="{{$page->id}}">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Название</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Общая тематика страниц" value="{{$page->name}}">
  </div>
  <div class="mb-3">
    <label for="text_pages" class="form-label">Описание</label>
    <textarea class="form-control" id="text_pages" name="text_pages" rows="3">{{$page->text_pages}}</textarea>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Изменить</button>
  </div>

</form>
@endsection