@extends('layouts.master')


@section('content')
<div class="row mt-5 text-center">
  <div class="m-auto">
    @include('uc.slider', ['GridView' => $articles])
  </div>
</div>

<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
  <div class="col-12">
    <h1 class="text-center"><a class="header" href=".././desc?id_text=493">АУТСОРСИНГ</a></h1>
  </div>
</div>
<div class="container-fluid mt-5" id="blokAudit" style="background-color: #fff">
  <div class="row">
    <div>
      <img src="Images/audit2.png" class="img-fluid" />
    </div>

  </div>
</div>

<section class="study grid">
  <div class="container_global">
    <div class="header">
      <h2>ОНЛАЙН-ОБУЧЕНИЕ</h2>
    </div>
    <div class="content grid">
      <div class="text_block">
        <h3>Охрана труда.<br />
          Курс лекций для руководителей и специалистов.</h3>
        <ul>
          <li>Основы охраны труда в Российской Федерации</li>
          <li>Стратегия безопасности труда и охраны здоровья</li>
          <li>Система управления охраной труда в организации</li>
          <li>Расследование и предупреждение несчастных случаев и профессиональных заболеваний</li>
        </ul>
      </div>
      <div class="img_block">

      </div>
    </div>

  </div>
  <div class="btn">
    <input type="submit" name="ctl00$MainContent$ButtonStudy" value="Записаться" id="MainContent_ButtonStudy" class="btn btn-default" />
  </div>
</section>

<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
    <div class="col-12">
        <h1 class="text-center"><a class="header" href="#">СТАТЬИ</a></h1>
    </div>
</div>

@include('uc.blockText', ['GridView' => $articles])

<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5 d-none d-md-block">
  <div class="col-12">
    <h1 class="text-center"><a class="header" href="#">СТАТИСТИКА ТРАВМАТИЗМА</a></h1>
  </div>
</div>

