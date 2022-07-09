@php (
    $projects = [
      [
          "image" => "gasturah1.png",
          "name" => "Gasturah (Gas To Situs Bersejarah)",
          "jenis" => "Mobile",
          "deskripsi" => "Gasturah is an application that can help you to scan historical places. For example, you are in a historical place but you don't know how the history is. You can immediately open the gasturah application and open the scan feature for historical places. This application will be able to find out what historical places you scan using machine learning.",
          "url" => "/gasturah",
      ],
      [
          "image" => "korashop.png",
          "name" => "KORA Petshop Website",
          "jenis" => "Website",
          "deskripsi" => "This project is a website that aims to help UMKM called Korashop to sell their products. Korashop is a UMKM that focuses on selling veterinary products. such as cat food, cages and cat medicine. This project is the same as e-commerce in general, users can choose products and can buy them directly without the need to come to the store. The architecture of this project I use laravel version 8 and bootstraps version 4.",
          "url" => "/korashop",
      ],
      [
          "image" => "geotagging.png",
          "name" => "Aplikasi Absensi Geotagging",
          "jenis" => "Mobile",
          "deskripsi" => "This project is a mobile application that functions to perform attendance at certain locations. in the case study of this project I used the location of the University of Balikpapan. This application is intended for Balikpapan University employees. so that employees can only take attendance within the radius of the Balikpapan University.",
          "url" => "/geotagging",
      ],
      [
          "image" => "simatalia1.png",
          "name" => "Website Kecamatan Tana Lia",
          "jenis" => "Website",
          "deskripsi" => "This project is a landing page website for the tana lia district. This project is called SIMATALIA which means 'Sistem Informasi Kecamatan Tana Lia'. This website serves as a means of information to the people of the Tana Lia sub-district. This website contains information on regional heads, news and galleries.",
          "url" => "/simatalia",
      ],
      
      [
          "image" => "vablik1.png",
          "name" => "Vablik - Aplikasi Skrinning Vaksin Publik",
          "jenis" => "Mobile",
          "deskripsi" => "Vablik is an application that can help people do self-screening of vaccines. This Vablik application is specifically used for the public, if you are an elderly person then you must use the Valans application. This application will make it easier for vaccine officers without having to screen vaccines first.",
          "url" => "/vablik",
      ],
      [
          "image" => "valans1.png",
          "name" => "Valans - Aplikasi Skrinning Vaksin Lansia",
          "jenis" => "Mobile",
          "deskripsi" => "Valans is an application that can help people do self-screening of vaccines. This Valans application is specifically used for the eldery person, if you are an public person then you must use the Vablik application. This application will make it easier for vaccine officers without having to screen vaccines first.",
          "url" => "/valans",
      ],
    ]
)

<div class="container-fluid mt-5 px-5" id="project-section">
    <h5 class="color-primary font-weight-bold mb-4 mx-auto text-center">Projects</h5>
    <div class="slide-container">
        @foreach ($projects as $item)
        <p style="display: none;">{{$href = $item['url']}}</p>
          <div class="row px-4 Slider" id="container-project"  onclick='window.location.href={{ "'$href'" }}'>
            <div class="col-md-6" id="gambar">
                <img src="img/projects/{{ $item['image'] }}" alt="{{ $item['name'] }}" style="width: 100%;">
            </div>
            <div class="col-md-6 my-auto px-3 pr-4">
                <p class="color-primary font-weight-bold mb-3 mx-auto">{{$item['jenis']}}</p>
                <h5 class="font-weight-semibold">{{ $item['name'] }}</h5>
                <p class="color-text text-justify">
                    {{$item['deskripsi']}}
                </p>
            </div>
          </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-3">
      @foreach ($projects as $item)
        <div class="slide"></div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3">
      <a class="prevBtn"><img src="img/arrow-left.png" alt="arrow-left" class="mr-3"></a>
      <a class="nextBtn"><img src="img/arrow-right.png" alt="arrow-left"></a>
    </div>
</div>

