new Swiper('.swiper', {
   
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      grabCursor: true,
      
   
  });

  new Swiper('.swiper-instituts', {
    
    slidesPerView: 4,
    autoplay:{
     delay:5000,
     stopOnLastSlide:false,
     disableOnInteraction:false
    },
    
      grabCursor: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        650: {
          slidesPerView: 3,
          spaceBetween: 40
        },
        // when window width is >= 640px
        950: {
          slidesPerView: 4,
          spaceBetween: 40
        },

      }
  });
  ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [54.726351, 55.983260],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        });

  
});