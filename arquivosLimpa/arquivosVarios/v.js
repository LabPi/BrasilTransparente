

function checkOnline(url, error, ok) {
    try {
        var scriptElem = document.createElement('script');
        scriptElem.type = 'text/javascript';
        scriptElem.onerror = function(){error();};
        scriptElem.onload = function(){ok();};
        scriptElem.src = url;
        document.getElementsByTagName("body")[0].appendChild(scriptElem);
    } catch(err) {
        error(err);
    }
};




