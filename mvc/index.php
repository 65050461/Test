<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        // เรียก Controller
        require_once "controller/HomeController.php";
        $controller = new HomeController();
        $controller->index();

    ?>

</body>
</html>