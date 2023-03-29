@extends('user.header')
  @section('content')
    @auth
      
    <div class="container marketing">
          <hr class="featurette-divider">

          <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Menu</span></p>
          </div>
          <div class="row gy-5 " >
          @foreach ($list as $l)
                
                    <div class="col-md-4 menu-item">
                      <img
                        src="{{ asset ('storage/images/' .$l -> foto) }}"
                        class="menu-img img-fluid"
                        alt=""
                        width = "200px"
                    />
                    <h4>{{$l -> nama_makanan}}</h4>
                    <p class="ingredients">{{$l -> deskripsi}}</p>
                    <p class="price">Rp {{number_format($l -> harga)}}</p>
                    <p><a class="btn btn-book-a-table" href="/detail/{{$l -> id}}">View details &raquo;</a>
                    <a class="btn btn-book-a-table" href="/checkout/{{$l -> id}}">Check Out &raquo;</a></p>
                  </div>  
                        
          @endforeach
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
            &copy; Copyright <strong><span>foowd</span></strong
            >. All Rights Reserved
          </div>
        </div>
      </footer>
    @endauth
    @endsection