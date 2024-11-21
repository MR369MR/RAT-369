<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.369</title>
    <style>
        body {
            background-color: black;
            color: #00ff00;
            font-family: "Courier New", Courier, monospace;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 3em;
            text-shadow: 0 0 10px #00ff00;
        }
        textarea {
            background-color: black;
            color: #00ff00;
            border: 1px solid #00ff00;
            font-family: "Courier New", Courier, monospace;
            width: 80%;
            height: 150px;
            margin-top: 20px;
            padding: 10px;
        }
        button {
            background-color: black;
            color: #00ff00;
            border: 1px solid #00ff00;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
        }
        button:hover {
            background-color: #00ff00;
            color: black;
        }
        .footer {
            margin-top: 50px;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <h1>Mr.369</h1>
    <form action="" method="post">
        <p>Enter your command</p>
        <textarea name="text" required></textarea><br>
        <button type="submit">Save</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $fileName = 'command.txt';


        $text = $_POST['text'];


        if (file_put_contents($fileName, $text)) {
            echo "<p style='color: #00ff00;'>369 >  $fileName</p>";
        } else {
            echo "<p style='color: red;'>Failed to save text!</p>";
        }
    }
    ?>

    <div class="footer">
        <p>Developed by Mr.369</p>
    </div>
</body>
</html>
