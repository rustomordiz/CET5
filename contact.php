
<html>
    <title>
         KEEP-IT-SIMPLE  
    </title>
        <link rel="icon" href = "pictures/logo.png"> 
    <head>
     
        <!-- CSS -->
        <link rel="stylesheet" href="css/design.css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font=awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/50b6dd98b7.js" crossorigin="anonymous"></script>
        
        <!-- Font reference -->
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">
    
    </head>
    <body>
    
        <!-- 
            NAVIGATION BAR
        <header>
            <button class="nav-toggle" aria-label="toggle navigation">
                <span class="hamburger"></span>
            </button>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#guide" class="nav__link">Guide</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact Us</a></li>
                </ul>
            </nav>
       </header>
    
        -->
           <!--LOGIN / SIGN IN -->
           <a href="login.php" class="btn">LOGIN</a>
       <a href="signup.php" class="btn">SIGN UP</a>
        <!--TOPPING -->
        <section class="head" id="top">
            <img src ="pictures/homename.png" alt="home" class="homename">
            <br><img src ="pictures/motto.png" alt="homemotto" class="motto">
        </section>
    
        <!--MIDDLE BODY -->
        <section class="mid" id="mid">
    
            <div class="pagebtn">
    
               <!-- REDIRECT TO HOME PAGE -->
                  <a href="index.html" class="link"> 
                    <img src ="pictures/home.png" alt="homebtn" class="linkbtn">
                </a>
    
                <!-- REDIRECT TO ABOUT PAGE -->
                <a href="about.html" class="link"> 
                    <img src ="pictures/about.png" alt="aboutbtn" class="linkbtn2">
                </a>
    
                <!-- REDIRECT TO GUIDE PAGE -->
                <a href="guide.html" class="link"> 
                    <img src ="pictures/guide.png" alt="guidebtn" class="linkbtn">
                </a>
    
                <!-- REDIRECT TO CONTACT PAGE -->
                <a href="contact.php" class="link"> 
                    <img src ="pictures/contact.png" alt="contactbtn" class="linkbtn3">
                </a>
    
    
            </div>
                <!-- CONTACT CONTENT -->
            <br><br><br>
            <form name="contact" method="POST">
                <h4 class ="email-text">Email:   <input type="email" size="24"name="email"></h4><br>
                <h4 class ="email-text">Concern: <input type="text" size="33" name="subject"></h4><br>
                <h4 class ="email-text">Details: </h4>
                <pre>      <textarea  rows="15" cols="200" name="details"></textarea><br></pre>
                <center><input type="submit" name="submit"></center>
            </form>
                <?php
                error_reporting(0);
                    if($_POST['submit']){
                    $to = "rustomanthony81@gmail.com";
                    $subject = $_POST['subject'];
                    $body = $_POST['details'];
                    $headers = $_POST['email'] ;
                if (mail($to, $subject, $body,$headers)) {
                      echo "<script>alert('Message Sent Successfully')</script>";
                } else {
                      echo "<script>alert('Message Sent Failed')</script>";
                    }
                }
                ?>

            
        </section>
    
    
        <!--FOOTER  -->
    
        <footer class="footer">
        <div class="contactus"><br><br><br> Contact Us<br><br></div>
       
        <a href="mailto:rustomanthony81@gmail.com" class="footer-link">rustomanthony81@gmail.com</a>
        <ul class="social-list">
    
            <li class="social-list__item"><a class="social-list__link" href=""><i class="fab fa-facebook"></i></a></li>

        <li class="social-list__item"><a class="social-list__link" href=""><i class="fab fa-linkedin"></i></a></li>

        <li class="social-list__item"><a class="social-list__link" href=""><i class="fab fa-github"></i></a></li>

        <li class="social-list__item"><a class="social-list__link" href=""><i class="fab fa-skype"></i></a></li>
        </ul>
        </footer>
    
    
        <script src="js/index.js"></script>           
    </body>
    </html>