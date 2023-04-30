@extends('user.header')
  @section('content')
    @auth
      
      <div class="container marketing">
          <hr class="featurette-divider">
          <div class="section-header">
            <h2>Food</h2>
            <p>Food <span>Details</span></p>
          </div>

          <section class = "detailsection">
      <div>
        <img src="{{ asset ('storage/images/' .$list -> foto) }}"  width ="500 px"/>
      </div>

      <article>
    
      <h4>{{$list -> nama_makanan}}</h4>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6" style="margin-left: -12px;">
                <p class="price">Rp {{$list -> harga}}</p>
                </div>
        <br />

        <p class="ingredients">{{$list -> deskripsi}}</p>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row align-items-center">
        </div>

        <span class="heading">User Rating</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p>4.1 average based on 254 reviews.</p>
        <hr style="border:3px solid #f1f1f1">
    
        <div class="row">
          <div class="side">
            <div>5 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-5"></div>
            </div>
          </div>
          <div class="side right">
            <div>150</div>
          </div>
          <div class="side">
            <div>4 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-4"></div>
            </div>
          </div>
          <div class="side right">
            <div>63</div>
          </div>
          <div class="side">
            <div>3 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-3"></div>
            </div>
          </div>
          <div class="side right">
            <div>15</div>
          </div>
          <div class="side">
            <div>2 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-2"></div>
            </div>
          </div>
          <div class="side right">
            <div>6</div>
          </div>
          <div class="side">
            <div>1 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-1"></div>
            </div>
          </div>
          <div class="side right">
            <div>20</div>
          </div>
        </div>
      </article>

    </section>
    <br><br>

    <section class ="backbutton">

      <p><a class="btn btn-book-a-table" href="/menu">Back </a>
      <a class="btn btn-book-a-table" href="/checkout/{{$list -> id}}">Check Out &raquo;</a></p>
     
    </section>

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
            &copy; Copyright <strong><span>Eco Foods</span></strong
            >. All Rights Reserved
          </div>
        </div>
      </footer>
    @endauth
  @endsection