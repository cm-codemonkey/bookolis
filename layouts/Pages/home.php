<?php
defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}OwlCarousel2-2.3.4/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}OwlCarousel2-2.3.4/owl.carousel.min.js']);

$this->dependencies->add(['js', '{$path.js}pages/home.js?v=1.0.1']);
?>

<div id="page">
    %{main-header}%
    <main id="main-content">
        <section class="slideshow slideshow-cover">
            <div class="owl-carousel owl-theme">
                <div class="item slide-item" style="background-image: url('{$path.images}cover-1.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-2 suffix-2 offset-lg-0 suffix-lg-0">
                                <h2 class="slide-title" style="color:#fff;">{$lang.the_best_of_island}</h2>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn btn-lg text-uppercase m-t-30" style="border-color:#f44336;background-color:#f44336;color:#fff;">{$lang.new}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-item" style="background-image: url('{$path.images}cover-2.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-2 suffix-2 offset-lg-0 suffix-lg-0">
                                <h2 class="slide-title">{$lang.more_600k_in_the_world}</h2>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn btn-lg text-uppercase m-t-30">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-item" style="background-image: url('{$path.images}cover-3.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-2 suffix-2 offset-lg-0 suffix-lg-0">
                                <h2 class="slide-title" style="color:#fff;">{$lang.the_best_of_mexico}</h2>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn btn-lg text-uppercase m-t-30" style="border-color:#f44336;background-color:#f44336;color:#fff;">{$lang.new}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item slide-item" style="background-image: url('{$path.images}cover-4.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-2 suffix-2 offset-lg-0 suffix-lg-0">
                                <h2 class="slide-title" style="color:#fff;">{$lang.the_best_of_dominican_republic}</h2>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn btn-lg text-uppercase m-t-30" style="border-color:#f44336;background-color:#f44336;color:#fff;">{$lang.new}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <ul class="list-unstyled list-group">
                    <li class="list-group-item">
                        <a href="tel:{$lang.phone_to_call}"><i class="fa fa-phone"></i></a>
                    </li>
                    <li class="list-group-item highlighted">
                        <a href="mailto:{$lang.email_to_send}"><i class="fa fa-envelope"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://www.facebook.com/bookolis" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://www.instagram.com/bookolis/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="control-buttons">
                <button class="prev"><i class="fa fa-angle-left"></i></button>
                <button class="next"><i class="fa fa-angle-right"></i></button>
            </div>
        </section>
        <section id="products" class="bg-icons m-t-50 p-t-50 m-b-50 p-b-50">
            <div class="container p-b-50">
                <h1 class="title-section m-b-30">{$lang.signup_now}</h1>
                <h2 class="text-center">{$lang.and_get_access}</h2>
            </div>
            <div class="slideshow slideshow-carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="tour">
                            <figure class="figure-cover">
                                <img src="{$path.images}island.jpg" alt="" class="img-object-fit-cover">
                            </figure>
                            <div class="content">
                                <h3 class="m-b-20"><strong>{$lang.island}</strong></h3>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tour">
                            <figure class="figure-cover">
                                <img src="{$path.images}mexico.jpg" alt="" class="img-object-fit-cover">
                            </figure>
                            <div class="content">
                                <h3 class="m-b-20"><strong>{$lang.mexico}</strong></h3>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tour">
                            <figure class="figure-cover">
                                <img src="{$path.images}dominican_republic.jpg" alt="" class="img-object-fit-cover">
                            </figure>
                            <div class="content">
                                <h3 class="m-b-20"><strong>{$lang.dominican_republic}</strong></h3>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tour">
                            <figure class="figure-cover">
                                <img src="{$path.images}brussels.jpg" alt="" class="img-object-fit-cover">
                            </figure>
                            <div class="content">
                                <h3 class="m-b-20"><strong>{$lang.brussels_amsterdanm_paris}</strong></h3>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tour">
                            <figure class="figure-cover">
                                <img src="{$path.images}spain.jpg" alt="" class="img-object-fit-cover">
                            </figure>
                            <div class="content">
                                <h3 class="m-b-20"><strong>{$lang.spain_portugal}</strong></h3>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tour">
                            <figure class="figure-cover">
                                <img src="{$path.images}and_more.jpg" alt="" class="img-object-fit-cover">
                            </figure>
                            <div class="content">
                                <h3 class="m-b-20"><strong>{$lang.and_more}</strong></h3>
                                <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-t-50">
                <div class="row">
                    <div class="col-lg-4 bg-icn-topic">
                        <span><i class="fas fa-bed"></i></span>
                        <h4>{$lang.hotels_and_more}</h4>
                        <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                    </div>
                    <div class="col-lg-4 bg-icn-topic">
                        <span><i class="fas fa-map-marked-alt"></i></span>
                        <h4>{$lang.tours_and_more}</h4>
                        <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                    </div>
                    <div class="col-lg-4 bg-icn-topic">
                        <span><i class="fas fa-shuttle-van"></i></span>
                        <h4>{$lang.transfer_and_more}</h4>
                        <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-icons m-b-50 p-b-50">
            <div class="container p-b-50">
                <h1 class="title-section m-b-30">{$lang.why_bookolis}</h1>
                <h2 class="text-center">{$lang.we_are_the_best_b2b}</h2>
            </div>
            <div class="container p-t-50">
                <div class="row">
                    <div class="col-lg-3 text-center m-b-40 m-b-md-0">
                        <figure class="thumb-lg m-auto m-b-20">
                            <img src="{$path.images}support.svg" alt="" class="thumb-lg">
                        </figure>
                        <h4><strong>{$lang.24_7_support}</strong></h4>
                        <p>{$lang.24_7_support_text}</p>
                    </div>
                    <div class="col-lg-3 text-center m-b-40 m-b-md-0">
                        <figure class="thumb-lg m-auto m-b-20">
                            <img src="{$path.images}check.svg" alt="" class="thumb-lg">
                        </figure>
                        <h4><strong>{$lang.experts}</strong></h4>
                        <p>{$lang.experts_text}</p>
                    </div>
                    <div class="col-lg-3 text-center m-b-40 m-b-md-0">
                        <figure class="thumb-lg m-auto m-b-20">
                            <img src="{$path.images}hotel.svg" alt="" class="thumb-lg">
                        </figure>
                        <h4><strong>{$lang.the_best_price}</strong></h4>
                        <p>{$lang.the_best_price_text}</p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="thumb-lg m-auto m-b-20">
                            <img src="{$path.images}plane.svg" alt="" class="thumb-lg">
                        </figure>
                        <h4><strong>{$lang.globals}</strong></h4>
                        <p>{$lang.globals_text}</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container p-b-50">
                <h1 class="title-section m-b-30">{$lang.what_have_to_you}</h1>
                <h2 class="text-center">{$lang.we_are_the_best_dmc}</h2>
            </div>
            <div class="p-t-50">
                <div class="bg-left-service">
                    <figure>
                        <img src="{$path.images}groups.jpg" alt="Groups">
                    </figure>
                    <div>
                        <h4 class="title-section m-b-20">{$lang.groups}</h4>
                        <p class="text-center m-b-20">{$lang.groups_text}</p>
                        <a href="javascript:void(0);" data-button-modal="quote" class="btn">{$lang.quote_now}</a>
                    </div>
                </div>
                <div class="bg-right-service">
                    <figure>
                        <img src="{$path.images}privates.jpg" alt="Service">
                    </figure>
                    <div>
                        <h4 class="title-section m-b-20">{$lang.privates}</h4>
                        <p class="text-center m-b-20">{$lang.privates_text}</p>
                        <a href="javascript:void(0);" data-button-modal="quote" class="btn">{$lang.quote_now}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="slideshow slideshow-people">
            <div class="owl-carousel owl-theme">
                <div class="item slide-item">
                    <figure>
                        <img src="{$path.images}suzanne_haire.jpg" alt="Comment">
                    </figure>
                    <h2 class="text-center">Suzanne Haire</h2>
                    <p class="text-center">Thanks to Miguel Escobedo Bookolis Bdm, Frank Coulier, for taking great care of my group's arrivals today! Another happy wedding group ...</p>
                </div>
                <div class="item slide-item">
                    <figure>
                        <img src="{$path.images}marybeth_noonan.jpg" alt="Comment">
                    </figure>
                    <h2 class="text-center">Marybeth Noonan</h2>
                    <p class="text-center">I just had the best trip with them! Easy to book, included a wonderful tour and i didn’t have to plan a thing. They did it all for me! Miguel is highly personable and I would highly recommend this company.</p>
                </div>
                <div class="item slide-item">
                    <figure>
                        <img src="{$path.images}liz_haak_travel.jpg" alt="Comment">
                    </figure>
                    <h2 class="text-center">Liz Haak Travel</h2>
                    <p class="text-center">Thank you @bookolis.com_latam for taking care of my group today!  @palaceresorts #sunpalacecancun here they come. @miguel.bookolis thank you!!!  Frank Coulier</p>
                </div>
            </div>
            <div class="social-media">
                <ul class="list-unstyled list-group">
                    <li class="list-group-item">
                        <a href="tel:{$lang.phone_to_call}"><i class="fa fa-phone"></i></a>
                    </li>
                    <li class="list-group-item highlighted">
                        <a href="mailto:{$lang.email_to_send}"><i class="fa fa-envelope"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://www.facebook.com/bookolis" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://www.instagram.com/bookolis/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="control-buttons">
                <button class="prev"><i class="fa fa-angle-left"></i></button>
                <button class="next"><i class="fa fa-angle-right"></i></button>
            </div>
        </section>
        <section class="p-t-50 p-b-50" style="background-color:#f9f9f9;">
            <div class="container p-b-50">
                <h1 class="title-section m-b-30">{$lang.a_bit_of_in_images}</h1>
                <h2 class="text-center">{$lang.thousands_of_smiles}</h2>
            </div>
            <div class="container p-t-50">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-1.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-2.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-3.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-4.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-5.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-6.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-7.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-8.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-9.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-10.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-11.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-12.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-13.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-14.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-15.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-16.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-17.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-18.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-19.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-20.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-21.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-22.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-23.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-24.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-25.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-26.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-27.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-28.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-29.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-30.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-31.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-32.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-33.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-34.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-35.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-36.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-37.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-38.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-39.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-40.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-41.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-42.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-43.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-44.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-45.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-46.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-47.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-48.JPG" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-49.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-50.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-51.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-52.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-53.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                    <div class="col-lg-3 text-center">
                        <figure class="gallery">
                            <img src="{$path.images}gallery-54.jpg" alt="" class="Gallery">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<section class="modal" data-modal="signup">
    <div class="content">
        <main>
            <form name="signup">
                <h4 class="m-b-50 text-right">{$lang.signup_now}</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>{$lang.company_name} <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>{$lang.phone} <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>{$lang.email} <span class="text-danger"><small>*</small></span></p>
                                <input type="email" name="email">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>{$lang.observations}</p>
                                <textarea name="observations"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 m-t-20" style="display:flex;align-items:center;justify-content:flex-end;">
                        <a button-close>{$lang.cancel}</a>
                        <button type="submit" class="btn m-l-20">{$lang.send}</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
