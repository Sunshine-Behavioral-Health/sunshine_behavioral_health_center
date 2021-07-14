// Salesforce unique IDs:
//  google analytics user ID salesforce ID: 00N4T0000062HUZ 
//  gclid salesforce ID: 00N4T0000061o2h

jQuery(document).ready(function ($) {

    // functions

    // Set Cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Get Cookie
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }

    // get tracking value from URL
    function getParam(p) {
        var match = RegExp("[?&]" + p + "=([^&]*)").exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, " "));
    }

    let gravityFormFooter = $('.gform_footer');


    ////////////////////////////////
    // Google Analytics User ID
    let googleAnalyticsUserID = getCookie('_ga');

    if (googleAnalyticsUserID) {
        // create hidden field here and set its value equal to `googleAnalyticsUserID`
        if (gravityFormFooter.length > 0) {
            gravityFormFooter.append(`<input type="hidden" class="google_analytics_user_id" id="00N4T0000062HUZ" name="00N4T0000062HUZ" value="${googleAnalyticsUserID}" autocomplete="off">`);
        } else {
            // Validates if fieldset HTML tag is on page. If not adds hidden field to bottom of form.
            if ($("fieldset")) {
                $("fieldset").append(`<input type="hidden" class="google_analytics_user_id" id="00N4T0000062HUZ" name="00N4T0000062HUZ" value="${googleAnalyticsUserID}" autocomplete="off">`);
            } else {
                $("form").append(`<input type="hidden" class="google_analytics_user_id" id="00N4T0000062HUZ" name="00N4T0000062HUZ" value="${googleAnalyticsUserID}" autocomplete="off">`);
            }
        }

    }
    console.log("Google Analytics User ID:", googleAnalyticsUserID)


    ////////////////////////////////
    // gclid (google campaign ID for tracking)

    // Validation for gclid in URL - checks URL if it contains 'gclid' or 'GCLD'
    let gclid;
    if (window.location.href.indexOf('gclid=')) {
        gclid = getParam("gclid");
    } else if (window.location.href.indexOf('GCLD=')) {
        gclid = getParam("GCLD");
    }

    // If `gclid` exists, set it's value as a cookie called "gclid"
    if (gclid) {
        var gclsrc = getParam("gclsrc");
        if (!gclsrc || gclsrc.indexOf("aw") !== -1) {
            setCookie("gclid", gclid, 90);
        }
    }

    // Pulls gclid value from cookie
    let gclidCookie = getCookie('gclid');

    if (gclid) {
        console.log("gclid:", gclid)
    } else if (gclidCookie) {
        console.log("gclid:", gclidCookie)
    } else {
        console.log("No gclid present on page.")
    }

    // If `gclidCookie` has a value create a hidden field and set it's value to `gclidCookie`
    if (gclidCookie) {
        if (gravityFormFooter.length > 0) {
            gravityFormFooter.append(`<input type="hidden" class="gclid_cookie_value" id="00N4T0000061o2h" name="00N4T0000061o2h" value="${gclidCookie}" autocomplete="off">`);
        } else {
            // Validates if fieldset HTML tag is on page. If not adds hidden field to bottom of form.
            if ($("fieldset")) {
                $("fieldset").append(`<input type="hidden" class="gclid_cookie_value" id="00N4T0000061o2h" name="00N4T0000061o2h" value="${gclidCookie}" autocomplete="off">`);
            } else {
                $("form").append(`<input type="hidden" class="gclid_cookie_value" id="00N4T0000061o2h" name="00N4T0000061o2h" value="${gclidCookie}" autocomplete="off">`);
            }
        }
    }
});
