<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

            /* pastel pink background */
            background: linear-gradient(to right, #e92e5d, #e41a5a);
            font-family: Arial, sans-serif;
        }

        form {
            background: #d43030;
            padding: 25px;
            border-radius: 12px;
            width: 250px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #524a4c;
            margin-bottom: 15px;
        }

        label {
            color: #555;
            font-size: 14px;
        }

        input {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #aa465f;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4e0b1c;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #6d4e58;
        }
    </style>
</head>

<body>

<form>
    <h2>Mary Vic M. Decierdo</h2>
    <label>Username:</label><br>
    <input type="text"><br><br>

    <label>Password:</label><br>
    <input type="password"><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>