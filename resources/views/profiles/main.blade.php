@extends('layouts.main')

@section('title', 'Nge-Mount | Main')

@section('content')
<header class="codrops-header">
   <a href="{{ url('/') }}"><img src="{{ url('/') }}/img/logo/logo.png" class="codrops-header__title" style="width:230px;margin-top:5px;"></img></a>
   <p class="codrops-header__tagline">handheld and circle the world</p>
   <!-- sidebar -->
   <img src="{{ url('/') }}/uploads/{{ Auth::user()->avatar }}" alt="..." style="width:50px;height:50px;border-radius:50%;margin-right: 70px;margin-top: 30px">
   <nav class="dummy-links">
          <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="dummy-links__link">
              Edit Profile <span class="caret"></span>
          </a>
          <a href="#" class="dummy-links__link">
              Jadwal Saya <span class="caret"></span>
          </a>
          <form action="{{ route('logout') }}" method="POST" class="dummy-links__link">
              @csrf
              <input type="submit" value="Logout" style="background: none;border:none"  class="dummy-links__link">
          </form>
   </nav>
</header>
<div style="margin: 30px 60px -30px 0px;">
   <div class="cont s--inactive">
       <!-- cont inner start -->
       <div class="cont__inner">
           <!-- el start -->
           <div class="el">
               <div class="el__overflow">
                   <div class="el__inner">
                       <div class="el__bg"></div>
                       <div class="el__preview-cont">
                           <h2 class="el__heading">Buat Jadwal</h2>
                       </div>

                       <div class="el__content" id="buat-jadwal">
                           <div class="el__text">Buat Jadwal</div>

                           <!-- //form -->
                           <form action="#" id="booking-form">
                                @if(!Auth::user())
                                  <label class="el__text">Anda harus Login terlebih dahulu.</label>
                                  <a href="{{ route('login') }}"><button class="haruslogin-btn " type="button">Login</button></a>
                                @else
                               <div class="tab-content">
                                   <div class="tab-pane" id="step1">
                                       <ul>
                                           <li>
                                               <label>Untuk berapa orang?</label>
                                               <div class="errorTxt"></div>

                                               <input type="number" name="jumlah" required="">

                                           </li>
                                           <li style="list-style: none; display: inline">
                                               <button class="next-btn next-btn1" type="button">Next</button>
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="tab-pane" id="step2">
                                       <ul>
                                           <li>
                                               <label>Pilih Gunung</label>
                                               <div class="errorTxt"></div>
                                               <select name="bf_hours">
                                                   <option value="">Select</option>
                                                   <option value="1">Merapi</option>
                                                   <option value="2">Merbabu</option>
                                                   <option value="3">Prau</option>
                                                   <option value="4">Sindoro</option>
                                                   <option value="5">Bromo</option>
                                                   <option value="6">Sumeru</option>

                                               </select>
                                           </li>
                                           <li>
                                               <label>Meeting Point</label>
                                               <div class="errorTxt"></div>
                                               <input type="text" name="Meeting" required="">
                                           </li>
                                           <li>
                                               <label>Tanggal</label>
                                               <div class="errorTxt"></div>
                                               <input type="date" name="bf_date">
                                           </li>


                                           <li>
                                               <button class="next-btn next-btn2" type="button">Next</button>
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="tab-pane" id="step3">
                                       <ul>
                                           <li>
                                               <label>No. KTP</label>
                                               <div class="errorTxt"></div>
                                               <input type="text" name="bf_fullname">
                                           </li>
                                           <li>
                                               <label>Nama Sesuai KTP</label>
                                               <div class="errorTxt"></div>
                                               <input type="text" name="namaktp">
                                           </li>

                                           <li>
                                               <label>Catatan Tambahan (Optional)</label>
                                               <textarea name="bf_message"></textarea>
                                           </li>
                                           <li>
                                               <button class="submit-btn" type="submit">Buat Jadwal</button>
                                           </li>
                                       </ul>
                                   </div>
                               </div>

                               <div class="progress-wrap">
                                   <div class="line-progress-bar">
                                       <div class="line"></div>
                                       <ul class="checkout-bar">
                                           <li class="progressbar-dots active"><span>step 1</span></li>
                                           <li class="progressbar-dots"><span>step 2</span></li>
                                           <li class="progressbar-dots"><span>Final step</span></li>
                                       </ul>
                                   </div>
                               </div>

                               <div id="loader" style="display: none;">
                                   <img src="//d2erq0e4xljvr7.cloudfront.net/assets/img/ring.svg">
                               </div>
                               @endif
                           </form>
                           <!--  //endform -->



                           <div class="el__close-btn"></div>
                       </div>
                   </div>
               </div>
               <div class="el__index">
                   <div class="el__index-back"></div>
                   <div class="el__index-front">
                       <div class="el__index-overlay" data-index="1"></div>
                   </div>
               </div>
           </div>
           <!-- el end -->
           <!-- el start -->
           <div class="el">
               <div class="el__overflow">
                   <div class="el__inner">
                       <div class="el__bg"></div>
                       <div class="el__preview-cont">
                           <h2 class="el__heading">Cari Jadwal</h2>
                       </div>
                       <div class="el__content">
                           <div class="el__text">Cari Jadwal</div>
                           <!-- //form -->
                           <form action="#" id="ooking-form">
                            @if(!Auth::user())
                                  <label class="el__text">Anda harus Login terlebih dahulu.</label>
                                  <a href="{{ route('login') }}"><button class="haruslogin-btn " type="button">Login</button></a>
                                @else
                               <div class="tab-content">
                                   <div class="tab-pane" id="cari1">
                                       <ul>
                                           <li>
                                               <label>Pilih Gunung</label>
                                               <div class="errorTxt"></div>
                                               <select name="bf_hours">
                                                   <option value="">Select</option>
                                                   <option value="1">Merapi</option>
                                                   <option value="2">Merbabu</option>
                                                   <option value="3">Prau</option>
                                                   <option value="4">Sindoro</option>
                                                   <option value="5">Bromo</option>
                                                   <option value="6">Sumeru</option>
                                               </select>
                                           </li>
                                           <li>
                                               <label>Tanggal</label>
                                               <div class="errorTxt"></div>
                                               <input type="date" name="bf_date">
                                           </li>
                                           <li style="list-style: none; display: inline">
                                               <button class="submit-btn" type="button">Cari</button>
                                           </li>
                                       </ul>
                                   </div>

                               </div>



                               <div id="loader" style="display: none;">
                                   <img src="//d2erq0e4xljvr7.cloudfront.net/assets/img/ring.svg">
                               </div>
                               @endif
                           </form>

                           <!-- //endform -->

                           <div class="el__close-btn"></div>
                       </div>
                   </div>
               </div>
               <div class="el__index">
                   <div class="el__index-back"></div>
                   <div class="el__index-front">
                       <div class="el__index-overlay" data-index="2"></div>
                   </div>
               </div>
           </div>
           <!-- el end -->
           <!-- el start -->
           <div class="el">
               <div class="el__overflow">
                   <div class="el__inner">
                       <div class="el__bg"></div>
                       <div class="el__preview-cont">
                           <h2 class="el__heading">Beli Tiket</h2>
                       </div>
                       <div class="el__content">
                           <div class="el__text">Beli Tiket</div>
                           <!-- //form -->
                           <form action="#" id="ooking-form">
                            @if(!Auth::user())
                                  <label class="el__text">Anda harus Login terlebih dahulu.</label>
                                  <a href="{{ route('login') }}"><button class="haruslogin-btn " type="button">Login</button></a>
                                @else
                               <div class="tab-content">
                                   <div class="tab-pane" id="">
                                       <ul>
                                           <li>
                                               <label>Pilih Gunung</label>
                                               <div class="errorTxt"></div>
                                               <select name="bf_hours">
                                                   <option value="">Select</option>
                                                   <option value="1">Merapi</option>
                                                   <option value="2">Merbabu</option>
                                                   <option value="3">Prau</option>
                                                   <option value="4">Sindoro</option>
                                                   <option value="5">Bromo</option>
                                                   <option value="6">Sumeru</option>
                                               </select>
                                           </li>
                                           <li>
                                               <label>Tanggal</label>
                                               <div class="errorTxt"></div>
                                               <input type="date" name="bf_date">
                                           </li>
                                           <li>
                                               <label>Jumlah</label>
                                               <div class="errorTxt"></div>
                                               <input type="number" name="bf_date">
                                           </li>
                                           <li style="list-style: none; display: inline">
                                               <button class="submit-btn" type="button">Beli</button>
                                           </li>
                                       </ul>
                                   </div>

                               </div>



                               <div id="loader" style="display: none;">
                                   <img src="//d2erq0e4xljvr7.cloudfront.net/assets/img/ring.svg">
                               </div>
                               @endif
                           </form>

                           <!-- //endform -->

                           <div class="el__close-btn"></div>
                       </div>
                   </div>
               </div>
               <div class="el__index">
                   <div class="el__index-back"></div>
                   <div class="el__index-front">
                       <div class="el__index-overlay" data-index="3"></div>
                   </div>
               </div>
           </div>
           <!-- el end -->

           <!-- cont inner end -->
       </div>
    </div>
</div>



    <script src="js/index.js"></script>

    <!-- //form -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js'></script>



    <script src="js/index1.js"></script>
    <!-- form -->

@endsection
