<!DOCTYPE html>

<html>

<head>

    <!-- Bootstrap -->
    <link href="{{asset('/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/Content/glyphicon.css')}}" rel="stylesheet" />
    <script src="{{asset('/dist/js/bootstrap.min.js')}}"></script>

    <link href="{{asset('/Content/SiteAdmin.css')}}" rel="stylesheet" />
    <link href="{{asset('/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Панель администрирования</title>

    <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <asp:ContentPlaceHolder ID="head" runat="server">

        @yield('headContent')

    </asp:ContentPlaceHolder>



</head>

<body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="{{asset('/dist/js/bootstrap.min.js')}}"></script>


    <nav class="navbar navbar-expand-lg navbar-light   bg-secondary">
        <a class="navbar-brand" href="#">Панель администрирование сайта "РОСТ"</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{asset('/admin/pages')}}">Страницы</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/admin/call_backs')}}">Обратная связь</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Администирование
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="{{route('register')}}">Регистрация нового пользователя</a>
                        <a class="dropdown-item" href="#">Смена пароля пользователя</a>

                    </div>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a runat="server" href="~/Account/Manage" class="text-white" title="Manage your account">Hello, {{Auth::user()->name}} !</a></li>
                <li>
                    <a class="btn btn-danger" href="{{route('logout')}}">Выход</a>
                </li>
            </ul>



        </div>
    </nav>





    <div class="container-fluid">
        @yield('content')
    </div>


    <footer class="footer form-control-static">
        <div class="container">
            <p class="text-center">&copy; РОСТ</p>
        </div>
    </footer>
</body>

</html>