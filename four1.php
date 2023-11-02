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
    <title>Four-One</title>
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
        
    </header>
    
        
    <section class="home" id="home">
    <div class="home-contentT">
            <div class="container pt-5">

        <div class="table">
        <table style="border: 1px, solid black;" cellspacing="5px" class="table-box" width="100%">
            <thead class="theadt">
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Download Link</th>
                </tr>
            </thead>
            <tbody>
<!----------------------------------------------1----------------------------------------------------------->
              
<div class="tbody">

                    <tr class="table-active">
                    <td rowspan="3" ><b>TICT 1114</b></td>
                    <td rowspan="3" ><b>Essentials of Information Communication Technology</b></td>
                    <td >1. Principles of Information Systems (2016)</td>  
                    <td>Ralph, M. Stair. & George, W. Reynolds</td>
                    <td >12<sup>th</sup>Edition</td>
                    <td >
                        <a href="Files/computing-essentials-2019-27nbsped-126009605x-9781260096057_compress.pdf">Download</a>
                    </td>
                    
                </tr>

                <tr class="table-active">
                    
                    <td>2. Using Informatiion Technology: A Practical Introduction to Computers & Communication: Complete Version (2010)</td>
                    <td>Brain, K. Williams. & Stacey, C. sawyer</td>
                    <td>9<sup>th</sup>Edition</td>
                    <td>
                        <a href="Files/17,18/17,18/L1/SEM1/1114/Using_Information_Technology_9th_Complet.pdf">Download</a>
                    </td>
                </tr>

                <tr class="table-active">
                    
                    <td>3. Computing Essentials (2006) </td>
                    <td>Timothy, J. O'Leary. & Linda, I. O'Leary</td>
                    <td>Introductory Edition</td>
                    <td>
                        <a href="Files/17,18/17,18/L1/SEM1/1114/computing-essentials-2019-27nbsped-126009605x-9781260096057_compress.pdf">Download</a>
                    </td>
                </tr>
<!---------------------------------------------2------------------------------------------------------->

               <tr>
                <td rowspan="4"><b>TICT 1142</b></td>
                <td rowspan="4"><b>Fundamental of Web Technology </b></td>
                <td>1. Beginning HTML, XHTML, CSS, and JavaScript (2010)</td>  
                <td>Jon Ducket</td>
                <td> </td>
                <td>
                    <a href="Files/17,18/17,18/L1/SEM1/1142/[Wiley_ Wrox] - Beginning HTML, XHTML, CSS, and JavaScript - [Duckett].pdf">Download</a>
                </td>
            </tr>

            <tr>
                
                <td>2. Internet & World Wide Web How to Program (2008)</td>
                <td>Deitel, P.J. & Deitel, H. M.</td>
                <td>4<sup>th</sup>Edition</td>
                <td>
                    <a href="Files/17,18/17,18/L1/SEM1/1142/Azal2020-01-22-01-38-51-40850.pdf">Download</a>
                </td>
            </tr>

            <tr>
                
                <td>3. HTML5 Step by Step (2011) </td>
                <td>Faithe Wempen</td>
                <td>Microsoft Coparation</td>
                <td>
                    <a href="Files/17,18/17,18/L1/SEM1/1142/HTML5. Step by Step. Faithe Wempen.pdf">Download</a>
                </td>
            </tr>

            <tr>
                
                <td>4. Professional JavaScript for Web Developers</td>
                <td>Nicholas, C. Zakas </td>
                <td>3<sup>rd</sup>Edition</td>
                <td>
                    <a href="Files/17,18/17,18/L1/SEM1/1142/Professional JavaScript for Web Developers, 4th Edition.pdf">Download</a>
                </td>
            </tr>
<!----------------------------------------------------3----------------------------------------------------->
           <tr class="table-active">
            <td rowspan="3" ><b>TICT 1152</b></td>
            <td rowspan="3" ><b>Principles of Management</b></td>
            <td >1. New Era of Management (2012)</td>  
            <td>Daft, R. L.</td>
            <td >10<sup>th</sup>Edition., Cengage Learning</td>
            <td >
                <a href="Files/computing-essentials-2019-27nbsped-126009605x-9781260096057_compress.pdf">Download</a>
            </td>
            <hr>
        </tr>

        <tr class="table-active">
            
            <td>2. Management: Principles and Application (2010)</td>
            <td>Brain, K. Williams. & Stacey, C. sawyer</td>
            <td>9<sup>th</sup>Edition</td>
            <td>
                <a href="Files/17,18/17,18/L1/SEM1/1114/Using_Information_Technology_9th_Complet.pdf">Download</a>
            </td>
        </tr>

        <tr class="table-active">
            
            <td>3. Computing Essentials (2006) </td>
            <td>Timothy, J. O'Leary. & Linda, I. O'Leary</td>
            <td>Introductory Edition</td>
            <td>
                <a href="Files/17,18/17,18/L1/SEM1/1114/computing-essentials-2019-27nbsped-126009605x-9781260096057_compress.pdf">Download</a>
            </td>
        </tr>