<div class="container-fluid d-none d-md-block mt-5" style="position: relative;">
  <div class="row">

    <div class="container-fluid d-none d-md-block" style="background-color: #b4c591;">
      <div class="row">
        <div class="col-12">
          <div style="position:absolute; top: 21px; left: 0px;" id="travma_img">
            <img src="Images/Temp_img/travma_img.png" class="img-fluid" />
          </div>
          <div class="container pt-5 pb-5 pr-5">





            <div class="m-auto">
              <div class="container">

                <div class="row">






                  <div class="col-3">
                    <a href="/photoDB.ashx?type_img=image_big&amp;items=a0975315-e222-46f0-a51e-cfc19a0ba20d" class="highslide" onclick="return hs.expand(this);"><img title="Click to view full size" alt="Thumbnail image for ~/photoDB.ashx?type_img=image_big&amp;items=a0975315-e222-46f0-a51e-cfc19a0ba20d" class="highslide" id="MainContent_Iblock6_Replist1_ImageItem_0" class="img-responsive img-thumbnail" src="photoDB.ashx?type_img=image_lowCA&amp;items=a0975315-e222-46f0-a51e-cfc19a0ba20d&amp;w=243&amp;h=243" style="border-width:0px;" /></a>
                    <div class='highslide-caption'></div>

                    <div id="controlbar" class="highslide-overlay controlbar"><a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a><a href="#" class="next" onclick="return hs.next(this);" title="Next (right arrow key)"></a><a href="#" class="highslide-move" onclick="return false;" title="Click and drag to move"></a><a href="#" class="close" onclick="return hs.close(this);" title="Close"></a></div>





                  </div>
















                  <div class="col-3">
                    <a href="/photoDB.ashx?type_img=image_big&amp;items=0e6715eb-617a-4bff-a182-4c1d2dc12ad1" class="highslide" onclick="return hs.expand(this);"><img title="Click to view full size" alt="Thumbnail image for ~/photoDB.ashx?type_img=image_big&amp;items=0e6715eb-617a-4bff-a182-4c1d2dc12ad1" class="highslide" id="MainContent_Iblock6_Replist1_ImageItem_1" class="img-responsive img-thumbnail" src="photoDB.ashx?type_img=image_lowCA&amp;items=0e6715eb-617a-4bff-a182-4c1d2dc12ad1&amp;w=243&amp;h=243" style="border-width:0px;" /></a>
                    <div class='highslide-caption'></div>

                    <div id="controlbar" class="highslide-overlay controlbar"><a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a><a href="#" class="next" onclick="return hs.next(this);" title="Next (right arrow key)"></a><a href="#" class="highslide-move" onclick="return false;" title="Click and drag to move"></a><a href="#" class="close" onclick="return hs.close(this);" title="Close"></a></div>





                  </div>
















                  <div class="col-3">
                    <a href="/photoDB.ashx?type_img=image_big&amp;items=5d463737-4c31-4704-bb67-a1b4d838d5e4" class="highslide" onclick="return hs.expand(this);"><img title="Click to view full size" alt="Thumbnail image for ~/photoDB.ashx?type_img=image_big&amp;items=5d463737-4c31-4704-bb67-a1b4d838d5e4" class="highslide" id="MainContent_Iblock6_Replist1_ImageItem_2" class="img-responsive img-thumbnail" src="photoDB.ashx?type_img=image_lowCA&amp;items=5d463737-4c31-4704-bb67-a1b4d838d5e4&amp;w=243&amp;h=243" style="border-width:0px;" /></a>
                    <div class='highslide-caption'></div>

                    <div id="controlbar" class="highslide-overlay controlbar"><a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a><a href="#" class="next" onclick="return hs.next(this);" title="Next (right arrow key)"></a><a href="#" class="highslide-move" onclick="return false;" title="Click and drag to move"></a><a href="#" class="close" onclick="return hs.close(this);" title="Close"></a></div>





                  </div>
















                  <div class="col-3">
                    <a href="/photoDB.ashx?type_img=image_big&amp;items=34721cfa-4bd4-469b-8acd-096fde535d08" class="highslide" onclick="return hs.expand(this);"><img title="Click to view full size" alt="Thumbnail image for ~/photoDB.ashx?type_img=image_big&amp;items=34721cfa-4bd4-469b-8acd-096fde535d08" class="highslide" id="MainContent_Iblock6_Replist1_ImageItem_3" class="img-responsive img-thumbnail" src="photoDB.ashx?type_img=image_lowCA&amp;items=34721cfa-4bd4-469b-8acd-096fde535d08&amp;w=243&amp;h=243" style="border-width:0px;" /></a>
                    <div class='highslide-caption'></div>

                    <div id="controlbar" class="highslide-overlay controlbar"><a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a><a href="#" class="next" onclick="return hs.next(this);" title="Next (right arrow key)"></a><a href="#" class="highslide-move" onclick="return false;" title="Click and drag to move"></a><a href="#" class="close" onclick="return hs.close(this);" title="Close"></a></div>





                  </div>












                </div>
              </div>
            </div>



















          </div>
        </div>
      </div>
    </div>
  </div>
</div>







<section class="shop grid">

  <div class="container_global grid">
    <div class="header">
      <h2>ОНЛАЙН-МАГАЗИН</h2>
    </div>
    <div class="content">
    </div>
  </div>
  <div class="btn">
    <input type="submit" name="ctl00$MainContent$ButtonShop" value="Перейти в магазин" id="MainContent_ButtonShop" class="btn btn-default" />
  </div>
</section>






<section class="services_scss grid">
  <div class="container_grobal grid">
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%201.png" /></a>
    </div>
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%202.png" /></a>
    </div>

    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%203.png" /></a>
    </div>
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%204.png" /></a>
    </div>
    <div class="item_block">
      <h1 class="text-center"><a class="header" href=".././desc?id_text=383">УСЛУГИ</a></h1>
    </div>
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%206.png" /></a>
    </div>
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%207.png" /></a>
    </div>
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%208.png" /></a>
    </div>
    <div class="item_block">
      <a class="header" href=".././desc?id_text=383"><img src="Images/Temp_img/Аутсорсинг_блок%209.png" /></a>
    </div>
  </div>
</section>




