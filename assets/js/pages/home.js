"use strict";

$( document ).ready(function ()
{
    var owlSlideshowCover = $('.slideshow-cover > .owl-carousel').owlCarousel({
        items:1,
        margin:0,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:8000,
        rewind:true
    });

    $('.slideshow-cover .control-buttons .prev').on('click', function ()
    {
        owlSlideshowCover.trigger('prev.owl.carousel');
    });

    $('.slideshow-cover .control-buttons .next').on('click', function ()
    {
        owlSlideshowCover.trigger('next.owl.carousel');
    });

    var owlSlideCarousel = $('.slideshow-carousel > .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        rewind:true,
        stagePadding:50,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            },
            1300:{
                items:5
            }
        }
    });

    // $('.slideshow-cover .control-buttons .prev').on('click', function ()
    // {
    //     owlSlideshowCover.trigger('prev.owl.carousel');
    // });
    //
    // $('.slideshow-cover .control-buttons .next').on('click', function ()
    // {
    //     owlSlideshowCover.trigger('next.owl.carousel');
    // });

    var owlSlideshowPeople = $('.slideshow-people > .owl-carousel').owlCarousel({
        items:1,
        margin:0,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:8000,
        rewind:true
    });

    $('.slideshow-people .control-buttons .prev').on('click', function ()
    {
        owlSlideshowPeople.trigger('prev.owl.carousel');
    });

    $('.slideshow-people .control-buttons .next').on('click', function ()
    {
        owlSlideshowPeople.trigger('next.owl.carousel');
    });

    $('form[name="signup"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=signup',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);
                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i][1] + ' - ';

                    alert(errors);
                }
            }
        });
    });

    $('form[name="quote"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=quote',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);
                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i][1] + ' - ';

                    alert(errors);
                }
            }
        });
    });

    $('form[name="contact"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize() + '&action=contact',
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);
                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i][1] + ' - ';

                    alert(errors);
                }
            }
        });
    });
});
