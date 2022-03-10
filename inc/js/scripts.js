
// SLIDESHOWS
  
	$('.slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  fade: true,
  autoplaySpeed: 2000,
  speed: 1000,
  arrows: false,
  dots: false,
  pauseOnHover: false
});

  $('.slideshow-testimonials').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  fade: true,
  autoplaySpeed: 6000,
  arrows: false,
  dots: true,
  pauseOnHover: false
});

window.onload = function() {
    var months = ['januar', 'februar', 'marts', 'april', 'maj', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'december'];;
    var date = new Date();

    document.getElementById('date').innerHTML = months[date.getMonth()] + ' ' + date.getFullYear();
    document.getElementById("year").innerHTML = new Date().getFullYear();

};

document.getElementById("playBtn").addEventListener("click", function(){
    var vid = document.getElementById('vid');
  if(this.className == 'is-playing play-button pl-1 pr-1 pt-15 pb-15 small bg-incgreen mt-1 mono uc'){
    this.className = "play-button pl-1 pr-1 pt-15 pb-15 small bg-incgreen mt-1 mono uc";
    this.innerHTML = "&#9654;&nbsp;Afspil"
    vid.pause();
  }else{
    this.className = "is-playing play-button pl-1 pr-1 pt-15 pb-15 small bg-incgreen mt-1 mono uc";
    this.innerHTML = "&#10074;&#10074;&nbsp;Pause";
    vid.play();
  }

});



//  SCROLLREVEALS

ScrollReveal().reveal('.reveal', { delay: 250, origin: 'bottom', distance: '50px', duration: 1000 });
ScrollReveal().reveal('.reveal-main', { delay: 2000, origin: 'bottom', distance: '50px', duration: 1000 });
ScrollReveal().reveal('.reveal-1', { delay: 250, origin: 'bottom', distance: '50px', duration: 2000 });
ScrollReveal().reveal('.reveal-2', { delay: 450, origin: 'bottom', distance: '50px', duration: 1550 });
ScrollReveal().reveal('.reveal-3', { delay: 650, origin: 'bottom', distance: '50px', duration: 1350 });
ScrollReveal().reveal('.contact-button', { delay: 4000, origin: 'bottom', distance: '50px', duration: 1500 });
ScrollReveal().reveal('.reveal-text', { delay: 500, origin: 'bottom', distance: '50px', duration: 500 });
