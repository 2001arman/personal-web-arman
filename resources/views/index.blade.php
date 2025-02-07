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
        <h1 class="font-weight-bold">I'm Muhammad Arman Maulana, a Flutter Developer</h1>
        <p class="color-text mt-3">A Flutter Developer Expert specializing in Android and iOS applications with Clean Architecture.
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
        <p class="text-justify color-text">Hello! I'm Muhammad Arman Maulana. I was born in Tangerang and raised in Samarinda, Indonesia. I am currently working at <a href="https://www.linkedin.com/company/pt-hkteknologi/mycompany/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Digital Sekuriti Indoensia</a> as a Mobile  Developer focusing using Flutter. <br> I've been attracted by the world of information technology since I was in high school. Since then, I've primarily worked with <a href="https://flutter.dev/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Flutter,</a> <a href="https://laravel.com/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">Laravel</a> and <a href="https://www.javascript.com/" target="_blank" class="color-primary font-weight-bold text-underline hover-none">JavaScript.</a> <br> Learning new technologies is essential for me since, in the future, I think illiteracy will be defined as the inability to read programming languages. </p>
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

        <!-- work experience -->
        <h5 class="color-primary font-weight-bold mb-3 mt-3">Work Experience</h5>
        <!-- DSI -->
        <div class="row">
          <div class="col-2">
            <p class="color-text">March 2023 - Present</p>
          </div>
          <div class="col px-0">
            <p class=" font-weight-bold text-white mb-2">Mobile Developer at Digital Sekuriti Indonesia</p>
            <ul class="color-text px-3">
              <li class="mb-1">Developed AI Care with a team of 9 mobile developers, an innovative health application using AI. Involved in the creation of both user and doctor apps, featured advanced symptom self-checker and real-time chat consultations, enhancing healthcare accessibility. The app now has over 1,000 active users.</li>
              <li class="mb-1">Collaborated on 'Callink,' a chat application based on DDD and WebSocket technology for real-time data chat. We chose a Domain-Driven Design (DDD) architecture because we care about scalability and maintainability, resulting in a 30% reduction in development time and a 25% increase in code maintainability.</li>
              <li>Contributed to 'Rumah Berkat,' a fundraising app, focusing on creating donation features. Showcased dedication to leveraging technology for social impact and improving user experiences. The app now has over 500 active users.</li>
            </ul>
          </div>
        </div>
        <!-- end DSI -->

        <!-- Upwork -->
        <div class="row">
          <div class="col-2">
            <p class="color-text">Jan 2024 – Dec 2024</p>
          </div>
          <div class="col px-0">
            <p class=" font-weight-bold text-white mb-2">Upwork Freelance - Remote at Upwork</p>
            <ul class="color-text px-3">
              <li class="mb-1">Specialized in Flutter Development: Over 2 years of experience in developing mobile applications with Flutter and Clean Architecture, delivering high-quality, scalable, and maintainable solutions.</li>
              <li class="mb-1">Proven Track Record in Project Success: Completed 5+ successful projects, including Remembli, Lawan, CashIO, and OverTory, with satisfied clients from Australia, Austria, and Malaysia.</li>
              <li class="mb-1">Efficient Project Delivery: Delivered robust app solutions 20% faster than initial timelines on average, consistently meeting or exceeding client expectations, and securing 95%+ positive feedback on project outcomes.</li>
              <li class="mb-1">Worked closely with international clients to gather requirements, build key features, and provide reliable post-delivery support, resulting in ongoing partnerships and referrals.</li>
              <li class="mb-1">Advanced State Management Expertise: Demonstrated strong skills in GetX and BLoC state management, improving application performance by 30% and enhancing user experience across multiple applications.</li>
            </ul>
          </div>
        </div>
        <!-- end Upwork -->

        <!-- HK Tekno -->
        <div class="row">
          <div class="col-2">
            <p class="color-text">July 2022 - February 2023</p>
          </div>
          <div class="col px-0">
            <p class=" font-weight-bold text-white mb-2">Web & Mobile Developer at HK-Tekno</p>
            <ul class="color-text px-3">
              <li class="mb-1">Applied the MVC principles to the Flutter-based Android and iOS applications ('Amal Ibadah' and 'Booking Tempat'), ensuring a consistent and well-organized codebase. This contributed to a smoother development process and facilitated the adoption of best practices in mobile app development.</li>
              <li>In the backend development for kolabora9ksi.com and bcomss.id, utilized the Laravel Framework to implement the MVC pattern on the server side. This not only ensured a robust and scalable backend but also facilitated seamless communication between the frontend and backend components of the web applications.</li>
            </ul>
          </div>
        </div>
        <!-- end Hk Tekno -->

        <!-- end work experience -->

        <!-- education -->
        <h5 class="color-primary font-weight-bold mb-3">Education</h5>
        <div class="row">
          <div class="col-2">
            <p class="color-text">2019 - 2024</p>
          </div>
          <div class="col px-0">
            <p class="color-text"> <span class="font-weight-bold text-white">Universitas Mulawarman</span>  <br>Major in Computer Science, current GPA 3.53/4.00.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <p class="color-text">Feb 2022 - Jul 2022</p>
          </div>
          <div class="col px-0">
            <p class="color-text"> <span class="font-weight-bold text-white">Bangkit Academy Lead by Google, Gojek, Tokopedia and Traveloka</span>  <br>Enroll as Android Learning path student.</p>
          </div>
        </div>
        <!-- end education -->

        <!-- organization -->
        <div class="row" id="organisasi">
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
        <!-- end organization -->

      </div>
      
    </div>
    <!-- akhir experience -->

    <!-- project section -->
    @include('projects')
    <!-- akhir project -->

    <!-- kontak me -->
    <!-- @include('contact') -->
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