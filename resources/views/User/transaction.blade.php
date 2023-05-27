@extends('user.header')
  @section('content')
    @auth
      
      <div class="container marketing">
          <hr class="featurette-divider">
          <div class="section-header">
            <h2>Transaction</h2> 
            <p>This is your  <span>Transaction</span></p>
          </div>
  
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Makanan</th>
                                            <th>Harga</th>
                                            <th>Status Pesanan</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                    @foreach($list as $l)
                                        <tr>
                                        <td>{{$l->nama_makanan}}</td>
                                            <td>Rp {{$l->harga}}</td>
                                            <td>{{$l->status}}</td>
                                            @if($l->status=='konfirmasi')
                                            <td><a href="/invoice/{{$l->id}}">cetak invoice</a></td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                        <hr class="featurette-divider">

      </div> 
      <footer id="footer" class="footer fixed-bottom">
        <div class="container">
          <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
              <i class="bi bi-geo-alt icon"></i>
              <div>
                <h4>Address</h4>
                <p>
                  Bojongsoang<br />
                  Bandung, BDG 14022 - IDN<br/>
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
              <i class="bi bi-telephone icon"></i>
              <div>
                <h4>Customer Service</h4>
                <p>
                  <strong>Phone:</strong> +62 87832179458<br />
                  <strong>Email:</strong> ecofoods@gmail.com<br />
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

