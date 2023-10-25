<?php
session_start();
if (isset($_SESSION["user"]))
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Index Page</title>
</head>
<body>
    <!--Header-->
    <header class="header">

        
        <a href="#" class="logo">Reference Books Manager - FOTS, UOV</a>

        <nav class="navbar">
           <p>Change Theme</p>
           <a>
           
                <div class="icon">
                
                <div class="bx bxs-moon" id="darkMode-icon">
                </div>
            </a>
        </nav>
        <!--<div class="icon">
        <div class="bx bxs-moon" id="darkMode-icon">
        </div>
        </div>-->
        
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <div class="hmhead">

                <h1>Welcome</h1>
            </div>
            <br>
            <p> Welcome to Reference Books Management System of Faculty of Technological Studies, University of Vavuniya. Find your reference materials easily and improve your academic progression. Good Luck ! </p><br>
     
            <br>
             <p>Have an account ? Sign in to continue. New here? Just click Sign up and create an account to join with us.</p>
            <br><br>
            <a href="signin.php" class="btn">Sign in</a>
            <a href="signup.php" class="btn">Sign Up</a>
        </div>

        <div class="pro-container">
            <div class="pro-box">
                <div class="pro" style="--i:0;">
                    <i class='bx bx-book-open' ></i>
                    <h3>Self-study</h3>
                </div>

                <div class="pro" style="--i:1;">
                    <i class='bx bx-book-open' ></i>
                    <h3>Save time</h3>
                </div>

                <div class="pro" style="--i:2;">
                    <i class='bx bx-book-open' ></i>
                    <h3>Manage better GPA</h3>
                </div>

                <div class="pro" style="--i:3;">
                    <i class='bx bx-book-open' ></i>
                    <h3>Level-up yourself</h3>
                </div>

                <div class="circle"></div>
                
            </div>
            <div class="overlay"></div>
        </div>

        <div class="home-img">
            <img src="img/un1.svg" alt="">
        </div>
        </section>
        
        <br>
        

    </div>
   

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>