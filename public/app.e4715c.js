"use strict";(self.webpackChunksage=self.webpackChunksage||[]).push([[143],{683:function(e,s,o){var i=o(194),l=(o(154),o(567));const t=l("#header"),n=l("#mobile-menu"),r=t.height(),a=()=>{l(".js-accordion-trigger").on("click",(function(e){l(this).toggleClass("active"),l(l(this).siblings()).slideToggle()}))};(0,i.domReady)((async e=>{e&&console.error(e),(()=>{let e=0;l(window).on("scroll",(function(){if(!(window.scrollY<r)){if(window.scrollY>e)return n.addClass("hide"),t.removeClass("is-mobile-menu-expanded"),t.addClass("hide"),void(e=window.scrollY);t.removeClass("hide"),e=window.scrollY}}))})(),l(".js-mobile-menu-trigger").on("click",(function(){n.toggleClass("hide"),t.toggleClass("is-mobile-menu-expanded")})),l(".js-testimonial-slider").slick({dots:!0,infinite:!0,speed:300,slidesToShow:3,slidesToScroll:3,autoplay:!0,arrows:!1,autoplaySpeed:5e3,responsive:[{breakpoint:1280,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1}}]}),l(".js-gallery-slider").slick({dots:!0,infinite:!0,speed:300,slidesToShow:4,slidesToScroll:4,autoplay:!0,arrows:!1,autoplaySpeed:5e3,responsive:[{breakpoint:1280,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}}]}),l(".js-package-slider").slick({dots:!0,infinite:!0,speed:300,slidesToShow:1,slidesToScroll:1,autoplay:!0,arrows:!1,autoplaySpeed:5e3}),a(),(()=>{l("a[href$='#atf']").addClass("active");const e=l("#header").height(),s=["atf","about","testimonial","gallery","package","registration","faq"];l(window).on("scroll",(function(o){s.forEach((s=>{const o=l(`#${s}`),i=l(`a[href$='#${s}']`);if(0===o.length||0===i.length)return;const t=o.offset().top,n=t+o.innerHeight(),r="atf"===s?-e:t-1.2*e,a=n-o.innerHeight()/2;return window.scrollY>r&&window.scrollY<a?i.addClass("active"):i.removeClass("active")}))}))})(),window.setInterval((()=>{const e=l(".select-batch select").val();if(!e)return;const s=e.split(" - ");l(".departure-date .content").html(s[0]),l(".return-date .content").html(s[1])}),500)}))},402:function(){},567:function(e){e.exports=window.jQuery}},function(e){var s=function(s){return e(e.s=s)};e.O(0,[329],(function(){return s(683),s(402)})),e.O()}]);