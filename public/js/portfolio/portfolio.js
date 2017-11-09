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
window.sr = ScrollReveal({reset: true});
sr.reveal('.home-showcase', {
  duration: 2000,
  origin: 'left',
  distance: '300px'
});
sr.reveal('.knowledge-name', {
  duration: 1500,
  origin: 'left',
  distance: '100px'
});
sr.reveal('.knowledge-progress', {
  duration: 1500,
  origin: 'bottom',
  distance: '100px'
});
sr.reveal('.knowledge-skore', {
  duration: 1500,
  origin: 'right',
  distance: '100px'
});
sr.reveal('.animate-left', {
  duration: 1500,
  origin: 'left',
  distance: '200px'
});
sr.reveal('.animate-right', {
  duration: 1500,
  origin: 'right',
  distance: '200px'
});
sr.reveal('.animate-top', {
  duration: 1500,
  origin: 'top',
  distance: '200px'
});
sr.reveal('.animate-bottom', {
  duration: 1500,
  origin: 'bottom',
  distance: '200px'
});