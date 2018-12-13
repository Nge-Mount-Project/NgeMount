@extends('layouts.app')

@section('title', 'Nge-Mount | Home')

@section('content')
@guest
<!-- slide show -->
<div class="slideshow" tabindex="0">
   <!-- slide 1 -->
   <div class="slide slide--layout-1" data-layout="layout1">
      <div class="slide-imgwrap">
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/4.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/merapi/2.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/2.jpg);"></div></div>
      </div>
      <div class="slide__title">
         <h3 class="slide__title-main">Let's the Top</h3>
         <p class="slide__title-sub">Reaching the top of the goal requires struggle and sacrifice. Like the journey of life too?</p>
      </div>
   </div>
   <!-- /slide 2 -->
   <div class="slide slide--layout-3" data-layout="layout3">
      <div class="slide-imgwrap">
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/9.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/10.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/11.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/15.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/13.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/14.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/7.jpg);"></div></div>
      </div>
      <div class="slide__title">
         <h3 class="slide__title-main">Prepare Your Plan</h3>
         <p class="slide__title-sub">Start all equipment and body conditions to be able to reach the target you want to reach.</p>
      </div>
   </div>
   <!-- /slide 3 -->
   <div class="slide slide--layout-4" data-layout="layout4">
      <div class="slide-imgwrap">
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/bromo/5.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/sumbing.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/merapi.jpeg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/sumeru.jpg);"></div></div>
      </div>
      <div class="slide__title">
         <h3 class="slide__title-main">Set Goals</h3>
         <p class="slide__title-sub">Before climbing, you must set a goal first, want to reach the top of the mountain or not. Likewise in life.</p>
      </div>
   </div>

   <!-- /slide 4 -->
   <div class="slide slide--layout-6" data-layout="layout6">
      <div class="slide-imgwrap">
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/2.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/8.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/5.jpg);"></div></div>
      </div>
      <div class="slide__title">
         <h3 class="slide__title-main">All About Hobbies</h3>
         <p class="slide__title-sub">If you want to get or see something amazing, get out of your comfort zone.</p>
      </div>
   </div>
   <!-- /slide 5 -->
   <div class="slide slide--layout-5" data-layout="layout5">
      <div class="slide-imgwrap">
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/1.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/1.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/3.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/3.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/4.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/6.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/7.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/5.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/6.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/10.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/11.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/12.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/13.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/14.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/15.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/bromo/3.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/17.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/done/8.jpg);"></div></div>
      </div>
      <div class="slide__title">
         <h3 class="slide__title-main">Like an Atom</h3>
         <p class="slide__title-sub">You will feel small and helpless after arriving at the top of the mountain.</p>
      </div>
   </div>
   <!-- /slide 6 -->
   <div class="slide slide--layout-7" data-layout="layout7">
      <div class="slide-imgwrap">
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/16.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/1.jpg);"></div></div>
         <div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/3.jpg);"></div></div>
      </div>
      <div class="slide__title">
         <h3 class="slide__title-main">Life isn't Alone</h3>
         <p class="slide__title-sub">Mountain climbing makes you aware, there are many good people in this world who still want to help.</p>
      </div>
   </div>

   <!-- next and prev -->
   <nav class="slideshow__nav slideshow__nav--arrows">
      <button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><svg class="icon icon--prev"><use xlink:href="#icon-prev"></use></svg></button>
      <button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><svg class="icon icon--next"><use xlink:href="#icon-next"></use></svg></button>
   </nav>
</div>
@else
<br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-4">
      <h1 style="color:white">Cari Barengan</h1>
    </div>
    <div class="col-md-2">

    </div>

  </div>
  <div class="row">
    <div class="col-md-4">
      <h2 style="padding-left:135px">Tim Info</h2>
      <br>
      <div class="card" style="width: 35rem;">
        <img class="card-img-top" src="img/merapi.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" style="font-weight:bold">Pendakian Gunung Merapi</h5>
          <p class="card-text">Kuota 6 orang</p>
          <p class="card-text">Basecamp Sapuangin</p>
          <p class="card-text">Tanggal 18-12-2018</p>
          <p class="card-text">Meeting Point Titik 0km Jogja</p>
          <a href="#" class="btn btn-dark" style="color:grey; font-size:12px; font-weight:bold">&nbsp;GABUNG&nbsp;</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h2 style="padding-left:105px">Pilih Gunung</h2>
      <br>
      <form class="" action="index.html" method="post">
        <select style="width:350px; height:40px">
          <option value="Merapi">Gunung Merapi</option>
          <option value="Prau">Gunung Prau</option>
          <option value="Merbabu">Gunung Merbabu</option>
          <option value="Sumbing">Gunung Sumbing</option>
          <option value="Sindoro">Gunung Sindoro</option>
        </select>
        <br><br>
        <button type="button" class="btn btn-secondary" style="font-size:12px;font-weight:bold">&nbsp;CARI&nbsp;</button>
      </form>

    </div>
    <div class="col-md-4">
      <h2 style="padding-left:105px">Pilih Tanggal</h2>
      <br>
      <form class="" action="index.html" method="post">
        <select style="width:350px; height:40px">
          <option value="tgl">18-12-2018</option>
          <option value="tgl">18-12-2018</option>
          <option value="tgl">18-12-2018</option>
          <option value="tgl">18-12-2018</option>
          <option value="tgl">18-12-2018</option>
          <option value="tgl">18-12-2018</option>
        </select>
        <br><br>
        <button type="button" class="btn btn-secondary" style="font-size:12px;font-weight:bold">&nbsp;CARI&nbsp;</button>
      </form>

    </div>
  </div>
</div>

@endguest
@endsection
