<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Interface</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #f3ec78, #af4261);
            background-attachment: fixed;
        }
        .container {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }
        .form-group-row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .form-group-row label {
            width: 80px;
            margin-right: 10px;
        }
        .form-group-row input {
            flex: 1;
            width: 150px;
            height: 30px;
            padding: 5px;
            font-size: 14px;
            font-family: "Times New Roman", Times, serif;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group-row input:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            outline: none;
        }
        .submit-button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            align-self: flex-end;
            font-family: "Times New Roman", Times, serif;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .submit-button:hover {
            background-color: #2ecc71;
        }
        #result {
            margin-top: 20px;
            font-weight: bold;
            font-family: "Times New Roman", Times, serif;
        }
        .instruction {
            color: green;
            margin-top: 10px;
            font-size: 14px;
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="usernameForm">
            <div class="form-group">
                <div class="form-group-row">
                    <label for="username">User Name:</label>
                    <input type="text" id="username" name="username">
                </div>
                <button type="button" class="submit-button" onclick="verifyUsername()">Submit</button>
            </div>
        </form>
        <div id="result"></div>
        <div class="instruction">Key in username and click submit</div>
    </div>
    <script src="verify_ajax.js"></script>
</body>
</html>