<div class="row mt-5 text-center">

  <div class="container-fluid" id="block3" style="background-color: #585858; padding: 40px 0px 40px 0px; color:white;">
    <div class="row mx-auto align-middle align-content-center align-items-center">
      <div class="col-12">
        <h1 class="text-center">Заявка получения услуги</h1>
      </div>
    </div>
    <div class="row mx-auto align-middle align-content-center align-items-start" style="margin-top: 20px;">
      <div class="col-sm-12 col-md-3  col-lg-3 col-xl-3 text-center">
        <input name="ctl00$MainContent$QueryClients$ClientName" type="text" id="MainContent_QueryClients_ClientName" class="form-control-lg form-control mt-sm-2" placeholder="Введите ваше имя" style="height:58px;" />
        <div class="input-group mt-1">
          <span id="MainContent_QueryClients_LabelForCapcha" class="input-group-addon">8+5=</span>
          <input name="ctl00$MainContent$QueryClients$TextCapcha" type="text" id="MainContent_QueryClients_TextCapcha" class="input-group-addon" placeholder="ответ" style="width:100px;" />
        </div>


        <input type="hidden" name="ctl00$MainContent$QueryClients$qq" id="MainContent_QueryClients_qq" value="13" />
        <div class="form-check">
          <span class="form-check-input"><input id="MainContent_QueryClients_pesonalInfo" type="checkbox" name="ctl00$MainContent$QueryClients$pesonalInfo" /></span>
          <span class="form-check-label" for="pesonalInfo">Согласен на обработку <a href="../personal.html" target="_blank"><span class="link">персональных данных</span></a></span>
        </div>
      </div>
      <div class="col-sm-12 col-md-3  col-lg-3 col-xl-3 text-center mt-sm-2">
        <input name="ctl00$MainContent$QueryClients$ClientPhone" type="text" id="MainContent_QueryClients_ClientPhone" class="form-control-lg form-control" placeholder="Введите номер телефона" style="height:58px;" />
      </div>
      <div class="col-sm-12 col-md-3  col-lg-3 col-xl-3 text-center mt-sm-2">
        <input name="ctl00$MainContent$QueryClients$ClientComments" type="text" id="MainContent_QueryClients_ClientComments" class="form-control-lg form-control" placeholder="Комментарий (при необходимости)" style="height:58px;" />
      </div>




      <div class="col-sm-12 col-md-3  col-lg-3 col-xl-3 text-center mt-sm-2">
        <input type="submit" name="ctl00$MainContent$QueryClients$submitBtn" value="Получить услугу" id="MainContent_QueryClients_submitBtn" class="btn btn-outline-light btn-block btn-lg" style="height:58px;" />
      </div>
      <div class="card-footer">
        <span id="MainContent_QueryClients_InfoReq"></span>
      </div>
    </div>
  </div>
</div>



<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
  <div class="col-12">
    <h1 class="text-center"><a class="header" href=".././desc?id_text=9">О КОМПАНИИ</a></h1>
  </div>
</div>

<div class="row">




  <div class="container-fluid" id="block3" style="background-color: #fff; padding: 0px 0px 0px 0px;">


    <div class="row">
      <div class="col-12">
        <div class="alert alert-success h4 p-5" role="alert">
          <div class="mb-4">
            <i class="glyphicon glyphicon-check"></i> Центр охраны труда «РОСТ» более 10 лет работает на рынке г. Тюмени и Тюменской области, предоставляет качественные услуги по охране труда, пожарной безопасности, ГО и ЧС (охрана труда, техника безопасности, пожарная безопасность, гражданская оборона, чрезвычайный ситуации).
          </div>
          <div class="mb-4"><i class="glyphicon glyphicon-check"></i> Наш профессиональный опыт, использование передовых методик ведения охраны труда, пожарной безопасности, ГО и ЧС, а также индивидуальный подход к каждому клиенту, позволяет нам быстро и качественно предлагать варианты решения проблем в рамках действующего законодательства с учетом требований клиента.</div>
          <div><i class="glyphicon glyphicon-check"></i> Это помогает в значительной степени сократить финансовые и временные затраты Ваших сотрудников, а также снижает риск получения штрафов и прочих санкций.</div>
        </div>
      </div>
    </div>
  </div>




</div>

@endsection