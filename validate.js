function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "" || username == null) {

        document.getElementById('error').innerHTML = "Please enter a username";
        return false;
    } else if (password == "" || password == null) {

        document.getElementById('error').innerHTML = "Please enter a password";
        return false;
    } else if (password.length < 6) {

        document.getElementById('error').innerHTML = "Password must be more than 6 characters";
        return false;
    } else if (password.search(/[a-z]/) < 0) {
		
        document.getElementById('error').innerHTML = ("Your password must contain at least one lowercase letter.");
        return false;
    } else if (password.search(/[A-Z]/) < 0) {
		
        document.getElementById('error').innerHTML = ("Your password must contain at least one uppercase letter.");
        return false;

    } else if (password.search(/[0-9]/) < 0) {
		
        document.getElementById('error').innerHTML = ("Your password must contain at least one digit.");
        return false;
    }

}