<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/admincss.css">
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">


      <a class="navbar-brand" href="#" >
        <img src="../img/Logo_kemenag.png" alt="Logo" style="width:40px;">
      </a>
      <a class="navbar-brand text-white" href="#" >KEMENTRIAN AGAMA KABUPATEN TRENGGALEK</a>
      <!-- <form class="form-inline my-2 my-lg-0 ml-auto"> -->
          <!-- <ul class="nav justify-content-end"> -->
                <form class="form-inline my-2 my-lg-0 ml-auto" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                <span class="navbar-text">
                  <a class="text-center" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  
                </span>
                      @csrf
                  </form>
            <!-- </ul> -->
        <!-- </form> -->
      
        
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-md-2  pt-4 navigasi">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ asset('kelolaAdmin') }}"><i class="fas  fa-user mr-2"></i> Daftar Petugas</a> <hr>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ asset('rekappengunjung') }}"><i class="fas  fa-history mr-2"></i> Rekap Pengunjung</a> <hr>
          </li>
        </ul>
      </div>
      @yield('container');

    </div>
     <footer >
      <div class="text-center p-2 text-secondary"  >
      © 2021 Copyright:
      <a href="https://www.uin-malang.ac.id/" class="text-secondary">UIN Maulana Malik Ibrahim Malang</a>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>