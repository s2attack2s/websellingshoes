$(document).ready(function() {
    FooterSection.Init();
    FooterSection.InitEvents();
});

var FooterSection = (function() {

    var Init = function() {
        try {

        } catch (e) {
            console.log('Init: ' + e.message);
        }
    };

    var InitEvents = function() {
        try {

        } catch (e) {
            console.log('InitEvents: ' + e.message);
        }
    };

    return {
        Init: Init,
        InitEvents: InitEvents
    };
})();