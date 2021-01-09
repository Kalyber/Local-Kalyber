document.addEventListener("DOMContentLoaded", function () {
    window.dataLayer = window.dataLayer || [];

    var categories = document.querySelector('#categories').value,
        is404 = document.querySelector('#is404').value,
        lastUpdated = document.querySelector('#lastUpdated').value,
        pageId = document.querySelector('#pageId').value,
        pageName = document.querySelector('#pageName').value,
        pageTemplate = document.querySelector('#pageTemplate').value,
        pageTitle = document.title,
        tags = document.querySelector('#tags').value;

    window.dataLayer.push({
        'pageInfo': {
            'categories': categories,
            'is404': is404,
            'lastUpdated': lastUpdated,
            'pageId': pageId,
            'pageName': pageName,
            'pageTemplate': pageTemplate,
            'pageTitle': pageTitle,
            'tags': tags,
        }
    })

});