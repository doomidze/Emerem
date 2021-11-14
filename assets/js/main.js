jQuery(document).ready(function ($) {

    // Contact form popup
    $('#openModal').on('click', function () {
        $("#contactModal").show()
    });


    // Product media popup
    $('.video').magnificPopup({
        disableOn: 700,
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
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