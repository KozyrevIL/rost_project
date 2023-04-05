<!DOCTYPE html>

<html>
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Центр охраны труда РОСТ</title>
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="Программа производственного контроля. Разработка профессиональных рисков. Проведение СОУТ. Помощь в расcледовании несчастных случаев. Сопровождение при проверках гит, пожарной, Ростехнадзора. Разработка нормативной документации по от и пб. Сдача в аренду аудиторий. Юридические консультации. Помощь в оформлении образовательной лицензии. Оценка профессиональных рисков. 
Аудит и аутсорсинг. Организация пожарной безопасности" />
    <link href="{{asset('Content/Site.css')}}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrap.bundle.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
    
    <link href="{{asset('sass/Rost.css')}}" rel="stylesheet" />
    <link href="{{asset('Content/bootstrap4-glyphicons-master/bootstrap4-glyphicons/css/bootstrap-glyphicons.min.css')}}" rel="stylesheet" />
    <asp:ContentPlaceHolder ID="head" runat="server">
    </asp:ContentPlaceHolder>
</head>
<body>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (m, e, t, r, i, k, a) {
    m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
        m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(59690617, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
    <script type="text/javascript">
        $(function () {
            $('.marquee').marquee({
                duration: 20000,
                startVisible: true,
                duplicated: true
            });
        });
    </script>

<noscript><div><img src="https://mc.yandex.ru/watch/59690617" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        <img src={{ asset('Images/banner_bg_left.png'); }} style="position: absolute; left: 0px;"  class="img-fluid d-none d-md-block" />
        <img src={{ asset('Images/banner_bg_left.png'); }} style="position: absolute; right: 0px; transform: scale(-1, -1);" class="img-fluid d-none d-md-block" />
        <div class="container" id="banner">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <img src="{{asset('Images/logo.png')}}" id="logo" style="margin-top: 11px;" class="img-fluid" />
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-none d-sm-block">
                    <div class="float-right">
                        <div id="phone_banner" style="margin-right: 20px; margin-top: 0px; color: #963582; font-weight: bold; font-size: 20px;">Телефон: 8(3452)923 965 <i class="glyphicon glyphicon-phone"></i></div>
                        <div class="row" id="social_banner">
                            <div class="col-2">
                                <a href="https://vk.com/club191854002" target="_top">
                                    <img src="{{asset('Images/Icons/icon_vk.png')}}" /></a>
                            </div>
                            <div class="col-2">
                                <a href="https://www.instagram.com/" target="_top">
                                    <img src="{{asset('Images/Icons/icon_phone.png')}}" /></a>
                            </div>
                            <div class="col-2">
                                <a href="https://www.facebook.com/" target="_top">
                                    <img src="{{asset('Images/Icons/icon_face.png')}}" /></a>
                            </div>
                            <div class="col-2">
                                <a href="https://ok.ru/group/62455457251391" target="_top">
                                    <img src="{{asset('Images/Icons/icon_ok.png')}}" /></a>
                            </div>
                            <div class="col-2">
                                <a href="https://mail.ru" target="_top">
                                    <img src="{{asset('Images/Icons/icon_mail.png')}}" /></a>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid">



            <div class="row align-middle align-content-center align-items-center text-center" style="color: white; background-color: #0192ac; height: 54px; font-size: 18px;">
                <div class="container-fluid" id="menu_block">
                    <nav class="navbar navbar-expand-lg navbar-light">


                        <div id="button_collapse">
                            <button class="navbar-toggler pl-2 pr-2 pt-2 pb-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span>МЕНЮ</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-0 ml-sm-0 ml-md-3 ml-lg-3 ml-xl-3 ">

                                <li class="nav-item">
                                    <a class="nav-link" href="index.aspx">ГЛАВНАЯ</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="PagesSmallbyPage.aspx?id_pages=1&qty_on_page=18">СТАТЬИ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="desc.aspx?id_text=26">НАШИ УСЛУГИ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="PagesSmallForText.aspx?id_pages=9">С НАМИ РАБОТАЮТ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="FormCallBack.aspx">КОНСУЛЬТАЦИИ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="desc.aspx?id_text=383">УСЛУГИ НАСЕЛЕНИЮ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="desc.aspx?id_text=9">О КОМПАНИИ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Gallery.aspx?id_pages=8">ФОТОГАЛЕРЕЯ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="desc.aspx?id_text=22">КОНТАКТЫ</a>
                                </li>
                                  <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="https://shop.rostot.ru/">МАГАЗИН</a>
                                </li>
                                  <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="http://sdo.rostot.ru/">КУРСЫ</a>
                                </li>
                            </ul>
                           
                        </div>


                        <div class="d-none d-lg-block">
                            <div class="label-place pull-right"></div>
                        </div>
                        <div class="d-block d-lg-none" style="position: absolute; top: -7px; right: 0px;">

                            <div class="label-place pull-right"></div>
                        </div>


                    </nav>

                </div>


                <div class="float-right pr-3 pr-xs-5 pr-sm-5 pr-md-5 pr-lg-5 pr-xl-5" id="SearchBlock">
                    <div class="input-group">
                        <asp:TextBox ID="SearhTextBox" runat="server" CssClass="form-control"></asp:TextBox>
                        <div class="input-group-append">
                            <asp:LinkButton ID="ButtonSearch" runat="server" CssClass="btn btn-info" OnClick="ButtonSearch_Click1">
                             <i class="glyphicon glyphicon-search"></i>
                            </asp:LinkButton>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row align-middle align-content-center align-items-center text-center" id="SearchBlock_row_sm" style="color: white; background-color: #0192ac; height: 54px; font-size: 18px;">
                <div class="float-right pr-5 offset-9" id="SearchBlock_sm">
                    <div class="input-group">
                        <asp:TextBox ID="SearhTextBox_sm" runat="server" CssClass="form-control"></asp:TextBox>
                        <div class="input-group-append">
                            <asp:LinkButton ID="ButtonSearch_sm" runat="server" CssClass="btn btn-info" OnClick="ButtonSearch_Click1">
                             <i class="glyphicon glyphicon-search"></i>
                            </asp:LinkButton>
                        </div>
                    </div>

                </div>
            </div>
@yield('content')

@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif
            <div class="row">
                <div class="container-fluid d-none d-lg-block" id="bottom_menu2">

                    <div class="row">
                       
                        <div class="col-8">

                            <ul class="list-inline m-auto">
                                <li class="list-inline-item">
                                    <a class="nav-link" href="index.aspx">ГЛАВНАЯ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="PagesSmall.aspx?id_pages=1">СТАТЬИ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="desc.aspx?id_text=26">НАШИ УСЛУГИ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="PagesSmallForText.aspx?id_pages=9">С НАМИ УЖЕ РАБОТАЮТ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="desc.aspx?id_text=21">КОНСУЛЬТАЦИИ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="desc.aspx?id_text=9">О КОМПАНИИ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="desc.aspx?id_text=22">КОНТАКТЫ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" href="FormCallBack.aspx">ОБРАТНАЯ СВЯЗЬ</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" target="_blank" href="https://shop.rostot.ru/">МАГАЗИН</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="nav-link" target="_blank" href="http://sdo.rostot.ru/">КУРСЫ</a>
                                </li>
                            </ul>
                            <div  style="color: #acacac;" id="footer_text">
                                Центр охраны труда «РОСТ оставляет за собой право вносить изменения в информацию, размещенную данном на сайте. Информация, размещенная на сайте не является публичной офертой, определяемой положениями Статьи 437 ГК РФ.
                            </div>
                        </div>
                        <div class="col-3">

                            <div id="footer_soz">
                                <label>ПОДЕЛИТЕСЬ В СОЦСЕТЯХ</label><br />
                                <ul class="list-inline">

                                    <li class="list-inline-item">
                                        <a href="https://vk.com/club191854002" target="_top">
                                            <img src="{{asset('Images/Icons/icon_vk.png')}}" /></a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/" target="_top">
                                            <img src="{{asset('Images/Icons/icon_phone.png')}}" /></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/" target="_top">
                                            <img src="{{asset('Images/Icons/icon_face.png')}}" /></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://ok.ru/group/62455457251391" target="_top">
                                            <img src="{{asset('Images/Icons/icon_ok.png')}}" /></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://mail.ru" target="_top">
                                            <img src="{{asset('Images/Icons/icon_mail.png')}}" /></a>
                                    </li>

                                </ul>
                            </div>
                        </div>


                    </div>

                  

                </div>
            </div>
            <div class="row">
                <div class="container-fluid" id="bottom_menu3">
                    <div class="row mx-auto align-middle align-content-center align-items-center">
                        <div class="col-xl-6 col-12">
                            © 2018– {{ date('Y') }}   Все права защищены. Телефон<br />
                            <!-- Yandex.Metrika counter -->
                            <script type="text/javascript">
                                (function (m, e, t, r, i, k, a) {
                                    m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
                                    m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                                })
                                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
                                ym(58485535, "init", {
                                    clickmap: true,
                                    trackLinks: true,
                                    accurateTrackBounce: true
                                });
                            </script>
                            <noscript>
                                <div>
                                    <img src="https://mc.yandex.ru/watch/58485535" style="position: absolute; left: -9999px;" alt="" />
                                </div>
                            </noscript>
                            <!-- /Yandex.Metrika counter -->
                           
                        </div>
                        <div class="col-xl-6 text-right col-12 d-none d-sm-block">
                            Создание и продвижение сайтов: <a href="mailto:stiv.simil@mail.ru" class="links text-info" target="_blank">stiv.simil@mail.ru</a>
                        </div>
                        <div id="scroll_data" class=" col-lg-12 d-none d-sm-block">
                            <div class='marquee' style='overflow:hidden'>Поможем решить ваш вопрос с не выплатами заработной платы, компенсацией за несчестный случай, восстановить на работу, наказать работодателя за нарушения прав работника и многие другие вопросы. Телефон для справок 89923058923.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
