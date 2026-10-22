<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Data</title>
</head>
<body>
<?php
    $data = [
        "name" => "John Doe",
        "age" => 30,
        "email" => "john.doe@example.com"
    ];
?>
    <h1><?php echo $data["name"]; ?></h1>
    <p>Age: <?php echo $data["age"]; ?></p>
    <p>Email: <?php echo $data["email"]; ?></p>
</body>
</html> 
