<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
    <?php
    echo 'Bem vindo: '.$_SESSION['login']
    ?>
    <br>
    <br>
    <a href="?logout">Fazer logout</a>
    </section>

    
</body>
</html>