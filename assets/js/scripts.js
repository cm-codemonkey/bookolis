"use strict";

$(window).on('beforeunload ajaxStart', function()
{
    $('body').prepend('<div data-ajax-loader><div class="loader"></div></div>');
});

$(window).on('ajaxStop', function()
{
    $('body').find('[data-ajax-loader]').remove();
});

$('#trigger-nav-mobile').on('click', function()
{
    $('header.mobile-header').toggleClass('open');
});

!function ( $ )
{
    "use strict"

    const app = function () {}

    app.prototype.onResize = function ()
    {
        window.addEventListener('resize', function ( e )
        {
            window.requestAnimationFrame(function ()
            {
                $('body').css({
                    'padding-bottom': $('footer.main-footer').height()
                });
            })
        })
    },

    app.prototype.test = function ()
    {
    },

    app.prototype.init = function ()
    {
        $('header.main-header .topbar-navigation nav.main-menu li.list-inline-item:has( > .megamenu),header.main-header .topbar-navigation nav.main-menu li.list-inline-item:has( > .submenu)').addClass('angle-down');

        $( document ).on('click', '#trigger-nav-mobile', function ( event )
        {
            event.stopPropagation()

            $(this).find('> .hamburger-menu').toggleClass('animate');
            $('body').toggleClass('mobile-menu-open');
        });

        $('body').css({
            'padding-bottom': $('footer.main-footer').height()
        });

        this.test()
        this.onResize()
    }

    $.app = new app
    $.app.Constructor = app
}( window.jQuery ),

function ( $ )
{
    $.app.init()
}( window.jQuery )
