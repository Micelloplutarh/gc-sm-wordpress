document.querySelector('.language-switch h3 a').addEventListener('click', function(e) {
  let list = document.querySelector('.language-switch');
  if (list.classList.contains('active')) {
    list.classList.remove('active');
  } else {
    list.classList.add('active');
  }
});
$(document).ready(function() {
	$('.menu-burger__header').click(function(){
        $('.menu-burger__header').toggleClass('open-menu');
        $('.header__nav').toggleClass('open-menu');
        $('body').toggleClass('fixed-page');
	});
});
$(document).ready(function() {
	$('.product-link').click(function(){
        $('.product-popup').toggleClass('product-popup__active');
        $('.header').toggleClass('white-header');
	});
});
// const carousel = document.querySelector('.carousel');
// const prevButton = document.querySelector('.prev-button');
// const nextButton = document.querySelector('.next-button');

// let direction;

// prevButton.addEventListener('click', () => {
//   direction = 1;
//   moveCarousel();
// });

// nextButton.addEventListener('click', () => {
//   direction = -1;
//   moveCarousel();
// });

// function moveCarousel() {
//   const itemWidth = carousel.offsetWidth / 6;
//   const itemsVisible = Math.floor(carousel.parentElement.offsetWidth / itemWidth);
//   const currentTranslateX = parseInt(carousel.style.transform.replace('translateX(', '').replace('px)', ''));
//   let translateX = currentTranslateX - direction * itemWidth * itemsVisible;

//   if (translateX > 0) {
//     translateX = 0;
//   } else if (translateX < -(carousel.offsetWidth - carousel.parentElement.offsetWidth)) {
//     translateX = -(carousel.offsetWidth - carousel.parentElement.offsetWidth);
//   }

//   carousel.style.transform = `translateX(${translateX}px)`;
// }
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  nav: false,
  autoplayHoverPause: false,
  smartSpeed: 1500,
  autoplayTimeout: 1050,
  
  responsive: {
    0: {
      items: 3
    },
    600: {
      items: 5
    },
    1000: {
      items: 8
    }
  }
})