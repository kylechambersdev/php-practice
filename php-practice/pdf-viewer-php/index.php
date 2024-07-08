<?php
if(isset($_POST['submit'])){
    header('Location: read.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer with PHP</title>
    <style>
        *{
            font-family: sans-serif
        }
        .container {
            height: 34 rem;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        button {
            height: 50px;
            width: 220px;
            background-color: crimson;
            border: 1px solid black;
            outline: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .hero{
            padding-top: 90px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="hero">Read Pdfs using PHP Script</h1>
        </div>
        <br><br><br><br>
        <div class="wrapper">
            <img src="https://poainc.org/wp-content/uploads/2018/06/pdf-placeholder-300x300.png" class="image" height="300px" width="300px" alt="">
        </div>
        <br><br><br><br>
        <div class="wrapper">
            <form action="" method="POST">
                <button type="submit" name="submit" value="submit">Read Pdf</button>
            </form>
        </div>
        <div class="wrapper">
            <h3>Made with <span>❤️</span> by Yours Truly</h3>
        </div>
    </div>
</body>
</html>