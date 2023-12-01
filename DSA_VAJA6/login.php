<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        label, input {
            margin: 10px;
            padding: 8px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Login</h2>

    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <button type="submit">Login</button>
    </form>

</body>
</html>
