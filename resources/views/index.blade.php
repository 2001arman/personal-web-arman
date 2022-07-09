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
    <title>Muhammad Arman Maulana</title>
    <link rel="shortcut icon" href="img/man.png" type="image/x-icon">
  </head>
  <body>

    @if(Session::has('success'))
    <div class="alert alert-success text-center font-weight-bold" id="pemberitahuan">
    {{ Session::get('success') }}
    </div>
    @endif
    
    <!-- nama website -->
    <p class="text-center font-weight-bold underline mx-auto" id="home-section">HOME</p>
    <!-- akhir nama website -->

    <!-- section avatar-->
    <div class="container-fluid row mt-5 px-5" id="avatar-section">
      <div class="col-sm px-5 py-4 mx-2 my-auto" id="container-avatar">
        <h5 class="color-primary font-weight-bold">Hi there! 👋</h5>
        <h1 class="font-weight-bold">I'm Muhammad Arman Maulana, a FullStack Developer</h1>
        <p class="color-text mt-3">A FullStack Developer who specializes in mobile and web applications. In addition, I publish programming-related youtube videos.
        </p>
        <button type="button" class="btn my-button mt-3 font-weight-semibold" onclick="scrollToView()">Contact Me!</button>
      </div>
      <img src="img/avatar.png" alt="avatar" class="col-sm avatar">
    </div>
    <!-- section avatar-->

    <!-- section about me -->
    <div class="container-fluid row mt-5 px-5" id="about-section">
      <div class="col-md px-5 py-4 mx-2" id="container-about">
        <h5 class="color-primary font-weight-bold">About Me</h5>
        <p class="text-justify color-text">Hello! I'm Muhammad Arman Maulana. I was born in Tangerang and raised in Samarinda, Indonesia. I am currently working freelance as a mobile and web developer while studying at the <a href="https://unmul.ac.id/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">University of Mulawarman Samarinda.</a>  <br> I've been attracted by the world of information technology since I was in high school. Since then, I've primarily worked with <a href="https://flutter.dev/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Flutter,</a> <a href="https://laravel.com/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Laravel</a> and <a href="https://www.javascript.com/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">JavaScript.</a> <br> Learning new technologies is essential for me since, in the future, I think illiteracy will be defined as the inability to read programming languages. </p>
      </div>
      <div class="col-md ps-4 py-4 ms-3 " id="skills">
        <h5 class="color-primary font-weight-bold">Skills</h5>
        <div class="d-flex flex-row flex-wrap justify-content-around" >
          @php ($names = [
            'html.png',
            'css.png',
            'flutter.png',
            'firebase.png',
            'javascript.png',
            'nodejs.png',
            'php.png',
            'laravel.png',
            'java.png',
            'python.png',
            'mysql.png',
            'git.png',
          ])
          @foreach ($names as $icon)
              <img src="img/{{$icon}}" alt="{{$icon}}" title="{{$icon}}" class="mr-3 mb-3" >
          @endforeach
        </div>
      </div>
    </div>
    <!-- akhir about me -->
    
    <!-- experience section -->
    <div class="container-fluid row mt-5 px-5" id="experience-section">
      <div class="col-md px-5 py-4 mx-2 " id="container-experience">
        <h5 class="color-primary font-weight-bold mb-3">Education</h5>
        <div class="row">
          <div class="col-4">
            <p class="color-text">2019 - Present</p>
          </div>
          <div class="col px-0">
            <p class="color-text"> <span class="font-weight-bold text-white">Universitas Mulawarman</span>  <br>Major in Computer Science, current GPA 3.53/4.00.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <p class="color-text">Feb 2022 - Jul 2022</p>
          </div>
          <div class="col px-0">
            <p class="color-text"> <span class="font-weight-bold text-white">Bangkit Academy Lead by Google, Gojek, Tokopedia and Traveloka</span>  <br>Enroll as Android Learning path student.</p>
          </div>
        </div>
      </div>
      <div class="col-md ps-4 py-4 ms-3 " id="organisasi">
        <h5 class="color-primary font-weight-bold mb-3">Organization</h5>
        <p class="color-text "> <span class="font-weight-bold text-white">Staff at the Association of Informatics</span> <br>
          Become a Public Relations Staff at the Association of Informatics and serves as a public relations officer. Handle Study Appeal. Got the award the most active and chosen to be the most outstanding staff.
        </p>
        <p class="color-text "> <span class="font-weight-bold text-white">Team GDSC Universitas Mulawarman</span> <br>
          Become core team GDSC Mulawarman University. and served as event division.
        </p>
        <p class="color-text "> <span class="font-weight-bold text-white">Assistant Laboratory for OOP and Basic Programming Algorithm Subject</span> <br>
          Has successfully organized, demonstrated, and taught practicum material for 2 class by being a good mentor for object-oriented programming and basic programming algorithm courses.
        </p>
        <p class="color-text "> <span class="font-weight-bold text-white">Assistant Laboratory for Mobile Programming</span> <br>
          Has successfully organized, demonstrated, and taught practicum material for 6 class by being a great mentor for Mobile Programming using Flutter.
        </p>
      </div>
    </div>
    <!-- akhir experience -->

    <!-- project section -->
    @include('projects')
    <!-- akhir project -->

    <!-- kontak me -->
    @include('contact')
    <!-- akhir kontak -->

    <!-- footer -->
    @include('footer')
    <!-- akhir footer -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="js/slider.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>