<!----------------------------------------------------4----------------------------------------------------->
        <tr>
            <td rowspan="4"><b>TICT 1142</b></td>
            <td rowspan="4"><b>Fundamental of Web Technology </b></td>
            <td>1. Beginning HTML, XHTML, CSS, and JavaScript (2010)</td>  
            <td>Jon Ducket</td>
            <td> </td>
            <td>
                <a href="Files/17,18/17,18/L1/SEM1/1142/[Wiley_ Wrox] - Beginning HTML, XHTML, CSS, and JavaScript - [Duckett].pdf">Download</a>
            </td>
        </tr>

        <tr>
            
            <td>2. Internet & World Wide Web How to Program (2008)</td>
            <td>Deitel, P.J. & Deitel, H. M.</td>
            <td>4<sup>th</sup>Edition</td>
            <td>
                <a href="Files/17,18/17,18/L1/SEM1/1142/Azal2020-01-22-01-38-51-40850.pdf">Download</a>
            </td>
        </tr>

        <tr>
            
            <td>3. HTML5 Step by Step (2011) </td>
            <td>Faithe Wempen</td>
            <td>Microsoft Coparation</td>
            <td>
                <a href="Files/17,18/17,18/L1/SEM1/1142/HTML5. Step by Step. Faithe Wempen.pdf">Download</a>
            </td>
        </tr>

        <tr>
            
            <td>4. Professional JavaScript for Web Developers</td>
            <td>Nicholas, C. Zakas </td>
            <td>3<sup>rd</sup>Edition</td>
            <td>
                <a href="Files/17,18/17,18/L1/SEM1/1142/Professional JavaScript for Web Developers, 4th Edition.pdf">Download</a>
            </td>
        </tr>
<!----------------------------------------------------5----------------------------------------------------->
<tr class="table-active">
<td rowspan="3" ><b>TICT 1114</b></td>
<td rowspan="3" ><b>Essentials of Information Communication Technology</b></td>
<td >1. Principles of Information Systems (2016)</td>  
<td>Ralph, M. Stair. & George, W. Reynolds</td>
<td >12<sup>th</sup>Edition</td>
<td >
    <a href="Files/computing-essentials-2019-27nbsped-126009605x-9781260096057_compress.pdf">Download</a>
</td>

</tr>

<tr class="table-active">

<td>2. Using Informatiion Technology: A Practical Introduction to Computers & Communication: Complete Version (2010)</td>
<td>Brain, K. Williams. & Stacey, C. sawyer</td>
<td>9<sup>th</sup>Edition</td>
<td>
    <a href="Files/17,18/17,18/L1/SEM1/1114/Using_Information_Technology_9th_Complet.pdf">Download</a>
</td>
</tr>

<tr class="table-active">

<td>3. Computing Essentials (2006) </td>
<td>Timothy, J. O'Leary. & Linda, I. O'Leary</td>
<td>Introductory Edition</td>
<td>
    <a href="Files/17,18/17,18/L1/SEM1/1114/computing-essentials-2019-27nbsped-126009605x-9781260096057_compress.pdf">Download</a>
</td>
</tr>
<!----------------------------------------------------6----------------------------------------------------->
<tr>
<td rowspan="4"><b>TICT 1142</b></td>
<td rowspan="4"><b>Fundamental of Web Technology </b></td>
<td>1. Beginning HTML, XHTML, CSS, and JavaScript (2010)</td>  
<td>Jon Ducket</td>
<td> </td>
<td>
    <a href="Files/17,18/17,18/L1/SEM1/1142/[Wiley_ Wrox] - Beginning HTML, XHTML, CSS, and JavaScript - [Duckett].pdf">Download</a>
</td>
</tr>

<tr>

<td>2. Internet & World Wide Web How to Program (2008)</td>
<td>Deitel, P.J. & Deitel, H. M.</td>
<td>4<sup>th</sup>Edition</td>
<td>
    <a href="Files/17,18/17,18/L1/SEM1/1142/Azal2020-01-22-01-38-51-40850.pdf">Download</a>
</td>
</tr>

<tr>

<td>3. HTML5 Step by Step (2011) </td>
<td>Faithe Wempen</td>
<td>Microsoft Coparation</td>
<td>
    <a href="Files/17,18/17,18/L1/SEM1/1142/HTML5. Step by Step. Faithe Wempen.pdf">Download</a>
</td>
</tr>

<tr>

<td>4. Professional JavaScript for Web Developers</td>
<td>Nicholas, C. Zakas </td>
<td>3<sup>rd</sup>Edition</td>
<td>
    <a href="Files/17,18/17,18/L1/SEM1/1142/Professional JavaScript for Web Developers, 4th Edition.pdf">Download</a>
</td>
</tr>
<!----------------------------------------------------7----------------------------------------------------->
<!----------------------------------------------------8----------------------------------------------------->
</div>
            </tbody>
        </table>
    </div>
</div>
</div>
        <!--<div class="home-img">
            <img src="img/un1.svg" alt="">
        </div>-->
        </section>
        
        <br>
        

    </div>
   

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>