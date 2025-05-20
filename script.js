
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        const name = form.name.value.trim();
        const email = form.email.value.trim();

        if (!name || !email) {
            e.preventDefault();
            alert("Please fill out all required fields.");
        } else {
            alert("Thanks for registering!");
        }
    });
});