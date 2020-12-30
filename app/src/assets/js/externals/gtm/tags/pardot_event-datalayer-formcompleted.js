(function (window) {
    function receivePardotCompletedMessage(event) {
         var siteUrl = window.location.protocol + '//' + window.location.hostname,
            showDebug = true;
    
        if (showDebug) {
            console.log("GTM PARDOT FORM COMPLETED - origin: " + event.origin);
            console.log(event);
        }

        if (event.data && event.origin === "https://go.kalyber.com") {
            // ensure this only fires tags on the intended domain
            if (event.data.postUrl === siteUrl) {
                // Only process the event if it has an eventType
                if (event.data.eventType && event.data.eventType === 'pardotFormCompleted') {
                    if (showDebug) {
                        console.log("GTM PARDOT FORM COMPLETED - message data: " + JSON.stringify(event.data));
                        console.log('GTM PARDOT FORM COMPLETED - data object >>>>>>>>>>>>');
                        console.log(event.data);
                    }

                    dataLayer.push({
                        event: "formCompleted",
                        formType: event.data.formType,
                    });
                }
            }
        }
    }

    function bindEvent(el, evt, fn) {
        if (el.addEventListener) {
            el.addEventListener(evt, fn);
        } else if (el.attachEvent) {
            el.attachEvent('on' + evt, function(evt) {
                fn.call(el, evt);
            });
        } else if (typeof el['on' + evt] === 'undefined' || el['on' + evt] === null) {
            el['on' + evt] = function(evt) {
                fn.call(el, evt);
            };
        }
    }

    bindEvent(window, "message", receivePardotCompletedMessage);
})(window);