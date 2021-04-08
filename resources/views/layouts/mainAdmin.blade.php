<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/stylesheet.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
      <div class="container-fluid ">
        <div class="logo">
          <a class="navbar-brand" href="#">
          <img src="../img/Logo_kemenag.png" width="80" height="80" class="d-inline-block align-top" alt="">
        </div>

        <div class="bg-text">
          <a class="navbar-brand" style="text-align:center" >KANTOR KEMENTRIAN AGAMA KABUPATEN TRENGGALEK 
          <br> Jl. Soekarno Hatta, Gg. Apel, Kelutan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66313
          <br> Website : http://kemenagtrenggalek.com/ | Facebook : Kemenag Kabupaten Trenggalek </a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
      </div>
    </nav>
    <div class="bg"> 
   
      @yield('container')
      </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="bg-success">
      <div class="text-center p-2 text-white" style="background-color: rgba(0, 0, 0, 0.2); ">
      © 2021 Copyright:
      <a class="text-white" href="https://www.uin-malang.ac.id/">UIN Maulana Malik Ibrahim Malang</a>
      </div>
    </footer>
  

  
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>