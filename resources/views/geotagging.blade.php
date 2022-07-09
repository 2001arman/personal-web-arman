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
    <title>Arman | Absensi Geotagging</title>
    <link rel="shortcut icon" href="img/man.png" type="image/x-icon">
  </head>
  <body>

    @php(
      $gambar = [
        'geotagging1.png',
        'geotagging2.png',
        'geotagging3.png',
      ]
    )
      
    <!-- nama website -->
    <p class="text-center font-weight-bold underline mx-auto">GEOTAGGING</p>
    <!-- akhir nama website -->

    <!-- content -->
    <div class="container-fluid mt-5 px-5" id="container-content">
        <div class="py-4">
            <h5 class="color-primary font-weight-bold text-center">Mobile</h5>
            <h2 class="font-weight-bold text-center">Aplikasi Absensi Geotagging</h2>
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
        <div class="px-5 mx-5 mt-5 color-text text-justify" id="container-text">
            <span class="font-weight-bold">Geotagging</span>
            <p class="color-text text-justify">&emsp; This application is an IoT project that utilizes GPS on an Android smartphone. This application is made for Balikpapan University employees. The main feature of this app is online attendance using location coordinates. so that the employees of the Balikpapan University no longer need attendance using the conventional method of using paper. This application can also reduce fraud in employee attendance. when an employee wants to do attendance, the employee must be within the radius of the Balikpapan University, the radius limit for being able to take attendance is 100 meters wide. <br></p>
            <span class="font-weight-bold">Features</span>
            <ul>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Login.</span> To enter the application, employees must first login. login data has been integrated with the Balikpapan university database so that the registration feature is no longer needed.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Attendance.</span> This is the main feature for employees doing attendance. when the employee is within the radius of the Balikpapan University, the employee can take attendance. if the employee's position is outside the radius of the Balikpapan University, the employee cannot be absent and the application will display the distance between the employee's position and the Balikpapan University in meters.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Pengajuan cuti.</span> Features for employees who want to apply for permits. the employee can enter the permit date and the reason.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Pengajuan izin.</span> the feature to ask or consult the korashop admin regarding your product or pet.</li>
              <li class="color-text"><span class="color-primary font-weight-bold hover-none">Absence history.</span> Feature to display attendance history. the application will display the number of attendance, late and absent.</li>
            </ul>

            <span class="font-weight-bold">Architecture</span>
            <p class="color-text text-justify">&emsp; 
              To build this project, I'm using the <span class="color-primary font-weight-bold hover-none">Flutter</span> framework version 2. To display maps on the attendance feature, I'm using the <span class="color-primary font-weight-bold hover-none">Google Maps API.</span> to get the user's location and calculate the distance between the user's position and the position of the Balikpapan university, I use a plugin called <span class="color-primary font-weight-bold hover-none">Geolocator.</span> for the backend, this project uses <span class="color-primary font-weight-bold hover-none">laravel</span> version 8 as the backend.<br></p>
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