<section class="modal" data-modal="quote">
    <div class="content">
        <main>
            <form name="quote">
                <h4 class="m-b-50 text-right">{$lang.quote_now}</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>{$lang.company_name} <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>{$lang.phone} <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>{$lang.email} <span class="text-danger"><small>*</small></span></p>
                                <input type="email" name="email">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>{$lang.observations}</p>
                                <textarea name="observations"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 m-t-20" style="display:flex;align-items:center;justify-content:flex-end;">
                        <a button-close>{$lang.cancel}</a>
                        <button type="submit" class="btn m-l-20">{$lang.send}</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
<section class="modal" data-modal="contact">
    <div class="content">
        <main>
            <form name="contact">
                <h4 class="m-b-50 text-right">{$lang.contact_us}</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>{$lang.company_name} <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="name">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>{$lang.phone} <span class="text-danger"><small>*</small></span></p>
                                <input type="text" name="phone">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label>
                                <p>{$lang.email} <span class="text-danger"><small>*</small></span></p>
                                <input type="email" name="email">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">
                            <label>
                                <p>{$lang.observations}</p>
                                <textarea name="observations"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 m-t-20" style="display:flex;align-items:center;justify-content:flex-end;">
                        <a button-close>{$lang.cancel}</a>
                        <button type="submit" class="btn m-l-20">{$lang.send}</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</section>
