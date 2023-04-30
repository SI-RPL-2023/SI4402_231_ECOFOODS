@extends('user.header')
  @section('content')
    @auth
      
    <div class="container">
    <hr class="featurette-divider">
    <span class=" form-signin w-100 m-auto rounded" >
      <section>
  </span>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../Image/foowd.png" alt="" width="100" height="">
      <div class="section-header">
            <h2>Your Order</h2>
            <p>Check Out <span>Item</span></p>
          </div>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="section-header">Your cart</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">{{$list -> nama_makanan}}</small>
            </div>
            <span class="text-muted">Rp {{$list -> harga}}</span>
          </li>
        </ul>

        <form class="card p-2" method ="POST" action = "/checkout">
            @csrf 
            <input type="hidden" name="nama_makanan" value="{{$list -> nama_makanan}}">
            <input type="hidden" name="harga" value="{{$list -> harga}}">
            <img src="{{ asset ('storage/images/' .$list -> foto) }}" alt="">
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Personal Data</h4>
          <div class="row g-3">

            <div class="col-12">
              <label for="username" class="form-label">Name</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="Name" required name="nama" value ="{{ Auth::user()->nama }}">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required name = "email"  value ="{{ Auth::user()->email }}">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="" required name ="alamat" value ="{{ Auth::user()->alamat }}">
              <div class="invalid-feedback">
                Please enter your  address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">No hp </label>
              <input type="text" class="form-control" id="address2" placeholder="" required name = "no_hp" value ="{{ Auth::user()->no_hp }}">
            </div>

          </div>

          <hr class="my-4">

          

          <hr class="my-4">

          <button class="w-100 btn btn-book-a-table" type="submit">Pay</button>
        </form>
      </div>
    </div>
    <hr class="featurette-divider">
</div>


</section>
 

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
      </footer>
    @endauth
  @endsection