@extends('layouts.adminMaster')

@section('headContent')
<x-head.tinymce-config/>
@endsection

@section('content')



<form action="{{route('admin.pageBlock.update',[$page->id,$pageBlock->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('patch')
  <h1>Изменение данных страницы {{$page->name}}</h1>
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" readonly="true" value="{{$pageBlock->id}}">
  </div>
  <div class="mb-3">
    <label for="pos" class="form-label">Порядковый номер</label>
    <input type="text" class="form-control" id="pos" name="pos" placeholder="Порядок в сортировке" value="{{$pageBlock->pos}}">
  </div>
  <div class="mb-3">
    <label for="caption" class="form-label">Заголовок</label>
    <input type="text" class="form-control" id="caption" name="caption" placeholder="Заголовок" value="{{$pageBlock->caption}}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Краткое описание</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Описание блока" value="{{$pageBlock->description}}">
  </div>
  <div class="mb-3">
    <label for="page_text" class="form-label">Содержание</label>
    <textarea class="form-control" id="page_text" name="page_text" rows="3">{{$pageBlock->page_text}}</textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Изменить изображение</label>
    <input type="file" name="image" id="image" />
  </div>
  <div class="mb-3">
    <image src="{{asset($pageBlock->item)}}?w=150&h=150"></image>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Изменить</button>
  </div>

</form>
@endsection