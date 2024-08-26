<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Interface</title>
    <style>
        .submit-button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form id="usernameForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <button type="button" class="submit-button" onclick="verifyUsername()">Submit</button>
    </form>
    <div id="result"></div>
    <script src="verify_ajax.js"></script>
</body>
</html>
