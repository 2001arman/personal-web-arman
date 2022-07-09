<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <title>Arman | Valans</title>
    <link rel="shortcut icon" href="img/man.png" type="image/x-icon">
  </head>
  <body>

    @php(
      $gambar = [
        'valans1.png',
        'valans2.png',
        'valans3.png',
        'valans4.png',
      ]
    )
      
    <!-- nama website -->
    <p class="text-center font-weight-bold underline mx-auto">VALANS</p>
    <!-- akhir nama website -->

    <!-- content -->
    <div class="container-fluid mt-5 px-5" id="container-content">
        <div class="py-4">
            <h5 class="color-primary font-weight-bold text-center">Mobile</h5>
            <h2 class="font-weight-bold text-center">Valans - Aplikasi Skrinning Vaksin Lansia</h2>
        </div>

        <!-- gambar -->
        <div class="px-5 mx-5" id="container-gambar">
            <div class="d-flex text-center">
                <a class="prevBtn my-auto mr-3" id="prev-btn"><img src="img/arrow-left.png" alt="arrow-left"></a>
                <div  class="pemisah-detail"></div>
                @foreach ($gambar as $item)
                <img src="img/projects/{{$item}}" alt="korashop" class="mx-auto Slider" id="img-detail">
                @endforeach
                <div  class="pemisah-detail"></div>
                <a class="nextBtn my-auto ml-3" id="next-btn"><img src="img/arrow-right.png" alt="arrow-left"></a>
            </div>
            <div class="d-flex justify-content-center mt-3">
              @foreach ($gambar as $item)
                <div class="slide"></div>
              @endforeach
            </div>
        </div>
        <!-- akhir gambar -->
        <div class="px-5 mx-5 mt-5 text-justify color-text" id="container-text">
          <span class="font-weight-bold">Valans</span>
          <p class="color-text">&emsp; Valans is a vaccine skinning app for the elderly. The application aims to make it easier for vaccination officers without having to do a vaccine screening first. so that people can do their own vaccine screening. To find out whether the user is eligible to get the vaccine or not, the application will display several questions. This valan application has several additional questions specifically for the elderly such as GDS questions, AMT questions and ADL questions. This application is specifically for people over 50 years old. if you are under 50 years old then you should use the <a href="/vablik" class="color-primary font-weight-bold text-underline hover-none">Vablik</a> app that only have general questions. You can download and install this valans application <a href="https://github.com/2001arman/Valans" target="_blank" class="color-primary font-weight-bold text-underline hover-none">here.</a><br></p>
          <span class="font-weight-bold">Architecture</span>
          <p class="color-text text-justify">&emsp; To build this project, I'm using the <span class="color-primary font-weight-bold hover-none">Flutter</span> framework version 2. This application does not store any user data because it violates a doctor's ethical code.<br></p>
      </div>
    </div>
    <!-- akhir content -->

    @include('footer')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="js/detail-slider.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>