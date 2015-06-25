(function($) {
    var o = $({});

    $.subscribe = function() {
        o.on.apply(o,arguments);
    };

    $.subscribe = function() {
        o.off.apply(o,arguments);
    };

    $.publish = function() {
        o.trigger.apply(o,arguments);
    };

}(jQuery));