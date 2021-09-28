(function($){
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

    $('#openModal').on('click', function() {
        $("#contactModal").show()
    });
})(jQuery);

function openStage(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function closeModal() {
    var modal = document.getElementById("contactModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "none";
    document.querySelector("body").style.overflow = 'visible';
}

function openModal() {
    var modal = document.getElementById("contactModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    modal.style.display = "block";
    document.querySelector("body").style.overflow = 'hidden';
}

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
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
}
