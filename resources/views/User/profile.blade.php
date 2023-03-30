@extends('user.header')
@section('content')
      
@auth



<section id="insert">
      <div class="container">
        <center>
          <br />
        </center>
        <br />
        <h2 class="text" align="center">Hi {{ Auth::user()->nama }}</h2>
      </div>
      <br />
      <br />
      <div class="container insert">
        <form class="row g-3 form-input " enctype="multipart/form-data" action="/updateprof" method="POST">
          @csrf
          <div class="col-md-12">
            <label for="nama" class="form-label">Full Name</label>
            <input
              type="text"
              class="form-control"
              name ="nama"
              value="{{ Auth::user()->nama }}"
            />
          </div>

          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              name = "email"
              value="{{ Auth::user()->email}}"
            />
          </div>
          <div class="col-md-6">
            <label for="number" class="form-label">Phone Number</label>
            <input
              type="number"
              class="form-control"
              name = "no_hp"
              value="{{ Auth::user()->no_hp}}"
            />
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">New Password</label>
            <input
              type="password"
              class="form-control"
              name = "password"
            />
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Confirmation Password</label>
            <input
              type="password"
              class="form-control"
              name = "password_confirmation"
            />
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Address</label>
            <input
              type="text"
              class="form-control"
              id="inputAddress"
              name ="alamat"
              value="{{ Auth::user()->alamat}}"
            />
          </div>


          <div class="col-12">
            <button type="submit" class="btn btn-book-a-table">Update</button>
          </div>
        </form>
      </div>
    </section>
    <br><br>
      <footer id="footer" class="footer fixed-bottom">
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
            &copy; Copyright <strong><span>ecofoods</span></strong
            >. All Rights Reserved
          </div>
        </div>
      </footer>
    @endauth
    @endsection
    @guest
    {{ route('logout') }}
    @endguest