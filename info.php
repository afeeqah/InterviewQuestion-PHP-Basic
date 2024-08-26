<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
} else {
    echo 'Invalid request method';
}
