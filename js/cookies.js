//Cookie funktion

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Accepter noedvendig tjek

var acceptNecessaryBtn = document.getElementById("accept-necessary-btn");

acceptNecessaryBtn.addEventListener("click", function() {
    setCookie("necessary", "accepted", 365);
});

// Accepter alle

var acceptAllBtn = document.getElementById("accept-all-btn");

acceptAllBtn.addEventListener("click", function() {
    setCookie("all", "accepted", 365);
});

// Check for the necessary cookie and display a banner until it is accepted

window.addEventListener("load", function() {
    var necessaryCookie = getCookie("necessary");

    if (!necessaryCookie) {
        var banner = document.getElementById("cookie-banner");
        banner.style.display = "block";
    }
});

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
