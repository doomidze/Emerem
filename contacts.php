<?php
/*
    Template Name: Contacts Page
*/
?>

<?php $page_id = get_the_ID(); ?>
<?php get_header(); ?>
<main class="main contacts-page">

    <section class="map ">
        <div class="map-title container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
            <h1 class="">Наши контакты</h1>
        </div>
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
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2376 0.71299C13.0945 0.579848 12.9015 0.505189 12.7004 0.505155H8.2615V0H6.73085V0.505155H2.90424C2.70126 0.505155 2.5066 0.581185 2.36307 0.716521C2.21955 0.851856 2.13891 1.03541 2.13891 1.2268V4.1134C2.13891 4.3048 2.21955 4.48835 2.36307 4.62369C2.5066 4.75902 2.70126 4.83505 2.90424 4.83505H6.73085V6.27835H2.29198C2.09089 6.27838 1.8979 6.35304 1.75472 6.48619L0.224076 7.91216C0.0806003 8.04749 0 8.23102 0 8.42237C0 8.61373 0.0806003 8.79725 0.224076 8.93258L1.75472 10.3932C1.89665 10.529 2.0898 10.6063 2.29198 10.6082H6.73085V14H8.2615V10.6082H12.0881C12.2911 10.6082 12.4857 10.5322 12.6293 10.3969C12.7728 10.2615 12.8534 10.078 12.8534 9.8866V7C12.8534 6.80861 12.7728 6.62505 12.6293 6.48972C12.4857 6.35438 12.2911 6.27835 12.0881 6.27835H8.2615V4.83505H12.7004C12.8018 4.83503 12.9022 4.81601 12.9957 4.7791C13.0893 4.74218 13.1741 4.6881 13.2453 4.62L14.7759 3.15938C14.9194 3.02405 15 2.84053 15 2.64918C15 2.45782 14.9194 2.2743 14.7759 2.13897L13.2376 0.71299ZM11.3228 9.16495H2.61188L1.84656 8.43175L2.61188 7.72165H11.3228V9.16495ZM12.3805 3.39175H3.66956V1.94845H12.3866L13.1519 2.65856L12.3805 3.39175Z" fill="#EB1C24"/>
                        </svg>
                    </div>
                    <div class="contact-info-item-text">
                        <div class="contact-info-item-title">Адрес:</div>
                        <a href=""><?php echo $GLOBALS['emerem']['address']; ?></a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-item-svg">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.8442 8.76443C13.6758 9.04157 13.3053 9.07621 13.0863 8.83372C12.9516 8.67783 12.9347 8.45266 13.0358 8.26213C13.1705 8.03695 13.2379 7.77714 13.2379 7.5C13.2379 7.22286 13.1537 6.96305 13.0358 6.73788C12.9347 6.56467 12.9516 6.32217 13.0863 6.16628C13.2884 5.92379 13.6758 5.95843 13.8442 6.23557C14.0632 6.59931 14.1979 7.03233 14.1979 7.5C14.1979 7.96767 14.0632 8.40069 13.8442 8.76443Z" fill="#EB1C24"/>
                            <path d="M15.0232 10.2714C14.8379 10.4965 14.5011 10.4965 14.3158 10.2887C14.1642 10.1155 14.1642 9.83834 14.2989 9.66513C14.7705 9.07621 15.0568 8.33141 15.0568 7.51732C15.0568 6.70323 14.7705 5.94111 14.2989 5.36952C14.1474 5.19631 14.1642 4.91917 14.3158 4.74596C14.5011 4.52079 14.8379 4.52079 15.0232 4.76328C15.6295 5.50808 16 6.47806 16 7.53464C16 8.55658 15.6295 9.50924 15.0232 10.2714Z" fill="#EB1C24"/>
                            <path d="M2.91368 8.83372C2.69474 9.07621 2.32421 9.04157 2.15579 8.76443C1.93684 8.40069 1.80211 7.96767 1.80211 7.5C1.80211 7.03233 1.93684 6.59931 2.15579 6.23557C2.32421 5.95843 2.69474 5.92379 2.91368 6.16628C3.04842 6.32217 3.06526 6.54735 2.96421 6.73788C2.82947 6.96305 2.76211 7.22286 2.76211 7.5C2.76211 7.77714 2.84632 8.03695 2.96421 8.26213C3.04842 8.45266 3.04842 8.67783 2.91368 8.83372Z" fill="#EB1C24"/>
                            <path d="M0.943158 7.5C0.943158 8.31409 1.22947 9.07621 1.70105 9.64781C1.85263 9.82102 1.83579 10.0982 1.68421 10.2714C1.49895 10.4965 1.16211 10.4965 0.976842 10.254C0.370526 9.50924 0 8.53926 0 7.48268C0 6.4261 0.370526 5.47344 0.976842 4.71132C1.16211 4.48615 1.49895 4.48615 1.68421 4.694C1.83579 4.86721 1.83579 5.14434 1.70105 5.31755C1.22947 5.92379 0.943158 6.68591 0.943158 7.5Z" fill="#EB1C24"/>
                            <path d="M10.7284 15H5.27158C4.59789 15 4.05895 14.4457 4.05895 13.7529V1.24711C4.05895 0.554274 4.59789 0 5.27158 0H10.7453C11.4189 0 11.9579 0.554274 11.9579 1.24711V13.7529C11.9411 14.4457 11.4021 15 10.7284 15ZM5.27158 14.2206H10.7453C10.9979 14.2206 11.2 14.0127 11.2 13.7529V12.2633H4.8V13.7529C4.8 14.0127 5.01895 14.2206 5.27158 14.2206ZM10.7284 0.779446H5.27158C5.01895 0.779446 4.81684 0.987299 4.81684 1.24711V3.20439H11.2V1.24711C11.2 0.987299 10.9811 0.779446 10.7284 0.779446Z" fill="#EB1C24"/>
                            <path d="M8 1.24711C8.39997 1.24711 8.72421 1.58057 8.72421 1.99192C8.72421 2.40326 8.39997 2.73672 8 2.73672C7.60003 2.73672 7.27579 2.40326 7.27579 1.99192C7.27579 1.58057 7.60003 1.24711 8 1.24711Z" fill="#EB1C24"/>
                            <path d="M7.07368 12.8522H8.90947C9.11158 12.8522 9.28 13.0254 9.28 13.2333C9.28 13.4411 9.11158 13.6143 8.90947 13.6143H7.07368C6.87158 13.6143 6.70316 13.4411 6.70316 13.2333C6.70316 13.0254 6.87158 12.8522 7.07368 12.8522Z" fill="#EB1C24"/>
                        </svg>                          
                    </div>
                    <div class="contact-info-item-text contact">
                        <div class="contact-info-item-title">Номер:</div>
                        <a href="tel:<?php echo $GLOBALS['emerem']['phone_digits']; ?>" class="fw-400"><?php echo $GLOBALS['emerem']['phone']; ?></a>
                        <a href="tel:<?php echo $GLOBALS['emerem']['phone_digits']; ?>" class="fw-400"><?php echo $GLOBALS['emerem']['phone']; ?></a>
                        <div class="socials">
                            <a href="https://telegram.me/YourUsername"><i class="fab fa-telegram"></i></a>
                            <a class="viber-but" href="viber://chat?number=%2B75555555559"><i class="fab fa-viber"></i></a>
                        </div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="contact-info-item-svg">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 3.5C5.075 3.5 3.5 5.075 3.5 7C3.5 8.925 5.075 10.5 7 10.5H10.5C12.425 10.5 14 8.925 14 7C14 3.1325 10.8675 0 7 0C3.1325 0 0 3.1325 0 7C0 10.8675 3.1325 14 7 14H14V12.25H7C4.095 12.25 1.75 9.905 1.75 7C1.75 4.095 4.095 1.75 7 1.75C9.905 1.75 12.25 4.095 12.25 7C12.25 7.9625 11.4625 8.75 10.5 8.75H10.01C10.3075 8.225 10.5 7.6475 10.5 7C10.5 5.075 8.925 3.5 7 3.5ZM7 8.75C6.0375 8.75 5.25 7.9625 5.25 7C5.25 6.0375 6.0375 5.25 7 5.25C7.9625 5.25 8.75 6.0375 8.75 7C8.75 7.9625 7.9625 8.75 7 8.75Z" fill="#EB1C24"/>
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
