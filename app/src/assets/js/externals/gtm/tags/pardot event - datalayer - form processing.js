(function (window) {
    function receivePardotCompletedMessage(event) {
        if (event.origin === "https://go.kalyber.com"){ 


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
                            formType: event.data.formType
                        });
                    }
                }
            }
        }
    }

    function receivePardotAbandonMessage(event) {
        if (event.origin === "https://go.kalyber.com") {
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
                            formType : event.data.formType
                        });
                    }
                }
            }
        }
    }

    bindEvent(window, "message", receivePardotCompletedMessage);
    bindEvent(window, "message", receivePardotAbandonMessage);
    
})(window);

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