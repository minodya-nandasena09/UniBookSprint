<?php
session_start();
/*if (isset($_SESSION["user"]))
{
    header("Location: index.php");
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Levels-Page</title>
</head>
<body>
    <!--Header-->
    <header class="header">

        
        <a href="#" class="logo">Reference Books Manager - FOTS, UOV</a>

        <nav class="navbar">
            <a href="logout.php">Log out</a>
            <a>
                <div class="icon">
                <div class="bx bxs-moon" id="darkMode-icon">
                </div>
            </a>
        </nav>
        
        </div>
        
    </header>

    <section class="home" id="home">
        <div class="home-content">
            
            <h3>Level 1 resourses</h3><br>
            <br><br>
            <a href="one1.php" class="btn">Semester-1</a>
            <a href="one2.php" class="btn">Semester-2</a>
<br><br><br><br><br><br>

            <h3>Level 2 resourses</h3><br>
            <br><br>
            <a href="two1.php" class="btn">Semester-1</a>
            <a href="two2.php" class="btn">Semester-2</a>
<br><br><br><br><br><br>
            <h3>Level 3 resourses</h3><br>
            <br><br>
            <a href="three1.php" class="btn">Semester-1</a>
            <a href="three2.php" class="btn">Semester-2</a>
<br><br><br><br><br><br>
            <h3>Level 4 resourses</h3><br>
            <br><br>
            <a href="four1.php" class="btn">Semester-1</a>
            <a href="four2.php" class="btn">Semester-2</a>

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
   

    <script src="script.js"></script>
</body>
</html>