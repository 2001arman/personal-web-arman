document.querySelector(".prevBtn").addEventListener("click", () => {
    changeSlides(-1);
 });
 document.querySelector(".nextBtn").addEventListener("click", () => {
    changeSlides(1);
 });
 var slideIndex = 1;
 showSlides(slideIndex);
 function changeSlides(n) {
    showSlides((slideIndex += n));
 }
 function currentSlide(n) {
    showSlides((slideIndex = n));
 }

 
 function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("Slider");
    var dots = document.getElementsByClassName("slide");
    if (n > slides.length) {
       slideIndex = 1;
    }
    if (n < 1) {
       slideIndex = slides.length;
    }
    Array.from(slides).forEach(item => (item.style.opacity = "0", item.style.width = "0px", item.style.height = "0px"));
    Array.from(slides).forEach(item => ( item.className =  item.className.replace(" activeSlide", "")));
    Array.from(dots).forEach(
       item => (item.className = item.className.replace(" active", ""))
    );
    slides[slideIndex - 1].style.opacity = "1";
    slides[slideIndex - 1].style.height = "auto";
    slides[slideIndex - 1].style.width = "auto";
    // slides[slideIndex - 1].style.display = "flex";
    slides[slideIndex - 1].className += " activeSlide";
    dots[slideIndex - 1].className += " active";
 }

 