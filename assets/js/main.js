jQuery(document).ready(function ($) {

    // Contact form popup
    $('#openModal').on('click', function () {
        $("#contactModal").show()
    });


    // Product media popup
    $('.video').magnificPopup({
        /*disableOn: 700,*/
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
    $('.photo').magnificPopup({
      /*disableOn: 700,*/
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });
    $(function () {
      // Card's slider
      var $carousel = $(".slider-for");
    
      $carousel
        .slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          adaptiveHeight: true,
          asNavFor: ".slider-nav"
        })
        .magnificPopup({
          type: "image",
          delegate: "a:not(.slick-cloned)",
          closeOnContentClick: false,
          tLoading: "Загрузка...",
          mainClass: "mfp-zoom-in mfp-img-mobile",
          image: {
            verticalFit: true,
            tError: '<a href="%url%">Фото #%curr%</a> не загрузилось.'
          },
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            tCounter: '<span class="mfp-counter">%curr% из %total%</span>', // markup of counte
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          },
          zoom: {
            enabled: true,
            duration: 300
          },
          removalDelay: 300, //delay removal by X to allow out-animation
          callbacks: {
            open: function () {
              //overwrite default prev + next function. Add timeout for css3 crossfade animation
              $.magnificPopup.instance.next = function () {
                var self = this;
                self.wrap.removeClass("mfp-image-loaded");
                setTimeout(function () {
                  $.magnificPopup.proto.next.call(self);
                }, 120);
              };
              $.magnificPopup.instance.prev = function () {
                var self = this;
                self.wrap.removeClass("mfp-image-loaded");
                setTimeout(function () {
                  $.magnificPopup.proto.prev.call(self);
                }, 120);
              };
              var current = $carousel.slick("slickCurrentSlide");
              $carousel.magnificPopup("goTo", current);
            },
            imageLoadComplete: function () {
              var self = this;
              setTimeout(function () {
                self.wrap.addClass("mfp-image-loaded");
              }, 16);
            },
            beforeClose: function () {
              $carousel.slick("slickGoTo", parseInt(this.index));
            }
          }
        });
      $(".slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        variableWidth: true
      });
    });
  $(function () { // Project's slider //
    
    var $carousel = $(".projects-slider-for");

    $carousel
      .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: ".projects-slider-nav"
      })
      .magnificPopup({
        type: "image",
        delegate: "a:not(.slick-cloned)",
        closeOnContentClick: false,
        tLoading: "Загрузка...",
        mainClass: "mfp-zoom-in mfp-img-mobile",
        image: {
          verticalFit: true,
          tError: '<a href="%url%">Фото #%curr%</a> не загрузилось.'
        },
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          tCounter: '<span class="mfp-counter">%curr% из %total%</span>', // markup of counte
          preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        zoom: {
          enabled: true,
          duration: 300
        },
        removalDelay: 300, //delay removal by X to allow out-animation
        callbacks: {
          open: function () {
            //overwrite default prev + next function. Add timeout for css3 crossfade animation
            $.magnificPopup.instance.next = function () {
              var self = this;
              self.wrap.removeClass("mfp-image-loaded");
              setTimeout(function () {
                $.magnificPopup.proto.next.call(self);
              }, 120);
            };
            $.magnificPopup.instance.prev = function () {
              var self = this;
              self.wrap.removeClass("mfp-image-loaded");
              setTimeout(function () {
                $.magnificPopup.proto.prev.call(self);
              }, 120);
            };
            var current = $carousel.slick("slickCurrentSlide");
            $carousel.magnificPopup("goTo", current);
          },
          imageLoadComplete: function () {
            var self = this;
            setTimeout(function () {
              self.wrap.addClass("mfp-image-loaded");
            }, 16);
          },
          beforeClose: function () {
            $carousel.slick("slickGoTo", parseInt(this.index));
          }
        }
      });
    $(".projects-slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".projects-slider-for",
      dots: true,
      centerMode: false,
      focusOnSelect: true,
      variableWidth: true,
      prevArrow: "<i class='fas fa-arrow-left'></i>",
      nextArrow: "<i class='fas fa-arrow-right'></i>"
    });
  });




    /*$(document).ready(function() {
        $('.video').magnificPopup();
    
    });*/
    // lightGallery(document.querySelector('.img-secondary-wrapper', '.product-main-info-img'), {
    //     thumbnail: true,
    // });

    // lightGallery(document.querySelector('.versions .version-item-img'), {
    //     //thumbnail: true,
    // });


    // $(document).on('click', '.img-secondary-wrapper', function (event) {
    //     event.preventDefault();
    //     $(this).ekkoLightbox();
    // })


    // Product Image Modal

    // function openModalImage() {
    //     document.getElementById("imageProductModal").style.display = "block";
    //     document.body.style.overflowY = 'hidden';
    //     document.body.style.height = '100vh';
    // }

    // function closeModalImage() {
    //     document.getElementById("imageProductModal").style.display = "none";
    //     document.body.style.overflowY = 'unset';
    //     document.body.style.height = 'unset';
    // }

});