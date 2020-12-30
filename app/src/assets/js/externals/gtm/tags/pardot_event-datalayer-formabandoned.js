(function (window) {
    function receivePardotAbandonMessage(event) {
         var siteUrl = window.location.protocol + '//' + window.location.hostname,
            showDebug = true;
    
        if (showDebug) {
            console.log("GTM PARDOT FORM ABANDONED - origin: " + event.origin);
            console.log('GTM PARDOT FORM ABANDONED - full event >>>>>>>>>>>>');
            console.log(event);
        }

        if (event.data && event.origin === "https://go.kalyber.com") {
            // ensure this only fires tags on the intended domain
            if (event.data.postUrl === siteUrl) {
                // Only process the event if it has an eventType
                if (event.data.eventType && event.data.eventType === 'pardotFormAbandoned') {
                    if (showDebug) {
                        console.log("GTM PARDOT FORM ABANDONED - message data: " + JSON.stringify(event.data));
                        console.log('GTM PARDOT FORM ABANDONED - data object >>>>>>>>>>>>');
                        console.log(event.data);
                    }

                    var fieldData = event.data.fieldsCompleted.toString() + " - " + event.data.numberOfFieldsComplete;

                    if(showDebug) {
                        console.log('GTM PARDOT FORM ABANDONED - value pushed to GTM dataLayer: ' + fieldData);
                    }

                    dataLayer.push({
                        event: "formAbandoned",
                        fields: fieldData,
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

    bindEvent(window, "message", receivePardotAbandonMessage);
})(window);