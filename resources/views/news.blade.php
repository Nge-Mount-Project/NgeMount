@extends('layouts.app')

@section('title', 'Nge-Mount | News')

@section('news_link')
   <link rel="stylesheet" type="text/css" href="css/normalize-news.css" />
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
   <link rel="stylesheet" type="text/css" href="css/demo-news.css" />
   <link rel="stylesheet" type="text/css" href="css/card.css" />
   <link rel="stylesheet" type="text/css" href="css/pattern.css" />
   <!--[if IE]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
   <script>
   if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
      var root = document.getElementsByTagName('html')[0];
      root.setAttribute('class', 'ff');
   };
   </script>
@endsection

@section('content')
   <div class="demo-1" background="BG.png" style="margin-top:60px">
      <div class="container">
         <div class="content">
            <!-- trianglify pattern container -->
            <div class="pattern pattern--hidden"></div>
            <!-- cards -->
            <div class="wrapper" >
               <div class="card">
                  <div class="card__container card__container--closed">
                     <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice" >
                        <defs>
                           <clipPath id="clipPath1" >
                              <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                              <circle class="clip" cx="960" cy="250" r="992"></circle>
                           </clipPath>
                        </defs>

                        <image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="img/a.jpg" ></image>
                     </svg>
                     <div class="card__content" >
                        <i class="card__btn-close fa fa-times"></i>
                        <div class="card__caption">

                           <p class="card__subtitle">Warga Meminta Jalur Pendakian Gunung Rinjani Lewat Senaru Dibuka</p>
                        </div>
                        <div class="card__copy" >
                           <div class="meta">
                              <img class="meta__avatar" src="img/authors/1.png" alt="author01" />
                              <span class="meta__author">Tulus Wijanarko</span>
                              <span class="meta__date">10/10/2018</span>
                           </div>
                           <p>TEMPO.CO, Lombok Utara - Warga meminta pemerintah daerah (pemda) untuk membuka kembali jalur pendakian Gunung Rinjani, melalui pintu gerbang resmi dari Desa Senaru, Kabupaten Lombok Utara, Nusa Tenggara Barat (NTB). Permintaan itu
                              disampaikan sejumlah pegiat wisata maupun warga Senaru yang berada dekat dengan pintu gerbang jalur pendakian dari arah utara Gunung Rinjani.</p>

                           <p>Nur Saad, salah seorang pegiat wisata pendakian Gunung Rinjani yang kerap memberikan pengarahan gratis kepada para pendaki pemula, mengatakan pintu gerbang utara sudah pantas untuk dibuka kembali, karena kondisi jalurnya aman dari dampak
                              gempa. "Tidak ada longsoran atau yang berubah dari jalurnya. Sampai Bukit Pelawangan Senaru jalurnya aman-aman saja," katanya di Senaru, NTB, Minggu, 9/12.</p>

                           <p>Hal itu diungkapkannya melihat jalur pendakian resmi dari pintu gerbang Senaru berbeda dengan kondisi jalur yang lain. Untuk jalur pendakian dari pintu gerbang Senaru, para pendaki menelusuri kawasan tengah hutan tropis hingga bertemu
                              dengan puncak Bukit Plawangan Senaru.</p>

                           <p>"Kalau berangkat sampai Bukit Plawangan Senaru, waktunya delapan jam. Kalau lanjut turun ke danau, berangkat pagi dari sini (pintu gerbang Senaru), malamnya sudah bisa buka tenda di danau," ujarnya.</p>

                           <p>Namun pria yang juga menyediakan tempat penginapan dan mandi gratis bagi para pendaki ini mengatakan kondisi jalur terkini dari Bukit Plawangan Senaru menuju Danau Segara Anak tidak dapat di akses. "Mentok sampai bukit Pelawangan Senaru
                              saja, tidak bisa lanjut turun ke danau, karena jalurnya ke tutup longsoran," ucap Nur Saad.</p>

                           <p>Meski kondisinya demikian, Nur Saad yakin para pendaki tidak akan rugi hanya dengan menginap semalam di Bukit Plawangan Senaru. Karena baginya, pemandangan Gunung Rinjani yang disuguhkan dari bukit Plawangan Senaru sudah sangat indah dan
                              eksotis.</p>

                           <p>Dia menggambarkan layaknya melihat bentangan alam Gunung Rinjani yang sama persis dengan cetakan foto di salah satu sisi uang Rp10 ribu lama.</p>

                           <p>"Jadi dari sana (Bukit Plawangan Senaru), pendaki sudah dapat nikmatnya sepuluh ribu. Seperti uang sepuluh ribu lama itu, loh, kita bisa lihat birunya Danau Segara Anak, Gunung Baru Jarinya dan juga puncak Rinjani dengan tebing-tebing di
                              pinggirannya," ujar Nur Saad.</p>

                           <P>Hingga kini belum diperoleh keterangan dari Taman Nasional Gunung Rinjani yang berwenang dalam menentukan aman tidaknya jalur pendakian.</P>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__container card__container--closed">
                     <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                        <defs>
                           <clipPath id="clipPath2">
                              <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                              <circle class="clip" cx="960" cy="250" r="992"></circle>
                           </clipPath>
                        </defs>
                        <image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="img/b.jpg"></image>
                     </svg>
                     <div class="card__content">
                        <i class="card__btn-close fa fa-times"></i>
                        <div class="card__caption">
                           <p class="card__subtitle">Sarana-Prasarana ke Gunung Argopuro Mulai Dibangun</p>
                        </div>
                        <div class="card__copy">
                           <div class="meta">
                              <img class="meta__avatar" src="img/authors/3.png" alt="author03" />
                              <span class="meta__author">Esthi Maharani</span>
                              <span class="meta__date">08/10/2018</span>
                           </div>
                           <p>REPUBLIKA.CO.ID, SITUBONDO - Pemerintah Kabupaten (Pemkab) Situbondo, Jawa Timur, membangun sarana dan prasarana serta akses jalan ke objek wisata alam Gunung Argopuro dan Situs Rengganis.</p>

                           <p>"Pengerjaan pembangunan akses jalan sepanjang delapan kilometer dari pintu masuk jalur pendakian Desa Baderan, Kecamatan Sumbermalang sudah selesai dan telah digunakan oleh pengunjung wisata," kata Kepala Dinas Pekerjaan Umum dan Penataan
                              Ruang (PUPR) Pemkab Situbondo, Gatot Siswoyo di Situbondo, Jawa Timur, Sabtu (8/12).</p>

                           <p>Ia menjelaskan dari total pembukaan jalan sepanjang delapan kilometer di lereng Gunung Argopuro, baru sepanjang tiga kilometer yang telah dilakukan pengaspalan (hotmix) dan dapat dilewati kendaraan roda dua maupun roda empat. Sedangkan
                              pembukaan jalan sepanjang lima kilometer hingga rest area belum diaspal namun tetap dapat dilalui kendaraan roda empat dan roda dua.</p>

                           <p>"Kalau anggaran untuk pembukaan jalan dan pengaspalan ke wisata Rengganis dialokasikan dari APBD Kabupaten Situbondo sekitar Rp8 miliar," ujarnya.

                              <p>Ia menambahkan tidak hanya membangun akses jalan, namun di sekitar tempat peristirahatan juga dibangun sarana dan prasarana penunjang wisata lainnya, seperti spot untuk swafoto bagi pengunjung dengan latar belakang alam pegunungan.</p>

                              <p>Pembangunan sarana prasarana serta akses jalan di sejumlah objek wisata itu untuk menyambut tahun kunjungan wisata 2019 yang telah dicanangkan Pemkab Situbondo.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__container card__container--closed">
                     <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                        <defs>
                           <clipPath id="clipPath3">
                              <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                              <circle class="clip" cx="960" cy="250" r="992"></circle>
                           </clipPath>
                        </defs>
                        <image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="img/c.jpg"></image>
                     </svg>
                     <div class="card__content">
                        <i class="card__btn-close fa fa-times"></i>
                        <div class="card__caption">

                           <p class="card__subtitle">Gunung Gamalama Meletus, Hujan Abu Guyur Ternate</p>
                        </div>
                        <div class="card__copy">
                           <div class="meta">
                              <img class="meta__avatar" src="img/authors/2.png" alt="author02" />
                              <span class="meta__author">Hairil Hiar</span>
                              <span class="meta__date">05/10/2018</span>
                           </div>
                           <p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup Liputan6.com, Ternate - Gunung Api Gamalama, Ternate, Maluku Utara, kembali mengeluarkan abu vulkanik, Kamis (4/10/2018),
                              kemaren sekitar pukul 11.52 WIT. Tampak abu vulkanik dengan ketinggian 200-300 meter dari atas puncak kawah gunung.</p>

                           <p>Kepala Pos Pengamatan Gunung Api Gamalama, Darno Lamane, mengatakan, kolom abu berwarna kelabu dengan intensitas sedang-tebal itu condong ke barat laut.
                           </p>
                           <P>Darno menyatakan, Gunung Api Gamalama mengalami erupsi minor. Aktivitas erupsi tersebut sebelumnya diawali dengan peningkatan kegempaan vulkanik yang sangat singkat. Sekitar satu jam sebelum kejadian erupsi terekam delapan kali gempa
                              vulkanik.
                           </P>

                           <p>Darno mengimbau kepada warga di sekitar gunung Gamalama maupun pengunjung dan wisatawan agar tidak melakukan aktivitas di dalam radius 1,5 kilometer.
                           </p>
                           <p>"Juga bagi warga yang tinggal di sekitar aliran Sungai (Kalimati) yang berhulu di Gunung Gamalama agar mewaspadai ancaman bahaya lahar dingin," ujar dia.
                           </p>
                           <p>Darno bilang, hasil pengamatan pada Kamis siang pukul 12.00-18.00 WIT, tampak cuaca di Ternate cerah, berawan, dan hujan. Angin bertiup lemah ke arah utara dan barat laut. Suhu udara 25-31 derajat Celsius dan kelembapan udara 85-91
                              persen.
                           </p>
                           <p>Secara visual, kata Darno, gunung kabut 0-I hingga kabut 0-II. Asap kawah bertekanan lemah teramati berwarna putih dan kelabu dengan intensitas sedang hingga tebal dengan ketinggian mencapai 200-300 meter di atas puncak kawah.
                           </p>
                           <p>Darno menambahkan, aktivitas kegempaan itu sampai Kamis sore masih didominasi gempa tremor menerus dengan tingkat kewaspadaan level dua atau waspada.
                           </p>
                           <p>Pengamatan Liputan6.com, aktivitas warga di Kota Ternate saat terjadi kegempaan masih berjalan biasa, sementara wilayah Kelurahan Takome, Kecamatan Ternate Barat, Ternate, hingga pukul 15.20 WIT masih terjadi hujan abu vulkanik.</p>

                           <p>Darno mengimbau, kepada seluruh masyarakat di kota bermoto Bahari Berkesan itu agar tidak panik.</p>

                           <p>"Masyarakat bisa menghimpun informasi dari sumber tepercaya dan jangan dari informasi yang belum ada kebenarannya," ucap Darno.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__container card__container--closed">
                     <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                        <defs>
                           <clipPath id="clipPath4">
                              <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                              <circle class="clip" cx="960" cy="250" r="992"></circle>
                           </clipPath>
                        </defs>
                        <image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="img/d.jpg"></image>
                     </svg>
                     <div class="card__content">
                        <i class="card__btn-close fa fa-times"></i>
                        <div class="card__caption">

                           <p class="card__subtitle">Update Aktivitas Gunung Merapi Akhir November, Kubah Lava Terus Tumbuh dan 388 Kali Gempa </p>
                        </div>
                        <div class="card__copy">
                           <div class="meta">
                              <img class="meta__avatar" src="img/authors/2.png" alt="author02" />
                              <span class="meta__author">Fathul Amanah</span>
                              <span class="meta__date">20/11/2018</span>
                           </div>
                           <p>TRIBUNNEWS.COM - Gunung Merapi masih terus memperlihatkan aktivitasnya setelah dinyatakan berstatus Waspada level II.</p>

                           <p>Balai Penyelidikan dan Pengembangan Teknologi Kebencanaan Geologi (BPPTKG) melalui akun Twitternya @BPPTKG pada Jumat (30/11/2018) malam memberikan informasi terbaru.
                           </p>
                           <p>Yakni informasi seputar pertumbuhan kubah lava hingg data kegempaan yang terjadi di Gunung Merapi selama sepekan 23-29 November 2018.
                           </p>
                           <P>Dalam informasi yang diunggah, mencatatkan bahwa volume kubah lava per 29 November 2018 sebesar 329.000 m3 dengan laju pertumbuhan rata-rata 2.500 m3 per hari, relatif sama dari minggu sebelumnya.
                           </P>
                           <p>Jumlah tersebut meningkat dari data terakhir per 22 November mencapai 308.000 m3.
                           </p>
                           <P>Disimpulkan, saat ini kubah lava masih stabil dengan laju pertumbuhan yang masih rendah yakni kurang dari 20.000 m3 per hari.
                           </P>

                           <P>Terjadi total 388 gempa di Gunung Merapi
                           </P>
                           <P>Rangkuman Tribunnews dari data BPPTKG, telah terjadi total 388 gempa selama sepekan ini.
                           </P>
                           <P>Terdiri dari 34 kali gempa hembusan (DG), sekali gempa Vulkanik Dalam (VTA), 4 kali gempa Vulkanik Dangkal (VB), 15 kali gempa Fase Banyak (MP), 309 kali gempa Guguran (RF), 20 kali gempa Low Frekuensi (LF) dan 5 kali gempa Tektonik (TT).
                           </P>


                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__container card__container--closed">
                     <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                        <defs>
                           <clipPath id="clipPath5">
                              <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                              <circle class="clip" cx="960" cy="250" r="992"></circle>
                           </clipPath>
                        </defs>
                        <image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="img/e.jpg"></image>
                     </svg>
                     <div class="card__content">
                        <i class="card__btn-close fa fa-times"></i>
                        <div class="card__caption">
                           <p class="card__subtitle">Tinggal di Kaki Gunung Slamet, Warga Purbalingga Malah Minus Air Bersih</p>
                        </div>
                        <div class="card__copy">
                           <div class="meta">
                              <img class="meta__avatar" src="img/authors/1.png" alt="author01" />
                              <span class="meta__author">Muhammad Ridlo</span>
                              <span class="meta__date">16/09/2018</span>
                           </div>
                           <p>Liputan6.com, Purbalingga - Hingga pertengahan September 2018 ini, sebanyak 29 Kabupaten/Kota di Jawa Tengah mengalami krisis air bersih. Sejauh ini, hanya empat wilayah yang lolos dari bencana musim kemarau ini.</p>

                           <P>Dibanding wilayah lain, wilayah Purbalingga termasuk yang tertinggi meminta bantuan air bersih. Hingga Jumat, 14 September 2018, Badan Penanggulangan Bencana Daerah (BPBD) Purbalingga sendiri mengirimkan bantuan air bersih sebanyak 1.171
                              tangki.
                           </P>
                           <P>Ironis. Pasalnya, sebagian wilayah Purbalingga berada di kaki Gunung Slamet yang mestinya kaya sumber air. Nyatanya, wilayah ini tak luput dari krisis air bersih.</P>

                           <P>Kepala Seksi Kedaruratan dan Logistik BPBD Purbalingga, Muhsoni mengatakan pada musim kemarau ini, nyaris seluruh mata air terdampak. Seturut kemarau, mata air mengecil dan lantas mati.</P>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card__container card__container--closed">
                     <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                        <defs>
                           <clipPath id="clipPath6">
                              <!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
                              <circle class="clip" cx="960" cy="250" r="992"></circle>
                           </clipPath>
                        </defs>
                        <image clip-path="url(#clipPath6)" width="1920" height="500" xlink:href="img/f.jpg"></image>
                     </svg>
                     <div class="card__content">
                        <i class="card__btn-close fa fa-times"></i>
                        <div class="card__caption">

                           <p class="card__subtitle">Semeru Bertopi, Adakah Hubungannya dengan Aktivitas Gunung?</p>
                        </div>
                        <div class="card__copy">
                           <div class="meta">
                              <img class="meta__avatar" src="img/authors/6.png" alt="author06" />
                              <span class="meta__author">ardie permadi</span>
                              <span class="meta__date">11/12/2018</span>
                           </div>
                           <p>KOMPAS.com - Fenomena unik terjadi di puncak Gunung Semeru. Puncak para dewa itu tertutup awan yang rupanya mirip topi caping para petani.</p>
                           <p> Seperti dijelaskan dalam artikel Kompas.com sebelumnya dan disebutkan oleh Kepala Pusat Data Informasi dan Humas Badan Nasional Penanggulangan Bencana (BNPB) Sutopo Purwo Nugroho, awan unik ini berjenis Altocumulus Lenticular Kepala Sub
                              Bidang Prediksi Cuaca Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) Agie Wandala Putra berkata bahwa Altocumulus Lenticular biasanya terbentuk di sekitar bukit-bukit dan gunung-gunung akibat pergerakan udara di kawasan pegunungan.
                              Namun, perlu ditegaskan bahwa fenomena ini tidak ada kaitannya dengan aktivitas Gunung Semeru. Baca juga: Gunung Semeru Tampak Cantik Bertopi, Fenomena Apa? "Tidak ada (kaitannya), kejadian serupa bisa terjadi pada gunung yang bukan gunung
                              api," kata Kepala Bidang Mitigasi Gunung Api, Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG), Badan Geologi Wawan Irawan melalui pesan singkat, Selasa (11/12/2018). Di samping awan berbentuk caping, Wawan juga menjelaskan bahwa pada
                              tanggal 10 Desember 2018 kemarin cuaca di sekitar Gunung Semeru berawan, dengan tiupan angin yang lemah ke arah timur dan barat daya. Suhu udara pun terpantau sekitar 23-24 derajat celcius. Awan yang menutupi puncak Semeru pun membuat asap
                              kawah utama tertutupi, meskipun gunung api terlihat jelas. Jika dilihat dari kegempaannya, terekam 26 kali gempa letusan (ER) dengan amplitudo 10-25 mm, dengan lama gempa 60-100 detik. Gunung Semeru juga terekam 16 kali mengalami gempa
                              hembusan (HB) dengan amplitudo 4-7 mm dengan lama gempa 20-120 detik. Lalu, tiga kali gempa tektonik jauh (TJ) dengan amplitudo 10-23 mm. "Gunung Semeru pada tingkat aktivitas Waspada (level II)," tuturnya melalui pesan singkatnya, Selasa
                              (11/12/2018).</p>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /cards -->
         </div><!-- /content -->
         <!-- Related demos -->

      </div>
   </div>

   <!-- /container -->
   <!-- JS -->
   <script src="js/vendors/trianglify.min.js"></script>
   <script src="js/vendors/TweenMax.min.js"></script>
   <script src="js/vendors/ScrollToPlugin.min.js"></script>
   <script src="js/vendors/cash.min.js"></script>
   <script src="js/Card-circle.js"></script>
   <script src="js/demo.js"></script>
@endsection
