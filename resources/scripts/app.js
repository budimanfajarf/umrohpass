import { domReady } from '@roots/sage/client';
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
  toggleHeader();
  mobileMenu();
  testimonialSlider();
  gallerySlider();
  packageSlider();
  accordion();
  activeMenu();
  selectBatch();
  // submitGravityForm();
};

const $header = $('#header');
const $mobileMenu = $('#mobile-menu');

const HEADER_HEIGHT = $header.height();

const toggleHeader = () => {
  let lastY = 0;

  $(window).on('scroll', function () {
    if (window.scrollY < HEADER_HEIGHT) return;

    if (window.scrollY > lastY) {
      // Hide mobile menu
      // $mobileMenu.slideUp(300)
      $mobileMenu.addClass('hide');
      $header.removeClass('is-mobile-menu-expanded');

      // Hide header
      $header.addClass('hide');
      lastY = window.scrollY;
      return;
    }

    // Show header
    $header.removeClass('hide');
    lastY = window.scrollY;
  })
}

const mobileMenu = () => {
  $('.js-mobile-menu-trigger').on('click', function () {
    // if ($mobileMenu.css('display') === 'block') {
    //   $header.removeClass('is-mobile-menu-expanded');
    // } else {
    //   $header.addClass('is-mobile-menu-expanded');
    // }

    // const time = 300;
    // $mobileMenu.slideToggle(time);

    $mobileMenu.toggleClass('hide');
    $header.toggleClass('is-mobile-menu-expanded');
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
  $('.js-accordion-trigger').on('click', function (e) {
    $(this).toggleClass('active');
    $($(this).siblings()).slideToggle();
  })
}

const activeMenu = () => {
  // Init active menu
  $(`a[href$='#atf']`).addClass('active');


  const $header = $('#header');
  const HEADER_HEIGHT = $header.height();

  const ids = [
    'atf',
    'about',
    'testimonial',
    'gallery',
    'package',
    'registration',
    'faq',
  ]

  $(window).on('scroll', function (e) {
    ids.forEach((id) => {
      const $section = $(`#${id}`);
      const $sectionMenu = $(`a[href$='#${id}']`);

      if ($section.length === 0 || $sectionMenu.length === 0) return;

      const topSection = $section.offset().top;
      const bottomSection = topSection + $section.innerHeight();

      const finalTopSection = id === 'atf'
        ? - HEADER_HEIGHT
        : topSection - (HEADER_HEIGHT * 1.2);

      const finalBottomSection = bottomSection - ($section.innerHeight() / 2);

      if (window.scrollY > finalTopSection && window.scrollY < finalBottomSection) {
        return $sectionMenu.addClass('active');
      }

      return $sectionMenu.removeClass('active');
    });
  })
}

const selectBatch = () => {
  // $('.select-batch select').on('change', function (e) {
  //   const value = this.value;
  //   const splittedValue = value.split(' - ');
  //   $('.departure-date .content').html(splittedValue[0]);
  //   $('.return-date .content').html(splittedValue[1]);
  // });

  window.setInterval(() => {
    const value = $('.select-batch select').val();
    if (!value) return;

    const splittedValue = value.split(' - ');
    $('.departure-date .content').html(splittedValue[0]);
    $('.return-date .content').html(splittedValue[1]);
  }, 500);
}

const submitGravityForm = () => {
  $('.-gform .gform_wrapper.gravity-theme .button').on('click', function (e) {
    $(this).val('Loading...');
  });
}

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
