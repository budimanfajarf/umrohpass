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
  console.log('test');
  const header = $('#header');
  console.log('header', header);
  header.addClass('test');
  $('.single-item').slick();

  $('.js-mobile-menu-trigger').on('click', function() {
    $('#mobile-menu').slideToggle();
  });

  // const $header = $('#header');
  // const HEADER_HEIGHT = $header.height();
  // let lastY = 0;

  // window.addEventListener('scroll', function() {
  //   if (window.scrollY < HEADER_HEIGHT) {
  //     return;
  //   }

  //   if (window.scrollY > lastY) {
  //     $header.addClass('hide')
  //   } else {
  //     $header.removeClass('hide')
  //   }

  //   lastY = window.scrollY;
  // })
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
