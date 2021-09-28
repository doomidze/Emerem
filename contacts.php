<?php
/*
    Template Name: Contacts Page
*/
?>

<?php $page_id = get_the_ID(); ?>
<?php get_header(); ?>
<main class="main">
    <section class="link container">
        <a href="/" class="main-link">Главная </a>
        <a href="" class="secondary-link"> / Контакты</a>
    </section>
    <section class="map">
        <h1 class="map-title container">Наши контакты</h1>
        <div id="map"></div>
        <script>
            function initMap() {
                var emerem = {lat: 50.45857267808573, lng: 30.48049025378408};
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 10,
                    center: emerem,
                    disableDefaultUI: true,
                });
                var marker = new google.maps.Marker({position: emerem, map: map});
            }
        </script>
        <script defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmaohS6-yL-Jy9pslw0UAAL2DeXLKzQHQ&callback=initMap">
        </script>
    </section>
    <section class="contact-wrapper">
        <div class="contact-info container">
            <div class="contact-info-wrapper">
                <div class="contact-info-item">
                    <div class="contact-info-item-svg">
                        <svg width="21" height="30" viewBox="0 0 21 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7449 0.922852C5.35435 0.922852 0.96875 5.30846 0.96875 10.699C0.96875 17.4743 10.7545 29.0478 10.7545 29.0478C10.7545 29.0478 20.521 17.1411 20.521 10.699C20.521 5.30846 16.1355 0.922852 10.7449 0.922852ZM13.6945 13.5614C12.8812 14.3746 11.8131 14.7812 10.7449 14.7812C9.67678 14.7812 8.60836 14.3746 7.79538 13.5614C6.16889 11.9351 6.16889 9.28877 7.79538 7.66228C8.58296 6.87435 9.63061 6.44039 10.7449 6.44039C11.8591 6.44039 12.9066 6.87452 13.6945 7.66228C15.321 9.28877 15.321 11.9351 13.6945 13.5614Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                    <div class="contact-info-item-text">
                        <div class="contact-info-item-title">Адрес:</div>
                        <a href=""><?php echo $GLOBALS['emerem']['address']; ?></a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-item-svg">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.6667 16.6667C21.0067 16.6667 19.4 16.4 17.9067 15.9067C17.4467 15.76 16.92 15.8667 16.5534 16.2334L13.6201 19.1734C9.84006 17.2534 6.75338 14.1667 4.83337 10.3934L7.76669 7.44669C8.13338 7.08 8.24 6.55338 8.09338 6.09338C7.60006 4.60006 7.33337 2.99337 7.33337 1.33337C7.33331 0.593313 6.74 0 6 0H1.33331C0.6 0 0 0.593313 0 1.33331C0 13.8533 10.1467 24 22.6667 24C23.4067 24 24 23.4067 24 22.6667V18C24 17.26 23.4067 16.6667 22.6667 16.6667Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                    <div class="contact-info-item-text">
                        <div class="contact-info-item-title">Номер:</div>
                        <a href="tel:<?php echo $GLOBALS['emerem']['phone_digits']; ?>" class="fw-400"><?php echo $GLOBALS['emerem']['phone']; ?></a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-item-svg">
                        <svg width="26" height="17" viewBox="0 0 26 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3599 0H23.9962C24.8493 0 25.5416 0.692361 25.5416 1.54545V2.42326L13.178 7.66078L0.814453 2.42481V1.54545C0.814453 0.692361 1.50681 0 2.3599 0ZM13.178 9.27262C13.28 9.27262 13.3836 9.25253 13.4794 9.2108L25.5416 4.10309V15.4544C25.5416 16.3075 24.8493 16.9999 23.9962 16.9999H2.3599C1.50681 16.9999 0.814453 16.3075 0.814453 15.4544V4.10309L12.8767 9.2108C12.9725 9.25253 13.076 9.27262 13.178 9.27262Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                    <div class="contact-info-item-text">
                        <div class="contact-info-item-title">Почта:</div>
                        <a href="mailto:<?php echo $GLOBALS['emerem']['email']; ?>"><?php echo $GLOBALS['emerem']['email']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info-text container">
        <div>
            <?php echo carbon_get_post_meta($page_id, 'contacts_text') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
