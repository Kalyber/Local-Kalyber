document.addEventListener("DOMContentLoaded", function () {
    var displayNameAttribute = "data-display-name",
        showDebug = true,
        formButtonClicked = false;

    function addFieldDisplayNames() {
        var form = document.querySelector("form");

        if (form) {
            var fields = form.elements;

            if (fields && fields.length > -1) {
                var classIndexNumber = 1,
                    fieldsLength = fields.length;
    
                var displayName = "",
                    field = null,
                    iterator = 0,
                    parent = null;

                for (iterator = 0; iterator < fieldsLength; iterator++) {
                    field = fields[iterator];
    
                    if (field) {
                        parent = field.parentElement;
    
                        if (parent && parent.classList && parent.classList.length > 1) {
                            displayName = parent.classList.item(classIndexNumber);
    
                            if (displayName) {
                                field.setAttribute(displayNameAttribute, displayName);
                            }
                        }
                    }
                }
            }
        }
    }

    function postMessages(formFieldsCompleted) {
        try {
            var parentPageUrl = new URLSearchParams(document.location.search),
            parentSiteUrl = parentPageUrl.get('parentUrl'),
            formDepthObject = {
                eventType: 'pardotFormAbandoned', // Required to process multiple post message events
                fieldsCompleted: formFieldsCompleted,
                numberOfFieldsComplete: formFieldsCompleted.length,
                postUrl: parentSiteUrl,
                formType: 'contact_form'
            };
    
            if (showDebug) {
                window.console &&
                window.console.log("PRDOT FORMS ABANDONED - fields completed: " + formDepthObject.fieldsCompleted);
            }

            if(showDebug) {
                console.log('PARDOT FORMS ABANDONED - formDepthObect >>>>>>>>>');
                console.log(formDepthObject);
            }

            try {
                parent.postMessage(formDepthObject, parentSiteUrl);
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


    window.addEventListener('click', function(event) {
        if(event.target.type === 'submit'){
            formButtonClicked = true;
        } else {
            formButtonClicked = false;
        }
    })

    window.addEventListener("beforeunload", function (e) {
        try {
            var form = document.querySelector("form"),
                formFieldsCompleted = [],
                matchedRequiredFields = [],
                requiredFields = [];
        
            if (form) {
                var fields = form.elements;
        
                if (fields && fields.length > -1) {
                    var fieldsLength = fields.length,
                        displayName = "",
                        field = null,
                        iterator = 0;
        
                    for (iterator = 0; iterator < fieldsLength; iterator++) {
                        field = fields[iterator];
        
                        if (
                            field &&
                            field.type !== "" &&
                            field.type !== "submit" &&
                            field.type !== "button" &&
                            field.type !== "hidden"
                        ) {
        
                            displayName = field.getAttribute(displayNameAttribute);
                            var fieldContainer = field.closest('p');

                            if (fieldContainer) {
                                if (fieldContainer.classList.contains('required')) {
                                    requiredFields.push(displayName);
                                }
                            }
        
                            if (displayName) {
                                if (showDebug) {
                                    window.console && window.console.log(
                                        'PARDOT FORM ABANDONED - ' + displayName + " - " + "field value is: " + field.value
                                    );
                                }
        
                                if (field.value && field.value !== "" && field.value.length > 0) {
                                    formFieldsCompleted.push(displayName);
                                }
                            }
                        }
                    }

                    if (showDebug) {
                        console.log('PARDOT FORMS ABANDONED - requiredFields >>>>>>>>>');
                        console.log(requiredFields);
                    }

                    if (requiredFields.length > 0 && formFieldsCompleted.length > 0) {
                        matchedRequiredFields = formFieldsCompleted.filter(function(item) {
                            return requiredFields.indexOf(item) > -1;
                        });

                        if (showDebug) {
                            console.log('PARDOT FORMS ABANDONED - matchedRequiredFields >>>>>>>>>');
                            console.log(matchedRequiredFields);
                        }
                    }
                }
            }

            if (showDebug) {
                console.log('PARDOT FORM ABANDONED - completed fields length: ' + formFieldsCompleted.length);
                console.log('PARDOT FORM ABANDONED- total required fields: ' + requiredFields.length);
                console.log('PARDOT FORM ABANDONED - required fields completed: ' + matchedRequiredFields.length);
            }

            // we only need to post the message when the form isn't completed
            if (matchedRequiredFields.length < requiredFields.length && !formButtonClicked) {
                postMessages(formFieldsCompleted);

                if (showDebug) {
                    // Cancel the event
                    e.preventDefault(); // If you prevent default behavior in Mozilla Firefox prompt will always be shown
                    // Chrome requires returnValue to be set
                    e.returnValue = "";
                } else {
                    // the absence of a returnValue property on the event will guarantee the browser unload happens
                    delete e["returnValue"];
                }
            }
        } catch (e) {
            if (showDebug) {
                window.console && window.console.log(e);
            }
        }
    });

    addFieldDisplayNames();

    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.msMatchesSelector || 
            Element.prototype.webkitMatchesSelector;
    }
      
    if (!Element.prototype.closest) {
        Element.prototype.closest = function(s) {
            var el = this;
      
            do {
                if (Element.prototype.matches.call(el, s)) return el;
                    el = el.parentElement || el.parentNode;
                } while (el !== null && el.nodeType === 1);
                    return null;
        };
    }
});