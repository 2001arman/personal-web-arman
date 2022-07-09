@php (
    $projects = [
        [
            "image" => "korashop.png",
            "name" => "KORA Petshop Website",
            "jenis" => "Website",
            "deskripsi" => "lorem",
        ],
        [
            "image" => "geotagging.png",
            "name" => "Aplikasi Absensi Geotagging",
            "jenis" => "Mobile",
            "deskripsi" => "lorem",
        ],
        [
            "image" => "simatalia1.png",
            "name" => "Website Kecamatan Tana Lia",
            "jenis" => "Website",
            "deskripsi" => "lorem",
        ],
        [
            "image" => "gasturah1.png",
            "name" => "Aplikasi Gasturah (Gas To Situs Bersejarah)",
            "jenis" => "Mobile",
            "deskripsi" => "lorem",
        ],
        [
            "image" => "vablik1.png",
            "name" => "Vablik - Aplikasi Skrinning Vaksin Publik",
            "jenis" => "Mobile",
            "deskripsi" => "lorem",
        ],
        [
            "image" => "valans1.png",
            "name" => "Valans - Aplikasi Skrinning Vaksin Lansia",
            "jenis" => "Mobile",
            "deskripsi" => "lorem",
        ],
    ]
)

<div class="container-fluid mt-5 px-5" id="project-section">
    <h5 class="color-primary font-weight-bold mb-4 mx-auto text-center">Projects</h5>
    <div class="slide-container">
        @foreach ($projects as $item)
            <div class="row px-4 Slider" id="container-project">
                <div class="col-md-6" id="gambar">
                    <img src="img/projects/{{ $item['image'] }}" alt="{{ $item['name'] }}" style="width: 100%;">
                </div>
                <div class="col-md-6 my-auto px-3 pr-4">
                    <p class="color-primary font-weight-bold mb-3 mx-auto">{{$item['jenis']}}</p>
                    <h5 class="font-weight-semibold">{{ $item['name'] }}</h5>
                    <p class="color-text text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui quisque enim orci nisl adipiscing nulla tellus quis. Amet lacus nibh aliquam ac viverra ac leo at adipiscing. Feugiat velit nunc nibh tristique non nulla lectus pellentesque. Tempus mi cursus gravida quam ac sed porta. Sem sapien viverra nullam neque et, eu eget ut porttitor. Quis in sagittis, tincidunt ipsum. Tristique eu est tincidunt sagittis ultricies ullamcorper pellentesque enim ut. Lectus nulla diam sit a. Posuere sem nunc gravida vestibulum tellus velit sem. Lacus, mauris, neque in enim sed eget ornare sit. Odio sit lorem nisl non dui dolor. Id quam scelerisque nisi donec feugiat ullamcorper. Ac netus dictum sed ultricies purus arcu phasellus arcu.
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



<!-- <div class="container-fluid mt-5 px-5">
    <h5 class="color-primary font-weight-bold mb-4 mx-auto text-center">Projects</h5>
    <div class="slide-container">
      <div class="row px-4 Slider">
        <div class="col-6">
          <img src="img/projects/korashop.png" alt="korashop" style="width: 100%;">
        </div>
        <div class="col-6 my-auto px-3 pr-4">
          <p class="color-primary font-weight-bold mb-3 mx-auto">Website</p>
          <h5 class="font-weight-semibold">KORA Petshop Website</h5>
          <p class="color-text text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui quisque enim orci nisl adipiscing nulla tellus quis. Amet lacus nibh aliquam ac viverra ac leo at adipiscing. Feugiat velit nunc nibh tristique non nulla lectus pellentesque. Tempus mi cursus gravida quam ac sed porta. Sem sapien viverra nullam neque et, eu eget ut porttitor. Quis in sagittis, tincidunt ipsum. Tristique eu est tincidunt sagittis ultricies ullamcorper pellentesque enim ut. Lectus nulla diam sit a. Posuere sem nunc gravida vestibulum tellus velit sem. Lacus, mauris, neque in enim sed eget ornare sit. Odio sit lorem nisl non dui dolor. Id quam scelerisque nisi donec feugiat ullamcorper. Ac netus dictum sed ultricies purus arcu phasellus arcu.
          </p>
        </div>
      </div>

      <div class="row px-4 Slider">
        <div class="col-6">
          <img src="img/projects/korashop.png" alt="korashop" style="width: 100%;">
        </div>
        <div class="col-6 my-auto px-3 pr-4">
          <p class="color-primary font-weight-bold mb-3 mx-auto">Website</p>
          <h5 class="font-weight-semibold">KORA Petshop asdasdas</h5>
          <p class="color-text text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui quisque enim orci nisl adipiscing nulla tellus quis. Amet lacus nibh aliquam ac viverra ac leo at adipiscing. Feugiat velit nunc nibh tristique non nulla lectus pellentesque. Tempus mi cursus gravida quam ac sed porta. Sem sapien viverra nullam neque et, eu eget ut porttitor. Quis in sagittis, tincidunt ipsum. Tristique eu est tincidunt sagittis ultricies ullamcorper pellentesque enim ut. Lectus nulla diam sit a. Posuere sem nunc gravida vestibulum tellus velit sem. Lacus, mauris, neque in enim sed eget ornare sit. Odio sit lorem nisl non dui dolor. Id quam scelerisque nisi donec feugiat ullamcorper. Ac netus dictum sed ultricies purus arcu phasellus arcu.
          </p>
        </div>
      </div>

      
    </div>

    <div class="d-flex justify-content-center mt-3">
      <div class="slide"></div>
      <div class="slide"></div>
    </div>
    <div class="d-flex justify-content-center mt-3">
      <a class="prevBtn"><img src="img/arrow-left.png" alt="arrow-left" class="mr-3"></a>
      <a class="nextBtn"><img src="img/arrow-right.png" alt="arrow-left"></a>
    </div>
</div> -->