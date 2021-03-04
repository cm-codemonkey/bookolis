<?php defined('_EXEC') or die; ?>
<header class="main-header">
    <div class="topbar-tools">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-12 text-center text-lg-right">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item m-0">
                            <a href="javascript:void(0);" data-button-modal="signup" class="btn">{$lang.signup_now}</a>
                        </li>
                        <li class="list-inline-item">
                            <div class="dropmenu menu-right">
                                <button class="btn btn-link">{$lang.language} {$lang.current_language} <i class="fa fa-angle-down m-l-5"></i></button>
                                <div class="dropdown">
                                    <a href="?lang=es">Español</a>
                                    <a href="?lang=en">English</a>
                                    <a href="?lang=nl">Nederlands</a>
                                    <a href="?lang=fr">Français</a>
                                    <a href="?lang=pt">Português</a>
                                    <a href="?lang=de">Deutsche</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item m-0">
                            <a href="tel:{$lang.phone_to_call}" class="btn" style="width:42px;height:42px;border-radius:50%;padding:0px;display:flex;align-items:center;justify-content:center;"><i class="fa fa-phone"></i></a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a href="mailto:{$lang.email_to_send}" class="btn" style="width:42px;height:42px;border-radius:50%;padding:0px;display:flex;align-items:center;justify-content:center;"><i class="fa fa-envelope"></i></a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a href="https://www.facebook.com/bookolis" class="btn" style="width:42px;height:42px;border-radius:50%;padding:0px;display:flex;align-items:center;justify-content:center;" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <!-- <li class="list-inline-item m-0">
                            <a href="javascript:void(0);" class="btn"><i class="fa fa-instagram"></i></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="topbar-main">
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-3">
                    <figure id="header-logotype" class="m-0" style="max-width: 300px;">
                        <img src="{$path.images}logotype_color.png" alt="{$vkye_webpage}" class="img-fluid">
                    </figure>
                </div>
                <div class="col-1 col-lg-9 d-flex flex-column justify-content-center align-items-end">
                    <nav class="main-menu visible-desktop visible-desktop-large">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="/" class="btn btn-link"><i class="fa fa-home"></i> {$lang.home}</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#products" class="btn btn-link">{$lang.our_products}</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#services" class="btn btn-link">{$lang.our_services}</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" data-button-modal="contact" class="btn btn-link">{$lang.contact_us}</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://bookolis.app.pricenavigator.net/login/b2b#!/hotel" target="_blank" class="btn btn-link">{$lang.login}</a>
                            </li>
                        </ul>
                    </nav>
                    <button id="trigger-nav-mobile" class="menu-wrapper visible-phone visible-tablet">
                        <div class="hamburger-menu"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
