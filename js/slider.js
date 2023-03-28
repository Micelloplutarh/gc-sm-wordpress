window.addEventListener('DOMContentLoaded', function() {
    let slideIndex = 1;
    const slides = document.querySelectorAll('.slider__item'),
          prev = document.querySelector('.slider__arrow_left'),
          next = document.querySelector('.slider__arrow_right');
    
    showSlides(slideIndex);
    
    function showSlides(n) {
      if (n < 1) {
        slideIndex = slides.length;
      } else if (n > slides.length) {
        slideIndex = 1;
      }
  
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }
  
      slides[slideIndex - 1].style.display = 'block';
    }
  
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
  
    prev.addEventListener('click', function() {
      plusSlides(-1);
    });
  
    next.addEventListener('click', function() {
      plusSlides(1);
    });
  
    setInterval(function() {
      plusSlides(1);
    }, 2000);
  });
  