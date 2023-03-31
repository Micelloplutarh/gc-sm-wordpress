(() => {
    const slider = document.querySelector('.slider');
    const slidesCount = slider.children.length;
    let slideWidth = slider.clientWidth / 4;
    let currentSlide = 0;
    let sliderTransform = 0;
    let intervalId;

    function initSlider() {
      slideWidth = slider.clientWidth / 4;
      slider.style.width = `${slidesCount * slideWidth}px`;
      slider.style.transform = `translateX(${sliderTransform}px)`;
    
      document.addEventListener('visibilitychange', () => {
        if (document.visibilityState === 'hidden') {
          clearInterval(intervalId);
        } else {
          runSlider();
        }
      });

      document.querySelector('.prev-btn').addEventListener('click', () => {
        if (currentSlide > 0) {
          currentSlide--;
          sliderTransform = -currentSlide * slideWidth;
          slider.style.transform = `translateX(${sliderTransform}px)`;
          clearInterval(intervalId);
        }
      });

      document.querySelector('.next-btn').addEventListener('click', () => {
        if (currentSlide < slidesCount - 4) {
          currentSlide++;
          sliderTransform = -currentSlide * slideWidth;
          slider.style.transform = `translateX(${sliderTransform}px)`;
          clearInterval(intervalId);
        }
      });

      runSlider();
    }

    function runSlider() {
      clearInterval(intervalId);
      intervalId = setInterval(() => {
        if (currentSlide < slidesCount - 4) {
          currentSlide++;
          sliderTransform = -currentSlide * slideWidth;
          slider.style.transform = `translateX(${sliderTransform}px)`;
        } else {
          currentSlide = 0;
          sliderTransform = 0;
          slider.style.transform = `translateX(${sliderTransform}px)`;
        }
      }, 2000);
    }

    initSlider();

  })();


        