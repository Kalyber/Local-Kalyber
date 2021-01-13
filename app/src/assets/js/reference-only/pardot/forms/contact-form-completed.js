document.addEventListener("DOMContentLoaded", function (e) {
    var showDebug = true;

    function postMessages() {
        try {
            var refUrl = new URL(document.referrer),
            parentPageUrl = new URLSearchParams(refUrl.search),
            parentSiteUrl = parentPageUrl.get('parentUrl'),
            formCompletedObject = {
                eventType: 'pardotFormCompleted', // Required to process multiple post message events
                formCompleted: true,
                formType: 'contact_form',
                postUrl: parentSiteUrl
            };

            if(showDebug) {
                console.log('PARDOT FORM COMPLETED - formCompletedObject >>>>>>>>>');
                console.log(formCompletedObject);
            }

            try {
                parent.postMessage(formCompletedObject, parentSiteUrl);
            } catch (e) {
                if (showDebug) {
                    window.console && window.console.log(e);
                }
            }
        } catch (e) {
            if (showDebug) {
                window.console && window.console.log(e);
            }
        }   
    }

    postMessages();
});