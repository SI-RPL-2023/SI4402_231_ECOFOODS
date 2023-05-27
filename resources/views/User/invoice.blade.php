<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/asset/home.css">
    <link rel="icon" href="image/logo.png" type="image/icon type">
    <link href="/asset/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>EcoFoods</title>
</head>


<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <center><p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p></center>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">{{$list->nama}}</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> {{$list->id}}</li>
          <li class="text-black mt-1">{{$list->created_at}}</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>Pro Package</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">total harga= {{$list->harga}}
          </p>
        </div>
        <hr>
      </div>
      
        <hr style="border: 2px solid black;">
      </div>
      <div class="text-center" style="margin-top: 90px;">
      
      </div>

    </div>
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
  

    </div>
  </div>
</div>