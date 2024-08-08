<?php
 include "../functions/checklogin.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Technology RUSL</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="./script/script.js"></script>
    <script >
        window.onload = function() {
        <?php if(isset($_GET["msg"])):?>
        alert("<?php echo $_GET["msg"];?>")
        <?php endif;?>
    }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>


<body>

    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
           <a href="../functions/logout.php" class="logout-btn">Logout</a>
           
        </nav>
    </header>
    
    
       
    



