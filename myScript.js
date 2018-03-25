function login() {
    "use strict";

    var username = document.getElementById('username').value;

    // If username and password match with data from the database, save data
    if (username == "simpleman") {
        sessionStorage.setItem('username', username);
        window.location.assign("https://www.w3schools.com");
        return false;
    } else {
        alert("Wrong");
    }
}
