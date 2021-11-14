(function ($) {

    $('#openModal').on('click', function () {
        $("#contactModal").show()
    });
    /*$(document).ready(function() {
        $('.video').magnificPopup();
    
    });*/
    //$(document).ready(function() {
    $('.video').magnificPopup({
        disableOn: 700,
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
    //});
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

})(jQuery);