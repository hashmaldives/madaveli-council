/*
        MASTER SLIDER
*/
$(document).ready(function() {


    var slider = new MasterSlider();

    slider.setup('pageslider', {
        width: 2500, // slider standard width
       // height: , // slider standard height
        minHeight: 400,
        space: 5,
        loop: true,
        autoplay: true,
        view: 'fade',
        parallaxMode: 'mouse',
        mobileInlineVideo: true,
        //autoHeight:true,
        // more slider options goes here...
        // check slider options section in documentation for more options.
    });

    // adds Arrows navigation control to the slider.
    //slider.control('arrows');
    slider.control('arrows');
    //slider.control('bullets', { autohide: false, align: 'bottom', margin: 10 });
    MSScrollParallax.setup(slider, 50, 40, true);


});
/*
        / END MASTER SLIDER
*/