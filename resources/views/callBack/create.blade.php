@extends('layouts.master')

@section('content')

@if(session('message'))
<div class='alert alert-success'>
    {{ session('message') }}
</div>
@endif

<form method="post" action="{{route('callback.store')}}">
    @csrf
    <div id="DivFilter" runat="server" style="background-color: #d9fbfd">
        <div class="container">
            <div class="container-fluid pt-3 pb-3" id="blok2.1">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-auto">

                            <div class="card-body">

                                <h5 class="card-title">Обратная связь
                                </h5>
                                <label for="fio">Имя</label>
                                <input name="fio" type="text" id="fio" class="form-control " />

                                <label for="email">Если Вы хотите чтобы Вам ответили, укажите email</label>
                                <input name="email" type="text" id="email" class="form-control" />

                                <label for="post_data">Текст</label>
                                <textarea name="post_data" rows="2" cols="20" id="post_data" class="form-control" style="height:200px;"></textarea><br />

                                <span id="MainContent_callback2_LabelForCapcha">{{$param1}}+{{$param2}}=</span>
                                <input name="TextCapcha" type="text" id="TextCapcha" class="form-control" placeholder="Введите правильный ответ" />
                                <input type="submit" name="ButtonSend" value="Отправить" id="ButtonSend" class="btn btn-primary " /><br />
                                <span id="LabelError"></span>

                                <input type="hidden" name="TextCapcha_confirmation" id="TextCapcha_confirmation" value="{{$param1+$param2}}" />

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<div class="container-fluid" id="blok5.1">
    <div class="row">
        <uc2:FAQ runat="server" ID="FAQ1" />
    </div>
</div>


@endsection