<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <link rel="icon" type="image/png" href="{{ asset('images/logo-transparent.png') }}">
</head>
<body class="admin-body" >

<div class="container bg-white">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand " href="/">KNA Construction</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/proyek">Proyek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gambarProyek">Gambar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/testimoni">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/response">Respon</a>
        </li>
      </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
       <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <input class="btn" type="submit" name="logout" value="Logout">
                        </form>
      </div>
    </div>
  </div>
</nav>
        </div>

          <div div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
           <img src="{{ asset('images') }}/KNA.jpeg" class="img-fluid" width="200px" alt="Logo SP Digital">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <h4 class="text-center">Data</h4>
            {{-- Use the user name who logged in --}}
            <p class="text-center">Selamat datang <span class="text-primary">   </span> </p>
        </div>
    </div>
</div>



        {{-- Main Start --}}
        @yield('content')
        {{-- Main End --}}

<div class="col-12">
          <div class="footer text-center p-3">
            Copyright &copy;2024 
          </div>
        </div>
    </div>
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable();
        });
    </script>
</body>
</html>