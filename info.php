<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username from the POST request
    $username = $_POST['username'];

    // Validate the username
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
} else {
    echo 'Invalid request method';
}
