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
    <title>Arman | Gasturah</title>
    <link rel="shortcut icon" href="img/man.png" type="image/x-icon">
  </head>
  <body>

    @php(
      $gambar = [
        'gasturah1.png',
        'gasturah2.png',
        'gasturah3.png',
        'gasturah4.png',
      ]
    )
      
    <!-- nama website -->
    <p class="text-center font-weight-bold underline mx-auto">GASTURAH</p>
    <!-- akhir nama website -->

    <!-- content -->
    <div class="container-fluid mt-5 px-5" id="container-content">
        <div class="py-4">
            <h5 class="color-primary font-weight-bold text-center">Mobile</h5>
            <h2 class="font-weight-bold text-center">Aplikasi Gasturah (Gas To Situs Bersejarah)</h2>
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
        <div class="px-5 mx-5 mt-5 text-justify" id="container-text">
            <span class="font-weight-bold color-text">Gasturah</span>
            <p class="color-text text-justify">&emsp; There are still many local tourists who are less interested in visiting historical sites in Indonesia. How to build an application that can increase the interest of local tourists to visit historical sites? How to help local tourists to recognize historical sites in Indonesia? We want to build an application that provides interesting articles about historical sites in Indonesia and helps local tourists to be able to recognize a historical site in Indonesia through a smartphone camera. With that, the interest of local tourists to visit historical sites is increasing and local tourists can find out the names, addresses, and history of historical sites in Indonesia. We want all Indonesian people to be able to preserve the historical sites in this country and not let these places be buried by time.<br>
            &emsp; We want to make an application called gasturah, an application that will provide information about historical sites in Indonesia and can identify historical sites in Indonesia through the image recognition feature. So that users can recognize and study historical sites that are around them and preserve them so that they are not buried by the times. Besides, this application also informs the nearest historical sites from the user's location. Users can also share their experiences on historical sites that they have visited.</p>

            <span class="font-weight-bold color-text">Features</span> <br>
            <span class="color-text text-justify">&emsp; This application has several features to make it easier for users such as:</span>
            <ul>
              <li class="color-text"><span class="color-primary font-weight-bold text-underline hover-none">Scan historical places.</span> This is the main feature of this app. users can open the scan feature, then the application will open the camera, then users can directly point the camera at historical places. The images that users take will be sent to machine learning via google cloud, then historical data sent from machine learning will be directly displayed to the app.</li>
              <li class="color-text"><span class="color-primary font-weight-bold text-underline hover-none">Login & Register.</span> This feature is to make it easier for users to store their personal data such as names, photos and photo uploads.</li>
              <li class="color-text"><span class="color-primary font-weight-bold text-underline hover-none">share photos.</span> a feature that serves to share photos of users in historical places. like instagram.</li>
              <li class="color-text"><span class="color-primary font-weight-bold text-underline hover-none">Recommendations for nearby historical places.</span> This feature also uses machine learning. the system will recommend historical places that are close to the user's position.</li>
            </ul>

            

            <span class="font-weight-bold color-text">Resources & Architecture</span> <br>
            <span class="color-text text-justify">&emsp; To build this application, we use several programming languages and cloud services. For android side we use kotlin programming language. For machine learning we use python and tensorflow. For backend we use php and flask python for API and use google cloud service for database hosting. You can download APK in <a href="https://github.com/Lasteinsa/app_package_gasturah/releases/tag/v0.1.0-alpha" target="_blank" class="color-primary font-weight-bold text-underline hover-none">here,</a> see our android source code in <a href="https://github.com/2001arman/capstone_gasturah" target="_blank" class="color-primary font-weight-bold text-underline hover-none">here</a> and see our final protoype in <a href="https://www.figma.com/proto/QRNvDrjtPEjN7aZWAMbGSl/Fix-Model?node-id=251%3A1241&scaling=scale-down&page-id=0%3A1&starting-point-node-id=251%3A1241" target="_blank" class="color-primary font-weight-bold text-underline hover-none">here.</a> </span> <br><br>

            <span class="font-weight-bold color-text">Teams</span> <br>
            <span class="color-text text-justify">&emsp; This application is actually the final project of Bangkit 2022. This Bangkit team consists of 6 people and from different university. This team is divided into 3 parts:</span> <br>
            <span class="color-text font-weight-semibold">&emsp;Android Developer Teams</span>
            <ul class="color-text">
              <li><a href="https://www.instagram.com/armann_maulanaa/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Muhammad Arman Maulana</a> | Mulawarman University</li>
              <li><a href="https://www.instagram.com/mainteinsa/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Rubi Ahmad Fauzan</a> | Budi Luhur University</li>
            </ul>
            <span class="color-text font-weight-semibold">&emsp;Machine Learning Teams</span>
            <ul class="color-text">
              <li><a href="https://www.instagram.com/eko_rahmattt/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Eko Rahmat Darmawan</a> | Mulawarman University</li>
              <li><a href="https://www.instagram.com/erjakurnia_/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Reza Kurniawan</a> | Budi Luhur University</li>
            </ul>
            <span class="color-text font-weight-semibold">&emsp;Cloud Computing Teams</span>
            <ul class="color-text">
              <li><a href="https://www.instagram.com/dafamafazi/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Daffa Mafazi</a> | Mulawarman University</li>
              <li><a href="https://www.instagram.com/farrel_abi/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Farrel Alfarabi Saleh</a> | University of Indonesia</li>
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