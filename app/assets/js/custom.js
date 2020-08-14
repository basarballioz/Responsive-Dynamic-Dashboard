function showPassword() {
    var pass = document.getElementById("passwordField");
    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}
