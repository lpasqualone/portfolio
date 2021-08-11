<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ""){
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

            // submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
    
        $to = "pasqualone.laura@gmail.com";
        $body = "";
    
        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";
    
        mail($to,$messageSubject,$body);

        $message_sent = true;
        }
        

    }



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7cbf10dcc9.js" crossorigin="anonymous"></script>
    <title>Contact | Laura Pasqualone</title>
</head>
<body>

    <div class="mainNav">
        <div class="nav-container">
            <a href="index.html"><img class="logo" src="images/LP-logo.png" width="120px">
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Me</a></li>
                    <li><a href="index.html#work">Work</a></li>
                    <li><a href="index.php">Contact</a></li>
                </ul>
            </nav>
                <button class="menu-btn" onclick="menutoggle()">
                    Menu
                </button>
        </div>
        </div>

    <!---- Contact Page ---->
<main>

    <div class="connect-section">
        <div class="small-container">
            <div class="row">
                <div class="col-1-about">
                    <h2>
                        let's connect
                    </h2>
                    <section class="contact-form">


                    <?php
                    if($message_sent):
                    ?>

                    <div id="status">Thanks! We'll talk soon.</div>

                    <?php
                    else:
                    ?>

                    <div class="form-container">
                        <form action="contact.php" method="POST" class="form">
                            <div class="form-group">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" tabindex="1" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="" tabindex="2" required>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="form-label">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="" tabindex="3" required>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Message:</label>
                                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="" tabindex="4"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="submit-btn">Send Message</button>
                            </div>
                        </form>
                    </div>

                    <?php
                    endif;
                    ?>


                </section>
                </div>
            </div>
        </div>

    </div>



    <div class="footer">
        <div class="small-container">
            <div class="row">
                <div class="col-1">
                    <p><i class="far fa-copyright"></i> 2021 LAURA PASQUALONE</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/laura-pasqualone/" target="_blank"><i class="fab fa-linkedin-in" ></i></a>
                        <a href="https://github.com/lpasqualone" target="_blank"><i class="fab fa-github" ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<!-------js for toggle menu------>

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>



    
</body>
</html>