$(document).ready(function () {
    SliderSection.Init();
    SliderSection.InitEvents();
});

var SliderSection = (function () {
    var Init = function () {
        try {
            initSlider();
        } catch (e) {
            console.log("Init: " + e.message);
        }
    };

    var InitEvents = function () {
        try {
        } catch (e) {
            console.log("InitEvents: " + e.message);
        }
    };


    var initSlider = function () {
        try {
            $(".slider-nav").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                speed: 1000,
                prevArrow:
                    "<i class='fa fa-angle-left' aria-hidden='true'></i>",
                nextArrow:
                    "<i class='fa fa-angle-right' aria-hidden='true'></i>",
            });
        } catch (e) {
            console.log("initService: " + e.message);
        }
    };
    
    return {
        Init: Init,
        InitEvents: InitEvents,
    };
})();
