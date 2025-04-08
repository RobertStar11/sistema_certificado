$(document).ready(function () {
    $("#togglePassword").click(function(e) {
        e.preventDefault();
        var $passwordInput = $("#txtpassword");
        var $eyeOpen = $("#eye-open");
        var $eyeClosed = $("#eye-closed");
        
        if ($passwordInput.attr("type") === "password") {
            $passwordInput.attr("type", "text");
            $eyeOpen.hide();
            $eyeClosed.show();
        } else {
            $passwordInput.attr("type", "password");
            $eyeOpen.show();
            $eyeClosed.hide();
        }
    });
});