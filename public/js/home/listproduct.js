$(document).ready(function () {
    ListProductSection.Init();
    ListProductSection.InitEvents();
});

var ListProductSection = (function () {
    var Init = function () {
        try {
            initProductSlider();
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


    var initProductSlider = function () {
        try {
  
            $(".highlights-product-slider").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                speed: 1500,
                prevArrow:
                    "<i class='fa fa-angle-left' aria-hidden='true'></i>",
                nextArrow:
                    "<i class='fa fa-angle-right' aria-hidden='true'></i>",
                    responsive: [
                        {
                          breakpoint: 1024,
                          settings: {
                            slidesToShow: 4,
                          }
                        },
                        {
                            breakpoint: 769,
                            settings: {
                              slidesToShow: 3,
                            }
                          },
                          {
                            breakpoint: 426,
                            settings: {
                              slidesToShow: 2,
                            }
                          }
                    ]
            });
          
        } catch (e) {
            console.log("initProductSlider: " + e.message);
        }
    };
    
    return {
        Init: Init,
        InitEvents: InitEvents,
    };
})();
