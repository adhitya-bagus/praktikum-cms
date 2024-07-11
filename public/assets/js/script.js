$(document).ready(function () {
    $("#signin-btn").on("click", function () {
        const loginModal = $("#signin-modal");
        if (loginModal.css("display") === "none") {
            loginModal.show();
            return;
        }
        loginModal.hide();
    });
    $("#close-signin-modal").on("click", function () {
        const loginModal = $("#signin-modal");
        loginModal.hide();
    });
});
