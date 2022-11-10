//login
function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var url = "http://localhost:8080/login";
    var data = {
        "username": username,
        "password": password
    };
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var json = JSON.parse(xhr.responseText);
            console.log(json.token);
        }
    };
    var data = JSON.stringify(data);
    xhr.send(data);
}
