@extends('layouts.master')


@section('content')
<div class="row mt-5 text-center">
  <div class="m-auto">
    @include('uc.slider', ['GridView' => $slider])
  </div>
</div>

<section class="services_partners">
        <div class="container_global grid">
            <div class="item_blok">

                <a href="{{asset('/pageBlock/15') }}"><img src="Images/Temp_img/InfoBlock.png" /></a>

                </div>
            <div class="item_blok header">
                
                <h1 class="text-center"><a class="header" href="#">УСЛУГИ И ТОВАРЫ ПАРТНЕРОВ</a></h1>
           </div>
            <div class="item_blok">

                <a href="{{asset('/pageBlock/16') }}"><img src="Images/Temp_img/InfoBlock3.png" /></a>

            </div>
            <div class="item_blok">

                 <a href="{{asset('/pageBlock/17') }}"><img src="Images/Temp_img/InfoBlock4.png" /></a>
            </div>
            <div class="item_blok">
                <a href="{{asset('/pageBlock/18') }}"><img src="Images/Temp_img/InfoBlock5.png" /></a>
            </div>
            <div class="item_blok">
                <a href="{{asset('/pageBlock/19') }}"><img src="Images/Temp_img/InfoBlock6.png" /></a>
            </div>
            <div class="item_blok">
                <a href="{{asset('/pageBlock/20') }}"><img src="Images/Temp_img/InfoBlock7.png" /></a>
            </div>
        </div>
    </section>

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
        <div class="btn">
          <input type="submit" name="ctl00$MainContent$ButtonStudy" value="Записаться" id="MainContent_ButtonStudy" class="btn btn-default" />
        </div>
      </div>
      <div class="img_block">
      </div>
    </div>

  </div>

</section>

<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
  <div class="col-12">
    <h1 class="text-center"><a class="header" href="{{route('pageBlock',1) }}">СТАТЬИ</a></h1>
  </div>
</div>

@include('uc.viewBlocks', ['GridView' => $articles])

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
            @include('uc.imageBlocks', ['GridView' => $imagesTravma])
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="shop grid">
  <div class="container_global">
    <div class="header">
      <h2>ОНЛАЙН-МАГАЗИН</h2>
    </div>
    <div class="content grid">
      <div class="img_block">
      </div>
      <div class="text_block">
        <h3>Библиотека документов:</h3>
        <ul>
          <li>Нормативные документы по Охране труда</li>
          <li>Инструкция для главного бухгалтера</li>
          <li>Приказ о пересмотре инструкций по охране труда</li>
          <li>Инструкция по ОТ для инженера по строительству</li>
          <li> и др.</li>
        </ul>
        <div class="btn">
          <input type="submit" name="ctl00$MainContent$ButtonShop" value="Перейти в магазин" id="MainContent_ButtonShop" class="btn btn-default" />
        </div>
      </div>

    </div>

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


<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
  <div class="col-12">
    <h1 class="text-center"><a class="header" href="{{asset('/textBlock/9')}}">О КОМПАНИИ</a></h1>
  </div>
</div>
<div class="container-fluid" id="block3" style="background-color: #fff; padding: 0px 0px 0px 0px;">
  @include('uc.onlyText', ['textBlock' => $about])
</div>


<div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
  <div class="col-12">
    <h1 class="text-center"><a сlass="header" href="{{route('pageBlock',10) }}">ЛИЦЕНЗИИ</a></h1>
  </div>
</div>
<div class="row  text-center  d-none d-md-block">
  @include('uc.imageBlocks', ['GridView' => $imagesLicence])
</div>

<div class="container mt-5 mb-5">


  <div class="row mx-auto align-middle align-content-center align-items-center mt-5 mb-5">
    <div class="col-12">
      <h1 class="text-center"><a class="header" href=".././desc?id_text=22">КАК НАС НАЙТИ</a></h1>
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="row mt-2 text-center ">
    <div class="col-12 m-auto ">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2164.749365507056!2d65.58460161608781!3d57.14134689151295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43bbe136fbfae3fd%3A0xa9154646b023ca9e!2z0YPQuy4g0J7QtNC10YHRgdC60LDRjywgMzMsINCi0Y7QvNC10L3RjCwg0KLRjtC80LXQvdGB0LrQsNGPINC-0LHQuy4sIDYyNTAxMw!5e0!3m2!1sru!2sru!4v1662533885257!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
@endsection