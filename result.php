<?php

$category = "none";
$platform = "none";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['category']) && !empty($_POST['category'])) {
        $category = $_POST['category'];
    }

    if (isset($_POST['platform']) && !empty($_POST['platform'])) {
        $platform = $_POST['platform'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
        * {
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            align-items: center;
            justify-content: center;
            font-family: "Roboto", sans-serif;
        }

        h2 {
            font-size: 32px;
            color: #2c3e50;
            text-align: center;
            margin: 8px 0;
        }
    
    </style>

</head>
<body>
    <div class="container">
        <h2>The selected category: <?php echo $category ?></h2>
        <h2>The selected platform: <?php echo $platform ?></h2>
    </div>
</body>
</html>