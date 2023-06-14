<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EcoFoods Admin Table</title>

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
    <div class="sidebar-brand-text mx-3">EcoFoods Admin</div>
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
    <a class="nav-link" href="/Admin/tableadmin">
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
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Menu Makanan</h1>
        <p class="mb-4">Admin Melakukan Edit Menu Makanan yang akan dijual kepada user</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <div class="container">
                        <form method="POST" action="{{ route('updatemakanan', $makanan->id) }}" enctype="multipart/form-data">
                            @csrf
                            <img class="mb-4" src="/Image/ecofoodss.png" alt="" width="100" height="">
                            @method('PUT')
                                <div class="form-floating">
                                <input id="nama_makanan" type="text" class="form-control @error('nama_makanan') is-invalid @enderror" name="nama_makanan" value="{{ old('nama_makanan', $makanan->nama_makanan) }}" required autofocus>
                                @error('nama_makanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label for="floatingInput">Nama Makanan</label>
                                </div>
                                <br>

                                <div class="form-floating">
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi', $makanan->deskripsi)}}">
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label for="floatingPassword">Deskripsi Makanan</label>
                                </div>
                                <br>
                                
                                <div class="form-floating">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $makanan->harga) }}" required>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                    
                                <label for="floatingInput">Harga makanan</label>
                                </div>
                                <br>
                                
                                <div class="form-floating">
                                <input id="foto" type="file" class="form-control-file @error('foto') is-invalid @enderror" name="foto" accept="image/*">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label for="floatingInput">Foto Makanan</label>
                                </div>
                                <br><br>
                                
                                <div class="form-group row mb-2">
                                <div class="col-md-6 offset-md-0">
                                <button class="w-50 btn navcolor text-white"  type="submit">Update Makanan</button>
                                    </button>
                                </div>
                            </div>
                                <br><br>
                                </form>
                                </div>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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