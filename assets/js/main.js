(function ($) {

    /*
    class SlickCarousel {
        constructor() {
            this.initializeCarousel();
        }
        initializeCarousel() {
            $('.products-slider').slick({
                autoplay: false,
                dots: true,
                arrows: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                        }
                    },
                ]
            });
            $('.main-slider').slick({
                autoplay: true,
                dots: true,
                arrows: false,
            });
            $('.category-item .category-body').slideUp();

            $(document).ready(function() {
                $('main .category-header').on('click', function() {
                    $(this).next().slideToggle('slow');
                    $(this).parent().siblings().children().next().slideUp();
                });
            });
            $(document).ready(function () {
                $('#MobileToggle').on('click', function () {
                    $('#MobileToggleMenu').toggleClass('open-mobile-menu');
                });
            });

            $(document).ready(function () {
                $('#CloseResponsive').on('click', function () {
                    $('#MobileToggleMenu').toggleClass('open-mobile-menu');
                });
            });
        }
    }

    new SlickCarousel();
    */

    $('#openModal').on('click', function () {
        $("#contactModal").show()
    });

})(jQuery);

// Product Image Modal

function openModalImage() {
    document.getElementById("imageProductModal").style.display = "block";
    document.body.style.overflowY = 'hidden';
    document.body.style.height = '100vh';
}

function closeModalImage() {
    document.getElementById("imageProductModal").style.display = "none";
    document.body.style.overflowY = 'unset';
    document.body.style.height = 'unset';
}

/*
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slidesProductModal");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
*/