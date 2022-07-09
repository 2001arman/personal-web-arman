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
    <title>Arman | KORA Petshop</title>
    <link rel="shortcut icon" href="img/man.png" type="image/x-icon">
  </head>
  <body>

    @php(
      $gambar = [
        'korashop.png',
        'korashop2.png',
        'korashop3.png',
        'korashop4.png',
        'korashop5.png',
        'korashop6.png',
        'korashop7.png',
        'korashop8.png',
        'korashop9.png',
      ]
    )
      
    <!-- nama website -->
    <p class="text-center font-weight-bold underline mx-auto">KORA Petshop</p>
    <!-- akhir nama website -->

    <!-- content -->
    <div class="container-fluid mt-5 px-5" id="container-content">
        <div class="py-4">
            <h5 class="color-primary font-weight-bold text-center">Website</h5>
            <h2 class="font-weight-bold text-center">KORA Petshop Website</h2>
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
        <div class="px-5 mx-5 mt-5 color-text" id="container-text">
            <span class="font-weight-bold">Korashop</span>
            <p class="color-text text-justify">&emsp; Korashop is a UMKM that focuses on selling veterinary products. such as cat food, cages and cat medicine. Korashop has been selling since 2020. Due to the covid outbreak, the owner wants to create a personal website to make it easier to sell Korashop products. So this project aims to make it easier for Korashop customers to make transactions. This project focuses on UI/UX and user convenience. You can see the Korashop website <a href="https://korashop.herokuapp.com/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">here</a>.<br></p>
            <span class="font-weight-bold">Features</span>
            <ul>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Login & Register.</span> This feature is to make it easier for users to store their personal data.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Buy product.</span> Main features to buy products on korashop such as cat food, cages and cat medicine.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Pet hotel.</span> a feature to leave your pet at the Korashop. Pets can be picked up or delivered directly to Korashop</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Consultation.</span> the feature to ask or consult the korashop admin regarding your product or pet.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Admin panel.</span> There is also an admin panel to manage Korashop products.</li>
            </ul>
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