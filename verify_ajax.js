/**
 * Triggers the username validation process.
 * Retrieves the username input and sends it for validation.
 */
function verifyUsername() {
    var username = document.getElementById("username").value;

    // Check if the input is empty
    if (username === "") {
        alert("Error: Username cannot be empty");
        return;
    }

    // Send the username for validation
    sendValidationRequest(username);
}

/**
 * Sends an AJAX request to the server to validate the username.
 * @param {string} username - The username input by the user.
 */
function sendValidationRequest(username) {
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.open("POST", "info.php", true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
            handleServerResponse(ajaxRequest.responseText);
        }
    };

    ajaxRequest.send("username=" + encodeURIComponent(username));
}

/**
 * Handles the server's response to the username validation.
 * Updates the UI based on whether the validation was successful or not.
 * @param {string} responseText - The response text from the server.
 */
function handleServerResponse(responseText) {
    var resultDiv = document.getElementById("result");
    var instructionDiv = document.querySelector(".instruction");

    // Display the server's response
    resultDiv.innerText = responseText;

    // Hide the instruction text
    if (instructionDiv) {
        instructionDiv.style.display = "none";
    }

    // Apply red color to the error message or green for verified
    if (responseText.trim() === "Error") {
        resultDiv.style.color = "red";
    } else if (responseText.trim() === "Verified") {
        resultDiv.style.color = "green";
    }
}
