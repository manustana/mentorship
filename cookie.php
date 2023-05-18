<?php
    include "logincode.php";
//
//    function createConfirmationmbox()
//    {
//        global $consent;
//        echo '<script type="text/javascript"> ';
//        echo ' function message() {';
//        echo '  if (confirm("Are you sure you want to open new URL")) {';
//        setcookie('consent', $consent, true);
//        echo '  return;}';
//        echo '}';
//        echo '</script>';
//    }
//    echo "<input id='send_btn' type='submit' value='previous' name='previous' OnClick=\"return confirm('Are you sure you want to go to previous');\" >";
?>



<div class="popup" id="cookie-popup">
    <p>We use cookies to ensure you get the best experience on our website. By continuing to use our site, you consent to our use of cookies.</p>
    <button onclick="acceptCookies()">Accept</button>
</div>

<script>
    document.getElementById("cookie-popup").style.display = "block";
    function acceptCookies() {
        // Set a cookie to indicate that the user has accepted the use of cookies
        document.cookie = "cookies_accepted=true; expires=Thu, 31 Dec 2099 23:59:59 GMT; path=/";
        // Hide the popup
        document.getElementById("cookie-popup").style.display = "none";
    }

    // Show the popup if the user has not yet accepted cookies
    if (document.cookie.indexOf("cookies_accepted") === -1) {
        document.getElementById("cookie-popup").style.display = "block";
    }
</script>

