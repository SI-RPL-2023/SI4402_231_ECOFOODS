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
    <link rel="stylesheet" href="/asset/regis.css">
    <link rel="icon" href="/image/ecofoods.png" type="image/icon type">
    <title>Foowd</title>
</head>
<body class="text-center">
    <span class="border form-signin w-100 m-auto rounded" >
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
            <form action="/cekregis" method="POST">
            @csrf
                <a href="/">
                    <img class="mb-4" src="../Image/ecofoods.png" alt="" width="100" height="">
                </a>
            
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Name" name="nama">
                    <label for="floatingPassword">Name</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="number" class="form-control" id="floatingInput" placeholder="Phone Number" name="no_hp">
                    <label for="floatingInput">Phone Number</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="date" class="form-control" id="floatingPassword" placeholder="Date Of Birth" name="birth">
                    <label for="floatingPassword">Date of Birth</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_confirmation">
                    <label for="floatingPassword">Password Confirmation</label>
                </div>
                <br><br>
                <button class="w-25 btn btn-book-a-table"  type="submit">Sign up</button>
                <br><br>
                </form>
                <br><br>
                <p>
                    Already have an account? <a href="/login">Log in</a>
                </p>
    </span>  
</body>


