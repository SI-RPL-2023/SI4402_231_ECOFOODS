<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ExoFoods Admin Table</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url ('asset/css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url ('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="icon" href="{{url('image/logo.png')}}" type="image/icon type">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .navcolor{
            background:#4fb848 !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

              <!-- Sidebar -->
              <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion navcolor" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/Admin/homeadmin">
    <div class="sidebar-brand-icon">
    <div class="sidebar-brand-text mx-3">ExoFoods Admin</div>
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/Admin/homeadmin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="/Admin/tableadmin">
        <i class="fas fa-fw fa-table"></i>
        <span>Menu Makanan</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/Admin/validateadmin">
        <i class="fas fa-fw fa-table"></i>
        <span>Transaksi</span></a>
</li>



</ul>
<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Konfirmasi Pesanan</h1>
                    <p class="mb-4">Konfirmasi Pesanan User .</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                            
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <div class="container">
                <form action="" method="POST" enctype="multipart/form-data">
                @method('put') 
                @csrf
                
                    <img class="mb-4" src="../Image/ecofoods.png" alt="" width="100" height="">
              
            
                <div class="form-floating">
                    <label for="floatingInput">Nama</label>
                    <input value = "{{$list -> nama}}"type="text " class="form-control " id="floatingInput" placeholder="" name="nama" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Email</label>
                    <input value = "{{$list -> email}}"type="text " class="form-control " id="floatingInput" placeholder="" name="email" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Alamat</label>
                    <input value = "{{$list -> alamat}}"type="text " class="form-control " id="floatingInput" placeholder="" name="alamat" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Nomor Hp</label>
                    <input value = "{{$list -> no_hp}}"type="text " class="form-control " id="floatingInput" placeholder="" name="no_hp" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Pembayaran</label>
                    <input value = "{{$list -> pembayaran}}"type="text " class="form-control " id="floatingInput" placeholder="" name="pembayaran" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Nama Makanan</label>
                    <input value = "{{$list -> nama_makanan}}"type="text " class="form-control " id="floatingInput" placeholder="" name="nama_makanan" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Harga Makanan</label>
                    <input value = "{{$list->harga}}"type="text " class="form-control " id="floatingInput" placeholder="" name="harga" readonly>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Status Pesanan</label>
                    <select class="form-select form-control " aria-label="Default select example" name="status">
                        <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                        <option value="Terkonfirmasi">Terkonfirmasi</option>
                    </select>
                </div>
                <br>

                <br><br>
                <button class="w-25 btn navcolor text-white"  type="submit">Submit</button>
                <br><br>
                </form>
                </div>

            </div>
        </div>
    </div>

               


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href=/logout>Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('asset/vendor/bootstrap.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('asset/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{url('asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{url('asset/js/demo/datatables-demo.js')}}"></script>

</body>
</html>