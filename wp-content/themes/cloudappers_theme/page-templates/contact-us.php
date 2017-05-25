<?php
/**
 * Created by PhpStorm.
 * User: Fadi
 * Date: 05/11/17
 * Time: 1:15 PM
 * Template Name: ContactUsPage
 */

$homePagePost = get_page_by_path('home', OBJECT, 'page');
$pageOptions = acf_get_group_fields($homePagePost->ID);

$pageOptions = acf_get_group_fields(get_the_ID());

get_header();
get_template_part('template-part', 'topnav');
?>

<?php


$services_page_header_image = (!empty($pageOptions['let_us_page_header_image']['url']) ? esc_url($pageOptions['let_us_page_header_image']['url']) : esc_url(get_stylesheet_directory_uri() . '/img/contactus-header.png'));
?>

    <section class="ca-page-header parallax-window" data-parallax="scroll" data-bleed="50"
             data-image-src="<?php echo $services_page_header_image; ?>">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="title">What's cooking</p>
                    <p class="sub-title">Good Looking</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blue-desc">
        <div class="right-top-div">
            <img alt="I'm live" class="img-responsive"
                 src="<?php echo get_template_directory_uri() . '/img/IamLive.png' ?>">
            <div class="live-desc">
                I'm live
            </div>
        </div>
        <div class="container">
            <p>A magical place where great app ideas are hand-crafted into successful <br>
                businesses thanks to the talented bunch of digital <br>
                freaks we proudly home
            </p>
        </div>
    </section>

    <section class="join">
        <div class="container">
            <div class="row title">
                <div class="col-lg-12">
                    <h6>explore opportunities</h6>
                    <h1>Available Now</h1>
                </div>
            </div>
            <div class="table-title row">
                <div class="col-lg-5"><h5>POSITION</h5></div>
                <div class="col-lg-5"><h5>DESCRIPTION</h5></div>
            </div>
            <div class="row">
                <div class="position col-lg-5">

                    <p>Senior Research Scientist
                        <span>Dubai, UAE</span>
                    </p>
                </div>
                <div class="desc col-lg-5">

                    <p> Data & Analytics, Data Science
                        <span>Machine Learning</span>
                    </p>
                </div>
                <div class="apply col-lg-2">
                    <a href="" class="c-btn">apply</a>
                </div>
            </div>
            <div class="row">
                <div class="position col-lg-5">
                    <p>Senior Research Scientist
                        <span>Dubai, UAE</span>
                    </p>
                </div>
                <div class="desc col-lg-5">

                    <p> Data & Analytics, Data Science
                        <span>Machine Learning</span>
                    </p>
                </div>
                <div class="apply col-lg-2">
                    <a href="" class="c-btn">apply</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact col-eq-height">
        <div class="map col-lg-6">
            <div id="map"></div>
        </div>
        <div class="col-lg-6">
            <div class="form">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6>Drop us a line</h6>
                            <h1>say hello!</h1>
                            <form method="post" action="" id="GetInTouchForm">
                                <div class="form-group place-lbl">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group place-lbl">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group place-lbl">
                                    <label for="name">Company</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="form-group place-lbl">
                                    <label for="name">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group note">
                                    <label for="note">What we need to know?</label>
                                    <input type="text" class="form-control" id="note" name="note">
                                </div>
                                <button type="submit" class="c-btn">GET IN TOUCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prefooter lazy-background"
             data-bg="<?php echo esc_url(get_stylesheet_directory_uri() . '/img/prefooter.png'); ?>">
        <div class="container">
            <div class="row">
                <div class="img-prefooter col-lg-5  col-md-12">
                    <img class="img-responsive"
                         src="<?php echo get_template_directory_uri() . '/img/infographics-for-banner@3x.png' ?>">
                </div>
                <div class="col-lg-7  col-md-12">
                    <h1>Ready to make your idea happens?</h1>
                    <p>That's the spirits! Let's make history together</p>
                    <a href="https://cloudappers.typeform.com/to/dUDCpe" class="c-btn">TELL US ABOUT YOUR PROJECT</a>
                </div>
            </div>
        </div>
    </section>

    <!--Google map-->
    <script>

        var map1, map2;
        function initMap() {

            var customMapType = new google.maps.StyledMapType([
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#e0efef"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "hue": "#1900ff"
                        },
                        {
                            "color": "#c0e8e8"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "lightness": 100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "lightness": 700
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#7dcdcd"
                        }
                    ]
                }
            ], {
                name: 'Cloudappers'
            });

            var customMapTypeId = 'custom_style';
            var image = {
                url: "<?php echo esc_url($pageOptions['home_page_map_pins'][0]['home_page_map_pin_image']['url']); ?>",
                scaledSize: new google.maps.Size(27, 39), // scaled size)
            };
            var url = {
                lat: <?php echo $pageOptions['home_page_map_pins'][0]['home_page_map_pin_latitude']; ?>,
                lng: <?php echo $pageOptions['home_page_map_pins'][0]['home_page_map_pin_altitude']; ?>};

            var option1 = {
                center: {
                    lat: <?php echo $pageOptions['home_page_map_pins'][0]['home_page_map_pin_latitude']; ?>,
                    lng: <?php echo $pageOptions['home_page_map_pins'][0]['home_page_map_pin_altitude']; ?>
                },
                zoom: 13,
                scrollwheel: false,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
                }
            }
            var option2 = {
                center: {
                    lat: <?php echo $pageOptions['home_page_map_pins'][0]['home_page_map_pin_latitude']; ?>,
                    lng: <?php echo $pageOptions['home_page_map_pins'][0]['home_page_map_pin_altitude']; ?>
                },
                zoom: 10,
                scrollwheel: false,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
                }
            }

            map1 = new google.maps.Map(document.getElementById("map"), option1);
            map2 = new google.maps.Map(document.getElementById("map-details"), option2);

            map1.mapTypes.set(customMapTypeId, customMapType);
            map1.setMapTypeId(customMapTypeId);


            var marker1 = new google.maps.Marker({
                position: url,
                map: map1,
                icon: image,
                title: '',
                animation: google.maps.Animation.DROP,
            });

            var marker = new google.maps.Marker({
                position: url,
                map: map2,
                icon: image,
                title: '',
                animation: google.maps.Animation.DROP,
            });


            $('#map-popup').on('shown.bs.modal', function () {
                google.maps.event.trigger(map2, "resize");
                return map2.setCenter(url);
            });

        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWs0rsi44WbJwTxkHdutuiLXXyQZ8pd68&callback=initMap"></script>

<?php
get_footer();
