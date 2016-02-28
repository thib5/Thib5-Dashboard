// Start or resume session
session_start(); 

// Extend cookie life time by an amount of your liking
$cookieLifetime = 365 * 24 * 60 * 60; // A year in seconds
setcookie(session_name(),session_id(),time()+$cookieLifetime);

if (('standalone' in window.navigator) && window.navigator.standalone) {

    window.addEventListener('load', function() {

        var links = document.links,
            link,
            i;

        for (i = 0; i < links.length; i++) {
            // Don't do this for javascript: links
            if (~(link = links[i]).href.toLowerCase().indexOf('javascript')) {
                link.addEventListener('click', function(event) {
                    top.location.href = this.href;
                    event.returnValue = false;
                }, false);
            }
        }

    }, false);

}