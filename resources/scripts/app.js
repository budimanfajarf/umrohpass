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
  // testScript();
  // headerScript();
  mobileMenuScript();
  sliderScript();
};

const testScript = () => {
  console.log('test');
  const header = $('#header');
  console.log('header', header);
  header.addClass('test');
  $('.single-item').slick();
}

const headerScript = () => {
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

const mobileMenuScript = () => {
  $('.js-mobile-menu-trigger').on('click', function() {
    $('#mobile-menu').slideToggle();
  });
}

const sliderScript = () => {
  $('.js-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    arrows: false,
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

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
