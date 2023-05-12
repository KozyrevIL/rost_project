@extends('layouts.adminMaster')


@section('content')

@if(session('message'))
<div class='alert alert-success'>
    {{ session('message') }}
</div>
@endif

<div class="container-fluid">
    <div class="row mx-auto align-middle align-content-center align-items-center mt-3">
        {{$CallBacks->links() }}
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">
            Обратная связь
        </div>
        <div class="panel-body">
            <div>
                <table class="table table-bordered table-striped table-condensed table-hover" cellspacing="0" rules="all" border="1" id="MainContent_GridView1" style="border-collapse:collapse;">
                    <tr class="table info">
                        <th scope="col">Действие</th>
                        <th scope="col">№</th>
                        <th scope="col">Обращение</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">Email</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Комментарий</th>
                    </tr>
                    @foreach ($CallBacks as $Record)
                    <tr class="table info">
                        <td>
                            <form method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Удалить запись?');" formaction="{{route('admin.callBack.delete',[$Record->id])}}">Удалить</button>
                            </form>
                        </td>
                        <td>{{$Record->id}}</td>
                        <td><textarea class="form-control">{{$Record->post_data}}</textarea></td>
                        <td>{{$Record->fio}}</td>
                        <td>{{$Record->email}}</td>
                        <td>{{$Record->created_at}}</td>
                        <td>
                            <Form method="POST" action="{{route('admin.callBack.update',$Record->id)}}">
                                @csrf
                                @method('patch')
                                <input type="text" class="form-control" id="comments" name="comments" placeholder="Введите комментарий" value="{{$Record->comments}}">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </Form>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection