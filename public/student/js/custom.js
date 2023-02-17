const banner = new Swiper('.banner', {
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // Banner Slide

  const courses = new Swiper(".courses", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      575: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1199: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1350: {
        slidesPerView: 5,
        spaceBetween:20,
      },
    },
  });

  // Courses Slide
  
  const teacher = new Swiper(".teacher", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      575: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1199: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

// Teacher Slide



const testimonial = new Swiper(".testimonial", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    575: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1199: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});

function removeActiveclass() {
  $(".email-field").on("input", function(){
      if($(this).val() == "")
          $(".btn-email").removeClass('bg-darkblue');
      else
          $(".btn-email").addClass('bg-darkblue');
  });
  
}
removeActiveclass();

document.addEventListener("DOMContentLoaded", function () {
  var demo3 = new BVSelect({
    selector: "#sort",
    searchbox: false,
    offset: false,
    placeholder: "",
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var demo3 = new BVSelect({
    selector: "#ratings",
    searchbox: false,
    offset: false,
    placeholder: "",
  });
});

$(".text-area").readMore({lines: 10})


$('.expand-btn').on('click', function () {
  $('.accordion .accordion-collapse').collapse('toggle');
});

// Profile Upload

function previewFile() {
  var preview = document.querySelector('#profile-image1');
  var file = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();

  reader.addEventListener("load", function() {
      preview.src = reader.result;
  }, false);

  if (file) {
      reader.readAsDataURL(file);
  }
}
$(function() {
  $('#profile-image1').on('click', function() {
      $('#choose-file').click();
  });
});