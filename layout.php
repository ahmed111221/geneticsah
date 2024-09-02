
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="sss.css" rel="stylesheet">
    <title>Genetics AH</title>
    <script src="JQuery.js"></script>
</head>
<header>
    <?php
        require('views/navBar.php');
    ?>  
<body>
    <!-- animation de relode -->
    <div id="loader" class="loader-container">
        <div class="loader"></div>
    </div>

    
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












<style>

.loader-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.85);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.loader {
    border: 5px solid #f3f3f3;
    border-top: 5px solid #C359F7;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 0.6s ease-in infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    80% { transform: rotate(330deg); }
    100% { transform: rotate(360deg); }
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loader').style.display = 'flex';
});

window.addEventListener('load', function() {
    document.getElementById('loader').style.display = 'none';
});

</script>