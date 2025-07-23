(function (jQuery) {
  "use strict";

  /*
|--------------------------------------------------------------------------
| Template Name: Vixan
| Author: 3jon
| Version: 1.0.0
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
| TABLE OF CONTENTS:
|--------------------------------------------------------------------------
| 1. Preloader
| 2. Mobile Menu
| 3. Sticky Header
| 4. Dynamic Background
| 5. Slick Slider
| 6. Isotop Initialize
| 7. Modal Video
| 8. Accordian
| 9. Social Button Hover
| 10. Light Gallery
| 11. Scroll Up
| 12. Portfolio Section
| 13. Parallax Swiper Slider
| 14. Full Screen SwiperSlider
| 15. Button Hover Move  Animation
| 16. Register GSAP
| 17. Config GSAP
| 18. Smooth Scroller FIRST! And Cursor Moving
| 20. Hero text Animation
| 21. Text Typing Animation
| 21. Words Typing Animation
| 22. Heading Title Animation
| 23. P tag text Animation
| 24. Blog section Animation
| 25. Startup Agency Animation
| 26. Stagger Text Up and Downs Animation
| 27. ShowsZoom Center Animation
| 28. ShowsLeftSide Animation
| 29. ShowsRightSide Animation
| 30. ShowsDown Animation
| 31. ShowsUp Animation
| 32. Funfact Counting Animation
| 33. Text  popup Animation


/*--------------------------------------------------------------
    Scripts initialization
--------------------------------------------------------------*/
  jQuery.exists = function (selector) {
    return jQuery(selector).length > 0;
  };

  jQuery(window).on("load", function () {
    jQuery(window).trigger("scroll");
    jQuery(window).trigger("resize");
    preloader();
    isotopInit();
  });

  jQuery(function () {
    jQuery(window).trigger("resize");
    mainNav();
    stickyHeader();
    dynamicBackground();
    swiperInit();
    isotopInit();
    modalVideo();
    hoverTab();
    lightGalleryInit();
    scrollUp();
    portfolioSection();
    fullScreenSwiperSlider();
  });

  jQuery(window).on("scroll", function () {
    showScrollUp();
  });
  /*-------------------------------------------------
      1. preloader  
 --------------------------------------------------------------*/
  function preloader() {
    jQuery(".cs_preloader_in").fadeOut();
    jQuery(".cs_preloader").delay(150).fadeOut("slow");
  }

  /*--------------------------------------------------------------
                                                                                                                                                                                                                                                        2. Mobile Menu
                                                                                                                                                                                                                                                     --------------------------------------------------------------*/
  function mainNav() {
    jQuery(".cs_nav").append('<span class="cs_munu_toggle"><span></span></span>');
    jQuery(".menu-item-has-children").append(
      '<span class="cs_munu_dropdown_toggle"></span>'
    );
    jQuery(".cs_munu_toggle").on("click", function () {
      jQuery(this)
        .toggleClass("cs_toggle_active")
        .siblings(".cs_nav_list")
        .slideToggle();
    });
    jQuery(".cs_munu_dropdown_toggle").on("click", function () {
      jQuery(this).toggleClass("active").siblings("ul").slideToggle();
      jQuery(this).parent().toggleClass("active");
    });

    jQuery(".menu-item-has-black-section").append(
      '<span class="cs_munu_dropdown_toggle_1"></span>'
    );

    jQuery(".cs_munu_dropdown_toggle_1").on("click", function () {
      jQuery(this).toggleClass("active").siblings("ul").slideToggle();
      jQuery(this).parent().toggleClass("active");
    });

    jQuery(".cs_mode_btn").on("click", function () {
      jQuery(this).toggleClass("active");
      jQuery("body").toggleClass("cs_dark");
    });
    // Side Nav
    jQuery(".cs_icon_btn").on("click", function () {
      jQuery(".cs_side_header").addClass("active");
    });
    jQuery(".cs_close, .cs_side_header_overlay").on("click", function () {
      jQuery(".cs_side_header").removeClass("active");
    });
    //  Menu Text Split
    jQuery(".cs_animo_links > li > a").each(function () {
      let xxx = jQuery(this).html().split("").join("</span><span>");
      jQuery(this).html(`<span class="cs_animo_text"><span>jQuery{xxx}</span></span>`);
    });
    jQuery(".cs_nav.cs_medium ul li.menu-item-has-children").removeClass("menu-item-has-black-section cs_style_1");
    jQuery("body.logged-in.admin-bar header").addClass("login-top");
    jQuery("body.design-studio header").addClass("cs_color_1");
    jQuery("body.design-studio .cs_nav.cs_medium ul").addClass("cs_color_1");
    jQuery("body.design-studio .cs_toolbox span.cs_icon_btn").addClass("cs_color_1");
    jQuery("body.design-studio .cs_nav.cs_medium ul li.menu-item-has-children").addClass("cs_changes_color_1");
    jQuery(".blog-main .col-md-4.bmt-2").addClass("mt-0 mt-md-5");
    jQuery(".blog-main .col-md-4.bmt-5").addClass("mt-0 mt-md-5");
    jQuery(".blog-main .col-md-4.bmt-8").addClass("mt-0 mt-md-5");
    jQuery(".blog-main .col-md-4.bmt-11").addClass("mt-0 mt-md-5");
  }

  /*--------------------------------------------------------------
     3. Sticky Header
--------------------------------------------------------------*/
  function stickyHeader() {
    var jQuerywindow = jQuery(window);
    var lastScrollTop = 0;
    var jQueryheader = jQuery(".cs_sticky_header");
    var headerHeight = jQueryheader.outerHeight() + 30;

    jQuerywindow.scroll(function () {
      var windowTop = jQuerywindow.scrollTop();

      if (windowTop >= headerHeight) {
        jQueryheader.addClass("cs_gescout_sticky");
      } else {
        jQueryheader.removeClass("cs_gescout_sticky");
        jQueryheader.removeClass("cs_gescout_show");
      }

      if (jQueryheader.hasClass("cs_gescout_sticky")) {
        if (windowTop < lastScrollTop) {
          jQueryheader.addClass("cs_gescout_show");
        } else {
          jQueryheader.removeClass("cs_gescout_show");
        }
      }

      lastScrollTop = windowTop;
    });
  }

  /*--------------------------------------------------------------
       4. Dynamic Background
-------------------------------------------------------------*/
  function dynamicBackground() {
    jQuery("[data-src]").each(function () {
      var src = jQuery(this).attr("data-src");
      jQuery(this).css({
        "background-image": "url(" + src + ")",
      });
    });
  }

  /*--------------------------------------------------------------    
     5. Slick Slider
 --------------------------------------------------------------*/

  function swiperInit() {
    if (jQuery.exists(".cs_slider_1")) {
      var swiper = new Swiper(".cs_slider_1", {
        loop: true,
        speed: 1000,
        autoplay: false,
        pagination: {
          el: ".cs_pagination",
          clickable: true,
        },
      });
    }
    if (jQuery.exists(".cs_slider_2")) {
      var swiper = new Swiper(".cs_slider_2", {
        loop: true,
        speed: 1000,
        autoplay: false,
        pagination: {
          el: ".cs_pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".cs_swiper_button_next",
          prevEl: ".cs_swiper_button_prev",
        },
      });
    }
    if (jQuery.exists(".cs_slider_3")) {
      var swiper = new Swiper(".cs_slider_3", {
        loop: true,
        speed: 1000,
        autoplay: false,
        slidesPerView: "auto",
        spaceBetween: 30,
        pagination: {
          el: ".cs_pagination",
          clickable: true,
        },
      });
    }
    if (jQuery.exists(".cs_slider_4")) {
      var swiper = new Swiper(".cs_slider_4", {
        loop: true,
        speed: 1000,
        autoplay: true,
        pagination: {
          el: ".cs_pagination",
          clickable: true,
        },
      });
    }
    if (jQuery.exists(".cs_slider_5")) {
      var swiper = new Swiper(".cs_slider_5", {
        loop: true,
        speed: 1000,
        autoplay: false,
        slidesPerView: "auto",
        centeredStartd: true,
        spaceBetween: 30,
        pagination: {
          el: ".cs_pagination",
          clickable: true,
        },
      });
    }
    if (jQuery.exists(".cs_slider_6")) {
      var swiper = new Swiper(".cs_slider_6", {
        loop: true,
        speed: 1000,
        autoplay: false,
        slidesPerView: "auto",
        centeredStartd: true,
        spaceBetween: 30,
        pagination: {
          el: ".cs_pagination",
          clickable: true,
        },
      });
    }
    if (jQuery.exists(".cs_horizontal_scrolls")) {
      var swiper = new Swiper(".cs_horizontal_scrolls", {
        loop: true,
        speed: 1000,
        autoplay: false,
        slidesPerView: "auto",
        centeredStartd: true,
        pagination: {
          el: ".cs_pagination",
          clickable: true,
        },
      });
    }
    if (jQuery.exists(".service_details_slider")) {
      var swiper = new Swiper(".service_details_slider", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        speed: 1000,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
        },
      });
    }
  }
  /*-------------------------------------------------------------
       6. Isotop Initialize
 --------------------------------------------------------------*/
  function isotopInit() {
    if (jQuery.exists(".cs_isotop")) {
      jQuery(".cs_isotop").isotope({
        itemSelector: ".cs_isotop_item",
        transitionDuration: "0.60s",
        percentPosition: true,
        masonry: {
          columnWidth: ".cs_grid_sizer",
        },
      });
      /* Active Class of Portfolio*/
      jQuery(".cs_isotop_filter ul li").on("click", function (event) {
        jQuery(this).siblings(".active").removeClass("active");
        jQuery(this).addClass("active");
        event.preventDefault();
      });
      /*=== Portfolio filtering ===*/
      jQuery(".cs_isotop_filter ul").on("click", "a", function () {
        var filterElement = jQuery(this).attr("data-filter");
        jQuery(".cs_isotop").isotope({
          filter: filterElement,
        });
      });
    }

    // options items_details
    var jQueryportfolio = jQuery(".cs_isotop_items_details").isotope({});
    // filter items on button click
    jQuery(".cs_isotop_item_menu").on("click", "li", function () {
      var filterValue = jQuery(this).attr("data-filter");
      jQueryportfolio.isotope({
        filter: filterValue,
      });
    });
    // options items_details
    var jQuerycreative_protfolio = jQuery(".cs_creative_protfolio_details").isotope({});
    // filter items on button click
    jQuery(".cs_creative_protfolio_menu").on("click", "li", function () {
      var filterValue = jQuery(this).attr("data-filter");
      jQuerycreative_protfolio.isotope({
        filter: filterValue,
      });
    });
  }

  /*--------------------------------------------------------------
         7. Modal Video
 --------------------------------------------------------------*/
 function modalVideo() {
  jQuery(document).on("click", ".cs_video_open", function (e) {
    e.preventDefault();
    var video = jQuery(this).attr("href");
    video = video.split("?v=")[1].trim();
    jQuery(".cs_video_popup_container iframe").attr(
      "src",
      `https://www.youtube.com/embed/${video}`
    );
    jQuery(".cs_video_popup").addClass("active");
  });
  jQuery(".cs_video_popup_close, .cs_video_popup_layer").on("click", function (e) {
    jQuery(".cs_video_popup").removeClass("active");
    jQuery("html").removeClass("overflow-hidden");
    jQuery(".cs_video_popup_container iframe").attr("src", "about:blank");
    e.preventDefault();
  });
}

  /*--------------------------------------------------------------
         8. Accordian    
--------------------------------------------------------------*/

  jQuery(".cs_accordeon .cs_accordion_body")
    .hide()
    .prev()
    .click(function () {
      jQuery(this)
        .parents(".cs_accordeon")
        .find(".cs_accordion_body")
        .not(this)
        .slideUp()
        .prev()
        .removeClass("active cs_icon");
      jQuery(this)
        .next()
        .not(":visible")
        .slideDown()
        .prev()
        .addClass("active cs_icon");
    });

  /*--------------------------------------------------------------
         9. Social Button Hover
--------------------------------------------------------------*/
  function hoverTab() {
    jQuery(".cs_hover_tab").hover(function () {
      jQuery(this).addClass("active").siblings().removeClass("active");
    });
  }
  /*--------------------------------------------------------------
       10. Light Gallery
--------------------------------------------------------------*/
  function lightGalleryInit() {
    jQuery(".cs_lightgallery").each(function () {
      jQuery(this).lightGallery({
        selector: ".cs_lightbox_item",
        subHtmlSelectorRelative: false,
        thumbnail: false,
        mousewheel: true,
      });
    });

    lightGallery(document.getElementById("animated-thumbnails-gallery"), {
      animateThumb: false,
      zoomFromOrigin: false,
      allowMediaOverlap: true,
      toggleThumb: true,
    });
  }

  /*--------------------------------------------------------------
      11. Scroll Up
--------------------------------------------------------------*/
  function scrollUp() {
    jQuery(".cs_scrollup").on("click", function (e) {
      e.preventDefault();
      jQuery("html,body").animate(
        {
          scrollTop: 0,
        },
        0
      );
    });
  }
  // For Scroll Up
  function showScrollUp() {
    let scroll = jQuery(window).scrollTop();
    if (scroll >= 350) {
      jQuery(".cs_scrollup").addClass("cs_scrollup_show");
    } else {
      jQuery(".cs_scrollup").removeClass("cs_scrollup_show");
    }
  }

  /*--------------------------------------------------------------
        12. Portfolio Section
 --------------------------------------------------------------*/
  function portfolioSection() {
    jQuery(".cs_portfolio.cs_style2 .cs_text_btn").hover(
      function () {
        jQuery(this)
          .parents(".cs_portfolio")
          .find(".cs_portfolio_img")
          .addClass("active");
      },
      function () {
        jQuery(this)
          .parents(".cs_portfolio")
          .find(".cs_portfolio_img")
          .removeClass("active");
      }
    );
  }
  /*--------------------------------------------------------------
         13. Parallax Swiper Slider
 --------------------------------------------------------------*/
  function parallaxSwiperSlider() {
    // if (jQuery.exists('.cs_parallax_slider')) {}
    if (jQuery.exists(".cs_parallax_slider")) {
      // Params
      let mainSliderSelector = ".cs_parallax_slider",
        interleaveOffset = 0.5;
      // Main Slider
      let mainSliderOptions = {
        loop: true,
        speed: 1000,
        autoplay: false,
        loopAdditionalSlides: 10,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheel: true,
        navigation: {
          nextEl: ".cs_swiper_button_next",
          prevEl: ".cs_swiper_button_prev",
        },
        pagination: {
          el: ".cs_swiper_pagination",
          clickable: true,
        },
        on: {
          init: function () {
            this.autoplay.stop();
          },
          imagesReady: function () {
            this.el.classList.remove("loading");
            this.autoplay.start();
          },
          progress: function (swiper) {
            for (let i = 0; i < swiper.slides.length; i++) {
              let slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;

              swiper.slides[i].querySelector(
                ".cs_swiper_parallax_bg"
              ).style.transform = "translateX(" + innerTranslate + "px)";
            }
          },
          touchStart: function (swiper) {
            for (let i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function (swiper, transition) {
            for (let i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = transition + "ms";
              swiper.slides[i].querySelector(
                ".cs_swiper_parallax_bg"
              ).style.transition = transition + "ms";
            }
          },
        },
      };
      let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);
    }
  }

  /*--------------------------------------------------------------
      14. Full Screen SwiperSlider
 --------------------------------------------------------------*/
  function fullScreenSwiperSlider() {
    if (jQuery.exists(".cs_fullscreen_swiper_slider")) {
      var swiper = new Swiper(".cs_fullscreen_swiper_slider", {
        direction: "vertical",
        mousewheel: true,
        loop: true,
        speed: 1000,
        pagination: {
          el: ".cs_swiper_pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".cs_swiper_button_next",
          prevEl: ".cs_swiper_button_prev",
        },
      });
    }
  }

  /*--------------------------------------------------------------
       15. Button Hover Move  Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".cs_hero_btn")) {
    jQuery(".cs_hero_btn").on("mouseenter", function (e) {
      var x = e.pageX - jQuery(this).offset().left;
      var y = e.pageY - jQuery(this).offset().top;

      jQuery(this).find("span").css({
        top: y,
        left: x,
      });
    });

    jQuery(".cs_hero_btn").on("mouseout", function (e) {
      var x = e.pageX - jQuery(this).offset().left;
      var y = e.pageY - jQuery(this).offset().top;

      jQuery(this).find("span").css({
        top: y,
        left: x,
      });
    });
    // Button Move Animation
    const all_btns = gsap.utils.toArray(".cs_round_btn_wrap");
    if (all_btns.length > 0) {
      var all_btn = gsap.utils.toArray(".cs_round_btn_wrap");
    } else {
      var all_btn = gsap.utils.toArray("#cs_round_btn_wrap");
    }
    const all_btn_cirlce = gsap.utils.toArray(".cs_hero_btn");
    all_btn.forEach((btn, i) => {
      jQuery(btn).mousemove(function (e) {
        callParallax(e);
      });

      function callParallax(e) {
        parallaxIt(e, all_btn_cirlce[i], 80);
      }

      function parallaxIt(e, target, movement) {
        var jQuerythis = jQuery(btn);
        var relX = e.pageX - jQuerythis.offset().left;
        var relY = e.pageY - jQuerythis.offset().top;

        gsap.to(target, 0.5, {
          x: ((relX - jQuerythis.width() / 2) / jQuerythis.width()) * movement,
          y: ((relY - jQuerythis.height() / 2) / jQuerythis.height()) * movement,
          ease: Power2.easeOut,
        });
      }
      jQuery(btn).mouseleave(function (e) {
        gsap.to(all_btn_cirlce[i], 0.5, {
          x: 0,
          y: 0,
          ease: Power2.easeOut,
        });
      });
    });
  }

  /*--------------------------------------------------------------
        16. Register GSAP
 --------------------------------------------------------------*/
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother, TweenMax, ScrollToPlugin);

  /*--------------------------------------------------------------
         17. Config GSAP
 --------------------------------------------------------------*/
  gsap.config({
    nullTargetWarn: false,
  });
  /*--------------------------------------------------------------
        18. Smooth Scroller FIRST! and Cursor Moving
 --------------------------------------------------------------*/
  let device_width = window.innerWidth;

  function mousemoveHandler(e) {
    try {
      let tl = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        },
      });

      // Main Cursor Moving
      tl.to(".cs_cursor_1", {
        ease: "power2.out",
      }).to(
        ".cs_cursor_2",
        {
          ease: "power2.out",
        },
        "-=0.4"
      );
    } catch (error) {
      console.log(error);
    }
  }
  document.addEventListener("mousemove", mousemoveHandler);

  const smoother = ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 1.2,
    normalizeScroll: device_width > 992 ? false : true,
    ignoreMobileResize: true,
    effects: true,
    smoothTouch: 0.5,
    preventDefault: true,
  });
  /* ******************** */
  /*--------------------------------------------------------------
      20.Hero text Animation
 --------------------------------------------------------------*/

  let HomeDigital = gsap.timeline({});
  let mark = document.querySelector(".cs_hero .anim_banner_text_left");
  let eting = document.querySelector(".cs_hero .anim_banner_text_right");
  let cs_hero_style5_subtext = document.querySelector(".cs_hero .anim_subtext");

  let split_creatives = new SplitText(mark, {
    type: "chars,words",
  });
  let split_solutions = new SplitText(eting, {
    type: "chars,words",
  });
  let split_cs_hero_style5_subtext = new SplitText(cs_hero_style5_subtext, {
    type: "chars words",
  });

  HomeDigital.from(split_creatives.chars, {
    duration: 1.2,
    x: 100,
    autoAlpha: 0,
    stagger: 0.2,
  });
  HomeDigital.from(
    split_solutions.chars,
    {
      duration: 1,
      x: 100,
      autoAlpha: 0,
      stagger: 0.1,
    },
    "-=1"
  );

  HomeDigital.from(
    split_cs_hero_style5_subtext.words,
    {
      duration: 2,
      x: 50,
      autoAlpha: 0,
      stagger: 0.05,
    },
    "-=1"
  );

  /*--------------------------------------------------------------
            21. Text Typing Animation
--------------------------------------------------------------*/

  if (jQuery.exists(".anim_text_writting")) {
    let textTextWrittings = gsap.utils.toArray(".anim_text_writting");
    textTextWrittings.forEach((splitTextLine) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: "top 90%",
          end: "bottom 60%",
          scrub: false,
          markers: false,
          toggleActions: "play none none none",
        },
      });
      let textCharsWritting = new SplitText(splitTextLine, {
        type: "chars, words",
      });
      tl.from(
        textCharsWritting.chars,
        {
          duration: 1,
          x: 100,
          autoAlpha: 0,
          stagger: 0.2,
        },
        "-=1"
      );
    });
  }

  /*--------------------------------------------------------------
        21. Words Typing Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_word_writting")) {
    let textWordWrittings = gsap.utils.toArray(".anim_word_writting");

    textWordWrittings.forEach((splitWordLine) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitWordLine,
          start: "top 90%",
          end: "bottom 60%",
          scrub: false,
          markers: false,
          toggleActions: "play none none none",
        },
      });
      let textWordWritting = new SplitText(splitWordLine, {
        type: "words",
      });
      tl.from(
        textWordWritting.words,
        {
          duration: 2,
          x: 100,
          autoAlpha: 0,
          stagger: 0.5,
        },
        "-=1"
      );
    });
  }
  /*--------------------------------------------------------------
              22. Heading Title Animation
--------------------------------------------------------------*/
  if (jQuery.exists(".anim_heading_title")) {
    let splitTitleLines = gsap.utils.toArray(".anim_heading_title");

    splitTitleLines.forEach((splitTextLine) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: "top 90%",
          end: "bottom 20%",
          scrub: false,
          markers: false,
          toggleActions: "play none none none",
        },
      });
      const itemSplitted = new SplitText(splitTextLine, {
        type: "words, lines",
      });

      gsap.set(splitTextLine, {
        perspective: 400,
      });

      itemSplitted.split({
        type: "lines",
      });
      tl.from(itemSplitted.lines, {
        duration: 1,
        delay: 0.3,
        opacity: 0,
        rotationX: -80,
        force3D: true,
        transformOrigin: "top center -50",
        stagger: 0.1,
      });
    });
  }
  let btnAnims = gsap.utils.toArray(".cs_btn_anim");
  btnAnims.forEach((btnAnim) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: btnAnim,
        start: "top 90%",
        end: "bottom 20%",
        scrub: false,
        markers: false,
        toggleActions: "play push none none",
      },
    });
    gsap.set(btnAnim, {
      opacity: 0,
      x: 100,
    });

    tl.to(btnAnim, {
      duration: 1,
      delay: 0.8,
      opacity: 1,
      x: -0,
    });
  });

  /*--------------------------------------------------------------
   23. P tag text Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_text")) {
    let splitTextLines = gsap.utils.toArray(".anim_text");

    splitTextLines.forEach((splitTextLine) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: "top 90%",
          duration: 2,
          end: "bottom 60%",
          scrub: false,
          markers: false,
          toggleActions: "play none none none",
        },
      });

      const itemSplitted = new SplitText(splitTextLine, {
        type: "lines",
      });
      gsap.set(splitTextLine, {
        perspective: 400,
      });
      itemSplitted.split({
        type: "lines",
      });
      tl.from(itemSplitted.lines, {
        duration: 1,
        delay: 0.5,
        opacity: 0,
        rotationX: -80,
        force3D: true,
        transformOrigin: "top center -50",
        stagger: 0.1,
      });
    });
  }
  /*--------------------------------------------------------------
   24. Blog section Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_blog")) {
    let blogAnim = gsap.utils.toArray(".anim_blog");
    gsap.set(blogAnim, {
      opacity: 0,
      y: -100,
      x: -100,
    });

    if (blogAnim) {
      blogAnim.forEach((item, i) => {
        gsap.to(item, {
          scrollTrigger: {
            trigger: item,
            start: "top center+=200",
            markers: false,
          },
          opacity: 1,
          x: -0,
          y: -0,
          ease: "power2.out",
          duration: 2,
          stagger: 0.5,
        });
      });
    }
  }

  /*--------------------------------------------------------------
    25. Startup Agency Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".cs_startup_agency.cs_card")) {
    let cs_startup_agency = gsap.utils.toArray(".cs_startup_agency.cs_card");
    cs_startup_agency.forEach((cs_startup) => {
      gsap.set(cs_startup, {
        opacity: 0,
        x: +100,
      });

      gsap.to(cs_startup, {
        scrollTrigger: {
          trigger: cs_startup,
          start: "top center+=200",
          markers: false,
        },
        opacity: 1,
        x: -0,
        ease: "power2.out",
        duration: 2,
        stagger: {
          each: 0.4,
        },
      });
    });
  }
  /*--------------------------------------------------------------
      26. Stagger Text Up and Downs Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_text_upanddowns")) {
    let aminTextUpanddowns = gsap.utils.toArray(".anim_text_upanddowns");
    let aminTextUpanddownChar = new SplitText(aminTextUpanddowns, {
      type: "chars",
    });

    let textUpanddown = gsap.timeline({
      scrollTrigger: {
        trigger: aminTextUpanddowns,
        start: "top 90%",
        end: "bottom 60%",
        scrub: false,
        markers: false,
        toggleActions: "play none none none",
      },
    });

    textUpanddown.from(aminTextUpanddownChar.chars, {
      duration: 2,
      opacity: 0,
      delay: 0.5,
      scale: 1.2,
      stagger: 0.5,
      y: 50,
      rotationX: 100,
      transformOrigin: "0% 30% -30",
      ease: "elastic",
      stagger: 0.05,
    });
  }
  /*--------------------------------------------------------------
         27. ShowsZoom Center Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_div_ShowZoom")) {
    let divShowsZoom = gsap.utils.toArray(".anim_div_ShowZoom");
    divShowsZoom.forEach((showsZoom) => {
      gsap.set(showsZoom, {
        opacity: 0,
        scale: 0,
      });

      gsap.to(showsZoom, {
        scrollTrigger: {
          trigger: showsZoom,
          start: "top 90%",
          end: "bottom 60%",
          markers: false,
        },
        opacity: 1,
        scale: 1,
        delay: 0.5,
        ease: "power3.out",
        duration: 1,
        stagger: 0.5,
      });
    });
  }
  /*--------------------------------------------------------------
      28. ShowsLeftSide Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_div_ShowLeftSide")) {
    let divShowsLeftSide = gsap.utils.toArray(".anim_div_ShowLeftSide");
    divShowsLeftSide.forEach((showsLeft) => {
      gsap.set(showsLeft, {
        opacity: 0,
        x: -100,
      });

      gsap.to(showsLeft, {
        scrollTrigger: {
          trigger: showsLeft,
          start: "top 90%",
          end: "bottom 60%",
          markers: false,
        },
        opacity: 1,
        x: -0,
        ease: "power2.out",
        duration: 2,
        stagger: 0.5,
      });
    });
  }
  /*--------------------------------------------------------------
      29. ShowsRightSide Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_div_ShowRightSide")) {
    let divShowsRightSide = gsap.utils.toArray(".anim_div_ShowRightSide");
    divShowsRightSide.forEach((showsRight) => {
      gsap.set(showsRight, {
        opacity: 0,
        x: +100,
      });

      gsap.to(showsRight, {
        scrollTrigger: {
          trigger: showsRight,
          start: "top 90%",
          end: "bottom 60%",
          markers: false,
        },
        opacity: 1,
        x: -0,
        ease: "power2.out",
        duration: 2,
        stagger: 0.5,
      });
    });
  }
  /*--------------------------------------------------------------
        30. ShowsDown Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_div_ShowDowns")) {
    let divShowsDowns = gsap.utils.toArray(".anim_div_ShowDowns");
    divShowsDowns.forEach((showsDown) => {
      gsap.set(showsDown, {
        opacity: 0,
        y: +100,
      });

      gsap.to(showsDown, {
        scrollTrigger: {
          trigger: showsDown,
          start: "top 90%",
          end: "bottom 60%",
          markers: false,
        },
        opacity: 1,
        y: -0,
        ease: "power2.out",
        duration: 2,
        stagger: 0.5,
      });
    });
  }
  /*--------------------------------------------------------------
         31. ShowsUp Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".anim_div_ShowUps")) {
    let divShowsUps = gsap.utils.toArray(".anim_div_ShowUps");
    divShowsUps.forEach((showsUp) => {
      gsap.set(showsUp, {
        opacity: 0,
        y: -100,
      });

      gsap.to(showsUp, {
        scrollTrigger: {
          trigger: showsUp,
          start: "top 90%",
          end: "bottom 60%",
          markers: false,
        },
        opacity: 1,
        y: -0,
        ease: "power2.out",
        duration: 2,
        stagger: 0.5,
      });
    });
  }
  /*--------------------------------------------------------------
         32. Funfact Counting Animation
 --------------------------------------------------------------*/
  if (jQuery.exists(".cs_funfact.cs_style1")) {
    const count_number = gsap.utils.toArray(".cs_funfact.cs_style1");
    const count_id = gsap.utils.toArray(".amin_auto_count");
    if (count_number) {
      count_id.forEach((num) => {
        gsap.from(num, {
          scrollTrigger: {
            trigger: num,
            start: "top center+=200",
            markers: false,
          },
          delay: 2,
          innerText: 0,
          duration: 3,
          snap: {
            innerText: 1,
          },
        });
      });
      gsap.from(count_number, {
        scrollTrigger: {
          trigger: count_number,
          start: "top center+=200",
          markers: false,
        },
        duration: 2,
        scale: 0.5,
        opacity: 0,
        delay: 0.5,
        stagger: 0.2,
        ease: "elastic",
        force3D: true,
      });
    }
  }
  /*--------------------------------------------------------------
       33. Text  popup Animation
--------------------------------------------------------------*/
  if (jQuery.exists(".anim_text_popup")) {
    let text_anim_top = gsap.utils.toArray(".anim_text_popup");

    text_anim_top.forEach((splitTextLine2) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine2,
          start: "top 90%",
          end: "bottom 60%",
          toggleActions: "play none none none",
        },
      });

      const itemSplitted = new SplitText(splitTextLine2, {
          type: "words",
        }),
        textNumWords = itemSplitted.words.length;

      gsap.delayedCall(0.05, function () {
        for (var i = 0; i < textNumWords; i++) {
          tl.from(
            itemSplitted.words[i],
            1,
            {
              force3D: true,
              scale: Math.random() > 0.5 ? 0 : 2,
              opacity: 0,
            },
            Math.random()
          );
        }
      });
    });
  }
  // End of use strict
})(jQuery);
