  @extends('user.header')
  @section('content')
  @auth

  <div class="container marketing">
      <hr class="featurette-divider">

      <div class="row featurette" id="AboutUs">
          <div class="col-md-7">
              <div class="section-header">
                  <h2>Thank You</h2>
                  <p>Thank's For <span>Joining Us</span></p>
              </div>
              <p class="lead"> Terimakasih sudah bergabung menjadi bagian dari
                  Eco Foods, dengan bergabungnya anda kami berharap angka foodwaste
                  di Indonesia akan terus berkurang.</p>
              <p class="lead">Food waste adalah masalah global yang terjadi ketika makanan yang masih layak untuk
                  dikonsumsi
                  dibuang atau tidak digunakan. Ini dapat terjadi pada berbagai tahap dalam siklus hidup makanan,
                  mulai dari produksi hingga konsumsi. Penyebab utama dari food waste antara lain adalah standar
                  estetika yang ketat dari peritel, produksi yang berlebihan, dan kurangnya perencanaan dalam pembelian
                  makanan. Ini berdampak negatif pada lingkungan, ekonomi, dan sosial.</p>

              <p class="lead">Beberapa solusi yang dapat digunakan untuk mengurangi food waste antara lain:
              <ul class="lead">
                  <li>-Menyadari dan mengurangi pembelian makanan yang berlebihan</li>
                  <li>-Menyimpan makanan dengan benar untuk memperpanjang umur simpannya</li>
                  <li>-Menggunakan makanan yang tersisa dari makan malam untuk makan siang esok hari</li>
                  <li>-Menyumbangkan makanan yang masih layak untuk dikonsumsi ke bank makanan atau panti asuhan.</li>
              </ul>
              </p>

          </div>
          <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                  height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#ffff" />
                  <image href="../Image/ecofoods.png" alt="" width="100%" height="100%">
              </svg>

          </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="Whats">
          <div class="col-md-7 order-md-2">
              <div class="section-header">
                  <h2>What's</h2>
                  <p>What's Happening <span>Now</span></p>
              </div>
              <p class="lead">Sampah makanan (food waste & food loss) merupakan permasalahan
                  global yang masih sulit teratasi hingga kini. Dalam
                  pengertiannya, food waste merupakan makanan yang telah siap
                  konsumsi oleh manusia namun dibuang begitu saja dan akhirnya
                  menumpuk di tempat pembuangan akhir. Sementara, food loss
                  merupakan sampah makanan yang berasal dari bahan pangan
                  seperti sayuran, buah-buahan atau makanan yang masih mentah
                  namun sudah tidak bisa diolah menjadi makanan dan akhirnya
                  dibuang begitu saja.</p>
          </div>
          <div class="col-md-5 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                  height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#ffff" />
                  <image href="../Image/about-2.jpg" alt="" width="100%" height="100%">
              </svg>

          </div>
      </div>
      <hr class="featurette-divider">

      <div class="row featurette" id="AboutUs">
          <div class="col-md-7">
              <div class="section-header">
                  <h2>Data</h2>
                  <p>Foodwaste <span>Data</span></p>
              </div>
              <p class="lead">Indonesia merupakan negara yang memiliki
                  tingkat food waste yang cukup tinggi dibandingkan negara-negara lain
                  di kawasan ASEAN. Menurut data dari FAO, sekitar 15-20% dari produksi
                  pangan di Indonesia akhirnya menjadi food waste. Ini dapat disebabkan
                  oleh faktor-faktor seperti infrastruktur yang kurang baik, kurangnya
                  kesadaran akan masalah food waste, dan kurangnya akses ke teknologi
                  yang memungkinkan untuk memperpanjang umur simpan makanan.
              </p>
              <p class="lead">Di sisi lain, negara-negara lain di kawasan ASEAN juga memiliki
                  tingkat food waste yang cukup tinggi. Di Malaysia, sekitar 14-15% dari produksi
                  pangan akhirnya menjadi food waste. Sementara di Filipina, sekitar 17% dari produksi
                  pangan akhirnya menjadi food waste. Negara-negara lain di ASEAN juga memiliki tingkat
                  food waste yang cukup tinggi, meskipun angkanya berbeda-beda.
              </p>
              <p class="lead">Perlu diingat, bahwa masalah food waste bukan hanya terjadi di Indonesia,
                  tetapi juga di negara-negara lain di kawasan ASEAN dan juga di seluruh dunia. Karena itu,
                  perlu ada upaya yang dilakukan oleh pemerintah, perusahaan, dan masyarakat untuk mengurangi
                  food waste dan memanfaatkan makanan yang masih layak untuk dikonsumsi.
              </p>
          </div>
          <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                  height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#ffff" />
                  <image href="../Image/data foodwaste.png" alt="" width="100%" height="100%">
              </svg>

          </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="Whats">
          <div class="col-md-7 order-md-2">
              <div class="section-header">
                  <h2>Reduce</h2>
                  <p>Let's Reduce <span>Now</span></p>
              </div>
              <p class="lead">
                  Kita dapat membantu mengurangi sampah foodwaste ini
                  dengan cara membeli makanan yang sisa yang masih layak untuk di konsumsi.
                  Eco Foods sendiri menyediakan jasa untuk membeli makanan sisa layak konsumsi.
              </p>
              <br>
              <p class="lead">
                  <a href="/menu">
                      <button class="w-25 btn btn-book-a-table" type="submit">Menu</button>
                  </a>

              </p>
          </div>
          <div class="col-md-5 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                  height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#ffff" />
                  <image href="../Image/ecofoods.png" alt="" width="100%" height="100%">
              </svg>

          </div>
      </div>


      <hr class="featurette-divider">
  </div>
  <footer id="footer" class="footer">
      <div class="container">
          <div class="row gy-3">
              <div class="col-lg-3 col-md-6 d-flex">
                  <i class="bi bi-geo-alt icon"></i>
                  <div>
                      <h4>Address</h4>
                      <p>
                          Bojongsoang <br />
                          Bandung, BDG 14022 - IDN<br />
                      </p>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 footer-links d-flex">
                  <i class="bi bi-telephone icon"></i>
                  <div>
                      <h4>Customer Service</h4>
                      <p>
                          <strong>Phone:</strong> +62 82178266377<br />
                          <strong>Email:</strong> EcoFoods@gmail.com<br />
                      </p>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 footer-links d-flex">
                  <i class="bi bi-clock icon"></i>
                  <div>
                      <h4>Opening Hours</h4>
                      <p>
                          <strong>Mon-Sun: 8AM</strong> - 23PM<br />
                      </p>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Follow Us</h4>
                  <div class="social-links d-flex">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>Eco Foods</span></strong>. All Rights Reserved
          </div>
      </div>
  </footer>
  @endauth
  @guest


  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Tenth navbar example">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
                  aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <a href="/"><img src="../Image/ecofoods.png" width="80px" height="" alt=""></a>


              <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href=#AboutUS>About Us</a>
                          <img src="" alt="">
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href=#Whats>What's Happening</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href=#Product>Menu</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href=#>Contact Us</a>
                      </li>
                  </ul>
              </div>
              <a class="nav-link" href="/login"><button class="btn btn-book-a-table" type="button">Log in / Sign
                      Up</button></a>
          </div>
      </nav>
  </header>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
              aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
          <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="ffff" />
                  <image href="/image/waste1.jpg" alt="" width="1920px" height="1080px">
              </svg>

              <div class="container">
                  <div class="carousel-caption text-start">
                      <h1>Foodwaste</h1>
                      <p></p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill=" #ffff" />
                  <image href="/image/waste2.jpg" alt="" width="1920px" height="1080px">
              </svg>

              <div class="container">
                  <div class="carousel-caption">
                      <h1>Another Foodwaste</h1>
                      <p></p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill=" #ffff" />
                  <image href="/image/waste3.jpg" alt="" width="1920px" height="1080px">
              </svg>

              <div class="container">
                  <div class="carousel-caption text-end">
                      <h1>We can reduce this</h1>
                      <p></p>
                  </div>
              </div>
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>



  <div class="container marketing">
      <hr class="featurette-divider">

      <div class="row featurette" id="AboutUs">
          <div class="col-md-7">
              <div class="section-header">
                  <h2>About Us</h2>
                  <p>Learn More <span>About Us</span></p>
              </div>
              <p class="lead"> Eco Foods merupakan layanan pemesanan makanan yang bertujuan
                  untuk mengurangi food waste, dengan cara bekerja sama dengan
                  beberapa restoran dan juga umkm dalam bidang fnb untuk menjual
                  makanan sisa penjualan dengan harga murah agar tetap dapat
                  dikonsumsi dan tidak dibuang secara percuma.</p>
          </div>
          <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                  height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#ffff" />
                  <image href="../Image/ecofoods.png" alt="" width="100%" height="100%">
              </svg>

          </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="Whats">
          <div class="col-md-7 order-md-2">
              <div class="section-header">
                  <h2>What's</h2>
                  <p>What's Happening <span>Now</span></p>
              </div>
              <p class="lead">Sampah makanan (food waste & food loss) merupakan permasalahan
                  global yang masih sulit teratasi hingga kini. Dalam
                  pengertiannya, food waste merupakan makanan yang telah siap
                  konsumsi oleh manusia namun dibuang begitu saja dan akhirnya
                  menumpuk di tempat pembuangan akhir. Sementara, food loss
                  merupakan sampah makanan yang berasal dari bahan pangan
                  seperti sayuran, buah-buahan atau makanan yang masih mentah
                  namun sudah tidak bisa diolah menjadi makanan dan akhirnya
                  dibuang begitu saja.</p>
          </div>
          <div class="col-md-5 order-md-1">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                  height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                  preserveAspectRatio="xMidYMid slice" focusable="false">
                  <rect width="100%" height="100%" fill="#ffff" />
                  <image href="../Image/about-2.jpg" alt="" width="100%" height="100%">
              </svg>

          </div>
      </div>
      <hr class="featurette-divider">
      <section id="why-us" class="why-us section-bg">
          <div class="container" data-aos="fade-up">
              <div class="row gy-4">
                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                      <div class="why-box">
                          <h3>Mengapa Eco Foods?</h3>
                          <p>
                              Karena Eco Foods turut bergerak dalam membantu mengurangi food
                              waste yang sangat sulit teratasi, dengan cara memberikan
                              platform bagi para masyarakat yang aware dan ingin turut
                              membantu menanggulangi masalah food waste ini. Dengan cara
                              yang mudah tentunya, yaitu dengan cara memesan makanan di
                              Eco Foods kita bersama dapat membantu mengurangi jumlah food
                              waste yang terjadi di sekeliling kita semua.
                          </p>
                      </div>
                  </div>

                  <div class="col-lg-8 d-flex align-items-center">
                      <div class="row gy-4">
                          <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                  <i class="bi bi-clipboard-data"></i>
                                  <h4>Mengurangi angka food waste</h4>
                                  <p>
                                      Membeli makanan berarti ikut serta dalam membantu
                                      mengatasi jumlah food waste yang ada di sekeliling kita.
                                  </p>
                              </div>
                          </div>


                          <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                  <i class="bi bi-gem"></i>
                                  <h4>Turut membantu UMKM</h4>
                                  <p>
                                      Dengan membeli juga ikut membantu UMKM untuk menghabiskan
                                      penjualan makanan mereka jika tidak terjual sesuai target.
                                  </p>
                              </div>
                          </div>

                          <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                  <i class="bi bi-inboxes"></i>
                                  <h4>Ikut berdonasi dengan Eco Foods</h4>
                                  <p>
                                      Kalian juga bisa memberikan makanan yang kalian beli di
                                      Eco Foods kepada teman-teman kita yang lebih membutuhkan.
                                  </p>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </section>
      <hr class="featurette-divider">
      <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Menu</span></p>
      </div>

      <div class="row gy-5 ">
          @foreach ($list as $l)

          <div class="col-md-4 menu-item">
              <img src="{{ asset ('storage/images/' .$l -> foto) }}" class="menu-img img-fluid" alt="" width="200px" />
              <h4>{{$l -> nama_makanan}}</h4>
              <p class="ingredients">{{$l -> deskripsi}}</p>
          </div>

          @endforeach
      </div>

      <p align="right"><a href="/login" style="color: black">More...</a></p>
      <hr class="featurette-divider">
  </div>


  </div>
  <footer id="footer" class="footer">
      <div class="container">
          <div class="row gy-3">
              <div class="col-lg-3 col-md-6 d-flex">
                  <i class="bi bi-geo-alt icon"></i>
                  <div>
                      <h4>Address</h4>
                      <p>
                          Bojongsoang <br />
                          Bandung, BDG 14022 - IDN<br />
                      </p>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 footer-links d-flex">
                  <i class="bi bi-telephone icon"></i>
                  <div>
                      <h4>Customer Service</h4>
                      <p>
                          <strong>Phone:</strong> +62 82178266377<br />
                          <strong>Email:</strong> EcoFoods@gmail.com<br />
                      </p>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 footer-links d-flex">
                  <i class="bi bi-clock icon"></i>
                  <div>
                      <h4>Opening Hours</h4>
                      <p>
                          <strong>Mon-Sun: 8AM</strong> - 23PM<br />
                      </p>
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Follow Us</h4>
                  <div class="social-links d-flex">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>Eco Foods</span></strong>. All Rights Reserved
          </div>
      </div>
  </footer>
  </body>
  @endguest
  @endsection