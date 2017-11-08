$(document).ready(function(){
  $(".js-scroll-trigger").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});
window.sr = ScrollReveal();
sr.reveal('.home-showcase', {
  duration: 2000,
  origin: 'left',
  distance: '300px'
});
sr.reveal('.knowledge-name', {
  duration: 2000,
  origin: 'left',
  distance: '300px'
});
sr.reveal('.knowledge-progress', {
  duration: 2000,
  origin: 'bottom',
  distance: '300px'
});
sr.reveal('.knowledge-skore', {
  duration: 2000,
  origin: 'right',
  distance: '300px'
})