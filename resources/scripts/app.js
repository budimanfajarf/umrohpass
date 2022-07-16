import {domReady} from '@roots/sage/client';
import 'slick-carousel';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
  // test();
  // header();
  mobileMenu();
  testimonialSlider();
  gallerySlider();
  packageSlider();
  accordion();
};

const test = () => {
  console.log('test');
  const header = $('#header');
  console.log('header', header);
  header.addClass('test');
  $('.single-item').slick();
}

const header = () => {
  const $header = $('#header');
  const HEADER_HEIGHT = $header.height();
  let lastY = 0;

  window.addEventListener('scroll', function() {
    if (window.scrollY < HEADER_HEIGHT) {
      return;
    }

    if (window.scrollY > lastY) {
      $header.addClass('hide')
    } else {
      $header.removeClass('hide')
    }

    lastY = window.scrollY;
  })
}

const mobileMenu = () => {
  $('.js-mobile-menu-trigger').on('click', function() {
    $('#mobile-menu').slideToggle();
  });
}

const testimonialSlider = () => {
  $('.js-testimonial-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 1000 * 5,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}

const gallerySlider = () => {
  $('.js-gallery-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 1000 * 5,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}

const packageSlider = () => {
  $('.js-package-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 1000 * 5,
  });
}

const accordion = () => {
  $('.js-accordion-trigger').on('click', function(e) {
    $(this).toggleClass('active');
    $($(this).siblings()).slideToggle();
  })
}

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
