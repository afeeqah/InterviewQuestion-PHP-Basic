function verifyUsername() {
    var username = document.getElementById("username").value;
    
    // Check if the input is empty
    if (username === "") {
        alert("Error: Username cannot be empty");
        return;
    }

    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "info.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("result").innerText = xhr.responseText;
        }
    };
    xhr.send("username=" + encodeURIComponent(username));
}
