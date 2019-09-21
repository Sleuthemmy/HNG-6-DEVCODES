<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devcodes - Welcome</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/signup_script.js"></script>
    </head>

    <body>

    <?php 
     
     session_start();

     if (isset($_SESSION['uname'])){

        $_SESSION['msg'] = "You must log in first to view this page";
        header("location: index.php");

     }

     if (isset($_GET['logout'])){


        session_destroy();
        unset($_SESSION['uname']);
        header("location: index.php");
     }
    
    
    
    ?>

        <div class="">
            <div class="split left-content">
                <div class="centered">           
                <div class="illustration1"></div>
                
                    <p class="" style="font-family: Shrikhand; font-size: 36px; color: #009688;">Welcome to DevCodes</p> 
                    
                    <div class="text-content">
                        <h1>Team DevCodes</h1>
                            <p>Dev Codes is a team of developers from HNG
                            Internship working assiduously together to
                            become worldclass devs.</p>
                    </div>
                </div>
       		
            </div>
        </div>

                <div class="split right-content">           
                
                    <div class="centered">                  
                    <img src="img/undraw_confirmation_2uy0.png">
                    <h2 class="form-content" >Login Successful!</h2>            
    			    </div>
                </div>
                

<button><a href ="index.php?LOGOUT= '1' "></a></button>
      

    </body>

</html>