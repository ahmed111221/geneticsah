
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="sss.css" rel="stylesheet">
    <title>Genetics AH</title>
</head>
<header>
    <?php
        require('views/navBar.php');
    ?>  
<body>
<?= $view ?? "" ?>  
</body>
<footer>
    <?php
       if($_SESSION['signup'] == 'turn on'){
            require('views/footer.php');
        }
    ?>  
</footer>
</html>