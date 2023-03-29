<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/asset/login.css">
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <title>Foowd</title>
</head>
<body>
    <section class="h-100 gradient-form" style="background: #a6cba4">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div
              class="card rounded-3 text-black"
              style="background-color: #fff"
            >
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body py-md-5 mx-md-4">
             
                  @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
            <form action="/ceklogin" method="POST">
            @csrf
                <a href="/">
                    <img class="mb-4" src="../Image/logoecofoods.png" alt="" width="100" height="">
                </a>
                      <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name = "email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name= "password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br><br>
                      <div class="text-center pb-1 mb-2">
                        <button class="w-50 btn btn-book-a-table"  type="submit">Log in</button>
                        <br><br>
                        <a class="nav-link" href="/adminlogin">
                            <button class="w-50 btn btn-book-a-tables"  type="button">Log in Admin</button>
                        </a>
                      </div>
                        <p>
                            Doesn't have any account? <a href="/register">Sign Up</a>
                        </p>

                    
                    </form>
                  </div>
                </div>
                <div
                  class="col-lg-6 d-flex align-items-center gradient-custom-2"
                >
                  <div>
                    <img
                      src="../Image/Login-bro.png "
                      style="width: 80%"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

  