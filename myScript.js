function login() {
    "use strict";

    var username = document.getElementById('username').value;

    // If username and password match with data from the database, save data
    if (username == "") {
        sessionStorage.setItem('username', username);
    }

    alert("Hello" + Username);

}
