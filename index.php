<?php
session_start();
    include "./functions/dbh.php";
    if(isset($_SESSION["email"])) {
        header("Location:./pages/home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Technology RUSL</title>
    <link rel="stylesheet" href="./css/style.css">
</head>


<body>

    <header>
        <h2 class="logo"></h2>
        <h2 class="topic">Faculty Of Technology Rajarata Universty Of Sri Lanka</h2>
       <!--  <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav> -->
    </header>
    
    <div class="wrapper">

        <!-- <span class="icon-close"><ion-icon name="close-sharp"></ion-icon>
        </span> -->

       
<div class="form-box login">
        <h2>Login</h2>
        <form action="./functions/handleuser.php" method="post">
            <div class="input-box">
                 <span class="icon"><ion-icon name="mail-sharp"></ion-icon></span>
                 <input name="email" type= "email" required>
                 <label>E-mail </label>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-sharp"></ion-icon></span>
                <input type="password" required name="password">
                <label>Password</label>
            </div>

            <!-- <div class="remember-forget">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password ?</a>
            </div> -->
            <button type="submit" name="login" class="btn">Login</button>
            
                <div class="login-register">
                    <p>Don't have an account ?<a href="#"class="register-link">Register</a> </p>

                </div>
                <!-- <div>
                    <h4 style="color:yellow;font-weight:300"></h4>
                </div> -->
            </button>
        </form>
        </div>

       
<div class="form-box register">
            <h2>Registration</h2>
            <form action="./functions/handleuser.php" method="post">

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-sharp"></ion-icon>
                    </span>
                    <input type= "text" name="username" required>
                    <label>Username</label>
               </div>

                <div class="input-box">
                     <span class="icon">
                        <ion-icon name="mail-sharp"></ion-icon>
                    </span>
                     <input type= "email" name="email" required>
                     <label>Email</label>
                </div>
    
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-sharp"></ion-icon>
                    </span>
                    <input type="password" name="password" required>
                    <label> Password</label>
                </div>
    
                <div class="remember-forget">
                    <!-- <label><input type="checkbox"> I agree to the terms & conditions</label> -->
                    
                </div>
                <button type="submit" name="register" class="btn">Register</button>
                
                    <div class="login-register">
                        <p>Already have an account ?<a href="#"class="login-link">
                            Login</a> </p>
    
                    </div>
                </button>
            </form>
            </div>

           

       </div>



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
</body>
</html> 
