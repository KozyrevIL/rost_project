@extends('layouts.adminMaster')


@section('content')

<script src="https://cdn.tiny.cloud/1/wjcn6ongpwxdcp43s42z2q5bhusr47r0wic15m039fjouuad/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
     selector: 'textarea#page_text', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'powerpaste advcode table lists checklist',
     toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
   });
</script>

<form action="{{route('admin.pageBlock.store',[$page->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  <h1>Добавить данные для страницы {{$page->name}}</h1>
  <div class="mb-3" visible="false">
    <label for="id_page" class="form-label">ID</label>
    <input type="text" class="form-control" id="id_page" name="id_page" readonly="true" value="{{$page->id}}">
  </div>
  <div class="mb-3">
    <label for="pos" class="form-label">Порядковый номер</label>
    <input type="text" class="form-control" id="pos" name="pos" placeholder="Порядок в сортировке">
  </div>
  <div class="mb-3">
    <label for="caption" class="form-label">Заголовок</label>
    <input type="text" class="form-control" id="caption" name="caption" placeholder="Заголовок">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Краткое описание</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Описание блока">
  </div>
  <div class="mb-3">
    <label for="page_text" class="form-label">Содержание</label>
    <textarea class="form-control" id="page_text" name="page_text" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Картинка</label>
    <input type="file" name="image"/>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Добавить</button>
  </div>

</form>
@endsection