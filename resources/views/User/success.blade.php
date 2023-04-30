@extends('user.header')
  @section('content')
    @auth
      
    <div class="container marketing">
          <hr class="featurette-divider">

          <div class="section-header">
            <h2>Succes</h2>
            <p>Transaction <span>Succes</span></p>
          </div>
          <div class="succes " >
            <img src="../Image/Order food-bro.png" alt="" width = "200px">
            <p class ="lead">Yay,Your Order is Succes</p>
            <p class ="lead">Sit tight While Admin Confirmed Your Order</p>
            <a href="/home">
                <button class="w-50 btn btn-book-a-table" type="submit">Back to Home</button>
            </a>
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
                  <strong>Phone:</strong> +62 87832179458<br />
                  <strong>Email:</strong> foowd@gmail.com<br />
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